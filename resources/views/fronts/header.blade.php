<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>coinBash</title>
    <link rel=" icon" type="image/x-icon" href="./resources/views/coin_dollar_finance_icon_125510.ico">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('assets/add.css')}}">

    <style>

    </style>
</head>
<body>
<div class="bs-example">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a href="/" class="navbar-brand"><span class="first-b">coin</span><span class="second-b">Bash</span></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="/" class="nav-item nav-link  @if(Request::segment(1)=="") gold @endif">Home</a>
                <a href="/market" class="nav-item nav-link  @if(Request::segment(1)=="market") gold @endif">Markets</a>
                <a href="/top-rank" class="nav-item nav-link  @if(Request::segment(1)=="top-rank") gold @endif">Top-Rank</a>
                <a href="/news" class="nav-item nav-link  @if(Request::segment(1)=="news") gold @endif">News</a>

                <a href="/contact" class="nav-item nav-link  @if(Request::segment(1)=="contact") gold @endif">Contact</a>

            </div>


            @if(isset($user))
                <div class="navbar-nav ml-auto">
                    <a href="/wallet" class="nav-item nav-link price">@isset($total){{$total}} @endisset</a>

                    <a href="/wallet" class="nav-item nav-link @if(Request::segment(1)=="wallet") gold  @endif">Wallet</a>
                    <a href="/profile" class="nav-item nav-link @if(Request::segment(1)=="profile") gold  @endif">Profile</a>
                    <a href="/logout" class="nav-item nav-link">Logout<i style="margin-left: 10px" class="fas fa-sign-out-alt"></i></a>



                </div>
@else
            <div class="navbar-nav ml-auto">
                <a href="/login" class="nav-item nav-link  @if(Request::segment(1)=="login") gold  @endif">Login</a>
            </div>
            @endif
        </div>
    </nav>
</div>
