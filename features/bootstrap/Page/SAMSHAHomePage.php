<?php
/**
 * Created by PhpStorm.
 * User: sadla
 * Date: 5/29/18
 * Time: 4:43 PM
 */

namespace Page;

use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

class SAMSHAHomePage extends CommonActions {
    protected $path = '/';

    public $programsAndCampaingsLink = ".//a[@id='anch_22']";


    public function ClickProgramsAndCampaignsLink(){
        $this->click($this->programsAndCampaingsLink);
    }

}