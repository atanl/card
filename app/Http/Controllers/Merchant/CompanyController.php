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
        // 一般情况下，index应该是展示列表的方法，而show方法才是展示具体对象的方法。
        // 考虑到，每个用户只能创建一个公司，所以就直接把公司信息的展示放在了index中，而且不用带参数。
        $company = Auth::user()->company;
        return view('merchant.company_index', ['company' => $company]);
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
            return redirect()->action('Merchant\CompanyController@index');
        } catch (\Exception $e) {
            throw $e;
        }

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