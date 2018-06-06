<?php
/**
 * Created by PhpStorm.
 * User: sadla
 * Date: 5/29/18
 * Time: 4:54 PM
 */


namespace Page;

use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

class ProgramAndCampaignsPage extends CommonActions {
    protected $path = '/programs-campaigns';
    public function getProgramsAndCampaignsLinkXpath ($linkName){
        return './/a[text()="'.$linkName.'"]';
    }

    public function ClickProgram($programName){
        $this->click($this->getProgramsAndCampaignsLinkXpath($programName));
    }

}