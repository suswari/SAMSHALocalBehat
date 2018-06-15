<?php
/**
 * Created by PhpStorm.
 * User: sadla
 * Date: 5/30/18
 * Time: 12:02 PM
 */


namespace Page;


class EBPResourceCenterAboutPage extends CommonActions {
    protected $path = '/ebp-resource-center/about';
    public $EBPAboutTitle = './/h1[text()="About the Evidence-Based Practices Resource Center"]';
    public $EBPSummaryBlock = './/*[@class=\'field field--name-field-summary field--type-text-long field--label-hidden\']//p';
    public $EBPDescriptionBlock = './/*[@class="field field--name-body field--type-text-with-summary field--label-hidden"]//p';
    public $LetPaneNavigationBlock = './/*[@class="block block--menu-block nav-side-block nav-actual block--menu-block-4"]';






}