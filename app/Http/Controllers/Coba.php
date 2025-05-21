<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class DosenController extends Controller
{
    public function helloWorld(){
    	return view('blog');
    }

    public function index(){
        $nama = "Diki Alfarabi";
    	return view('blog');
    }
}