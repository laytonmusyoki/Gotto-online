<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function add(){
        return view('admin.add');
    }

    public function addpost(Request $request){
        $request->validate([
            'name'=>'required',
            'category'=>'required',
            'description'=>'required',
            'buying'=>'required',
            'selling'=>'required',
            'image'=>'required',
        ]);

        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('profileimages',$imagename);

        $data['name']=$request->name;
        $data['category']=$request->category;
        $data['description']=$request->description;
        $data['buying']=$request->buying;
        $data['selling']=$request->selling;
        $data['image']=$imagename;
        Products::create($data);
        return redirect('all')->with('success','Product added successfully');
        
    }
    public function all_products(){
        $products=Products::paginate(5);
        return view('admin.all',compact('products'));
    }
    public function deleteproduct($id){
        $pro=Products::where('id',$id);
        $pro->delete();
        return redirect('all');
    }
    public function update(Products $id){
        return view('admin.update',compact('id'));
    }
    public function updatepost(Request $request, Products $id){
        $request->validate([
            'name'=>'required',
            'category'=>'required',
            'description'=>'required',
            'buying'=>'required',
            'selling'=>'required',
            'image'=>'required',
        ]);
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('profileimages',$imagename);

        $data['name']=$request->name;
        $data['category']=$request->category;
        $data['description']=$request->description;
        $data['buying']=$request->buying;
        $data['selling']=$request->selling;
        $data['image']=$imagename;
        $id->update($data);
        return redirect('all')->with('success','Product updated successfully');
    }
}
