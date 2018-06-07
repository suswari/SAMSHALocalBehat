<?php
/**
 * Created by PhpStorm.
 * User: sadla
 * Date: 5/29/18
 * Time: 2:16 PM
 */
use Behat\Behat\Context\Context;

use Page\EBPResourceCentrePage;
use Page\ProgramAndCampaignsPage;
use Page\SAMSHAHomePage;



class EBPAcceptanceCriteriaContext implements Context
{
    public $HomePage;
    public $ProgramsCampaignsPage;
    public $EBPResourceCenterPage;


    public function __construct(SAMSHAHomePage $HomePage, ProgramAndCampaignsPage $ProgramsCampaignsPage, EBPResourceCentrePage $EBPResourceCenterPage)
    {
        $this->HomePage = $HomePage;
        $this->ProgramsCampaignsPage = $ProgramsCampaignsPage;
        $this->EBPResourceCenterPage = $EBPResourceCenterPage;

    }

    /**
     * @When /^The user access SAMHSA homesite$/
     */
    public function accessSAMHSAHomeSite()
    {
            $this->HomePage->OpenHomePage();
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
     * @Then /^The user sees the EBP banner at the top of the page$/
     */
    public function EBPBannerVisibility()
    {
        $this->EBPResourceCenterPage->isVisible($this->EBPResourceCenterPage->EBPBanner);
    }

    /**
     * @Then /^The user sees the title “Evidence-Based Practices Resources Center” is visible$/
     */
    public function EBPTitleVisibility()
    {
        $this->EBPResourceCenterPage->isVisible($this->EBPResourceCenterPage->EBPTitle);
    }

    /**
     * @Then /^The user sees the EBP welcome statement below the title$/
     */
    public function EBPWelcomeStatementVisibility()
    {
        $this->EBPResourceCenterPage->isVisible($this->EBPResourceCenterPage->EBPWelcomeStatement);
    }

    /**
     * @Then /^The user sees the sub heading “Filter Resources”$/
     */
    public function filterResourcesSubVisibility()
    {
        $this->EBPResourceCenterPage->isVisible($this->EBPResourceCenterPage->filterResourcesSubHeading);
    }

    /**
     * @Then /^The user sees that all the EBP related document resources are listed below the filter section$/
     */
    public function EBPRelatedDocumentsBlockVisibility()
    {
        $this->EBPResourceCenterPage->isVisible($this->EBPResourceCenterPage->EBPRelatedDocumentsBlock);
    }

    /**
     * @Then /^The user sees the EBP “Technical Assistance” section to the right side of the page$/
     */
    public function EBPTechnicalAssistanceBlockVisibility()
    {
        $this->EBPResourceCenterPage->isVisible($this->EBPResourceCenterPage->EBPTechnicalAssistanceBlock);
    }
}
