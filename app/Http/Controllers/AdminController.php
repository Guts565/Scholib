<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function index()
    {

        $students = Student::all();
        $students = Student::orderBy('user_id')->get();
        $user = auth()->user();
        if ($user->acc_type === 'admin') {
            return view('admin.dashboard', compact('students'));
        } else {
            return redirect('/loggedin');
        }
    }

    public function showusers()
    {
        $users = User::all();
        $users = User::orderBy('id')->get();
        return view('admin.users', compact('users'));
    }

    // Menampilkan formulir untuk mengedit user atau admin
    public function edit(Student $student)
    {
        return view('admin.edata', ['studentdata' => $student]);
    }
    public function editacc(User $user)
    {
        return view('admin.eacc', ['userdata' => $user]);
    }

    // Memperbarui data user atau admin
    public function updateacc(Request $request, User $user)
    {
        $dataToUpdate = [
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];
        $dataToUpdate['password'] = bcrypt($request->input('password'));

        User::where('id', $user->id)->update($dataToUpdate);

        return redirect('/admin/users')->with('success', 'Akun Updated.');
    }

    public function updatedata(Request $request, Student $student)
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

        // dd($dataToUpdate);
        // dd($student->nim);
        Student::where('nim', $student->nim)->update($dataToUpdate);
        return redirect('admin')->with('success', 'Profile Updated.');
    }

    // Menghapus user atau admin
    public function destroy($id)
    {
        User::destroy($id);

        return redirect('/admin/users')->with('success', 'User or Admin deleted successfully');
    }

    public function delete(Student $student)
    {
        Student::where('nim', $student->nim)->delete();
        return redirect('/admin');
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
