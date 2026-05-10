<?php

namespace App\Support;

class Calculator
{
    /**
     * 整数2つを足す
     *
     * @param int $firstNumber 最初に追加される数字
     * @param int $secondNumber 2番目に加算される数字
     * @return int 2つの数の和
     */
    public function add(int $firstNumber, int $secondNumber): int
    {
        return $firstNumber + $secondNumber;
    }
}
