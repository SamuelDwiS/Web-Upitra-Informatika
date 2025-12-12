{{-- @extends('admin.app')
@section('content') --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Admin Login</title>
</head>

<body>
    <section class="vh-100 d-flex justify-content-center align-items-center"
        style="background: url('{{ asset('asset/bg.jpg') }}') center/cover no-repeat;">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center vh-100">

                <div class="row w-75 shadow p-5 rounded bg-white">
                    <!-- Logo Kampus -->
                    <div class="col-md-9 col-lg-6 col-xl-5">
                        <img src="{{ asset('asset/logo_upitra.png') }}" class="img-fluid" alt="Logo Kampus">
                    </div>

                    <!-- Form Login -->
                    <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                        {{-- Alert Section --}}
                        @if (session('success'))
                            <p class="alert alert-success">{{ session('success') }}</p>
                        @endif
                        @if ($errors->any())
                            @foreach ($errors->all() as $err)
                                <p class="alert alert-danger">{{ $err }}</p>
                            @endforeach
                        @endif

                        <form action="{{ route('login_action') }}" method="POST">
                            @csrf

                            <div class="form-outline mb-4">
                                <label class="form-label" for="username">Username</label>
                                <input type="text" name="username" id="username"
                                    class="form-control form-control-lg @error('username') is-invalid @enderror"
                                    value="{{ old('username') }}" placeholder="Enter your username" required />
                                @error('username')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-outline mb-3">
                                <label class="form-label" for="password">Password</label>
                                <input type="password" name="password" id="password"
                                    class="form-control form-control-lg @error('password') is-invalid @enderror"
                                    placeholder="Enter password" required />

                                @error('password')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="form-check mb-0">
                                    <input class="form-check-input me-2" type="checkbox" value=""
                                        id="remember" />
                                    <label class="form-check-label" for="remember">Remember me</label>
                                </div>
                            </div>

                            <div class="text-center text-lg-start mt-4 pt-2">
                                <button type="submit" class="btn btn-primary btn-lg px-5">Login</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
</body>

</html>


<!-- Footer -->
{{-- </section>
@endsection --}}
