<?php
//namespace SAMHSAProject\CommonActions;
///**
// * Created by PhpStorm.
// * User: sadla
// * Date: 5/29/18
// * Time: 2:31 PM
// */
//use Behat\Mink\Element\NodeElement;
//use Behat\Mink\Session;
//use Behat\Mink\Driver\Selenium2Driver;
//
//
//class CommonActions extends Selenium2Driver
//{
//
//    function __construct($browserName = 'chrome', array $desiredCapabilities = null, $wdHost = 'http://localhost:4444/wd/hub')
//    {
//        parent::__construct($browserName, $desiredCapabilities, $wdHost);
//    }
//
//
//
//}
/**
 * Created by PhpStorm.
 * User: sadla
 * Date: 5/30/18
 * Time: 12:02 PM
 */


namespace Page;

use SensioLabs\Behat\PageObjectExtension\PageObject\Page;
use WebDriver\Exception;

class CommonActions extends Page{


    public function click($locator){
        $this->find('xpath',$locator)->click();
    }

    public function isVisible($locator){
        $visible = false;
        try{
            print 'in try';
            $visible = $this->find('xpath',$locator)->isVisible();
        }catch (Exception $e){
            print 'in catch';
            $visible = false;
        }
        return $visible;
    }
}
