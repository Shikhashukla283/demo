<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Hash;
use Session;
use Validator;
use App\Models\Users;

class LoginController extends Controller{

public function index(){

    return view('login');


}
public function signup(){

    return view('signup');


}
public function signupprocess(Request $request ){
    $data=$request->all();
    $file=$_FILES;
    $user_data = Users::where('email',$data['email'])->first();
    //$file = $request->file('file');

    //echo $file->getClientOriginalName();
    if($user_data['email']!=''){

    }else{
    $postobj=new Users;
    $postobj->fname=$data['fname'];
    $postobj->lname=$data['lname'];
    $postobj->email=$data['email'];
    $postobj->pass=$data['password'];
    $postobj->dob=$data['dob'];

    //$postobj->image=$data['image'];
    $postobj->role=$data['role'];

    if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $image->move('/location/of/the/folder/tatvasoft/public/images', $name);
            $postobj->image = $name;
        } 
        session()->put('USER', $postobj);
        if($postobj->save())    
        {
            

            return redirect()->route('dashboard')->with('status', 'Entry Saved Successfully.');   
        }else{
            return redirect()->route('signup')->with('error', 'Server Not Responed');
        }

        }
    }
        public function loginprocess(Request $request ){
            $data=$request->all();
            $file=$_FILES;
            $user_data = Users::where('email',$data['email'])->first();
            //$file = $request->file('file');
        
            //echo $file->getClientOriginalName();
            if($user_data['pass']==$data['password']){
                session()->put('USER', $user_data);
                return redirect()->route('dashboard')->with('status', 'Entry Saved Successfully.');   

            }else{
                return redirect()->route('login')->with('error', 'Server Not Responed');
               }
        
        
    //return view('signup');


}



}






?>