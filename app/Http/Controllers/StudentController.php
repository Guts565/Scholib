<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = Student::where('user_id', auth()->user()->id)->get();
        return view('student.index', ['students' => $student]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function register()
    {
        $user_id = Auth::id();

        // Check if a record already exists for the logged-in user
        $existingRecord = Student::where('user_id', $user_id)->first();

        if ($existingRecord) {
            // A record already exists, you can redirect or show a message
            return redirect('/loggedin')->with('error', 'You have already registered as a student.');
        }
        return view('student.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validate = $request->validate([
            // 'user_id' => 'required',
            'nama' => 'required',
            'nim' => 'required',
            'jurusan' => 'required',
            'jk' => 'required',
            'ttl' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'phone' => 'required',
            'prodi' => 'required',
            'tahunMasuk' => 'required',
            'semester' => 'required',
            'tahunAjaran' => 'required',
            'ipk' => 'required',
            'ayah' => 'required',
            'pekerjaan' => 'required',
            'penghasilan' => 'required',
            'ibu' => 'required',
            'profesi' => 'required',
            'gaji' => 'required',
        ]);

        // Mendapatkan user id dari user yang sedang login
        $user_id = Auth::id();
        // $user_id = Auth::user()->id;

        // Menambahkan user_id ke dalam data yang akan disimpan
        $validate['user_id'] = $user_id;

        // Menyimpan data mahasiswa ke dalam tabel students
        // dd($request);
        Student::create($validate);
        return redirect('/loggedin')->with('message', 'Registration Success');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {

        // dd($student);
        return view('student.edit', ['studentdata' => $student]);
    }

    public function update(Request $request, Student $student)
    {
        $dataToUpdate = [
            'nama' => $request->input('nama'),
            'nim' => $request->input('nim'),
            'jurusan' => $request->input('jurusan'),
            'jk' => $request->input('jk'),
            'ttl' => $request->input('ttl'),
            'alamat' => $request->input('alamat'),
            'kota' => $request->input('kota'),
            'phone' => $request->input('phone'),
            'prodi' => $request->input('prodi'),
            'tahunMasuk' => $request->input('tahunMasuk'),
            'semester' => $request->input('semester'),
            'tahunAjaran' => $request->input('tahunAjaran'),
            'ipk' => $request->input('ipk'),
            'ayah' => $request->input('ayah'),
            'pekerjaan' => $request->input('pekerjaan'),
            'penghasilan' => $request->input('penghasilan'),
            'ibu' => $request->input('ibu'),
            'profesi' => $request->input('profesi'),
            'gaji' => $request->input('gaji'),
        ];

        Student::where('nim', $student->nim)->update($dataToUpdate);
        return redirect('/student/index/')->with('success', 'Profile Updated.');
    }

    public function destroy(Student $student)
    {
        Student::where('nim', $student->nim)->delete();
        return redirect('/student/index');
    }
}
