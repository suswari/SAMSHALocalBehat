<?php
/**
 * Created by PhpStorm.
 * User: sadla
 * Date: 5/30/18
 * Time: 12:02 PM
 */


namespace Page;

use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

class EBPResourceCentrePage extends CommonActions {
    protected $path = '/ebp-resource-center';
    public $EBPBanner = './/span[@id="banneer"]/img';
}