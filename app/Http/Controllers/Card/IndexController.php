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

class IndexController extends Controller
{

    public function index($employeeId) {
        $employee = Employee::findOrFail($employeeId);
        return view('card.index_index', ['employee' => $employee]);
    }

}