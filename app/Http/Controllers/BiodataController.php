<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataControlller extends Controller
{
public fungtion index(){
return view('Biodata');
}



$request->Validate([
'nama'=>'required'
'gender'=>'required'
'email'=>'required'
'ponsel'=>'required'
],[
    'nama.required'=>'nama harus diisi',
    'gender.required'=>'jenis kelamin harus diisi',
    'email.required'=>'Email harus diisi',
    'ponsel.required'=>'No Hp harus diisi',

]

public function proses(Request $request){
echo"Nama:$request->nama<br>";
echo"Jenis Kelamin : $request->gender<br>";
echo"Email:$request->email<br>";
echo"Nomor Ponsel:$request->Ponsel<br>";

}
