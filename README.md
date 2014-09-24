Koine Mvc Skeleton App
----------------------

Another very simple MVC framework.

Code information:

[![Build Status](https://travis-ci.org/koinephp/mvc-skeleton.png?branch=master)](https://travis-ci.org/koinephp/mvc-skeleton)
[![Coverage Status](https://coveralls.io/repos/koinephp/mvc-skeleton/badge.png?branch=master)](https://coveralls.io/r/koinephp/mvc-skeleton?branch=master)
[![Code Climate](https://codeclimate.com/github/koinephp/mvc-skeleton.png)](https://codeclimate.com/github/koinephp/mvc-skeleton)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/koinephp/mvc-skeleton/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/koinephp/mvc-skeleton/?branch=master)

Package information:

[![Latest Stable Version](https://poser.pugx.org/koine/mvc-skeleton/v/stable.svg)](https://packagist.org/packages/koine/mvc-skeleton)
[![Total Downloads](https://poser.pugx.org/koine/mvc-skeleton/downloads.svg)](https://packagist.org/packages/koine/mvc-skeleton)
[![Latest Unstable Version](https://poser.pugx.org/koine/mvc-skeleton/v/unstable.svg)](https://packagist.org/packages/koine/mvc-skeleton)
[![License](https://poser.pugx.org/koine/mvc-skeleton/license.svg)](https://packagist.org/packages/koine/mvc-skeleton)
[![Dependency Status](https://gemnasium.com/koinephp/mvc-skeleton.png)](https://gemnasium.com/koinephp/mvc-skeleton)


### Installing

#### Via Composer
Run the following command

    composer create-project koinephp/mvc-skeleton --stability=dev

### Via Git

    git clone https://github.com/koinephp/mvc-skeleton.git myapp
    cd myapp 
    composer install

### Files
- Controllers are found in ```app/controllers```
- Views are found in ```app/views```

### Setting up your app namespace

The default namespace is MyApp. To change, change a few files as follows:

- Edit composer.json, the autoload session
- Edit public/index.php and change the ```$appNamespace``` variable.


### Issues/Features proposals

[Here](https://github.com/koinephp/mvc-skeleton/issues) is the issue tracker.

### Contributing

Only TDD code will be accepted. Please follow the [PSR-2 code standard](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md).

1. Fork it
2. Create your feature branch (`git checkout -b my-new-feature`)
3. Commit your changes (`git commit -am 'Add some feature'`)
4. Push to the branch (`git push origin my-new-feature`)
5. Create new Pull Request

### How to run the tests:

```bash
phpunit --configuration tests/phpunit.xml
```

### To check the code standard run:

```bash
phpcs --standard=PSR2 lib
phpcs --standard=PSR2 tests
```

### Lincense
[MIT](MIT-LICENSE)

### Authors

- [Marcelo Jacobus](https://github.com/mjacobus)
