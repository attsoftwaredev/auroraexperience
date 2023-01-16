<?php

namespace App\Http\Controllers\Back;

use App\{
    Models\Scategory,
    Repositories\Back\SsubCategoryRepository,
    Http\Requests\SsubCategoryRequest,
    Http\Controllers\Controller
};
use App\Models\Ssubcategory;

class SsubCategoryController extends Controller
{
    /**
     * Constructor Method.
     *
     * Setting Authentication
     *
     * @param  \App\Repositories\Back\SsubCategoryRepository $repository
     *
     */
    public function __construct(SsubCategoryRepository $repository)
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
        return view('back.ssubcategory.index',[
            'datas' => Ssubcategory::with('category')->orderBy('id','desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.ssubcategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SsubCategoryRequest $request)
    {
        $this->repository->store($request);
        return redirect()->route('back.ssubcategory.index')->withSuccess(__('New Subcategory Added Successfully.'));
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
        Ssubcategory::find($id)->update(['status' => $status]);
        return redirect()->route('back.ssubcategory.index')->withSuccess(__('Status Updated Successfully.'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Ssubcategory $ssubcategory)
    {
        
        return view('back.ssubcategory.edit',compact('ssubcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SsubCategoryRequest $request, Ssubcategory $ssubcategory)
    {
        $this->repository->update($ssubcategory, $request);
        return redirect()->route('back.ssubcategory.index')->withSuccess(__('Subcategory Updated Successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ssubcategory $ssubcategory)
    {
        $this->repository->delete($ssubcategory);
        return redirect()->route('back.ssubcategory.index')->withSuccess(__('Subcategory Deleted Successfully.'));
    }
}
