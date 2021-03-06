@extends('fronts.master')
@section('content')
    <style>
        body{
            overflow: hidden;

        }
        .register-form{
            background-color: #fefefe;
opacity: 0.9;
            width: 50%;
            margin:auto;
            padding:50px;
        }

        .form-title{
            text-align: center;
        }
        .container{
        }
    </style>
    <div class="back">
        <section style="height: 50px"></section>
        <div class="register-form">
        <h2 class="form-title"> coinBash</h2>
        <form action="{{route('loginAction')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="firstname">E-mail</label>
                <input type="text" class="form-control" id="exampleInputfirstname" name="nickname" required>
            </div>

            <div class="form-group">
                <label for="Password">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary col-md-12" name="create">Login</button>
            <p>Join coinbash today !<a style="margin-left: 10px; font-weight: bold; color:#f39c12; " href="/register">Sign Up</a> </p>
        </form>

    </div>
    </div>
@endsection


@section('js')

        @if(\Illuminate\Support\Facades\Session::has('login_error'))
        <script>
        swal("Oops sorry!", "An error occurred while logging in. Please try again.", "error");

    </script>
    {!!\Illuminate\Support\Facades\Session::forget('login_error')  !!}


        @endif


        @if(\Illuminate\Support\Facades\Session::has('register_success'))
            <script>
                swal("Good job!", "Account created. you can login.", "success");

            </script>
            {!!\Illuminate\Support\Facades\Session::forget('register_success')  !!}


        @endif

@endsection
