<?php

namespace App\Http\Controllers\Backend\Item;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Index extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Int $id,Request $request)
    {
        $data=[];
        $data['job']=\Facades\App\Services\Backend\Job::get($id);
        $data['rows']=$data['job']->items()->paginate(20);
        return view('admin.item.index',compact('data'));
    }
}
