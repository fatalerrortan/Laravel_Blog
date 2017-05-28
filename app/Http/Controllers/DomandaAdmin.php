<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DomandaAdmin extends Controller{

    public function project(Request $request){
        return view('domanda.admin.project', array('page' => 'admin project'));
    }

    public function department(Request $request){
        return view('domanda.admin.department', array('page' => 'admin department'));
    }

    public function module(Request $request){
        return view('domanda.admin.module', array('page' => 'admin module'));
    }

    public function api(Request $request){
        return view('domanda.admin.api', array('page' => 'admin api'));
    }
}