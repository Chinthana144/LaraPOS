<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Companies::all();

        return view('Companies.companies', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Companies.add-company');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fileName = "";
        if ($request->hasFile('company_logo'))
        {
            $fileName = time() . '.' . $request->file('company_logo')->extension();
            $request->file('company_logo')->move(public_path('Images/CompanyLogo'), $fileName);
        }//has file
        else
        {
            $fileName = "";
        }

        $company = new Companies();
        $company->ComLogo = $fileName;
        $company->ComName = $request->input('company_name');
        $company->Address = $request->input('address');
        $company->Email = $request->input('email');
        $company->ContactLand = $request->input('contact_land');
        $company->ContactMobile = $request->input('contact_mobile');
        $company->ComStat = $request->has('chk_company_stat') ? 1 : 0;

        // print_r($company->ComName);

        $company->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $company_id = $request->input('hide_company_id');

        $company = Companies::find($company_id);

        return view('Companies.edit-company', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $company_id = $request->input('hide_company_id');

        $company = Companies::find($company_id);

        $fileName = "";
        if ($request->hasFile('company_logo'))
        {
            if(!empty($company->ComapnyLogo))
            {
                //delete current file
                $delete_path = public_path('Images/' . $company->ComapnyLogo ) ;
                if(file_exists($delete_path))
                {
                    unlink($delete_path);
                }
            }//has file in db

            $fileName = time() . '.' . $request->file('company_logo')->extension();
            $request->file('company_logo')->move(public_path('Images/CompanyLogo'), $fileName);
        }//has file
        else
        {
            $fileName = $company->ComapnyLogo;
        }

        $company->ComLogo = $fileName;
        $company->ComName = $request->input('company_name');
        $company->Address = $request->input('address');
        $company->Email = $request->input('email');
        $company->ContactLand = $request->input('contact_land');
        $company->ContactMobile = $request->input('contact_mobile');
        $company->ComStat = $request->has('chk_company_stat') ? 1 : 0;

        // print_r($company->ComName);

        $company->save();

        $companies = Companies::get();

        return view('Companies.companies' , compact('companies'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
