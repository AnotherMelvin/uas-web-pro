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
                        <div class="d-inline"><a href="{{url('dashboard/post')}}"><b>Post</b></a> | </div>
                        <div class="d-inline"><a href="{{url('dashboard/response')}}">Response</a></div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <div class="d-inline align-middle"><a href="{{url('dashboard/post/create')}}" class="btn btn-primary pt-1 pb-2"><b>+</b></a></div>
                        <div class="d-inline align-middle ms-2">Create New Article</div>
                    </div>
                    
                    <table class="table table-striped" id="example">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Posted On</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($articles as $article)
                            <tr>
                                <td><a href="{{route('post.show', $article['id'])}}">{{$article['title']}}</a></td>
                                <td>{{$article['category']}}</td>
                                <td>{{$article['created_at']}}</td>
                                <th>
                                    <a href="{{route('post.edit', $article['id'])}}" class="btn btn-primary px-4 my-1">Edit</a>
                                    <form action="{{route('post.destroy', $article['id'])}}" method="post" style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger px-3 my-1">Delete</button>
                                    </form>
                                </th>
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
