<?php

namespace App\Http\Controllers\Backend\Item;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AllIndex extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $data=[];
        $data['rows']=\Facades\App\Services\Backend\Item::rows(20);
        return view('admin.item.allindex',compact('data'));
    }
}
