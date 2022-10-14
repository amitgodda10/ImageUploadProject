<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class AdminController extends Controller
{
    public function UserLogout(){
        Auth::logout();
        return Redirect()->route('login');
    }

    public function UserPhotoStore(Request $request ){

        $validateData= $request->validate([

            'photo'=>'required|mimes:jpeg,jpg,png|max:500000',
        ],[
    
        'photo.mimes'=>'Only jpeg,jpg file supports.',
        'photo.max'=>'Maximum fil size should be less than 30kb.',
       
            
        ]);
        if($validateData){
        $data = User::find(Auth::user()->id);

        if($request->file('photo')){
            $file=$request->file('photo');
            @unlink (public_path('uploads'.$data->photo));
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('uploads'),$filename);
            $data['photo']=$filename;
    
        }
        $data->save();
    
   
        return "Image Uploaded successfully!";
        
    
        
     }
     else{
    
        return "There is an error. Please try again!";
    }}
}
