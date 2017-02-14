<?php
    class Coin
    {
        function checkCoin($money)
        {
            // $amount = $money / .25
            $quarters = 0.25;
            $remainder = fmod($money, $quarters);
            // $output = $amount;
            // . ToString($remainder);
            return  $remainder;
        }
    }
?>
