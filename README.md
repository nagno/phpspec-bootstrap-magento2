# Purpose of the tools
This tool bootstraps Magento2 with it's object manager factory, so every new dynamic class request will go through it
and it will be created by Magento before phpspec tries to use it

# Installation instructions
Add the repository into your composer.json file using the following command:
```sh
composer config repositories.nagno git https://github.com/nagno/phpspec-bootstrap-magento2.git
```

Install the package:
```sh
composer require nagno/phpspec-bootstrap-magento2:~1.0 --dev
```

Add these lines to phpspec.yml:
```yml
extensions:
    - Nagno\Phpspec\BootstrapMagento2\Bootstrap
```