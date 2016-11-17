<?php

/**
 * Created by PhpStorm.
 * User: atanl
 * Date: 2016/5/18
 * Time: 18:00
 */
namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    public function index() {
        return view('merchant.index_index');
    }


}