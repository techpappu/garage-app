<?php

namespace App\Http\Controllers\Backend\Job;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Delete extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        if ($request->isMethod('POST')) {
            if(\Facades\App\Services\Backend\Job::delete($request)){
                return redirect()->route('admin.job')->with('success','Job has been successfully Deleted');
            } else{
                return redirect()->route('admin.job')->with('danger','Job can not be Deleted!');
            }
        }
    }
}
