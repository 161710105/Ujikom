<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Session;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = Customer::all();
        return view('customer.index',compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_customer' => 'required|',
            'alamat' => 'required|',
            'no_telpon' => 'required|min:11',
            'tgl_mulai' => 'required|',
            'tgl_akhir' => 'required|'
        ]);
        $customer = new Customer;
        $customer->nama_customer = $request->nama_customer;
        $customer->alamat = $request->alamat;
        $customer->no_telpon = $request->no_telpon;
        $customer->tgl_mulai = $request->tgl_mulai;
        $customer->tgl_akhir = $request->tgl_akhir;
        $customer->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$customer->nama_customer</b>"
        ]);
        return redirect()->route('customer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customer.show',compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customer.edit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama_customer' => 'required|',
            'alamat' => 'required|',
            'no_telpon' => 'required|',
            'tgl_mulai' => 'required|',
            'tgl_akhir' => 'required|'
        ]);
        $customer = Customer::findOrFail($id);
        $customer->nama_customer = $request->nama_customer;
        $customer->alamat = $request->alamat;
        $customer->no_telpon = $request->no_telpon;
        $customer->tgl_mulai = $request->tgl_mulai;
        $customer->tgl_akhir = $request->tgl_akhir;
        $customer->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengedit <b>$customer->nama_customer</b>"
        ]);
        return redirect()->route('customer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('customer.index');
    }
}
