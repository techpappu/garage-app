<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Update extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Int $id,Request $request)
    {
        if ($request->isMethod('POST')){
            if (\Facades\App\Services\Backend\User::update($id,$request)) {
                return redirect()->route('admin.user.update',$id)->with('success','User Has been updated successfully');
            } else{
                return redirect()->route('admin.user.update',$id)->with('danger','user can not be updated!');
            }
        }
        $data=[];
        $data['row']=\Facades\App\Services\Backend\User::get($id);
        $data['roles']=\Facades\Spatie\Permission\Models\Role::pluck('name');
        return view('admin.user.update',compact('data'));
    }
}
