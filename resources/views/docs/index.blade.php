<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>User</title>
    <style>
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
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 mt-5">
                @if (!empty($docs) && $docs->isEmpty())
                    <p>Tidak ada dokumen 😞</p><br><br>
                    <a href="/docs/create" class="btn btn-primary rounded-3">Upload Dokumen</a>
                @else
                    @foreach ($docs as $doc)
                        {{-- <h2 class="mx-4">&nbsp;Halo, {{ $docs->username }}</h2> --}}
                        <ul>
                            <p>File name: {{ $doc->nama_file }}</p>
                            <p>Tipe: {{ $doc->tipe }}</p>
                            <div class="button-group pt-2">
                                <a href="{{ route('docs.edit', $doc->id) }}"
                                    class="btn btn-primary rounded-4 me-2">Edit</a>
                                <form class="ms-2" action="{{ route('docs.destroy', $doc->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger rounded-4 " type="submit"
                                        onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                                <a class="ml-2" href="{{ url('/loggedin') }}"><input class="btn btn-primary rounded-4"
                                        type="button" value="Back"></a>
                            </div>
                        </ul><br>
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                    @endforeach
                @endif
            </div>
        </div>
    </div>

</body>

</html>
