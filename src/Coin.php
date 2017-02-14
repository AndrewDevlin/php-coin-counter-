<?php
    class Coin
    {
        function checkCoin($money)
        {

            if ($money > 0.25){
                $number_of_quarters = $money / 0.25;
                $number_of_quarters = round($number_of_quarters, 0, PHP_ROUND_HALF_DOWN);
                $quarters_output = "quarters: ". $number_of_quarters;
                return $quarters_output;

            }

        }
    }
?>
