The most reliable solution is to maintain consistency in the type of your array keys.  If you need to preserve order, use associative arrays and explicitly iterate in the desired order. 

```php
<?php
// Use only string keys for predictable iteration
$myArray = array("apple" => 1, "banana" => 2, "orange" => 3);
ksort($myArray); // Sort by keys
foreach ($myArray as $key => $value) {
    echo "Key: " . $key . ", Value: " . $value . "\n";
}
?>
```
Alternatively, if you need numerical indexing and strict order, consider data structures designed for that: 
```php
<?php
$myArray = new SplFixedArray(3);
$myArray[0] = "apple";
$myArray[1] = "banana";
$myArray[2] = "orange";
foreach ($myArray as $value) {
    echo $value . "\n";
}
?>
```