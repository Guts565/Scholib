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
        .button-group {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .button-group button,
        .button-group input {
            height: 40px;
            width: 40px;
            margin-right: 10px;
        }

        .button-group button.danger {
            background-color: #800000;
        }
    </style>
</head>

<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            @if ($user)
                @foreach ($user as $user)
                    <h2 class="mx-4">&nbsp;Halo, {{ $user->username }}</h2>
                    <ul>
                        <p>Username: {{ $user->username }}</p>
                        <p>Email: {{ $user->email }}</p>
                        <div class="button-group">
                            <a href="{{ url('/edit/' . $user->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <a href="{{ url('/student/index/') }}" class="btn btn-primary btn-sm">Data Diri</a>
                            <a href="/docs/create" class="btn btn-primary btn-sm">Upload Dokumen</a>
                            <form action="{{ url('/destroy/' . $user->id) }}" method="POST" class="ms-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Anda yakin?')">Delete</button>
                            </form>
                            <a class="ml-2" href="{{ url('/loggedin') }}"><input type="button"
                                    class="btn btn-primary btn-sm" value="Back"></a>
                        </div>
                    </ul>
                @endforeach
            @endif
        </div>
    </div>
</div>
</body>

</html>
