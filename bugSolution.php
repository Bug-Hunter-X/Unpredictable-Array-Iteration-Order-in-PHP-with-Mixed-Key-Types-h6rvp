To ensure predictable iteration, explicitly sort the array before looping.  Using `ksort()` will sort by keys (in ascending order):

```php
<?php
$myArray = [];
$myArray["key1"] = 1;
$myArray["key2"] = 2;
$myArray[3] = 3;

ksort($myArray);

// Now the foreach loop iterates in predictable key order
foreach ($myArray as $key => $value) {
    echo "Key: " . $key . ", Value: " . $value . "\n";
}
?>
```

This ensures that the `foreach` loop iterates in a consistent and predictable manner, regardless of the mix of string and numeric keys in the array.