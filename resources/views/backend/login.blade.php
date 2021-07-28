<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-12">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body p-5">
                        <form action="{{ url('/admin/login') }}" method="POST">
                            @csrf
                            <x-input name="email" type="email"></x-input>
                            <x-input name="password" type="password"></x-input>

                            <button class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
