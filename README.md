# Compatibility
You need at least Magento 2.3 to use this version of the tool. 

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
composer require nagno/phpspec-bootstrap-magento2 --dev
```

Add these lines to phpspec.yml:
```yml
extensions:
    Nagno\Phpspec\BootstrapMagento2\Bootstrap: ~
```

# Compatibilty with PhpSpec

This tool is compatible with PhpSpec 2, 4, 5 and 6.

| PhpSpec Version   | Bootstrap Magento2 Version |
|-------------------|----------------------------|
| 2.x               | 1.x                        |
| 4.x               | 2.x                        |
| 5.x               | 3.x                        |
| 6.x               | 3.x                        |
