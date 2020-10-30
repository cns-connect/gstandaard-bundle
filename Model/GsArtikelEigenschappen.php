<?php

namespace PharmaIntelligence\GstandaardBundle\Model;

use PharmaIntelligence\GstandaardBundle\Model\Base\GsArtikelEigenschappen as BaseGsArtikelEigenschappen;

class GsArtikelEigenschappen extends BaseGsArtikelEigenschappen
{
    public function getVerpakkingsHoeveelheidOmschrijving() {
        if($this->getBasiseenheidOmschrijving() != 'STUK') {
            return $this->getDeelverpakkingOmschrijving();
        }
        return $this->getBasiseenheidOmschrijving();
    }
}
