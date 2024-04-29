<?php

namespace App\Services;

class Calculator
{
  private $num1;
  private $num2;

  public function __construct($num1, $num2)
  {
    $this->num1 = $num1;
    $this->num2 = $num2;
  }

  public function add()
  {
    return $this->num1 + $this->num2;
  }

  public function subtract()
  {
    return $this->num1 - $this->num2;
  }

  public function multiply()
  {
    return $this->num1 * $this->num2;
  }

  public function divide()
  {
    if ($this->num2 == 0) {
      throw new \InvalidArgumentException('Cannot divide by zero');
    }
    return $this->num1 / $this->num2;
  }
}
