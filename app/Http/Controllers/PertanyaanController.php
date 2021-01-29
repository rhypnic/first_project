<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    public function create()
    {
        return view('tugas_CRUD.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'bail|required|unique:pertanyaan|max:255',
            'isi' => 'required',
        ]);
        $query=DB::table('pertanyaan')->insert
        (
        [
        "judul"=>$request["judul"],
        "isi"=>$request["isi"]
        ]
        );
        return redirect('/pertanyaan')->with('success', 'post berhasil di simpan');
    }
    public function index()
    {   
        $posts=DB::table('pertanyaan')->get();
        return view('tugas_CRUD.index',compact('posts'));
    }
    public function show($id)
    {   
        $posts=DB::table('pertanyaan')->where('id',$id)->first();
        return view('tugas_CRUD.show',compact('posts'));
    }
    public function edit($id)
    {   
        $posts=DB::table('pertanyaan')->where('id',$id)->first();
        return view('tugas_CRUD.edit',compact('posts'));
    }
    public function update($id,Request $request)
    {   
        $request->validate([
            'judul' => 'bail|required|unique:pertanyaan|max:255',
            'isi' => 'required',
        ]);

        $query=DB::table('pertanyaan')
        ->where('id',$id)
        ->update
        (
        [
        "judul"=>$request["judul"],
        "isi"=>$request["isi"]
        ]
        );
        return redirect('/pertanyaan')->with('success', 'post berhasil di edit');
    }
    public function destroy($id)
    {   
        $query=DB::table('pertanyaan')->where('id',$id)->delete();
        return redirect('/pertanyaan')->with('success', 'post berhasil di hapus');
    }
}
