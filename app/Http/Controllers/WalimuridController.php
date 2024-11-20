<?php

namespace App\Http\Controllers;
use \App\Models\User as Model; //alias

use Illuminate\Http\Request;

class WalimuridController extends Controller
{
    private $v_index = 'user_index';
    private $v_create = 'user_form';
    private $v_edit = 'user_form';
    private $v_show = 'user_show';
    private $routePrefix = 'walimurid';

    /**
     * Display a listing of the resource.
     */
    public function index()
    {                    //hanya selain walimurid         //terbaru
        // $models = Model::where('akses','<>','walimurid')->latest()->paginate(20);
        // $data['models'] = $models;

        // $data['models'] = Model::where('akses','<>','walimurid')
        //                   ->latest()
        //                   ->paginate(20);

        return view('operator.' . $this->v_index, [
            'models' => Model::where('akses', 'walimurid')
                ->latest()
                ->paginate(20),
            'routePrefix' => $this->routePrefix,
            'title' => 'List Wali Murid' 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'model' => new Model(),
            'method' => 'POST',
            'route' => $this->routePrefix . '.store',
            'button' => 'Save',
            'title' => 'Form Add Wali Murid'
        ];
        return view('operator.' . $this->v_create, $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'nohp' => 'required|unique:users',
            // 'akses' => 'required|in:operator',
            'password' => 'required'
        ]);
        //input password
        $data['password'] = bcrypt($data['password']);
        $data['email_verified_at'] = now();
        $data['akses'] = 'walimurid';
        //proses save
        Model::create($data);
        flash('Data berhasil disimpan!');
        //return back();
        return redirect('operator/walimurid');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = [
            'model' => Model::findOrFail($id),
            'method' => 'PUT',
            'route' => [$this->routePrefix . '.update', $id],
            'button' => 'Update',
            'title' => 'Form Edit Wali Murid'
        ];
        return view('operator.' . $this->v_edit, $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email,' . $id,
            'nohp' => 'required|unique:users,nohp,' . $id,
            //'akses' => 'required|in:operator',
            'password' => 'nullable' //boleh kosong
        ]);
        $model = Model::findOrFail($id);
        if($data['password'] == ""){
            //dikeluarkan dari array list atas
            unset($data['password']);
        }else{
            $data['password'] = bcrypt($data['password']);
        }
        $model->fill($data);
        $model->save();
        flash('Data berhasil diubah!');
        //return back();
        return redirect('operator/walimurid');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {                         //dapatkan satu data walimurid 
        $model = Model::where('akses', 'walimurid')->findOrFail($id);
        //kecuali email admin
        // if($model->email == 'operator@komunigrafik.com'){
        //     flash('Data tidak bisa dihapus!')->error();
        //     return back();
        // }
        $model->delete();
        flash('Data berhasil di Hapus!');
        return redirect()->route('walimurid.index');
    }
}
