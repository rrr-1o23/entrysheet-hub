<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Routing\Controllers\HasMiddleware;

use App\Models\Company;
use App\Models\Industry;

use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use Illuminate\Support\Facades\Auth;


class CompanyController extends Controller implements HasMiddleware
{
    public function home(Request $request): View{
        $companies = Company::where('user_id', Auth::id())->get();
        return view('company.home', compact('companies'));
    }

    public static function middleware(): array
    {
        return [
            'auth',
            'verified'
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $industries = Industry::all();
        return view('company.create', compact('industries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompanyRequest $request)
    {
        // 企業を作成
        Company::create([
            'name' => $request->name,
            'homepage' => $request->homepage,
            'mypage' => $request->mypage,
            'status' => $request->status,
            'process' => $request->process,
            'user_id' => Auth::id(),
            'industry_id' => $request->industry_id,
        ]);

        return redirect()->route('company')->with('success', '企業が登録されました！');
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        $company->load('entrysheets');
        return view('company.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //
    }
}
