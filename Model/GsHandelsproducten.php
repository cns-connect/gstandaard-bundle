<?php

namespace PharmaIntelligence\GstandaardBundle\Model;

use PharmaIntelligence\GstandaardBundle\Model\Base\GsHandelsproducten as BaseGsHandelsproducten;

class GsHandelsproducten extends BaseGsHandelsproducten
{
	const PRODUCTGROEP_GROND_HULPSTOFFEN = 6;
	
	public function isGrondOfHulpstof() {
		return $this->produktgroep_kode == self::PRODUCTGROEP_GROND_HULPSTOFFEN;
	}
}
