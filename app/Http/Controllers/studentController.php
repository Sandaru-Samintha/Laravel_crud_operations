<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Studentdata;
use Illuminate\Http\Request;

class studentController extends Controller
{

    protected $task;

    public function __construct(){
        $this->task=new Studentdata();
    } 
    public function index(){

        $res['tasks']=$this->task->all();
        return view('components.index',['data'=>$res]);
    }

    public function create(){
        return view('components.create');
    }

    public function store(Request $request){
        $this->task->create($request->all());
        return redirect()->route('index');
    }

    public function delete($id){
        $delete=$this->task->find($id);
        $delete->delete();
        return redirect()->back()->with("successfully deleted");
    }
    public function update($id){
        $update=$this->task->find($id);
        return view('components.edit',['data'=>$update]);
    }

    public function edit(Request $request,string $id){
        $edit=Studentdata::find($id);
        $edit->update($request->all());
        return redirect()->route('index')->with('update successfully'); 
    } 
}
