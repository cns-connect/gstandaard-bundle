<?php

namespace PharmaIntelligence\GstandaardBundle\Model;

use PharmaIntelligence\GstandaardBundle\Model\Base\GsThesauriTotaal as BaseGsThesauriTotaal;

class GsThesauriTotaal extends BaseGsThesauriTotaal
{
	const THESAURUS_PRODUKTGROEPEN = 20;
	public function getNaamLang() {
		return $this->getNaamItem50Posities();
	}
	
	public function getAfkorting() {
		return $this->getNaamItem25Posities();
	}
	
	public function getNaamMiddel() {
		return $this->getNaamItem15Posities();
	}
	
	public function getNaamKort() {
		return $this->getNaamItem4Posities();
	}
}
