<?php

namespace App\Http\Controllers\Back;

use App\{
    Models\Tax,
    Http\Requests\TaxRequest,
    Http\Controllers\Controller
};
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class WebsiteController extends Controller
{
    /**
     * Constructor Method.
     *
     * Setting Authentication
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('adminlocalize');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back.website.index',[
            'datas' => DB::table('websites')->orderBy('id','desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.website.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $domain = $request->domain;
        $ip = $request->ip;
        $nameserver1 = $request->nameserver1;
        $nameserver2 = $request->nameserver2;
        $smtp = $request->smtp;
        $smtp_port = $request->smtp_port;
        
        
        DB::table('websites')->insert([
                'domain' => $domain,
                'ip' => $ip,
                'nameserver1' => $nameserver1,
                'nameserver2' => $nameserver2,
                'smtp' => $smtp,
                'smtp_port' => $smtp_port,
                ]);
                
        return redirect()->route('back.website.index')->withSuccess(__('New Website Added Successfully.'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $website = DB::table('websites')->where('id',$id)->get();
 
        return view('back.website.edit', ['website' => $website]);
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
        $update = DB::table('websites')->where('id', $id)->update(['status' => $status]);
        return redirect()->route('back.website.index')->withSuccess(__('Status Updated Successfully.'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $domain = $request->domain;
        $ip = $request->ip;
        $nameserver1 = $request->nameserver1;
        $nameserver2 = $request->nameserver2;
        $smtp = $request->smtp;
        $smtp_port = $request->smtp_port;
        
        
        $update = DB::table('websites')->where('id', $id)->update(array('domain' => $domain,'ip' => $ip,'nameserver1' => $nameserver1,'nameserver2' => $nameserver2,'smtp' => $smtp,'smtp_port' => $smtp_port,));  
        return redirect()->route('back.website.index')->withSuccess(__('Website Updated Successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('websites')->delete($id);
        return redirect()->route('back.website.index')->withSuccess(__('Website Deleted Successfully.'));
    }
}
