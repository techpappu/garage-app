<?php

namespace App\Http\Controllers\Backend\Role;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Create extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        if($request->isMethod('POST')){
            if(\Facades\App\Services\Backend\Role::create($request)){
                return redirect()->route('admin.role')->with('success','Role has been successfully added');
            }   else{
                return redirect()->route('admin.role')->with('danger','Role can not be created!');
            }
        }
        return view('admin.role.create');
    }
}
