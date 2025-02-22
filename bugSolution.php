```php
function calculate_sum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) {
      $sum += $number;
    } else {
      //Handle non-numeric input (e.g., log an error, throw an exception, or skip the element)
      trigger_error("Non-numeric value encountered: " . $number, E_USER_WARNING);
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, '4a'];
$sum = calculate_sum($numbers);
echo "Sum: " . $sum; // Output will be 6 with a warning
```