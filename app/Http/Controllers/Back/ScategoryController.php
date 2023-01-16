<?php

namespace App\Http\Controllers\Back;

use App\{
    Models\Scategory,
    Repositories\Back\ScategoryRepository,
    Http\Requests\ScategoryRequest,
    Http\Controllers\Controller
};
use App\Helpers\ImageHelper;
use Illuminate\Http\Request;

class ScategoryController extends Controller
{
    /**
     * Constructor Method.
     *
     * Setting Authentication
     *
     * @param  \App\Repositories\Back\ScategoryRepository $repository
     *
     */
    public function __construct(ScategoryRepository $repository)
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
        return view('back.scategory.index',[
            'datas' => Scategory::orderBy('id','desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.scategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ScategoryRequest $request)
    {
        $request->validate([
            'serial' => 'required|numeric|max:150'
        ]);
        $this->repository->store($request);
        return redirect()->route('back.scategory.index')->withSuccess(__('New Subscription Category Added Successfully.'));
    }

    /**
     * Change the status for editing the specified resource.
     *
     * @param  int  $id
     * @param  int  $status
     * @return \Illuminate\Http\Response
     */
    public function feature($id,$status)
    {
         Scategory::find($id)->update(['is_feature' => $status]);
        return redirect()->route('back.scategory.index')->withSuccess(__('Status Updated Successfully.'));
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
         Scategory::find($id)->update(['status' => $status]);
        return redirect()->route('back.scategory.index')->withSuccess(__('Status Updated Successfully.'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Scategory $scategory)
    {
        return view('back.scategory.edit',compact('scategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ScategoryRequest $request, Scategory $scategory)
    {
        $request->validate([
            'serial' => 'required|numeric|max:150'
        ]);
        $this->repository->update($scategory, $request);
        return redirect()->route('back.scategory.index')->withSuccess(__('Subscription Category Updated Successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Scategory $scategory)
    {
       $mgs = $this->repository->delete($scategory);
       if($mgs['status'] == 1){
        return redirect()->route('back.scategory.index')->withSuccess($mgs['message']);
       }else{
        return redirect()->route('back.scategory.index')->withError($mgs['message']);
       }
        
    }


}
