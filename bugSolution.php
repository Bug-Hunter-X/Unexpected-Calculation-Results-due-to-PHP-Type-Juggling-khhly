```php
function calculateSum(array $numbers): int {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) {
      $sum += $number;
    } else {
      // Handle non-numeric values appropriately, e.g., throw an exception
      throw new InvalidArgumentException('Array elements must be numeric.');
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, 4]; // corrected array
$sum = calculateSum($numbers);
echo "Sum: " . $sum; // Correct sum
```