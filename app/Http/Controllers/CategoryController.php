<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        //Categories::get()->toTree();
       $categories =  Category::find(17);
        return response()->json(['data'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $rAll = $request->all();
        $model = new Product();
        $model->fill($rAll);
        $status = $model->save();
        dd($status);
        $data = [
            'slug' => $rAll['slug'],
            'parent_id' => $rAll['parent_id'],
            'icon' => $rAll['icon'],
            'en'=> ['title'=>$rAll['title_en'], 'description'=> $rAll['description_en']],
            'tr'=> ['title'=>$rAll['title_tr'], 'description'=> $rAll['description_tr']]

        ];
        try {
            $product = Category::create($data);

        }catch (\Exception $e){
            dd($e);
        }
        dd($product);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
