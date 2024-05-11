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
                <form action="{{ '/student/update/' . $studentdata->nim }}" method="post">
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

                    <div class="mb-3">
                        <label for="ttl" class="form-label">Tempat Tanggal Lahir:</label>
                        <input class="form-control" type="ttl" id="ttl" name="ttl"
                            value="{{ $studentdata->ttl }}">
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat:</label>
                        <input class="form-control" type="alamat" id="alamat" name="alamat"
                            value="{{ $studentdata->alamat }}">
                    </div>

                    <div class="mb-3">
                        <label for="kota" class="form-label">Kota:</label>
                        <input class="form-control" type="kota" id="kota" name="kota"
                            value="{{ $studentdata->kota }}">
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Nomor Telepon:</label>
                        <input class="form-control" type="phone" id="phone" name="phone"
                            value="{{ $studentdata->phone }}">
                    </div>

                    <div class="mb-3">
                        <label for="prodi" class="form-label">Program Studi:</label>
                        <input class="form-control" type="prodi" id="prodi" name="prodi"
                            value="{{ $studentdata->prodi }}">
                    </div>

                    <div class="mb-3">
                        <label for="tahunMasuk" class="form-label">Tahun Masuk:</label>
                        <input class="form-control" type="tahunMasuk" id="tahunMasuk" name="tahunMasuk"
                            value="{{ $studentdata->tahunMasuk }}">
                    </div>

                    <div class="mb-3">
                        <label for="semester" class="form-label">Semester:</label>
                        <input class="form-control" type="semester" id="semester" name="semester"
                            value="{{ $studentdata->semester }}">
                    </div>

                    <div class="mb-3">
                        <label for="tahunAjaran" class="form-label">Tahun Ajaran:</label>
                        <input class="form-control" type="tahunAjaran" id="tahunAjaran" name="tahunAjaran"
                            value="{{ $studentdata->tahunAjaran }}">
                    </div>

                    <div class="mb-3">
                        <label for="ipk" class="form-label">IPK:</label>
                        <input class="form-control" type="ipk" id="ipk" name="ipk"
                            value="{{ $studentdata->ipk }}">
                    </div>

                    <div class="mb-3">
                        <label for="ayah" class="form-label">Ayah:</label>
                        <input class="form-control" type="ayah" id="ayah" name="ayah"
                            value="{{ $studentdata->ayah }}">
                    </div>

                    <div class="mb-3">
                        <label for="pekerjaan" class="form-label">Pekerjaan:</label>
                        <input class="form-control" type="pekerjaan" id="pekerjaan" name="pekerjaan"
                            value="{{ $studentdata->pekerjaan }}">
                    </div>

                    <div class="mb-3">
                        <label for="penghasilan" class="form-label">Penghasilan:</label>
                        <input class="form-control" type="penghasilan" id="penghasilan" name="penghasilan"
                            value="{{ $studentdata->penghasilan }}">
                    </div>

                    <div class="mb-3">
                        <label for="ibu" class="form-label">Ibu:</label>
                        <input class="form-control" type="ibu" id="ibu" name="ibu"
                            value="{{ $studentdata->ibu }}">
                    </div>

                    <div class="mb-3">
                        <label for="profesi" class="form-label">Pekerjaan:</label>
                        <input class="form-control" type="profesi" id="profesi" name="profesi"
                            value="{{ $studentdata->profesi }}">
                    </div>

                    <div class="mb-3">
                        <label for="gaji" class="form-label">Penghasilan:</label>
                        <input class="form-control" type="gaji" id="gaji" name="gaji"
                            value="{{ $studentdata->gaji }}">
                    </div>

                    <button class="btn btn-primary rounded-4" type="submit">Update</button>
                    <a href="/student/index"><input class="btn btn-primary rounded-4" type="button" value="Back"></a>
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
