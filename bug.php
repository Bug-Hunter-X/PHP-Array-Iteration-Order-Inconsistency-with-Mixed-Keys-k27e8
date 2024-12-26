In PHP, a common yet subtle error arises when dealing with array keys that are not strictly numeric.  Consider this scenario: 
```php
<?php
$myArray = array("apple" => 1, "banana" => 2, 2 => "orange");
foreach ($myArray as $key => $value) {
    echo "Key: " . $key . ", Value: " . $value . "\n";
}
?>
```
While seemingly harmless, the order of output might be unexpected. PHP does not guarantee the order of elements when the keys are a mix of numeric and string.  You might see "banana" before "apple", or the numeric key 2 appearing before or after the string keys. This inconsistency makes code less predictable and harder to debug.