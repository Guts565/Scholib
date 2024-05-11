<?php

namespace App\Http\Controllers;

use App\Models\Docs;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\log;


class DocsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $docs = Docs::all(); // Fetch all documents


        return view('docs.index', compact('docs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('docs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { {
            $validated = $request->validate([
                'nama_file' => 'required',
                'file' => 'required|file',
            ]);

            $file = $request->file('file');
            $extension = $file->guessExtension();

            // Store the file content using the put method
            $uniqueFileName = uniqid() . '_' . $file->getClientOriginalName();
            $path = 'docs/' . $uniqueFileName;
            Storage::disk('public')->put($path, file_get_contents($file));

            // Create the 'Docs' record
            $doc = Docs::create([
                'nama_file' => $validated['nama_file'],
                'file' => $path, // Save the correct path
                'original_name' => $file->getClientOriginalName(),
                'tipe' => $extension,
            ]);


            $docId = $doc->id;

            $student = Student::where('user_id', auth()->id())->first();

            if ($student) {
                $student->docs_id = $docId;
                $student->save();
            }

            return redirect('/docs/index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Docs $docs)
    {
        return view('docs.edit', ['docs' => $docs]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $docs)
    {
        $docs = Docs::findOrFail($docs);
        // dd($docs->exists);
        $validated = $request->validate([
            'nama_file' => 'required',
            'file' => 'file',
        ]);

        // Update only if the 'file' input is provided
        if ($request->hasFile('file') && $validated['file']) {
            $file = $request->file('file');
            $extension = $file->guessExtension();
            $uniqueFileName = uniqid() . '_' . $file->getClientOriginalName();
            $path = 'docs/' . $uniqueFileName;

            // Store the updated file content using the put method
            Storage::disk('public')->put($path, file_get_contents($file));

            // Check if the 'file' attribute is not null before deleting
            if ($docs->file !== null) {
                // Delete the old file
                Storage::disk('public')->delete($docs->file);
            }

            // Update the 'Docs' record with the new file information
            $docs->update([
                'nama_file' => $validated['nama_file'],
                'file' => $path,
                'original_name' => $file->getClientOriginalName(),
                'tipe' => $extension,
            ]);
            // dd($docs);
        } else {
            // Update the 'Docs' record without changing the file
            $docs->update([
                'nama_file' => $validated['nama_file'],
            ]);
        }
        // dd($request->all());
        // Redirect back with a success message
        return redirect('/docs/index')->with('success', 'Dokumen berhasil diupdate');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Docs $docs)
    {
        DB::beginTransaction();

        try {
            // Check if the file path is not empty
            if ($docs->file) {
                // Delete associated file in storage
                Storage::delete($docs->file);
            }

            // Update associated students records to remove the association
            $docs->students()->update(['docs_id' => null]);

            // Delete the docs record
            $docs->delete();

            // Commit the transaction
            DB::commit();
        } catch (\Exception $e) {
            // An error occurred, rollback the transaction
            DB::rollBack();

            // Log the exception for further investigation
            Log::error('Error deleting document: ' . $e->getMessage());

            // Redirect back with an error message
            return redirect('/docs/index')->with('error', 'Error deleting document');
        }

        // Redirect back with a success message
        return redirect('/docs/index')->with('success', 'Dokumen berhasil dihapus');
    }
}
