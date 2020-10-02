<?php

$counter = 1;

//Option one
//Creaate the fizzbuzz solution


while ($counter <= 100) {
  if ($counter % 15 === 0) {
    echo "FizzBuzz";
  } elseif ($counter % 3 === 0) {
    echo "Fizz";
  } elseif ($counter % 5 === 0) {
    echo "Buzz";
  } else {
    echo $counter;
  }
  echo "\n";
  $counter++;
}


//Option 2
//Let’s implement the solution again, but this time we will make use of a for and a foreach loop. Instead of printing the statements at each step, we will queue them up into an array and print them all out at the end.

$output = [];

for ($i = 1; $i <= 100; $i++){
  if ($i % 15 === 0) {
    array_push($output, "FizzBuzz");
  } elseif ($i % 3 === 0) {
    array_push($output, "Fizz");
  } elseif ($i % 5 === 0) {
    array_push($output, "Buzz");
  } else {
    array_push($output, $i);
  }
}

//Option 2a

foreach ($output as $value) {
  echo $value . "\n";
}


//Option 2b
//When you scroll to the bottom, your last output should only have numbers, "Buzz", and "FizzBuzz". Stop printing values after the first "FizzBuzz".

foreach ($output as $value) {
  if ($value === "Fizz") {
    continue;
  } elseif ($value === "FizzBuzz") {
    echo $value;
    break;
  }
  echo $value . "\n";
}
