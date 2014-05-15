XML Datatype Mappings to PHP Classes
====================================

This package is a bunch of PHP classes that map primitive XML data types and a
few other ones. The classes have some built-in validation checking so they throw
an `Exception` if you try to assign the wrong value type.

The best way to get started using this package is to install
[Composer](http://getcomposer.org/) and find the package on
[Packagist](http://packagist.org/) to add it as a dependency.

Example of basic usage:

```php
<?php

require_once 'vendor/autoload.php';

$num = new XMLDatatype\Integer(99);

echo "Ich habe $num luftballons";
#Output: Ich habe 99 luftballons

```

All the classes allow you to use these methods:

- getName()
- getValue()
- setValue($value)
- toString()

And some have methods specific to the datatype. Feel free to explore the source
code in ./src. If you want to add more data types or fix bugs then you are more
than welcome to contribute.
