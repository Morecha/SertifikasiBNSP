<?php

namespace App\Http\Controllers;

use App\Models\galery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleryController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:galery-foto', ['only' => ['create','store','edit','update','destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galery = galery::all();
        return view('admin.galeri.index', compact('galery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'gambar' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'deskripsi' => 'required',
        ]);

        $input = $request->all();

        if($gambar = $request->file('gambar'))
        {
            $destinationPath = 'storage/galery';
            $profileImage = date('YmdHis') .".". $gambar->getClientOriginalExtension();
            $gambar->move($destinationPath,$profileImage);
            $input['gambar'] = $profileImage;
        }
        galery::create($input);

        return redirect('admin/galery');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function show(galery $galery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function edit(galery $galery, $id)
    {
        $edit = galery::find($id);

        return view('admin.galeri.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, galery $galery, $id)
    {
        $datalama = galery::find($id);
        $databaru = $request->all();

        if ($request['gambar']!=null)
        {
            $this->validate($request, [
                'gambar' => 'required|image|mimes:png,jpg,jpeg|max:2048',
                'deskripsi' => 'required',
            ]);

            if($gambar = $request->file('gambar'))
            {
                $destinationPath = 'storage/galery';
                $profileImage = date('YmdHis') .".". $gambar->getClientOriginalExtension();
                $gambar->move($destinationPath,$profileImage);
                $databaru['gambar'] = $profileImage;
                Storage::delete('galery/'.$datalama['gambar']);
            }
        }
        else
        {
            $this->validate($request, [
                'deskripsi' => 'required'
            ]);
            $databaru['gambar'] = $datalama['gambar'];
        }

        $datalama->fill($databaru)->save();

        return redirect('admin/galery');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function destroy(galery $galery)
    {
        //
    }
}
