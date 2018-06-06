<?php
/**
 * Created by PhpStorm.
 * User: sadla
 * Date: 5/29/18
 * Time: 2:16 PM
 */
use Behat\Behat\Context\Context;
use Behat\Mink\Session;
use Behat\MinkExtension\Context\MinkContext;
use Page\EBPResourceCentrePage;
use Page\ProgramAndCampaignsPage;
use Page\SAMSHAHomePage;
use SensioLabs\Behat\PageObjectExtension\PageObject\Factory;
use SensioLabs\Behat\PageObjectExtension\PageObject\Page;


class EBPAcceptanceCriteriaContext extends Page implements Context
{
    public $HomePage;
    public $ProgramsCampaignsPage;
    public $EBPAcceptanceCriteriaPage;


    public function __construct(SAMSHAHomePage $HomePage, ProgramAndCampaignsPage $ProgramsCampaignsPage, EBPResourceCentrePage $EBPAcceptanceCriteriaPage)
    {
        $this->HomePage = $HomePage;
        $this->ProgramsCampaignsPage = $ProgramsCampaignsPage;
        $this->EBPAcceptanceCriteriaPage = $EBPAcceptanceCriteriaPage;

    }

    /**
     * @When /^The user navigates to the "(?P<linkName>(?:[^"]|\\")*)" page from Programs & Campaigns$/
     */
    public function navigateFromProgramsAndCampaigns($linkName)
    {
        $this->HomePage->ClickProgramsAndCampaignsLink();
        $this->ProgramsCampaignsPage->ClickProgram($linkName);
    }

    /**
     * @Then /^EBP banner is visible at the top of the page$/
     */
    public function EBPBannerVisibility()
    {
        $this->EBPAcceptanceCriteriaPage->isVisible($this->EBPAcceptanceCriteriaPage->EBPBanner);
    }
}
