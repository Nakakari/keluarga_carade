<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseFormatter;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Fortify\Rules\Password;

class APIUserController extends Controller
{
    public function all(Request $request) {
        $id = $request->input('id');
        $limit = $request->input('limit');
        $name = $request->input('name');
        $username = $request->input('username');
        $email = $request->input('email');
        $phone = $request->input('phone');

        if($id) {
            $user = User::with(['data_keluarga'])->find($id);

            if($user) {
                return ResponseFormatter::success(
                    $user,
                    'Data berhasil diambil'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data gagal diambil',
                    404
                );
            }
        }

        $user = User::query();

        return ResponseFormatter::success(
            $user->paginate($limit),
            'Data berhasil diambil'
        );
    }

    public function createUser(Request $request) {
        try {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'username' => ['required', 'string', 'max:255', 'unique:users'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'phone' => ['required', 'string', 'max:255'],
                'password' => ['required', 'string', new Password],
                'roles' => ['required', 'string', 'max:255'],
            ]);

            User::create([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
                'roles' => $request->roles,
            ]);

            $user = User::where('username', $request->username)->first();

            $tokenResult = $user->createToken('authToken')->plainTextToken;

            return ResponseFormatter::success([
                'access_token' => $tokenResult,
                'token_type' => 'Bearer',
                'user' => $user,
            ], 'User Created');
        } catch (Exception $error) {
            return ResponseFormatter::error([
                'message' => 'Terjadi sebuah kesalahan!',
                'error' => $error,
            ], 'Authentication Failed', 500);
        }
    }

    public function login(Request $request) {
        try {
            $request->validate([
                'username' => 'required',
                'password' => 'required',
            ]);

            $credentials = request(['username', 'password']);
            
            if(!Auth::attempt($credentials)) {
                return ResponseFormatter::error([
                    'message' => 'Username atau password salah!',
                ], 'Authentication Failed', 500);
            }

            $user = User::where('username', $request->username)->first();

            if(!Hash::check($request->password, $user->password, [])) {
                throw new \Exception('Invalid Credentials');
            }

            $tokenResult = $user->createToken('authToken')->plainTextToken;

            return ResponseFormatter::success([
                'access_token' => $tokenResult,
                'token_type' => 'Bearer',
                'user' => $user,
            ], 'Authenticated');
        } catch (Exception $error) {
            return ResponseFormatter::error([
                'message' => 'Terjadi sebuah kesalahan!',
                'error' => $error,
            ], 'Authentication Failed', 500);
        }
    }

    public function logout(Request $request) {
        $token = $request->user()->currentAccessToken()->delete();
        return ResponseFormatter::success($token, 'Logout berhasil');
    }
}
