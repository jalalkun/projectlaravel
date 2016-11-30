<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index(){
    	return view('blog/home');
    }
    public function show($id){
    	$nilai='ini adalah nilainya '. $id;
    	// dd($users);checking
    	// show
    	// $users = DB::table('users')->where('username','like','%a%')->get();
    	// insert
    	// DB::table('users')->insert(
    	// 		['username'=>'luthfi','password'=>'lut123']
    	// 	);
    	// update
    	// DB::table('users')->where('id','=','1')->update(
    	// 		['password'=>'farah123']
    	// 	);
    	// delete
    	DB::table('users')->where('username','like','farah')->delete();


    	$users=DB::table('users')->get();
    	
    	return view('blog/single',['blog'=>$nilai, 'nama'=>$users]);
    }
}
