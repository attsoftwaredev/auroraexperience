<?php

namespace App\Http\Controllers\Back;

use App\{
    Models\Scategory,
    Repositories\Back\SchildCategoryRepository,
    Http\Requests\SchildcategoryRequest,
    Http\Controllers\Controller
}; 
use App\Models\SchildCategory;
use App\Models\Ssubcategory;

class SchildCategoryController extends Controller
{
    /**
     * Constructor Method.
     *
     * Setting Authentication
     *
     * @param  \App\Repositories\Back\ChieldCategoryRepository $repository
     *
     */
    public function __construct(SchildCategoryRepository $repository)
    {
        $this->middleware('auth:admin');
        $this->middleware('adminlocalize');
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back.schildcategory.index',[
            'datas' => SchildCategory::with('category')->orderBy('id','desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.schildcategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SchildcategoryRequest $request)
    {
        $this->repository->store($request);
        return redirect()->route('back.schildcategory.index')->withSuccess(__('New Childcategory Added Successfully.'));
    }

    /**
     * Change the status for editing the specified resource.
     *
     * @param  int  $id
     * @param  int  $status
     * @return \Illuminate\Http\Response
     */
    public function status($id,$status)
    {
        SchildCategory::find($id)->update(['status' => $status]);
        return redirect()->route('back.schildcategory.index')->withSuccess(__('Status Updated Successfully.'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(SchildCategory $schildcategory)
    {
        
        return view('back.schildcategory.edit',compact('schildcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SchildcategoryRequest $request, SchildCategory $schildcategory)
    {
        $this->repository->update($schildcategory, $request);
        return redirect()->route('back.schildcategory.index')->withSuccess(__('Childcategory Updated Successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SchildCategory $schildcategory)
    {
        $this->repository->delete($schildcategory);
        return redirect()->route('back.schildcategory.index')->withSuccess(__('Childcategory Deleted Successfully.'));
    }
}
