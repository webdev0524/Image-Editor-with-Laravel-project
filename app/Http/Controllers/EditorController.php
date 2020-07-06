<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use File;
use Validator;
use App\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EditorController extends Controller
{
    public function __construct()
    {
       // $this->middleware('auth');
       
    }

    public function index()
    {
        $title = 'Cyon Photo Editor';

        return view('frontend.editor', compact('title'));
    }
}
