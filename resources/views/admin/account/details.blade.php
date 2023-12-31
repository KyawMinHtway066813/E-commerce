@extends('admin.layouts.master')

@section('title', 'Change Details')

@section('content')

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-3 offset-8">
                    <a href="{{ route('category#list')}}"><button class="btn bg-dark text-white my-3">List</button></a>
                </div>
            </div>
            <div class="col-lg-6 offset-3">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h3 class="text-center title-2">Profile Info</h3>
                        </div>
                        <hr>
                        @if (session('info'))
                        <div class="alert alert-success">
                            {{session('info')}}
                        </div>
                        @endif
                        @if (session('detail'))
                        <div class="alert alert-danger">
                            {{session('detail')}}
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-3 offset-2">
                                @if (Auth::user()->image == null)

                                    @if (Auth::user()->gender == 'male')
                                    <img src="{{ asset('image/user_profile.png')}}" class="img-thumbnail shadow-sm mt-5"/>
                                    @else
                                    <img src="{{ asset('image/images.png')}}" class="img-thumbnail shadow-sm mt-5"/>
                                    @endif
                                @else
                            <img src="{{ asset('storage/'.Auth::user()->image) }}"/>
                            @endif
                            </div>
                            <div class="col-5 offset-1">
                                <h4 class="my-3"><i class="fa-solid fa-user-pen me-2"></i>{{Auth::user()->name}}</h4>
                                <h4 class="my-3"><i class="fa-solid fa-envelope me-2"></i>{{Auth::user()->email}}</h4>
                                <h4 class="my-3"><i class="fa-solid fa-phone me-2"></i>{{Auth::user()->phone}}</h4>
                                <h4 class="my-3"><i class="fa-solid fa-mars-and-venus"></i>{{Auth::user()->gender}}</h4>
                                <h4 class="my-3"><i class="fa-solid fa-address-card me-2"></i>{{Auth::user()->address}}</h4>
                                <h4 class="my-3"><i class="fa-solid fa-user-clock me-2"></i>{{Auth::user()->created_at->format('j-F-Y')}}</h4>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-4 offset-4">
                                <a href="{{route('admin#editProfile')}}">
                                    <button class="btn bg-dark text-white">
                                        <i class="fa-solid fa-pen-to-square me-2"></i> Edit Profile
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MAIN CONTENT-->

@endsection
