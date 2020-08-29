<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;

class FormController extends Controller
{
    public function index() {

        $name = 'April';
        return view('form.index', ['name' => $name]);
    }

    public function create() {

        return view('form.create');
    }

    public function store(Request $request) {
        
        $account = new Form;
        $account -> request('name'); 
        $account -> request('username');
        $account -> request('email');
       
        $account -> save();
    }
}
