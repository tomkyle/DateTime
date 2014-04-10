#tomkyle/DateTime

This small package contains ~~some date and time related classes~~ for the time being a small class that creates a MySQL-ready string representation from a PHP DateTime object.

As you know, PHP's DateTime class already offers a [format method.](http://www.php.net/manual/en/datetime.format.php) But calling it  everytime you need it in MySQL context with that `Y-m-d H:i:s` parameter may be annoying (and feel unclean, somehow).


##Usage
```php
<?php
use \tomkyle\DateTime\MySqlDateTimeFormatter;

$now = new \DateTime("now");

// prints s'th. like "2014-04-09 15:00:00"
echo new MySqlDateTimeFormatter( $now );

// prints s'th. like "2014-04-23 15:00:00"
echo new MySqlDateTimeFormatter( new \DateTime( "14day" ));
```

As of PHP5.5, there is a [DateTimeInterface interface](http://www.php.net/manual/en/class.datetimeinterface.php) which would perfectly suit the Dependency Injection used here. I am quite confident there soon will be a PHP5.4 polyfill…

##Installation via Composer

Install from command line or `composer.json` file:

#####Command line
    
    composer require tomkyle/datetime

#####composer.json
    "require": {
        "tomkyle/datetime": "~1.0"
    }
