<?php

namespace PharmaIntelligence\GstandaardBundle\Model;

use PharmaIntelligence\GstandaardBundle\Model\Base\GsGeneriekeProducten as BaseGsGeneriekeProducten;

class GsGeneriekeProducten extends BaseGsGeneriekeProducten
{
	public function getProductnaam() {
		return $this->getGsNamenRelatedByNaamnummerVolledigeGpknaam();
	}
	
}
