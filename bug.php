In PHP, a common yet subtle error arises when dealing with array keys that are not strictly numeric.  Consider this scenario:

```php
<?php
$myArray = [];
$myArray["key1"] = 1;
$myArray["key2"] = 2;
$myArray[3] = 3;

// Unexpected behavior when iterating with foreach
foreach ($myArray as $key => $value) {
    echo "Key: " . $key . ", Value: " . $value . "\n";
}
?>
```

The `foreach` loop might not iterate in the order you expect.  PHP's internal handling of array keys influences iteration order, particularly when mixing numeric and string keys. The output might be unpredictable, and not necessarily 'key1', 'key2', then '3'.  This is because PHP doesn't inherently guarantee any order when you have a mix of key types.  If you need a specific iteration order, explicitly sort the array using `ksort()` or similar functions.