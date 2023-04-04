<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        $students = Students::all();
        
        return view('student.index', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Auth::check()) {
            return redirect('login');
        }



        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        // $nama = $request->input('nama');
        // $kelas = $request->input('kelas');

  

        Students::create([
            'nama' =>  $request->input('nama'),
            'kelas' =>  $request->input('kelas'),
        ]);

        return redirect('student'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
        // kosong
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        $chosen_student = Students::where('id', $id)->first();

        $data = [
            'student' => $chosen_student,
        ];

        return view('student.edit', $data);
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
        if (!Auth::check()) {
            return redirect('login');
        }


        // $nama = $request->input('nama');
        // $kelas = $request->input('kelas');

        Students::where('id', $id)->update([
            'nama' => $request->input('nama'),
            'kelas' => $request->input('kelas'),
        ]);

        return redirect('student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Auth::check()) {
            return redirect('login');
        }


        Students::SelectedById($id)->delete();

        return redirect('student');
    }
}
