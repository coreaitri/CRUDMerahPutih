<?php

namespace App\Http\Controllers;

use App\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;



class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = Data::all();
        $data = Data::paginate(5);
        return view('layout.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layout.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeBaru(Request $request)
    {
        Validator::make(
            $request->all(),
            [
                'nama'          => 'required|max:20',
                'username'      => 'required|max:20|regex:/^.*(?=.*[a-zA-Z])(?=.*[0-9]).*$/',
                'password'      => 'required|max:30|regex:/^.*(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[!@$#%]).*$/',
                'tanggal_lahir' => 'required',
                'telephone'     => 'required|between:9,14',
                'email'         => 'required|email:rfc',
                'foto'          => 'max:2048|mimes:jpeg|dimensions:max_width=1920,max_height=720|file'
            ],
            [
                'nama.required' => 'nama harus diisi',
                'nama.max'      => 'nama maksimal 20 karakter',

                'username.required' => 'username harus diisi',
                'username.max'      => 'username maksimal 20 karakter',
                'username.regex'    => 'username kombinasi angka dan huruf',

                'password.required' => 'password harus diisi',
                'password.max'      => 'password maksimal 30 karakter',
                'password.regex'    => 'password kombinasi angka, huruf dan symbol',

                'tanggal_lahir.required' => 'tanggal_lahir harus diisi',

                'telephone.required' => 'telephone harus diisi',
                'telephone.between'  => 'telephone antara 9 sampai 14 karakter',

                'email.required'    => 'email harus diisi',
                'email.email'       => 'email harus sesuai format email',

                'foto.max'          => 'maksimal ukuran foto 2MB',
                'foto.mimes'        => 'foto harus Jpeg',
                'foto.dimensions'   => 'dimensi maksimal 1920 x 720',
            ]
        )->validate();

        $data = new \App\Data;
        $data->nama = $request->nama;
        $data->username = $request->username;
        $data->password = $request->password;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->alamat = $request->alamat;
        $data->kecamatan = $request->kecamatan;
        $data->telephone = $request->telephone;
        $data->email = $request->email;
        if ($request->file('foto')) {
            $foto = $request->file('foto')->store('foto_data', 'public');
            $data->foto = $foto;
        }
        $data->save();

        return redirect()->route('index')->with('status', '<b> data berhasil dibuat </b>');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editBaru($id)
    {
        $data = Data::findOrFail($id);
        return view('layout.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param   int $id
     * @return \Illuminate\Http\Response
     */
    public function updateBaru(Request $request, $id)
    {
        Validator::make(
            $request->all(),
            [
                'nama'          => 'required|max:20',
                'username'      => 'required|max:20|regex:/^.*(?=.*[a-zA-Z])(?=.*[0-9]).*$/',
                'password'      => 'required|max:30|regex:/^.*(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[!@$#%]).*$/',
                'tanggal_lahir' => 'required',
                'telephone'     => 'required|between:9,14',
                'email'         => 'required|email:rfc',
                'foto'          => 'max:2048|mimes:jpeg|dimensions:max_width=1920,max_height=720|file'
            ],
            [
                'nama.required' => 'nama harus diisi',
                'nama.max'      => 'nama maksimal 20 karakter',

                'username.required' => 'username harus diisi',
                'username.max'      => 'username maksimal 20 karakter',
                'username.regex'    => 'username kombinasi angka dan huruf',

                'password.required' => 'password harus diisi',
                'password.max'      => 'password maksimal 30 karakter',
                'password.regex'    => 'password kombinasi angka, huruf dan symbol',

                'tanggal_lahir.required' => 'tanggal_lahir harus diisi',

                'telephone.required' => 'telephone harus diisi',
                'telephone.between'  => 'telephone antara 9 sampai 14 karakter',

                'email.required'    => 'email harus diisi',
                'email.email'       => 'email harus sesuai format email',

                'foto.max'          => 'maksimal ukuran foto 2MB',
                'foto.mimes'        => 'foto harus Jpeg',
                'foto.dimensions'   => 'dimensi maksimal 1920 x 720',
            ]
        )->validate();
        $data = \App\Data::findOrFail($id);
        $data->nama = $request->nama;
        $data->username = $request->username;
        $data->password = $request->password;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->alamat = $request->alamat;
        $data->kecamatan = $request->kecamatan;
        $data->telephone = $request->telephone;
        $data->email = $request->email;

        if ($request->file('foto')) {
            if ($data->foto and file_exists(storage_path('app/public/' . $data->foto))) {
                \Storage::delete('public/' . $data->foto);
            }
            $foto = $request->file('foto')->store('foto_data', 'public');
            $data->foto = $foto;
        }
        $data->save();

        return redirect()->route('index')->with('status', '<b> data berhasil dibuat </b>');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Data::findOrFail($id);
        $data->delete();
        return redirect()->route('index')->with('status', 'Data Berhasil Dihapus !!');
    }

    public function findByAge(){
        $data = Data::where('usia', '=', '20')->paginate(5);
        return view('layout.index', ['data' => $data]);
    }

    public function findByPhoto(){
        $data = Data::whereNull('foto')->paginate(5);
        return view('layout.index', ['data' => $data]);
    }

    public function findByName(){
        $data = Data::where('nama', 'like', "ab%")->paginate(5);
        return view('layout.index', ['data' => $data]);
    }

    public function searchByKecamatan(Request $request){
        $request->validate([
          'query' => 'required|min:3',
        ]);
        $query = $request->input('query');
        $data = Data::where('kecamatan', 'like', "%$query%")->paginate(5);
        return view('layout.index', ['data' => $data]);
      }


}
