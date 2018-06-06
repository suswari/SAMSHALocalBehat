@EBP
Feature: Evidence-Based Practices Resource Center Display content
  In order to prove Drupal was installed properly
  As a developer
  I need to use the step definitions of this context

  Scenario: View default page layout for each EBP Resource page
    Given The user is on the homepage
    When The user navigates to the "EBP Resource Center" page from Programs & Campaigns
    Then EBP banner is visible at the top of the page
#    And The title “Evidence-Based Practices Resources Center” is visible
#    And Welcome statement is visible below the title
#    And The sub heading “Filter Resources” is visible
#    And All the document resources are listed below the filter section
#    And The “Technical Assistance” section is seen to the right side of the page