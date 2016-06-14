<?php
/**
 * Created by PhpStorm.
 * User: atanl
 * Date: 2016/5/18
 * Time: 18:07
 */

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use App\Models\Employee;
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
        $company = Auth::user()->company;
        $account = Auth::user()->account;
        return view('merchant.employee_create', ['company' => $company, 'account' => $account]);
    }

    public function store()
    {
        try {

            $myEmployeeCount = Auth::user()->company->employees()->count();

            $grade = Auth::user()->account->grade;

            if ($grade->capacity > $myEmployeeCount) {
                $input = Request::all();
                $result = Auth::user()->company->employees()->create($input);
                return redirect()->action('Merchant\EmployeeController@show', ['employeeId' => $result->id]);
            } else {
                throw new \Exception("员工人数超出上限");
            }
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function show($employeeId)
    {
        $employee = Employee::findOrFail($employeeId);

        return view('merchant.employee_show', ['employee' => $employee]);

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