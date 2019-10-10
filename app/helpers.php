<?php

use Carbon\Carbon;

function presentPrice($price)
{
    // $priceを(int)で数字設定しないと文字列として扱われてしまう
    // 日本での通過設定
    setlocale(LC_MONETARY, 'ja_JP');
    return money_format('%n', (int)$price) . "\n";
}

function presentDate($date)
{
    return Carbon::parse($date)->format('M d, Y');
}


function setActiveCategory($category, $output = 'active')
{
    return request()->category == $category ? $output : '';
}

// ====================
// アップロードした画像がなければnotfound画像を表示する
// ====================
function productImage($path)
{
    return $path && file_exists('storage/'.$path) ? asset('storage/'.$path) : asset('img/not-found.jpg');
}


function getNumbers()
{
    $tax = config('cart.tax');
    $discount = session()->get('coupon')['discount'] ?? 0;
    $code = session()->get('coupon')['name'] ?? null;
    $newSubtotal = (Cart::subtotal() - $discount);
    if ($newSubtotal < 0) {
        $newSubtotal = 0;
    }
    $newTax = $newSubtotal * $tax;
    $newTotal = $newSubtotal * (1 + $tax);

    return collect([
        'tax' => $tax,
        'discount' => $discount,
        'code' => $code,
        'newSubtotal' => $newSubtotal,
        'newTax' => $newTax,
        'newTotal' => $newTotal,
    ]);
}
