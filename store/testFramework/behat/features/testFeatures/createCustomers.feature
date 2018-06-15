Feature: Customer Accounts
  Test the creation of customer accounts

  @javascript
  Scenario: Create US Account
    Given I am on "/"
    And I follow "Log In"
    Then I should see "Welcome, Please Sign In"
    Then I fill in "firstname" with "Tom"
    And I fill in "lastname" with "Bombadil"
    And I fill in "street-address" with "999 Some Street"
    And I fill in "city" with "Miami"
    And I fill in "postcode" with "33133"
    And I fill in "telephone" with "+441202010109382"
    And I fill in "state" with "Florida"
    And I select "United States" from "country"
    And I fill in "email-address" with <param>"default_customer_email"
    And I fill in "password-new" with <param>"default_customer_password"
    And I fill in "password-confirm" with <param>"default_customer_password"
    Then I click on the element with xpath "//*[@id='createAccountForm']/div/input"
    Then I should see "Your Account Has Been Created"

  @javascript
  Scenario: Create UK Account
    Given I am on "/"
    And I follow "Log In"
    Then I should see "Welcome, Please Sign In"
    Then I fill in "firstname" with "UK Tom"
    And I fill in "lastname" with "Bombadil"
    And I fill in "street-address" with "999 Some Street"
    And I fill in "city" with "Newcastle"
    And I fill in "state" with "Tyne & Wear"
    And I fill in "postcode" with "NE11AA"
    And I fill in "telephone" with "+441202010109382"
    And I select "United Kingdom" from "country"
    And I fill in "email-address" with <param>"uk_customer_email"
    And I fill in "password-new" with <param>"uk_customer_password"
    And I fill in "password-confirm" with <param>"uk_customer_password"
    Then I click on the element with xpath "//*[@id='createAccountForm']/div/input"
    Then I should see "Your Account Has Been Created"

  @javascript
  Scenario: Create Canada Account
    Given I am on "/"
    And I follow "Log In"
    Then I should see "Welcome, Please Sign In"
    Then I fill in "firstname" with "Canada Tom"
    And I fill in "lastname" with "Bombadil"
    And I fill in "street-address" with "999 Some Street"
    And I fill in "city" with "Toronto"
    And I fill in "state" with "Ontario"
    And I fill in "postcode" with "NE11AA"
    And I fill in "telephone" with "+441202010109382"
    And I select "Canada" from "country"
    And I fill in "email-address" with <param>"canada_customer_email"
    And I fill in "password-new" with <param>"canada_customer_password"
    And I fill in "password-confirm" with <param>"canada_customer_password"
    Then I click on the element with xpath "//*[@id='createAccountForm']/div/input"
    Then I should see "Your Account Has Been Created"
