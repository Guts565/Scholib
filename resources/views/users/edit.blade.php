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
            <div class="col-md-6 offset-md-4">
                <form action="{{ '/update' . $userdata->id }}" method="post">
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
                        <label for="current_password" class="form-label">Current Password:</label>
                        <input class="form-control" type="text" id="current_password" name="current_password"
                            placeholder="Enter Current Password">
                    </div>

                    <div class="mb-3">
                        <label for="new_password" class="form-label">New Password:</label>
                        <input class="form-control" type="text" id="new_password" name="new_password"
                            placeholder="Enter a new password">
                    </div>

                    <button class="btn btn-primary rounded-4" type="submit">Update</button>
                    <a href="/profile"><input class="btn btn-primary rounded-4" type="button" value="Back"></a>
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
