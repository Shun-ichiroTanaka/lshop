<?php

function presentPrice($price)
{
    // $priceを(int)で数字設定しないと文字列として扱われてしまう
    return money_format("?%n", (int)$price );
}

