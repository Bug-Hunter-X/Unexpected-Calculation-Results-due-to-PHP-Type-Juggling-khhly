```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    $sum += $number;
  }
  return $sum;
}

$numbers = [1, 2, 3, '4']; // contains a string
$sum = calculateSum($numbers);
echo "Sum: " . $sum; // unexpected result due to type juggling
```