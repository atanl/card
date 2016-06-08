<?php
/**
 * Created by PhpStorm.
 * User: atanl
 * Date: 2016/6/8
 * Time: 10:59
 */

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function index() {
        $account = Auth::user()->account;
        return view('merchant.account_index', ['account' => $account]);
    }

    public function upgrade() {
        return view('merchant.account_upgrade');
    }

}