<?php

namespace App\Repositories\Back;

use App\{
    Models\Scategory,
    Helpers\ImageHelper
};
use App\Models\HomeCutomize;

class ScategoryRepository
{

    /**
     * Store category.
     *
     * @param  \App\Http\Requests\CategoryRequest  $request
     * @return void
     */

    public function store($request)
    {
        $input = $request->all();
        $input['photo'] = ImageHelper::handleUploadedImage($request->file('photo'),'public/assets/images');
        Scategory::create($input);
    }

    /**
     * Update category.
     *
     * @param  \App\Http\Requests\CategoryRequest  $request
     * @return void
     */

    public function update($scategory, $request)
    {
        $input = $request->all();
        if ($file = $request->file('photo')) {
            $input['photo'] = ImageHelper::handleUpdatedUploadedImage($file,'/public/assets/images/',$scategory,'/public/assets/images/','photo');
        }
        $scategory->update($input);
    }

    /**
     * Delete category.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete($scategory)
    {
        $home = HomeCutomize::first();
        $popular_category = json_decode($home['popular_category'],true);
        $feature_category = json_decode($home['feature_category'],true);
        $two_column_category = json_decode($home['two_column_category'],true);
        $home_4_popular_category = json_decode($home['home_4_popular_category'],true);
        $check = false;
      
        for($i=1;$i<5;$i++){
            if($popular_category['category_id'.$i] == $scategory->id){
                $check = true;
            }
        }

        for($i=1;$i<5;$i++){
           
            if($feature_category['category_id'.$i] == $scategory->id){
                $check = true;
            }

        }
        for($i=1;$i<3;$i++){
           
            if($two_column_category['category_id'.$i] == $scategory->id){
                $check = true;
            }

        }

        if(isset($home_4_popular_category)){
            if(in_array($scategory->id,$home_4_popular_category)){
                $check =  true;
            }
        }
       

       if($check){
           return ['message' => __('This Category allready used Home page section . Please change this category then delete this category') , 'status' => 0];
       }else{
        ImageHelper::handleDeletedImage($scategory,'photo','public/assets/images/');
        $scategory->delete();
        return ['message' => __('Subscription Category Deleted Successfully.'),'status' => 1];
       }
    
    }

}
