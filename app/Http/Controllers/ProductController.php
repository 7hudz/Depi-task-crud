<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\Company;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *   @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $products = product::all();
        $companies = Company::all(); 
        return view('productform', compact('products', 'companies'));
    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *  @return \Illuminate\Contracts\View\View
     */
    public function showdata()
{
    $products = product::with('company')->get(); 
    return view('product', compact('products'));
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
            'product_name' => 'required|string|max:255',
            'product_count' => 'required|integer|min:1',
            'product_city' => 'required|string|max:255',
            'product_manufacturer' => 'required|string|max:255',
            'company_id' => 'required|exists:companies,id',
            
        ]);

        // Create a new company instance and save it to the database
        product::create($request->all());

        // Redirect back to the companies list with a success message
        return redirect()->route('products')->with('success', 'Company created successfully.');
    }
 /**
     * Show the form for editing the specified product.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $product = product::findOrFail($id);
        $companies = Company::all();
        return view('edit_product', compact('product', 'companies'));
    }

    /**
     * Update the specified product in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'product_count' => 'required|integer|min:1',
            'product_city' => 'required|string|max:255',
            'product_manufacturer' => 'required|string|max:255',
            'company_id' => 'required|exists:companies,id',
        ]);

        $product = product::findOrFail($id);
        $product->update($request->all());

        return redirect()->route('productsshow')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified product from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $product = product::findOrFail($id);
        $product->delete();

        return redirect()->route('productsshow')->with('success', 'Product deleted successfully.');
    }
}