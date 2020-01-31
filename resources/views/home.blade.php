@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class ="col-md-12 mb-4">
            <img src="{{ asset('frontend/images/icons/logo-5.jpg')}}" class="rounded mx-auto  d-block" width="700" alt="">
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                    <a href= "{{ route('homeauth') }}" class="btn btn-primary btn-smx">Kembali Ke Home</a>

                    {{--  <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Kembali Ke Home') }}
                            </button>  --}}

                            {{--  <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>  --}}




                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</div>

@endsection
