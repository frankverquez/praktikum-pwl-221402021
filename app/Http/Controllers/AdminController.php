<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
   
    public function index()
    {
        return view('admin.dashboard');
    }

    public function show_postingan()
    {
        return view('admin.postingan');
    }

    public function show_arsip()
    {
        return view('admin.arsip');
    }

    public function show_customers()
    {
        return view('admin.customers');
    }
    
    public function show_products()
    {
        return view('admin.products');
    }
    
    public function show_suppliers()
    {
        return view('admin.suppliers');
    }
    
    public function show_transaction()
    {
        return view('admin.transaction');
    }
    
    public function show_reports()
    {
        return view('admin.reports');
    }

    public function create()
    {
        //
    }
    
    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
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
