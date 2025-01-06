<?php

namespace App\Http\Controllers;

use App\Models\Shops;
use App\Models\ShopUsers;
use App\Models\User;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ShopUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shops = Shops::all();
        $users = User::all();
        $shopUsers = ShopUsers::all();

        return view('shops.shopUser', compact('shops', 'users', 'shopUsers'));
    }

    public function select(Request $request)
    {
        $shop_id = $request->route('shop_id');

        Session::put('active_shop_id', $shop_id);

        return view('home');
    }//select shop

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'cmb_shops' => 'required|integer',
            'cmb_users' => 'required|integer',
        ]);

        $exists = ShopUsers::where('shop_id', $validatedData['cmb_shops'])
        ->where('user_id', $validatedData['cmb_users'])
        ->exists();

        if($exists)
        {
            $shops = Shops::all();
            $users = User::all();
            $shopUsers = ShopUsers::all();

            return view('shops.shopUser', compact('shops', 'users', 'shopUsers'));

            session()->flash('failed', 'Shop already added!');
        }//duplicate entry
        else
        {
            // Insert the data into the table
            $shopUser = ShopUsers::create([
                'shop_id' => $validatedData['cmb_shops'],
                'user_id' => $validatedData['cmb_users'],
            ]);

            $shops = Shops::all();
            $users = User::all();
            $shopUsers = ShopUsers::all();

            session()->flash('success', 'Shop added successfully!');
            return view('shops.shopUser', compact('shops', 'users', 'shopUsers'));

        }//create data

    }//store

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $shop_user_id = $request->input('shop_user_id');

        $one_shop_user = ShopUsers::find($shop_user_id);

        return response()->json(['success'=>true, 'message'=>'shop user found', 'data'=>$one_shop_user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $shop_user_id = $request->input('hide_shopuser_id');

        $validatedData = $request->validate([
            'cmb_shops' => 'required|integer',
            'cmb_users' => 'required|integer',
        ]);

        $exists = ShopUsers::where('shop_id', $validatedData['cmb_shops'])
        ->where('user_id', $validatedData['cmb_users'])
        ->exists();

        if($exists)
        {
            $shops = Shops::all();
            $users = User::all();
            $shopUsers = ShopUsers::all();

            return view('shops.shopUser', compact('shops', 'users', 'shopUsers'));

            session()->flash('failed', 'Shop already added!');
        }//duplicate entry
        else
        {
            // Insert the data into the table
            $shopUser = ShopUsers::create([
                'shop_id' => $validatedData['cmb_shops'],
                'user_id' => $validatedData['cmb_users'],
            ]);

            $shops = Shops::all();
            $users = User::all();
            $shopUsers = ShopUsers::all();

            session()->flash('success', 'Shop added successfully!');
            return view('shops.shopUser', compact('shops', 'users', 'shopUsers'));

        }//update data
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
