<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StudentController extends Controller
{
    public function cache1()
    {
        
    }

    public function upload(Request $request)
    {
        if ($request->isMethod('POST')){
//            var_dump($_FILES);
            $img = $request->file('img');
            dd($img);
            exit();
        }

        return view('student/upload');
    }
}
