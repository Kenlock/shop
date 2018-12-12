@extends('Theme2.my-profile.my-profile')
@section('content')
    <div class="container-fluid mt-5">

        <!-- Heading -->
        <div class="card mb-4 wow fadeIn">

            <!--Card content-->
            <div class="card-body d-sm-flex justify-content-between">

                <h4 class="mb-2 mb-sm-0 pt-1">
                    <a href="{{route('users.profile')}}" target="_blank">Home Page</a>
                    <span>/</span>
                    <span>profile</span>
                </h4>

                <form class="d-flex justify-content-center">
                    <!-- Default input -->
                    <input type="search" placeholder="Type your query" aria-label="Search" class="form-control">
                    <button class="btn btn-primary btn-sm my-0 p" type="submit">
                        <i class="fa fa-search"></i>
                    </button>

                </form>

            </div>

        </div>
        <!-- Heading -->

        <!--Grid row-->
        <div class="row wow fadeIn">

            <!--Grid column-->
            <div class="col-md-12 mb-4">

                <!--Card-->
                <div class="card">

                    <!--Card content-->
                    <div class="card-body">

                        <div class="container wow fadeIn">

                            <!-- Heading -->
                            <h2 class="my-5 h2 text-center">Edit Profile</h2>
                            @if (session()->has('success_message'))
                                <div class="alert alert-success">
                                    {{ session()->get('success_message') }}
                                </div>
                            @endif

                            @if(count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                        @endif

                        <!--Grid row-->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-md-12 mb-4">

                                    <!--Card-->
                                    <div class="card">

                                        <!--Card content-->
                                        <form class="card-body" enctype="multipart/form-data" method="post" action="{{route('users.profile')}}">
                                        @method('patch')
                                        {{csrf_field()}}
                                        <!--Grid row-->
                                            <div class="row">

                                                <!--Grid column-->
                                                <div class="col-md-12 mb-2">

                                                    {{--avatar--}}
                                                    <div class="file-field">
                                                        <div class="mb-4 text-center">
                                                            {{--{{old('name',$users->avatar)}}--}}
                                                            <img src="{{asset(old('name','/storage/'.$users->avatar))}}"
                                                                 class="rounded-circle z-depth-1-half "
                                                                 style="width: 150px"
                                                                 alt="example placeholder avatar">
                                                        </div>
                                                        <div class="d-flex justify-content-center">
                                                            <div class="btn btn-danger btn-rounded float-left"
                                                                 style="border-radius:10em">
                                                                <span>Add photo</span>
                                                                <input type="file" class="position-absolute" data-name="avatar" name="avatar" style="    top: 0;right: 0;left: 0;bottom: 0;width: 100%;margin: 0;padding: 0;cursor: pointer;opacity: 0;">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--Grid column-->


                                            </div>
                                            <!--Grid row-->

                                            <div class="row">
                                                <!--Grid column-->
                                                <div class="col-md-6 mb-2">

                                                    <!--Name-->
                                                    <div class="md-form ">
                                                        <input type="text" value="{{old('name',$users->name)}}"
                                                               id="name" name="name" class="form-control">
                                                        <label for="name" class="">Name</label>
                                                    </div>

                                                </div>
                                                <!--Grid column-->
                                                <!--email-->
                                                <div class="md-form col-md-6 mb-2">
                                                    <input type="text" id="email" value="{{old('email',$users->email)}}"
                                                           name="email" class="form-control"
                                                           placeholder="youremail@example.com">
                                                    <label for="email" class="">Email</label>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <!--password-->
                                                <div class="md-form col-md-6 mb-2">
                                                    <input type="text" id="password" name="password"
                                                           class="form-control"
                                                           placeholder="">
                                                    <label for="password" class="">Password</label>
                                                </div>

                                                <!--confirmpassword-->
                                                <div class="md-form col-md-6 mb-2">
                                                    <input type="text" id="password_confirmation"
                                                           name="password_confirmation" class="form-control">
                                                    <label for="password_confirmation">Confirm Password</label>
                                                </div>

                                            </div>
                                            <div class="text-center">
                                                <button class=" btn btn-primary " type="submit">
                                                    Update Profile

                                                </button>

                                            </div>

                                        </form>

                                        {{--<form id="my_form" action="{{ route('users.upload') }}" target="form_target" method="post" enctype="multipart/form-data" style="width:0px;height:0;overflow:hidden">--}}
                                            {{--{{ csrf_field() }}--}}
                                            {{--<input name="image" id="upload_file" type="file" onchange="$('#my_form').submit();this.value='';">--}}
                                            {{--<input type="hidden" name="type_slug" id="type_slug" value="{{ $users->slug }}">--}}
                                        {{--</form>--}}

                                    </div>
                                    <!--/.Card-->

                                </div>
                                <!--Grid column-->


                            </div>
                            <!--Grid row-->

                        </div>

                    </div>

                </div>
                <!--/.Card-->

            </div>
            <!--Grid column-->


        </div>
        <!--Grid row-->


    </div>

@endsection