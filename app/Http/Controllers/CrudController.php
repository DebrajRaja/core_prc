<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;

class CrudController extends Controller
{
    //
    public function index(Request $req){
        // return $req->input();
        echo "hello from controller";  
        $data=['deb','raj','amit','rahul'];
        return view('create',['name'=>$data]);
    }
    public function create(Request $req){
        $crud=new Crud;
        $crud->name=$req->name;
        $crud->password=$req->password;
        $crud->save();
        return redirect('show');
    }
    public function show(){
        $data=Crud::all();
        return view('show',['cruds'=>$data]);
    }
    public function delete($id){
        $data=Crud::find($id);
        $data->delete();
        return redirect('show');
    }
    public function edit($id){
        $data=Crud::find($id);
        
        return view('update',['data'=>$data]);
    }
    public function update(Request $req){
        $data=Crud::find($req->id);
        $data->name=$req->name;
        $data->password=$req->password;
        $data->save();
        return redirect('show');
    }
    public function read($id){
        return $data=Crud::find($id);
        
        // view('read',['data'=>$data]);
        
    }
}
?>