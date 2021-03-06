<?php

namespace PharmaIntelligence\GstandaardBundle\Model;

use PharmaIntelligence\GstandaardBundle\Model\Base\GsArtikelen as BaseGsArtikelen;

class GsArtikelen extends BaseGsArtikelen
{
	const BTW_HOOG = '2';
	const BTW_LAAG = '1';
	const BTW_GEEN = '0';

	const MUTATIE_GEEN = 0;
	const MUTATIE_VERWIJDER = 1;
	const MUTATIE_WIJZIGEN = 2;
	const MUTATIE_NIEUW = 3;

	const UN_UITVERKOOP = 'U';
	const UN_VERVALLEN = 'V';
	const UN_WETTELIJK_NIET_VERHANDELEN = 'W';

	const EAV_AFKORTING = 'EAV';

	const LAND_NIET_INGEVULD = 0;
	const LAND_ONBEKEND = 500;

	public function isWmg() {
	    return $this->getWtgkode() < 9;
	}

	public function getGtin() {
		if(is_null($this->getLogistiekeInformatie())) {
			return '';
		} else {
			return $this->getLogistiekeInformatie()->getGtin();
		}
	}

	public function getHeeftBarcodeOpKae() {
	    $logistiekeVerpakkingsInformatie = GsLogistiekeVerpakkingsinformatieQuery::create()
    	    ->filterByMutatiekode(self::MUTATIE_VERWIJDER, \Criteria::NOT_EQUAL)
    	    ->filterByZindexNummer($this->getZinummer())
    	    ->findOne();
	    if(is_null($logistiekeVerpakkingsInformatie)) {
	        return false;
	    }
	    if(strlen($logistiekeVerpakkingsInformatie->getGtinVanHetVerpaktItem()) < 13) {
	        return false;
	    }
	    $verpaktItem = GsLogistiekeVerpakkingsinformatieQuery::create()
    	    ->filterByMutatiekode(self::MUTATIE_VERWIJDER, \Criteria::NOT_EQUAL)
    	    ->filterByGtin($logistiekeVerpakkingsInformatie->getGtinVanHetVerpaktItem())
    	    ->findOne();
	    if(is_null($verpaktItem)) {
	        return true;
	    }
	    if($verpaktItem->getZindexNummer() == ''){
	        return true;
	    }
	    return false;
	}
	
	public function isParallel() {
	    return !in_array($this->getLandVanHerkomstKode(), array(self::LAND_NIET_INGEVULD, self::LAND_ONBEKEND));
	}

	/**
	 *
	 * @return \PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaal
	 */
	public function getVerpakkingshoeveelheidEenheidOmschrijving() {
	   if($this->getGsHandelsproducten()->getBasiseenheidOmschrijving()->getMemokodeItem() != 'ST')
	       return $this->getDeelverpakkingOmschrijving();
	   return $this->getGsHandelsproducten()->getBasiseenheidOmschrijving();
	}

	public function isEAV() {
		return $this->getDeelverpakkingOmschrijving()->getAfkorting() == self::EAV_AFKORTING;
	}

	public function isRecordVervallen() {
		return $this->getMutatiekode() == 1;
	}

	public function isUitverkoop() {
		return $this->getUnKode() == self::UN_UITVERKOOP;
	}

	public function isUitverkocht() {
		return $this->isUitverkoop() && $this->getUnDatum('U') < time();
	}

	public function isVervallen() {
		return $this->getUnKode() == self::UN_VERVALLEN;
	}

	public function isActief() {
		return $this->getMutatiekode() != self::MUTATIE_VERWIJDER;
	}

	public function isWettelijkNietVerhandelen() {
		return $this->getUnKode() == self::UN_WETTELIJK_NIET_VERHANDELEN;
	}


	public function getHeeftDeclaratieTitel() {
		return GsDeclaratietabelDureGeneesmiddelenQuery::create('d')
			->filterByZorgactiviteitVoldoetAanBeleidsregel(true)
			->useGsHandelsproductenQuery()
				->filterByGsArtikelen($this)
			->endUse()
			->where('d.Mutatiekode <> 1')
			->count() > 0;
	}

	public function getDeclaratieTitel() {
		return GsDeclaratietabelDureGeneesmiddelenQuery::create('d')
			->filterByZorgactiviteitVoldoetAanBeleidsregel(true)
			->useGsHandelsproductenQuery()
				->filterByGsArtikelen($this)
			->endUse()
			->where('d.Mutatiekode <> 1')
			->findOne();
	}

	protected function createRawSlug()
	{
		if(is_null($this->getGsNamen()))
			return '' . $this->cleanupSlugPart($this->getZinummer()) . '-' . $this->cleanupSlugPart('Onbekend') . '';
		else
			return '' . $this->cleanupSlugPart($this->getZinummer()) . '-' . $this->cleanupSlugPart($this->getGsNamen()->getNaamVolledig()) . '';
	}

	public function getInkoopStuksPrijs() {
		return $this->getInkoopprijs()/$this->getInkoophoeveelheid();
	}

	public function getAantalBasisEenheden() {
		return $this->getAantalHoofdverpakkingen()*$this->getAantalDeelverpakkingen()*$this->getHoeveelheidPerDeelverpakking();
	}
}
