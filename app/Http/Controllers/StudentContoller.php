<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class StudentContoller extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            
            'email'=>'required',
            'password'=>'required',
        ]);
        $dataRequest = $request->all();
        $data = [
            
            'name' => $dataRequest['name'],
            'email' => $dataRequest['email'],
            'password' => $dataRequest['password'],
            'role' => "student",
            'gender' => $dataRequest['gender'],
            'birth_place' => $dataRequest['birth_place'],
            'birth_date' => $dataRequest['birth_date'],
            'address' => $dataRequest['address'],
            'asal_sekolah' => $dataRequest['asal_sekolah'],
            'grade' => "X",
            'major' => $dataRequest['email'],
        ];
        User::create($data);
        return redirect()->route('peserta.index')
            ->with('success', 'Datamu berhasil tersimpan');
    }
}
