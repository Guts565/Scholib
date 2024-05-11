<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Data Diri</title>
    <link rel="icon" type="image/png" href="public/images/scholib.png" sizes="32x32">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        font-family {
            font-family: Helvetica;
        }

        body {
            transition: background-color 3s ease;
            line-height: 32px;
            margin: 0;
            padding: 0;
            word-wrap: break-word !important;
            font-family: Helvetica;
            /* background-color: grey; */
        }

        a {
            text-decoration: none;
        }

        .button-group {
            display: flex;
            align-items: center;
        }

        .button-group button,
        .button-group input {
            margin-right: 10px;
            /* Atur jarak antara tombol */
        }
    </style>
</head>

<body>
    <table class="table table-bordered">
        <thead>
            <tr>
                {{-- <th>No</th> --}}
                {{-- <th>Foto</th> --}}
                <th>NIM</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Program Studi</th>
                <th>IPK</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            {{-- @php
                $no = 1;
            @endphp --}}
            @foreach ($students as $student)
                <tr>
                    {{-- <td>{{ $no++ }}</td> --}}
                    {{-- <td><img src="{{ $student->foto }}" width="50" height="50"></td> --}}
                    <td>{{ $student->nim }}</td>
                    <td>{{ $student->nama }}</td>
                    <td>{{ $student->jk }}</td>
                    <td>{{ $student->alamat }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->prodi }}</td>
                    <td>{{ $student->ipk }}</td>
                    <td>
                        <div class="button-group pt-2">
                            <a href="{{ url('/student/edit/' . $student->nim) }}"
                                class="btn btn-primary rounded-4 me-2">Edit</a>
                            {{-- {{ dd($student->user_id) }} --}}
                            <form class="ml-2" action="{{ url('/student/destroy/' . $student->nim) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger rounded-4" type="submit"
                                    onclick="return confirm('Anda yakin?')">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- <a href="{{ url('/student/register/') }}" class="btn btn-primary ms-3">Tambahkan Data</a> --}}
    <a href="{{ url('/student/register') }}" class="btn btn-primary ms-3">Tambahkan data</a>
    <a href="{{ url('/loggedin') }}" class="btn btn-primary ms-3">Back</a>
</body>

</html>
