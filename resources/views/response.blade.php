@extends('layouts.app')

@section('title', 'Dashboard')

@section('css')
@parent
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <b>{{ __('Dashboard') }}</b> 
                    <div class="float-lg-end">
                        <div class="d-inline"><a href="/">Home</a> | </div>
                        <div class="d-inline"><a href="{{url('dashboard/post')}}">Post</a> | </div>
                        <div class="d-inline"><a href="{{url('dashboard/response')}}"><b>Response</b></a></div>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-striped" id="example">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th>Sended On</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($responses as $response)
                            <tr>
                                <td>{{$response['name']}}</td>
                                <td>{{$response['email']}}</td>
                                <td><a href="/dashboard/response/{{$response['id']}}">View</a></td>
                                <td>{{$response['timesend']}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
@parent
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
@endsection