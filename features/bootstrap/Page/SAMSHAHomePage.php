<?php
/**
 * Created by PhpStorm.
 * User: sadla
 * Date: 5/29/18
 * Time: 4:43 PM
 */

namespace Page;

use Behat\Mink\Session;
use SensioLabs\Behat\PageObjectExtension\PageObject\Factory;
use SensioLabs\Behat\PageObjectExtension\PageObject\Page;
use WebDriver\Exception\Timeout;

class SAMSHAHomePage extends CommonActions {
    protected $path = '/';

    public function __construct(Session $session, Factory $factory, array $parameters = array())
    {
        parent::__construct($session, $factory, $parameters);
        try{
            $session->getDriver()->setTimeouts(['page load'=>10000]);
        }
        catch (Timeout $exception){

        }

    }

    public $programsAndCampaingsLink = ".//a[text()='Programs & Campaigns']";



    public function ClickProgramsAndCampaignsLink(){
        $this->click($this->programsAndCampaingsLink);
    }

}