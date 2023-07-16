<?php
function fizzbuzz($num) {
    if ($num % 3 == 0 && $num % 5 == 0) {
      return 'FizzBuzz';
    }
    elseif ($num % 3 == 0) {
      return 'Fizz';
    }
    elseif ($num % 5 == 0) {
      return 'Buzz';
    }
    else {
      return $num;
    }
}

$max = 100;

for ($i = 1; $i <= $max; $i++) {
  print fizzbuzz($i) . PHP_EOL;
}
?>