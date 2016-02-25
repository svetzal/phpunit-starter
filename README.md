PHPUnit Starter Project
=======================

This is a mostly empty starter project to help folks get rolling with
PHPUnit.

As PHPUnit is immensely flexible, and we want to be able to support
versions of PHP that don't support autoload, we have provided two ways
of loading the test subjects:

(PHP < 5.1.2)

```php
phpunit --bootstrap manualloader.php test
```

(PHP >= 5.1.2)

```php
phpunit --bootstrap autoloader.php test
```

Don't forget for PHP < 5.1.2 you will need to add each class you're
testing (each test subject) to the manualloader.php file.
