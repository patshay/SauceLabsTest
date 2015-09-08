Feature: Pricing
  In order to check the pricing of an Individual Account
  As a website user
  I need to navigate to the pricing page

  
  Scenario: Navigate to the pricing page
    Given I am on "/"
    When I press the hamburger menu
    And I press pricing
    Then I am on "/pricing"

  @mink:selenium2
  Scenario: Testing the Sandbox
    Given I am on "/test/guinea-pig"
    When I fill in "We would really like to follow up!" with "sometext@patshay.com"
    Then I wait to see the result
    And I press "send"
    Then I should see "This page is a Selenium sandbox"