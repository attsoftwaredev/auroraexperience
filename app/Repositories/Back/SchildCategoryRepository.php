<?php

namespace App\Repositories\Back;

use App\{
    Models\SchildCategory,
    Helpers\ImageHelper
};

class SchildCategoryRepository
{

    /**
     * Store category.
     *
     * @param  \App\Http\Requests\ChieldCategoryRequest  $request
     * @return void
     */
    
    public function store($request)
    {
        $input = $request->all();
        SchildCategory::create($input);
    }

    /**
     * Update category.
     *
     * @param  \App\Http\Requests\ChieldCategoryRequest  $request
     * @return void
     */

    public function update($childcategory, $request)
    {
        $input = $request->all();
        $childcategory->update($input);
    }

    /**
     * Delete category.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete($childcategory)
    {
        $childcategory->delete();
    }

}
