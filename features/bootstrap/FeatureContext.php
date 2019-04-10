<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
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

    /**
     * @Given I am in a directory :arg1
     */
    public function iAmInADirectory($arg1)
    {
        if (!file_exists($arg1)) {
            mkdir($arg1);
        }
        chdir($arg1);
    }

    /**
     * @Given I have a file named :arg1
     */
    public function iHaveAFileNamed($arg1)
    {
        touch($arg1);
    }

    /**
     * @When I run :arg1
     */
    public function iRun($arg1)
    {
        exec($arg1, $output);
        $this->output = trim(implode("\n", $output));
    }

    /**
     * @Then I should get:
     */
    public function iShouldGet(PyStringNode $string)
    {
        if ((string) $string !== $this->output) {
            throw new Exception(
                "Actual output is:\n" . $this->output
            );
        }
    }
}
