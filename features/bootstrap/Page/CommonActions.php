<?php

/**
 * Created by PhpStorm.
 * User: sadla
 * Date: 5/30/18
 * Time: 12:02 PM
 */


namespace Page;

use SensioLabs\Behat\PageObjectExtension\PageObject\Page;
use Behat\Mink\Exception\DriverException;

class CommonActions extends Page{


    public function click($locator){
        try{
            $this->find('xpath',$locator)->click();
        }
        catch (\WebDriver\Exception\Timeout $e){

        }

    }

    public function isVisible($locator){

        if($this->find('xpath',$locator)){
            $visible = $this->find('xpath',$locator)->isVisible();
        }else{
            $visible = false;
        }
        return $visible;
    }

    public function openPage($url){
        try{
            $this->open([$url]);
        }
        catch (\WebDriver\Exception\Timeout $e){

        }

    }

    public function setPageTimeOut(){
        $this->getSession()->getDriver()->setTimeouts(['page load'=>5000]);
    }
}
