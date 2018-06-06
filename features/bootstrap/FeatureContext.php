<?php

use Behat\Behat\Context\Context;
use Behat\Mink\Exception\DriverException;
use Behat\Mink\Exception\UnsupportedDriverActionException;
use Behat\MinkExtension\Context\MinkContext;
use Behat\Behat\Hook\Scope\BeforeScenarioScope;
use Behat\Behat\Hook\Scope\AfterStepScope;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }


    public $currentScenario;

    /**
     * @BeforeScenario
     *
     * @param BeforeScenarioScope $scope
     *
     */
    public function setUpTestEnvironment($scope)
    {
        $this->currentScenario = $scope->getScenario();
    }

    /**
     * @AfterStep
     *
     * @param AfterStepScope $scope
     */
    public function afterStep($scope)
    {
        //if test has failed, and is not an api test, get screenshot
        if(!$scope->getTestResult()->isPassed())
        {
            //create filename string

            $featureFolder = preg_replace('/\W/', '', $scope->getFeature()->getTitle());

            $scenarioName = $this->currentScenario->getTitle();
            $fileName = preg_replace('/\W/', '', $scenarioName) . '.png';

            //create screenshots directory if it doesn't exist
            if (!file_exists('results/html/assets/screenshots/' . $featureFolder)) {
                mkdir('results/html/assets/screenshots/' . $featureFolder);
            }
            $driver = $this->getSession()->getDriver();

            //take screenshot and save as the previously defined filename
//            $this->driver->takeScreenshot('results/html/assets/screenshots/' . $featureFolder . '/' . $fileName);
            // For Selenium2 Driver you can use:
            try {
                $screenshot = $driver->getScreenshot();
            } catch (UnsupportedDriverActionException $e) {
            } catch (DriverException $e) {
            }
            file_put_contents('/tmp/test.png', base64_decode($screenshot));
        }
    }

}
