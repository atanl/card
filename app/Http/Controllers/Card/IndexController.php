<?php

/**
 * Created by PhpStorm.
 * User: atanl
 * Date: 2016/5/18
 * Time: 18:00
 */
namespace App\Http\Controllers\Card;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{

    public function index($employeeId) {
        $account = Auth::user()->account;
        $employee = Employee::findOrFail($employeeId);
        return view('card.index_index', ['account' => $account, 'employee' => $employee]);
    }

}