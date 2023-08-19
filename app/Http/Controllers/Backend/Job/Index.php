<?php

namespace App\Http\Controllers\Backend\Job;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Index extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $data=[];
        $data['rows']=\Facades\App\Services\Backend\Job::rows(10);
        return view('admin.job.index',compact('data'));
    }
}
