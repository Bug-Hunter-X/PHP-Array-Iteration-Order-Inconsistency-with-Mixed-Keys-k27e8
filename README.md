# PHP Array Iteration Order Inconsistency

This repository demonstrates a subtle but significant issue in PHP's handling of array iteration when the keys are a mix of numeric and string types. The order of elements processed during a `foreach` loop is not guaranteed in this situation, leading to potential inconsistencies and unexpected behavior in your code.

## Bug Description

When an array contains both numeric and string keys, PHP's internal implementation does not enforce a specific order of traversal. This means the sequence in which elements are accessed during iteration might vary depending on factors like the PHP version, the underlying operating system, or even internal caching mechanisms.

## Reproduction

The `bug.php` file demonstrates the problem. Run it and observe the output.  You'll likely see a different order of elements each time you run it.

## Solution

To address this, use either only numeric or only string keys consistently.  If you need to preserve specific order, consider using an associative array (string keys) and explicitly controlling the iteration sequence if the order matters, or use a structure that explicitly supports order, such as `SplFixedArray` or similar.