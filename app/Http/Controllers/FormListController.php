<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Forms;
use App\Models\Projects;

class FormListController extends Controller
{
    public function index()
    {
        $forms = Forms::all();
        return view('formlist', ['forms' => $forms]);
    }
}
