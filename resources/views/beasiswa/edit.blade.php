<!DOCTYPE html>
<html>

<head>
    <title>Edit Profile</title>
    <!-- Tambahkan link ke CSS Anda di sini jika ada -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin-bottom: 20px;
        }

        h3 {
            display: inline-block;
            width: 120px;
            margin: 0;
        }

        .btn-detail,
        .btn-edit,
        .button {
            margin-left: 0px;
            text-decoration: none;
            background-color: #efefef;
            color: black;
            padding: 5px 10px;
            border-radius: 5px;
        }

        form {
            display: inline-block;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-4 mt-4">
                <form action="{{ '/beasiswa/update/' . $studentdata->nim }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama:</label>
                        <input class="form-control" type="text" id="nama" name="nama"
                            value="{{ $studentdata->nama }}">
                    </div>

                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM:</label>
                        <input class="form-control" type="text" id="nim" name="nim"
                            value="{{ $studentdata->nim }}">
                    </div>

                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan:</label>
                        <input class="form-control" type="jurusan" id="jurusan" name="jurusan"
                            value="{{ $studentdata->jurusan }}">
                    </div>

                    <div class="mb-3">
                        <label for="jk" class="form-label">Jenis Kelamin:</label>
                        <input class="form-control" type="jk" id="jk" name="jk"
                            value="{{ $studentdata->jk }}">
                    </div>

                    <button class="btn btn-primary rounded-4" type="submit">Update</button>
                    <a href="/admin"><input class="btn btn-primary rounded-4" type="button" value="Back"></a>
                </form><br><br>
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
            </div>
        </div>
    </div>

</body>

</html>
