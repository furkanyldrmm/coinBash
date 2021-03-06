@extends('fronts.master')
@section('content')
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
            <h2 class="form-title">Join coinBash</h2>
            <form action="{{route('registerAction')}}" method="post">

                @csrf
                <div class="form-group">
                    <label for="firstname">NickName</label>
                    <input type="text" class="form-control" id="exampleInputfirstname" name="firstname" required>
                </div>

                <div class="form-group">
                    <label for="Password">E-mail</label>
                    <input type="email"  class="form-control" id="exampleInputPassword" name="email" required>
                </div>

                <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary col-md-12" name="create">Sign Up</button>
            </form>

        </div>
    </div>
@endsection
@section('js')

@if(\Illuminate\Support\Facades\Session::has('register_error'))
    <script>
        swal("Oops sorry!", "There was an error signing up, please try again.", "error");

    </script>
    {!!\Illuminate\Support\Facades\Session::forget('register_error')  !!}



@endif


@if(\Illuminate\Support\Facades\Session::has('register_nick'))
    <script>
        swal("Oops sorry!", "This nickname has been used before.", "error");

    </script>
    {!!\Illuminate\Support\Facades\Session::forget('register_nick')  !!}



@endif

@endsection

