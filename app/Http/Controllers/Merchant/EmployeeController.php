<?php
/**
 * Created by PhpStorm.
 * User: atanl
 * Date: 2016/5/18
 * Time: 18:07
 */

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class EmployeeController extends Controller
{

    public function index()
    {
        $employees = Auth::user()->company->employees;

        return view('merchant.employee_index', ['employees' => $employees]);

    }

    public function create()
    {
        return view('merchant.employee_create');
    }

    public function store()
    {

        try {
            $input = Request::all();
            $result = Auth::user()->company->employees()->create($input);
            dump($result);
        } catch (\Exception $e) {
            dump($e);
        }

    }


    public function show()
    {

    }


    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }

}