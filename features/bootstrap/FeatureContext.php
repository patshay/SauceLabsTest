<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;
use Behat\Mink\Element\NodeElement;
use Behat\Mink\Driver\Selenium2Driver;


//
// Require 3rd-party libraries here:
//
//   require_once 'PHPUnit/Autoload.php';
//   require_once 'PHPUnit/Framework/Assert/Functions.php';
//

/**
 * Features context.
 */
class FeatureContext extends MinkContext
{

    public function __construct()
    {
        $driver = new \Behat\Mink\Driver\Selenium2Driver('firefox');
    }

    /**
     * @Then /^I wait to see the result$/
     */
    public function iWaitToSeeTheResult()
    {
        //I don't have any conditions I need verified yet, so I'm just adding a wait to see that selenium interacting with the browser
        $this->getSession()->wait(2000, 'false');
    }

    /**
     * @When /^I press the hamburger menu$/
     */
    public function iPressTheHamburgerMenu()
    {
        $select = $this->getSession()->getPage()->find('css', 'hamburger')->click();
        //$element = $this->getSession()->getPage()->findElement(WebDriverBy::cssSelector("span.ir"))->click();
    }

    /**
     * @When /^I press pricing$/
     */
    public function iPressPricing()
    {
        $element = $this->getSession()->findElement(WebDriverBy::linkText("pricing"))->click();
    }

    /**
     * @Given /^I press Annual Pricing$/
     */
    public function iPressAnnualPricing()
    {
        /**
         *This function exists to find the Annual Pricing button.  
         *I was going to find/click this button to ensure I'm on the right page
         */
        
        $element = $this->getSession()->findElement(WebDriverBy::linkText("ANNUAL PRICING"))->click();
    }

    /**
     * @Given /^I press the first check box$/
     */
    public function iPressTheFirstCheckBox()
    {
        throw new PendingException();
    }

    /**
     * @Given /^I press the text$/
     */
    public function iPressTheText()
    {
        throw new PendingException();
    }


}
