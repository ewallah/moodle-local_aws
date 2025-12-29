@local @local_aws
Feature: Local aws plugin should throw no errors
  An admin can see the aws plugin

  Scenario: Managers can uninstall the aws plugin
    Given I am logged in as "admin"
    When I navigate to "Plugins > Local > Manage local plugins" in site administration
    Then I should see "Amazon's SDK for PHP"
