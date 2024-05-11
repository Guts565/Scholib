<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account Form</title>
    <style>
        font-family{
            font-family: Arial, Helvetica, sans-serif;
        }
        body {
            font-family: Arial, Helvetica, sans-serif,;
            background: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .register-form {
            background: #fff;
            padding: 80px;
            width: 300px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-control {
            margin-bottom: 20px;
        }

        .form-control h5 {
            margin-bottom: 5px;
        }

        .form-control input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .form-control button {
            width: 108%;
            padding: 10px;
            border: none;
            background-color: #50CAFF;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-control button:hover {
            background-color: #0d95e8;
        }

        .text-danger {
            color: red;
            /* Ganti 'red' dengan warna yang Anda inginkan */
        }
    </style>
</head>

<body>
    <div class="col-md-5">
        <img src="img/icon/scholib.png" alt="Image" class="img-fluid">
    </div>
    <form action="/store" method="post">
        @csrf
        <div class="register-form">
            <h2>Create Account</h2>
            <div class="form-control">
                <h5>Username</h5>
                <input type="text" placeholder="Username" name="username" value="{{ old('username') }}" required>
                @error('username')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-control">
                <h5>Email</h5>
                <input type="email" placeholder="Email" name="email" value="{{ old('email') }}" required>
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-control">
                <h5>Password</h5>
                <input type="password" placeholder="Password" name="password" value="{{ old('password') }}" required>
            </div>
            <div class="form-control">
                <button type="submit">Register</button>
            </div>
        </div>
    </form>
</body>

</html>
