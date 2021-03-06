@extends('fronts.master')
@section('content')
<div class="container contact-form">
    <div class="contact-image">
        <img src="{{asset('assets/images/cb.png')}}" alt="rocket_contact"/>
    </div>
    <form method="post" action="{{route('upload-message')}}">
        @csrf
        <h3 style="color:#f49200;">Drop Us a Message</h3>
        <div class="row">


            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="name" class="form-control"  required placeholder="Your Name *" value=""  />
                </div>
                <div class="form-group">
                    <input type="text" name="email" class="form-control"  required placeholder="Your Email *" value="" />
                </div>
                <div class="form-group">
                    <input type="text" name="phone" class="form-control"   placeholder="Your Phone Number " value="" />
                </div>
                <div class="form-group">
                    <button type="submit" name="btnSubmit" class="btnContact btn-primary col-md-12" >Send Message</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <textarea name="msg" class="form-control" required placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                </div>
            </div>
        </div>
    </form>

</div>
@endsection

@section('js')

    @if(\Illuminate\Support\Facades\Session::has('success_contact'))
        <script>
            swal("Good job!", "Your message has reached us. We will return as soon as possible.", "success");

        </script>
        {!!\Illuminate\Support\Facades\Session::forget('success_contact')  !!}


    @endif

@endsection

