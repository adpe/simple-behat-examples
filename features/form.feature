Feature: Form Submission
    In order to see a fun Hello 'Name' message
    As a website user
    I need to be able to visit the index page and submit the form with my name

    Scenario: Submit Form Name
	Given I am on "/index.php"
	When I fill in "name" with "John Smith"
	And I press "submit"
	Then I should see "Hello John Smith"

    Scenario: Submit Form Empty Name
	Given I am on "/index.php"
	When I press "submit"
	Then I should see "Hello you didn't submit your name..."
