<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;

class blogcontroller extends Controller
{
public function create(){

    return view('create');
}
public function storee(Request $request){//$request is object

//     echo $request->title."<br>";
//     echo $request->content."<br>";
//     echo $request->image."<br>";
//     $title=$request->title;
//     $content=$request->content;
//    $image=$request->image;




$dataa=$this->validate($request,[
    "title"  => "required|string",
    "content" => "required|min:50",
    "image"   => "nullable|image"
]);


$op= blog :: create($dataa);

if($op){
    echo "raw inserted";

}else{
    echo "error";
}
}
public function loadData(Request $request){
$data=[$title,$content,$image];
$titlepage="blog";
//session()->put("data","titlepage");//(key,value)
session()->flash("titlepage","data");//(key,value)
    return view('profile',compact('titlepage','data'));//url
}

// public function index(){
//     // code .....

//    $dataa =  blog :: orderBy('id','desc')->get(); //name of table

//    //->take(2)

//     return view('index',["data" => $dataa]);
// }




}
