<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *  @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $companies = Company::all();
        return view('company', compact('companies'));
    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *  @return \Illuminate\Contracts\View\View
     */
    public function showdata()
    {
        $companies = Company::all();
        return view('companyform', compact('companies'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * @return \Illuminate\Http\RedirectResponse 
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'company_name' => 'required|string|max:255',
            'company_country' => 'required|string|max:255',
            'company_city' => 'required|string|max:255',
            'company_size' => 'required|integer|min:1',
        ]);

        // Create a new company instance and save it to the database
        Company::create($request->all());

        // Redirect back to the companies list with a success message
        return redirect()->route('companiesdetails')->with('success', 'Company created successfully.');
    }


  
}
