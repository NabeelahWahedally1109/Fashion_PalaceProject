@extends('layouts.app')


@section('content')


<header class="masthead1">
            <div class="container d-flex h-100 align-items-center">
                <div class="mx-auto text-center">
                <div class="container">
                <div style= "margin-top: 50px">
                <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
  
                </div>
                </div>

  
                </div>
            </div>
        </header>


@endsection
