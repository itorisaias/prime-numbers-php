<?php

// A prime number (or a prime) is a natural number greater than 1 that cannot be formed by multiplying two smaller natural numbers. For example, 5 is prime because the only ways of writing it as a product, 1 × 5 or 5 × 1, involve 5 itself. Please write a program that will list the prime numbers up to 100.

$expectedResults = [2,3,5,7,11,13,17,19,23,29,31,37,41,43,47,53,59,61,67,71,73,79,83,89,97];

function isPrime ($number, $primes) {
  if ($number <= 1) {
    return false;
  }

  foreach ($primes as $value) {
    $remainder = $number % $value;

    if ($remainder == 0) {
      return false;
    }
  }

  return true;
}

$arrayResult = [];

for ($i = 0; $i <= 100; $i++) {

  $result = isPrime($i, $arrayResult);

  if ($result) {
    array_push($arrayResult, $i);
  }
}

var_dump($expectedResults == $arrayResult);
