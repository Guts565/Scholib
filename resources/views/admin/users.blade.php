<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Admin</title>
    <link rel="icon" type="image/png" href="images/scholib.png" sizes="32x32">

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
                <th>No</th>
                <th>Username</th>
                <th>Email</th>
                <th>Account Type</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($users as $user)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->acc_type }}</td>
                    <td>
                        <div class="button-group pt-2">
                            <a href="{{ url('/admin/editacc/' . $user->id) }}"
                                class="btn btn-primary rounded-4 me-2">Edit</a>
                            <form class="ml-2" action="{{ url('/admin/destroy/' . $user->id) }}" method="POST">
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
    <a href="{{ url('/admin') }}" class="btn btn-primary ms-3">Edit Data akun</a>
    <a href="{{ url('/admin/logout') }}" class="btn btn-primary ms-3">Logout</a>
</body>

</html>
