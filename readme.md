#Codeception on Docker

## Demo - 
[<img src="https://img.youtube.com/vi/d6JaDdOdiSo/maxresdefault.jpg" width="50%">](https://youtu.be/d6JaDdOdiSo)

##Setup
1. Install [Docker](https://docs.docker.com/docker-for-mac/)
2. Run Docker (required all time after restart!!!)
```bash
$ docker-compose up --build -d
```
3. Install dependencies
```bash
docker exec automation-php composer install
```
4. Generated new methods created in Helper folder (for example in file Acceptance.php), run build 
```bash
$ docker exec automation-php vendor/bin/codecept build
```
5. Install Mobile Emulator (required one time) [MobileEmulation](https://packagist.org/packages/elstc/codeception-mobileemulation)
```bash
$ docker exec automation-php composer require --dev elstc/codeception-mobileemulation
```
6. Install Email Notifier (required one time) [Email Notifier](https://github.com/Codeception/Notifier/blob/master/README.md)
```bash
$ docker exec automation-php composer require codeception/notifier --dev
```
7. Install phpmailer/phpmailer [phpmailer/phpmailer ](https://packagist.org/packages/edneto/notifications)
```bash
$ docker exec automation-php composer require edneto/notifications
```

##Run autotests using Codeception

###Create new test (for example test name: A1_nameCest in folder adv1)
In order to create a new test (for example test name: A1_nameCest in folder adv1) run the following command:
```
docker exec automation-php vendor/bin/codecept generate:cest adv1 A1_name
```
###Create new test (for example test name: A1_nameCest in folder HSS)
In order to create a new test (for example test name: A1_nameCest in folder HSS) run the following command:
```
docker exec automation-php vendor/bin/codecept generate:cest hss A1_name
```

###Run tests
To run all available tests:
```
docker exec automation-php vendor/bin/codecept run
```
To run all tests (for example from folder ADV1):
```
docker exec automation-php vendor/bin/codecept run adv1
```
To run specific test (for example test name: A1_nameCest) :
```
docker exec automation-php vendor/bin/codecept run adv1 A1_nameCest
```
To run specific test with steps (for example test name: A1_nameCest):
```
docker exec automation-php vendor/bin/codecept run adv1 A1_nameCest --steps
```
To run specific test with generated report  (for example test name: A1_nameCest):
```
docker exec automation-php vendor/bin/codecept run adv1 A1_nameCest --xml --html
```
### Running tests with VNC client
- For Mac
  - Starting `Finder`.
  - Use `Connect to Server`.
  - Input `vnc://localhost:5959` to `Server Address`.
  - Input `secret` to `Password`.

- Run adv1 tests
  - Execute `docker exec automation-php vendor/bin/codecept run adv1`

### Framework architecture
_output
    
    folder - If test fail - generated screenshot and html file in folder tests/-output/

_support

```
    Support Folders:
    _generated - To make your IDE see all of the methods, you should run use the  codecept build command
    Helper - folder contains files with methods, you can add new methods here, after build command you can see methods
    Page - folder contains files with const, page properties
```
TEST FOLDERS:

    ADV1 - test folder for 1 advertisement from lineup     
    ADV2 - test folder for 2 advertisement from lineup 
    ADV3 - test folder for 3 advertisement from lineup 
    ADV4 - test folder for 4 advertisement from lineup 
    ADV5 - test folder for 5 advertisement from lineup 
    HSS - test folder for main page
    MOBILE - test for mobile emulator
    adv1.suite.yml - setting for running test from folder AV1
    If you created new test folder you should create suite.yml with same name!

vendor 
    
    folder with library 
    
## Created by Val Pog


<div>
  <a href="https://github.com/valpogor">Github</a>  
</div>
  <img alt="Val Pog" src="https://media.licdn.com/dms/image/C5603AQEWgTRNW4fccg/profile-displayphoto-shrink_100_100/0?e=1573689600&v=beta&t=hcEUHZe539U3DTUlidGbUbVdIPQujsZigMM9Ufd8T6E" width=100 height=100 />

  
   

    
    
