<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lecturer;
use Illuminate\Http\Request;

class LecturerController extends Controller
{
    public function create() 
    {
        return view('admin.lecturer.create');
    }

    public function store(Request $request) 
    {
        Lecturer::create($request->all());

        return redirect()->route('index-lecturer')->with('status', 'Sukses Mu Input Datamu');
    }
    public function index()
    {
        $Lecturer = Lecturer::all();
        //  return response()->json($Lecturer);
        //  dd($Lecturer);
         return view('admin.lecturer.index', compact('Lecturer'));
    }

}
