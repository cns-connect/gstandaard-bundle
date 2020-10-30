<?php

namespace PharmaIntelligence\GstandaardBundle\Model;

use PharmaIntelligence\GstandaardBundle\Model\Base\GsNawGegevensGstandaard as BaseGsNawGegevensGstandaard;

class GsNawGegevensGstandaard extends BaseGsNawGegevensGstandaard
{	
	public function isBuitenlandseOnderneming() {
		return ($this->getLandMemocode() != 'NL');
	}
}
