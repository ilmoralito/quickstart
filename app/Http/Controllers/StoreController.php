<?php

namespace App\Http\Controllers;

use App\Store;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class StoreController extends Controller
{
    public function index()
    {
        $stores = Store::all();

        return $stores;
    }

    public function get_by_payment_method($payment_method)
    {
        $stores = Store::where('payment_method', '=', $payment_method)->get();

        return $stores;
    }

    public function get_by_customer($customer)
    {
        $stores = Store::where('customer', '=', $customer)->get();

        return $stores;
    }

    public function get_by_company($company)
    {
        $data = Store::where('company', '=', $company)->get();

        return $data;
    }

    public function get_between_date_of_purchase($date1, $date2)
    {
        $data = Store::where('date_of_purchase', '<=', $date1)->where('date_of_purchase', '>=', $date2)->get();

        return $data;
    }
}
