<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Fortify\Rules\Password;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Data User";
        $data = User::all();
        return view('pages.dashboard.user.index', compact(['title', 'data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Data User";
        return view('pages.dashboard.user.create', compact(['title']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $checkUsername = User::where('username', $request->username)->count();
        $checkEmail = User::where('email', $request->email)->count();
        if ($checkEmail > 0) {
            $res = [
                'status' => 'error',
                'icon' => 'warning',
                'title' => 'Data Sudah Ada',
                'message' => 'Email sudah terdaftar',
            ];
            echo json_encode($res);
        } else {
            if ($checkUsername > 0) {
                $res = [
                    'status' => 'error',
                    'icon' => 'warning',
                    'title' => 'Data Sudah Ada',
                    'message' => 'Username sudah terdaftar',
                ];
                echo json_encode($res);
            } else {
                $request->validate([
                    'name' => ['required', 'string', 'max:255'],
                    'username' => ['required', 'string', 'max:255', 'unique:users'],
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                    'phone' => ['required', 'string', 'max:255'],
                    'password' => ['required', 'string', new Password],
                    'roles' => ['required', 'string', 'max:255'],
                ]);

                $create = User::create([
                    'name' => $request->name,
                    'username' => $request->username,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'password' => Hash::make($request->password),
                    'roles' => $request->roles,
                ]);

                if ($create) {
                    $res = [
                        'status' => 'success',
                        'icon' => 'success',
                        'title' => 'Berhasil',
                        'message' => 'Data user berhasil ditambahkan',
                        'nomor_kk' => $request->nomor_kk,
                    ];
                    echo json_encode($res);
                } else {
                    $res = [
                        'status' => 'error',
                        'icon' => 'warning',
                        'title' => 'Gagal',
                        'message' => 'Gagal menambahkan data user',
                    ];
                    echo json_encode($res);
                }
            }
        }
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
    public function edit($id)
    {
        $title = "Data User";
        $user = User::find($id);
        return view('pages.dashboard.user.edit', compact(['title', 'user']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $update = $user->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'roles' => $request->roles,
        ]);

        if ($update) {
            $res = [
                'status' => 'success',
                'icon' => 'success',
                'title' => 'Berhasil',
                'message' => 'Data user berhasil ditambahkan',
                'nomor_kk' => $request->nomor_kk,
            ];
            echo json_encode($res);
        } else {
            $res = [
                'status' => 'error',
                'icon' => 'warning',
                'title' => 'Gagal',
                'message' => 'Gagal menambahkan data user',
            ];
            echo json_encode($res);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $query = $user->delete();
        if ($query) {
            $res = [
                'status' => 'success',
                'icon' => 'success',
                'title' => 'Berhasil',
                'message' => 'Data user berhasil dihapus',
            ];
        } else {
            $res = [
                'status' => 'error',
                'icon' => 'error',
                'title' => 'Gagal',
                'message' => 'Data user gagal dihapus',
            ];
        }
        echo json_encode($res);
    }
}
