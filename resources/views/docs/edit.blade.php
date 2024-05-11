<!-- resources/views/docs/edit.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="col-md-6 contents ">
            <div class="row justify-content-center col-md-8 offset-md-8">
                <div class="col-md-20 mt-3 ">
                    <div class="mb-3">
                        <h2>Edit Dokumen</h2>
                        <form action="{{ route('docs.update', ['docs' => $docs->id]) }}" method="post"
                            enctype="multipart/form-data">

                            {{-- <form action="{{ route('docs.update', $docs->id) }}" method="post"
                            enctype="multipart/form-data"> --}}
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label for="file" class="form-label">File (kosongkan jika tidak ingin
                                    mengganti)</label>
                                <input type="file" class="form-control" id="file" name="file">
                            </div>
                            <div class="mb-3">
                                <label for="nama_file" class="form-label">Nama File</label>
                                <input type="text" class="form-control" id="nama_file" name="nama_file"
                                    value="{{ $docs->nama_file }}">
                            </div>
                            <button type="submit" class="btn btn-primary rounded-4">Update Dokumen</button>
                            <a href="/docs/index" class="btn btn-primary rounded-4 mx-2">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>
