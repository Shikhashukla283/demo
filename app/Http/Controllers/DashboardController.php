<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Hash;
use Session;
use Validator;
use App\Models\Users;

class DashboardController extends Controller{

public function index(){
    $value = session()->get('USER');

    

    return view('dashboard');


}

public function home(){
   

    return view('home');


}
}
?>