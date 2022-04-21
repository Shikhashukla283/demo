<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Hash;
use Session;
use Validator;
use App\Models\Blog;

class BlogController extends Controller{

public function index(){
    $value = session()->get('USER');

    

    return view('blog');


}

public function addblog($id=0){
  
    if($id!=0){
$user_data = Blog::where('blog_id',$id)->first();
    }else{
        $user_data =array();
    }

    return view('addblog',compact('user_data'));


}




public function blogprocess(Request $request){
    $data=$request->all();
    //print_r($data);die;
    //$file=$_FILES;
    //$user_data = Blog::where('blog_id',$data['blog_id'])->first();
    //$file = $request->file('file');

    //echo $file->getClientOriginalName();
    if($data['blog_id']!=''){
    $postobj = Blog::where('blog_id',$id)->first();

    }else{
    $postobj=new Blog;
    }
    $postobj->title=$data['title'];
    $postobj->descreption=$data['descreption'];
    $postobj->startdate=$data['startdate'];
    $postobj->enddate=$data['enddate'];
    $postobj->active=$data['active'];
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
            return redirect()->route('addblog')->with('error', 'Server Not Responed');
        }

        
}
}
?>