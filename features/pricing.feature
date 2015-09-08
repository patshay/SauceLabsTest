Feature: Pricing
  In order to check the pricing of an Individual Account
  As a website user
  I need to navigate to the pricing page

  @mink:selenium2
  Scenario: Navigate to the pricing page
    Given I am on "/"
    When I press the hamburger menu
    And I press pricing
    Then I am on "/pricing"

  @mink:selenium2
  Scenario: Testing the Sandbox
    Given I am on "/test/guinea-pig"
    And I press the first check box
    When I fill in "We would really like to follow up!" with "some text"
    Then I wait to see the result
    And I press "send"
    Then I should see "This page is a Selenium sandbox"