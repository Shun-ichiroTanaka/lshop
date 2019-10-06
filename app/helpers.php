<?php

function presentPrice($price)
{
    // $priceを(int)で数字設定しないと文字列として扱われてしまう
    // 日本での通過設定
    setlocale(LC_MONETARY, 'ja_JP');
    return money_format('%n', (int)$price) . "\n";
}


function setActiveCategory($category, $output = 'active')
{
    return request()->category == $category ? $output : '';
}
