<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shop_id = Session::get('active_shop_id');

        $shop_categories = Categories::where('shop_id', $shop_id)->get();

        return view('categories.categories', compact('shop_categories'));
    }

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
        $shop_id = Session::get('active_shop_id');
        $category_name = $request->input('category_name');

        $duplicate = Categories::where('CategoryName', $category_name)
                    ->where('shop_id', $shop_id)
                    ->exists();
        if($duplicate)
        {
            $shop_categories = Categories::where('shop_id', $shop_id)->get();

            return view('categories.categories', compact('shop_categories'));
        }
        else
        {
            $categories = new Categories();
            $categories->CategoryName = $request->input('category_name');
            $categories->shop_id = $shop_id;

            $categories->save();

            $shop_categories = Categories::where('shop_id', $shop_id)->get();

            return view('categories.categories', compact('shop_categories'));
        }//no duplicate
    }//store

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

    public function showOneCategory(Request $request)
    {
        $category_id = $request->category_id;

        $category = Categories::find($category_id);

        return response()->json(['success'=>true, 'message'=>'show one category', 'data'=>$category]);
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
        $shop_id = Session::get('active_shop_id');
        $category_id = $request->input('hide_category_id');

        $category = Categories::find($category_id);

        $category_name = $request->input('category_name');

        $duplicate = Categories::where('CategoryName', $category_name)
                    ->where('shop_id', $shop_id)
                    ->exists();
        if($duplicate)
        {
            $shop_categories = Categories::where('shop_id', $shop_id)->get();

            return view('categories.categories', compact('shop_categories'));
        }
        else
        {
            // $categories = new Categories();
            $category->CategoryName = $request->input('category_name');
            $category->shop_id = $shop_id;

            $category->save();

            $shop_categories = Categories::where('shop_id', $shop_id)->get();

            return view('categories.categories', compact('shop_categories'));
        }//no duplicate
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
