<?php

namespace PharmaIntelligence\GstandaardBundle\Model;

use PharmaIntelligence\GstandaardBundle\Model\Base\GsArtikelenQuery as BaseGsArtikelenQuery;

class GsArtikelenQuery extends BaseGsArtikelenQuery
{
	const MUTATIE_KODE_VERVALLEN = 1;
	
	public function actief() {
		return $this->filterByMutatiekode(self::MUTATIE_KODE_VERVALLEN, \Criteria::NOT_EQUAL);
	}

}
