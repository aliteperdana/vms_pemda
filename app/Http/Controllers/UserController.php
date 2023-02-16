<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function test(){
        $input_username = "gokeilpse";
        $input_password = "K4mpret1234";

        $password = md5($input_password);

        $login = DB::connection('sulap')
                    ->table('pegawai')
                    ->select(
                        'username',
                        'nip',
                        'nama',
                        'alamat'
                    )
                    ->where('username',$input_username)
                    ->where('password', $password)
                    ->first();
        
        var_dump($login);

    }

    public function login(Request $request){

        if (session()->has('username')) {
            return back();
        }

        return view('login');
    }

    public function checkLogin(Request $request){

        // Make Validation
        $input = $request->all();
        
        $rules = [
            'username' => 'required',
            'password' => 'required',
        ];

        $message = [
            'username.required' => 'Username Harus Di Isi',
            'password.required' => 'Password Harus Di Isi',
        ];
        
        $validator = Validator::make($input,$rules,$message);

        // Return if Validation fails
        if ($validator->fails()) {
            return redirect(route('login'))
                        ->withErrors($validator);
        }

        // If validation success
        $username = $request->input('username');
        $password = md5($request->input('password'));

        // Super User
        if ($username == 'root' && $password == '53caadc81eac46512c7977f00094b11c') {
            session([
                'username' => 'root',
                'nip' => '001',
                'nama' => 'Super User',
            ]);
    
            return redirect(route('home'));
        }

        // Check DB Username and Password
        $login = DB::connection('sulap')
                    ->table('pegawai')
                    ->select(
                        'username',
                        'nip',
                        'nama'
                    )
                    ->where('username',$username)
                    ->where('password', $password)
                    ->first();

        // If Username or Password not found
        if ($login == NULL) {
            $invalid_login = true;
            return view('login',['invalid_login' => $invalid_login]);
        }       
        
        // If Username or Password found
        session([
            'username' => $login->username,
            'nip' => $login->nip,
            'nama' => $login->nama
        ]);

        return redirect(route('home'));

    }

    public function logout(Request $request){
        session()->flush();
        return redirect('/');
    }
}
