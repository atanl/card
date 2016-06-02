<?php
/**
 * Created by PhpStorm.
 * User: atanl
 * Date: 2016/5/18
 * Time: 18:17
 */

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class CompanyController extends Controller
{

    public function index()
    {

    }

    public function create()
    {
        return view('merchant.company_create');
    }

    public function store()
    {
        try {
            $input = Request::all();
            $company = new Company($input);
            Auth::user()->company()->save($company);
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