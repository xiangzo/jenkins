<?php

namespace App\Http\Controllers;

use App\Models\team;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['team'] = team::all();
        return view('admin.team' , $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data["slug"] = Str::slug($request->nama);
        // dd($data);
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $nama = date('Y-m-dHis') . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('/img/tim'), $nama);
            $data["foto"] = "/img/tim/$nama";
        }
        $create = Team::create($data);
        // Team::create([
    	// 	'nama' => ucwords(strtolower($request->nama)),
    	// 	'slug' => strtolower($request->nama),
        //     'email' => strtolower($request->email),
        //     'posisi' => $request->posisi,
        //     'wa' => $request->wa,
        //     'ig' => $request->ig,
        //     'foto' => 'img',
    	// ]);
        return redirect()->route('team')->with('success', 'Berhasil Tambah Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(team $team)
    {
        $data['team'] = $team;
        return view('admin.team-edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, team $team)
    {
        $data = $request->all();
        $data["slug"] = Str::slug($request->nama);
        if($request->hasFile('foto')){
            $file = $request->file('foto');
            $nama = date('Y-m-dHis') . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('/img/tim'), $nama);
            $data["foto"] = "/img/tim/$nama";
        }
        $team->update($data);
        return redirect()->route('team')->with('success','Berhasil Update Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(team $team)
    {
        // echo json_encode($team);
        // $data = team::findOrFail($id);
        // $data->delete();
        $team->delete();
        return redirect()->route('team')->with('success', 'Berhasil Hapus Data');
    }
}
