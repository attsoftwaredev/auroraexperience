<?php

namespace App\Repositories\Back;

use App\{
    Models\Admin,
    Helpers\ImageHelper
};

class StaffRepository
{

    /**
     * Store Admin.
     *
     * @param  \App\Http\Requests\AdminRequest  $request
     * @return void
     */

    public function store($request)
    {
        $input = $request->all();
        $input['password'] = bcrypt($request['password']);
        $input['photo'] = ImageHelper::handleUploadedImage($request->file('photo'),'public/assets/images');
        Admin::create($input);
    }

    /**
     * Update Admin.
     *
     * @param  \App\Http\Requests\AdminRequest  $request
     * @return void
     */

    public function update($staff, $request)
    {
        $input = $request->all();
        $input['password'] = bcrypt($request['password']);
        if ($file = $request->file('photo')) {
            $input['photo'] = ImageHelper::handleUpdatedUploadedImage($file,'/public/assets/images/',$staff,'/public/assets/images/','photo');
        }
        $staff->update($input);
    }

    /**
     * Delete category.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete($staff)
    {
        ImageHelper::handleDeletedImage($staff,'photo','public/assets/images/');
        $staff->delete();
    }

}
