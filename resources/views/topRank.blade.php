@extends('fronts.master')
@section('content')
<div class="container">
    <div class="tablo">
    <ul class="toplist" style="margin: auto">
        @foreach($all_user as $key=> $user)
        <li data-rank="{{$key+1}}">
            <div class="thumb">
                <img class="img" data-name="BluewaveSwift" src="@if($user->getImage) {{asset($user->getImage->image_src)}} @else {{asset('/assets/images/face_logo.png')}}  @endif"><span class="name">{{$user->getUser->first_name}}</span>
                <span class="stat"><b>$ {{$user->value}}</b></span>
            </div>
            <div class="more">
                <!-- To be designed & implemented -->
            </div>
        </li>
        @endforeach

    </ul>
    </div>
</div>

@endsection
