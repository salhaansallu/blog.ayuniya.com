<?php
ob_start();
use Illuminate\Support\Facades\Auth;


function currency($price)
{
    if (strpos($price, '.')) {
        return 'LKR ' . round((float)$price, 2);
    } elseif (empty($price) || $price == "0") {
        return "0.00";
    } else {
        return 'LKR ' . $price . '.00';
    }
}

function min_price($prices)
{
    $low_price = $prices[0]->sales_price;
    $amt = $prices[0]->price;
    foreach ($prices as $key => $price) {
        if ($low_price > $price->sales_price) {
            $low_price = $price->sales_price;
            $amt = $price->price;
        }
    }
    return array(currency($low_price), currency($amt));
}

function productURL($pro_id, $pro_name)
{
    return "/product/" . $pro_id . "/" . str_replace(' ', '-', strtolower($pro_name));
}

function categoryURL($cat_id, $cat_name)
{
    return "/category/" . $cat_id . '/' . str_replace(' ', '-', strtolower($cat_name));
}

function isAdmin()
{
    if (Auth::check()) {
        if (Auth::user()->is_verified == "admin" ) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function isCustomerCareManager()
{
    if (Auth::check()) {
        if (Auth::user()->is_verified == "cus" ) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}


function isOrderManager()
{
    if (Auth::check()) {
        if (Auth::user()->is_verified == "orders") {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function isAccountManager()
{
    if (Auth::check()) {
        if (Auth::user()->is_verified == "sales") {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}
