@extends('fronts.master')

@section('content')
<div class="container">
<div class="profile">



    <div class="card col-md-6 "  style="margin: auto;text-align: center"  >
        <img class="card-img-top" src="@if($user->getImage) {{$user->getImage->image_src}} @else https://static.thenounproject.com/png/630729-200.png @endif" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{$user->first_name}}</h5>
            <p class="card-text">Amateur</p>
            <button type="button" class="btn btn-info col-md-12" data-toggle="modal" data-target="#uploadModal">Edit Profile</button>

        </div>
    </div>
    <!-- Modal -->
    <div id="uploadModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 style="text-align: center;width: 100%">Edit Profile</h4>

                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <!-- Form -->
                    <form method='post' action="{{route('update-profile')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Nick Name  </label>
                            <input  type="text" name="nickname" class="form-control"  value="{{$user->first_name}}" />
                        </div>
                        <div class="form-group">
                            <label>Profile Photo  </label>
                            <input  type="file"  class="form-control" name="image" />
                        </div>




                        <button type='submit' class='btn btn-info col-md-12'  id='btn_upload'>Edit Profile</button>
                    </form>

                    <!-- Preview-->
                    <div id='preview'></div>
                </div>

            </div>

        </div>
    </div>
</div>


</div>
@endsection

@section('js')

    @if(\Illuminate\Support\Facades\Session::has('success_update'))
        <script>
            swal("Good job!", "Your profile information has been updated successfully", "success");

        </script>
        {!!\Illuminate\Support\Facades\Session::forget('success_update')  !!}


    @endif

@endsection
