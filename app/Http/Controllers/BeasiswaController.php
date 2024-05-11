<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;



class BeasiswaController extends Controller
{
    public function index()
    {
        // $beasiswa = Beasiswa::all();
        $beasiswa = Beasiswa::where('nim', auth()->user()->id)->get();

        return view('beasiswa.index', compact('beasiswa'));
    }

    public function store(Request $request)
    {
        // $beasiswa = Beasiswa::create($request->all());

        // return redirect()->route('users.loggedin');
        $validate = $request->validate([
            'nim' => 'required|exists:students,nim',
            // 'gambar' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            // 'deadline' => 'required',
        ]);
        ddd($request);
        Auth::id();
        Beasiswa::create($validate);
        return redirect('/loggedin')->with('message', 'Registration Success');
    }

    public function edit(Beasiswa $id)
    {
        return view('beasiswa.edit', ['beasiswa' => $id]);
    }

    public function update(Request $request, $id)
    {
        $beasiswa = Beasiswa::find($id);

        $beasiswa->update($request->all());

        return redirect()->route('beasiswa.index');
    }

    public function destroy($id)
    {
        $beasiswa = Beasiswa::find($id);

        $beasiswa->delete();

        return redirect()->route('beasiswa.index');
    }
}
