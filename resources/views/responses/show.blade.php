@extends('layouts.app')

@section('title', 'View')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <b>{{ __('View Message') }}</b> 
                    <div class="float-lg-end">
                        <div class="d-inline"><a href="{{url('dashboard/response')}}">Back</a>
                    </div>
                </div>

                <div class="card-body">
                    <p class="mb-0">Name: {{$response['name']}}</p>
                    <p class="mb-0">Email: {{$response['email']}}</p>
                    <p class="mb-0">Sended On: {{$response['timesend']}}</p>
                    <hr>
                    <p>
                        {{$response['message']}}
                    </p>
            </div>
        </div>
    </div>
</div>
@endsection