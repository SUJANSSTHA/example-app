<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(){
        return view('admin.category.create');
    }
    public function store(Request $request){

     

        $this->validate($request,[

            'name' => 'required',
            'description' => 'required',
            // '' => 'nullable|date',
        ]);

        $data = new Category();
        $data->name = $request->name;
        $data->description = $request->description;
        $data->save();
        return redirect()->route('category.index');

            // return back();
    }

    public function index(){
        // dd($image_new_name);

        $data = Category::all();
        // dd($data);
        return view('admin.category.index',compact('data'));
            
        }
        public function edit($id){
            $data = Category::find($id);
            return view('admin.category.edit',compact('data'));
        }
        public function update(Request $request,$id){
            
        $this->validate($request,[

            'name' => 'required',
            'description' => 'required',
            // '' => 'nullable|date',
        ]);
            
            $data= Category::find($id);
            $data->name=$request->name;
            $data->description=$request->description;
            $data->save();
        
       
        }

        public function delete($id){
            $data = Category::find($id);
            $data->delete();
            return redirect()->route('category.index');
        }
}

