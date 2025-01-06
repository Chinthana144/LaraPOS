<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use App\Models\Shops;
use App\Models\ShopUsers;
use App\Models\StockTypes;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shops = Shops::all();

        return view('shops.shops', compact('shops'));
    }

    public function shopSelect()
    {
        $user_id = Auth::User()->id;
        $shops = ShopUsers::where('user_id', $user_id)->get();

        return view('shops.shopSelect', compact('shops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Companies::all();
        $stock_types = StockTypes::all();

        return view('shops.add-shop', compact('companies', 'stock_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'shop_name' => 'required|string|max:255',
            'address_one' => 'required|string|max:255',
            'address_two' => 'required|string|max:255',
            'address_three' => 'required|string|max:255',
            'shop_contact' => 'required|string|max:255',
            'shop_email' => 'required|string|max:255',
            'shop_logo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'receipt_logo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $shop_logo_file = "";
        if ($request->hasFile('shop_logo'))
        {
            $shop_logo_file = 'SL' . time() . '.' . $request->file('shop_logo')->extension();
            $request->file('shop_logo')->move(public_path('Images/ShopImages'), $shop_logo_file);
        }//has file
        else
        {
            $shop_logo_file = "";
        }

        $shop_receipt_file = "";
        if ($request->hasFile('receipt_logo'))
        {
            $shop_receipt_file = 'RL' . time() . '.' . $request->file('receipt_logo')->extension();
            $request->file('receipt_logo')->move(public_path('Images/ShopImages'), $shop_receipt_file);
        }//has file
        else
        {
            $shop_receipt_file = "";
        }

        $shop = new Shops();
        $shop->company_id = $request->input('cmb_company');
        $shop->stocktype_id = $request->input('cmb_stock_type');
        $shop->ShopName = $request->input('shop_name');
        $shop->AddressOne = $request->input('address_one');
        $shop->AddressTwo = $request->input('address_two');
        $shop->AddressThree = $request->input('address_three');
        $shop->Contact = $request->input('shop_contact');
        $shop->Email = $request->input('shop_email');
        $shop->ShopLogo = $shop_logo_file;
        $shop->ReceiptLogo = $shop_receipt_file;
        $shop->ShopStat = $request->has('chk_shop_stat') ? 1 : 0;

        $shop->save();

        session()->flash('success', 'Shop added successfully!');
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
        $shop_id = $request->input('hide_shop_id');

        $shop = Shops::find($shop_id);

        $companies = Companies::all();
        $stock_types = StockTypes::all();

        return view('shops.edit-shop', compact('shop', 'companies', 'stock_types'));
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
        $shop_id = $request->input('hide_shop_id');

        $shop = Shops::find($shop_id);

        $shop_logo_file = "";
        if ($request->hasFile('shop_logo'))
        {
            if(!empty($shop->ShopLogo))
            {
                //delete current file
                $delete_path = public_path('Images/' . $shop->ShopLogo ) ;
                if(file_exists($delete_path))
                {
                    unlink($delete_path);
                }
            }//has file in db

            $shop_logo_file = 'SL' . time() . '.' . $request->file('shop_logo')->extension();
            $request->file('shop_logo')->move(public_path('Images/ShopImages'), $shop_logo_file);
        }//has file
        else
        {
            $shop_logo_file = $shop->ShopLogo;
        }

        $shop_receipt_file = "";
        if ($request->hasFile('receipt_logo'))
        {
            if(!empty($shop->ReceiptLogo))
            {
                //delete current file
                $delete_path = public_path('Images/' . $shop->ReceiptLogo ) ;
                if(file_exists($delete_path))
                {
                    unlink($delete_path);
                }
            }//has file in db

            $shop_receipt_file = 'SR' . time() . '.' . $request->file('receipt_logo')->extension();
            $request->file('receipt_logo')->move(public_path('Images/ShopImages'), $shop_receipt_file);
        }//has file
        else
        {
            $shop_receipt_file = $shop->ReceiptLogo;
        }

        $shop->company_id = $request->input('cmb_company');
        $shop->stocktype_id = $request->input('cmb_stock_type');
        $shop->ShopName = $request->input('shop_name');
        $shop->AddressOne = $request->input('address_one');
        $shop->AddressTwo = $request->input('address_two');
        $shop->AddressThree = $request->input('address_three');
        $shop->Contact = $request->input('shop_contact');
        $shop->Email = $request->input('shop_email');
        $shop->ShopLogo = $shop_logo_file;
        $shop->ReceiptLogo = $shop_receipt_file;
        $shop->ShopStat = $request->has('chk_shop_stat') ? 1 : 0;

        $shop->save();

        $shops = Shops::all();

        return view('shops.shops', compact('shops'));
    }//update shop

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
