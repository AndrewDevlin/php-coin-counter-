<?php
require_once "src/Coin.php";
    class CoinTest extends PHPUnit_Framework_TestCase
    {
        function test_checkCoin()
        {
            $test_coin = new Coin;
                //Arrange
                $input = 0.85;
                $test_coin->checkCoin($input);
                //Act
                $result = $test_coin->checkCoin($input);
                // $expected_result = 0.10;
                //Assert
                $this->AssertEquals("quarters: 3", $result);
        }
    }
 ?>
