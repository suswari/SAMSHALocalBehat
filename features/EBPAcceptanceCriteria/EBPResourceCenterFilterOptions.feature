Feature: Evidence-Based Practices Resource Center Display content
  In order to verify the presence of content of the EBP Resource Page
  As a regular user
  I need to use the step definitions of this context

  Scenario:
    Given The user access SAMHSA homesite
    When The user navigates to the "EBP Resource Center" page from Programs & Campaigns
    And expands on the "Topic Area" filter from the filter section
    Then The "Topic Area" filter has the following <Options>
    |Options|
    |Treatment for Opioids Use & Use Disorder|
    |Substance Abuse Prevention              |
    |Substance Abuse Treatment & Recovery    |
    |Serious Mental Illness & Other Mental Health|

  Scenario:
    Given The user access SAMHSA homesite
    When The user navigates to the "EBP Resource Center" page from Programs & Campaigns
    And expands on the "Target Audiences" filter from the filter section
    Then The "Target Audiences" filter has the following <Options>
      |Options|
      |Care Providers|
      |Clinicians    |
      |Community Organizations|
      |Educators              |
      |Family and Caregivers  |
      |Patients               |
      |Policymakers           |
      |Prevention Professionals|
      |Program Planners and Administrators|
      |Public                             |




  Scenario:
    Given The user access SAMHSA homesite
    When The user navigates to the "EBP Resource Center" page from Programs & Campaigns
    And expands on the "Populations" filter from the filter section
    Then The "Populations" filter has the following <Options>
      |Options|
      |Adults|
      |Children    |
      |People in the Criminal Justice System|
      |Pregnant Women              |
      |Youth |



  Scenario:
    Given The user access SAMHSA homesite
    When The user navigates to the "EBP Resource Center" page from Programs & Campaigns
    And expands on the "Resource Type" filter from the filter section
    Then The "Resource Type" filter has the following <Options>
      |Options|
      |Evidence Review|
      |External Resource|
      |Fact Sheet       |
      |Guidance or Guideline|
      |Screening Tool       |
      |Toolkit              |





