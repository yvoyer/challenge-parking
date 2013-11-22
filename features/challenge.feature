Feature:
  As a developer
  I want to check my skills in conceptualization
  So that I can do better code

Scenario: Park a car
  Given I am a parking service
  When I receive a car
  Then I should activate the parking brake
  And The vehicle speed should be 0
  And I should lock the trunk

Scenario: Park a bike
  Given I am a parking service
  When I receive a bike
  Then I should lock the vehicle
  And The vehicle speed should be 0

Scenario: Park a plane
  Given I am a parking service
  When I receive a plane
  Then I should stop the engine
  And I should activate the flaps
  And I should activate the parking brake
  And The vehicle speed should be 0

Scenario: Park a plane car
  Given I am a parking service
  When I receive a plane car
  Then I should stop the engine
  And I should activate the parking brake
  And I should activate the flaps
  And The vehicle speed should be 0
  And I should lock the trunk
