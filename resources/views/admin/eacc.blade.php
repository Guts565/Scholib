<!DOCTYPE html>
<html>

<head>
    <title>Edit Profile</title>
    <!-- Tambahkan link ke CSS Anda di sini jika ada -->
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
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-4">
                <h2>User ID: {{ $userdata->id }}</h2>
                <form action="{{ '/admin/updateacc/' . $userdata->id }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Username:</label>
                        <input class="form-control" type="text" id="username" name="username"
                            value="{{ $userdata->username }}">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input class="form-control" type="email" id="email" name="email"
                            value="{{ $userdata->email }}">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">New Password:</label>
                        <input class="form-control" type="text" id="password" name="password"
                            placeholder="Enter a new password">
                    </div>

                    <button class="btn btn-primary rounded-4" type="submit">Update</button>
                    <a href="/admin/users/"><input class="btn btn-primary rounded-4" type="button" value="Back"></a>
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
