<?php

namespace App\Http\Controllers\Back;

use App\{
    Http\Controllers\Controller
};
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DonationSettingController extends Controller
{

    /**
     * Show the form for updating resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function payment()
    {
        //$rty= DB::table('donation_settings')->get();
        
        $onetime = DB::table('donation_settings')->where('type','onetime')->get();
        
        $monthly = DB::table('donation_settings')->where('type','monthly')->get();
 
        return view('back.donation.donate', ['onetime' => $onetime,'monthly' => $monthly]);

    }
    
    
    
    public function list(Request $request)
    {
  
        $datas = DB::table('subscription_orders')->get();
        
        
        return view('back.donation.list',[
            'datas' => $datas
        ]);
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function restr(Request $request)
    {
    
        $name=$request->name;
        $firstamount=$request->firstamount;
        $secondamount=$request->secondamount;
        $thirdamount=$request->thirdamount;
        $fourthamount=$request->fourthamount;
        $type=$request->type;
        
        
        if($type == 'onetime'){
            
            
            $onetimedata = DB::table('donation_settings')->where('type', '=', 'onetime')->count();
            
            if($onetimedata ==  0){
                
                DB::table('donation_settings')->insert([
                'name' => $name,
                'firstamount' => $firstamount,
                'secondamount' => $secondamount,
                'thirdamount' => $thirdamount,
                'fourthamount' => $fourthamount,
                'type' => $type
                ]);    
                
            }else{
                
                DB::table('donation_settings')
              ->where('type', 'onetime')
              ->update([
                'name' => $name,
                'firstamount' => $firstamount,
                'secondamount' => $secondamount,
                'thirdamount' => $thirdamount,
                'fourthamount' => $fourthamount,
                'type' => $type
                ]);
                
            }
            
            
        }elseif($type == 'monthly'){
            
            
            $onetimedata = DB::table('donation_settings')->where('type', '=', 'monthly')->count();
            
            if($onetimedata ==  0){
                
                DB::table('donation_settings')->insert([
                'name' => $name,
                'firstamount' => $firstamount,
                'secondamount' => $secondamount,
                'thirdamount' => $thirdamount,
                'fourthamount' => $fourthamount,
                'type' => $type
                ]);    
                
            }else{
                
                DB::table('donation_settings')
              ->where('type', 'monthly')
              ->update([
                'name' => $name,
                'firstamount' => $firstamount,
                'secondamount' => $secondamount,
                'thirdamount' => $thirdamount,
                'fourthamount' => $fourthamount,
                'type' => $type
                ]);
                
            }
            
            
        }
        
        
        
        
        
        

        //$rty = $league_players= DB::table('donation_settings')->get();
        //print_r($rty);
        //exit;
        //return view('back.donation.donate');
        
        //$this->repository->update($request);
        return redirect()->back()->withSuccess(__('Information Updated Successfully.'));
    }

}
