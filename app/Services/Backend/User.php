<?php

namespace App\Services\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class User
{
    public function rows(Int $per_page)
    {

        $rows = \Facades\App\Models\User::orderBy('created_at','DESC')->paginate($per_page);

        return $rows;

    }

    public function get(Int $id)
    {

        $row = \Facades\App\Models\User::find($id);

        if (empty($row->id)) return redirect()->route('admin.user')->with('warning','Data not found!');

        return $row;

    }

    public function create(Request $request)
    {   

        $request->validate([
            'role' =>'required',
            'email' =>'required|string|email|max:255|unique:users',
            'password' =>'required|min:8|string|confirmed',
        ]);
        $data = $request->only(['name','email','password']);
        $data['password']=Hash::make($data['password']);
        $row = \Facades\App\Models\User::create($data);
        $row->assignRole($request->role);

        if(!empty($row->id)) return true;
        return false;

    }
    public function update(Int $id,Request $request)
    {
        $row = \Facades\App\Models\User::find($id);
        if($row->email==$request->email){

            $request->validate([
                'email' =>'required|string|email|max:255|unique:users,email'.$id,
            ]);

        } else{
            
            $request->validate([
                'email' =>'required|string|email|max:255|unique:users',
            ]);
        }

        if (request('password')){

            $request->validate([
                'password' =>'required|min:8|string|confirmed',
            ]);
            $data = $request->only(['email','password']);
            $data['password']=Hash::make($data['password']);
        } else{

            $data = $request->only(['email']);

        }
        $request->validate([
            'role' =>'required',
            'name' =>'required',
        ]);
        
        $data+=$request->only(['name']);

        if (!empty($row->id)) {
            $row->update($data);
            $row->syncRoles($request->role);

            return true;
        }

        return false;

    }
    public function delete($request)
    {
        $data=\Facades\App\Models\User::find($request->id);
        
        if(!empty($data->id)){
            $data->delete();
            return true;
        }
        return false;
    }
}