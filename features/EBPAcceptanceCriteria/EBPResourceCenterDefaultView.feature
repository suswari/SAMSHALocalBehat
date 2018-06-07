@EBP
Feature: Evidence-Based Practices Resource Center Display content
  In order to prove Drupal was installed properly
  As a developer
  I need to use the step definitions of this context

  Scenario: View default page layout for each EBP Resource page
    Given The user access SAMHSA homesite
    When The user navigates to the "EBP Resource Center" page from Programs & Campaigns
    Then The user sees the EBP banner at the top of the page
    And The user sees the title “Evidence-Based Practices Resources Center” is visible
    And The user sees the EBP welcome statement below the title
    And The user sees the sub heading “Filter Resources”
    And The user sees that all the EBP related document resources are listed below the filter section
    And The user sees the EBP “Technical Assistance” section to the right side of the page