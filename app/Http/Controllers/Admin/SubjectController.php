<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lecturer;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $subject = Subject::all();
        return view('admin.subject.index', compact('subject'));
    }
     public function create()
     {
       $Lecturer = Lecturer::all();
       return view('admin.subject.create', compact('Lecturer'));
    }

    public function store(Request $request)
    {
        Subject::create($request->all());
    }
}
