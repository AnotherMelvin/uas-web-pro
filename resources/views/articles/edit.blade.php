@extends('layouts.app')

@section('title', 'Edit')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <b>{{ __('Edit Article') }}</b> 
                    <div class="float-lg-end">
                        <div class="d-inline"><a href="{{url('dashboard/post')}}">Back</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{route('post.update', $article['id'])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title') ?? $article['title']}}">
                            @error('title')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="subtitle" class="form-label">Subtitle</label>
                            <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{old('subtitle') ?? $article['subtitle']}}">
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <input type="text" class="form-control @error('category') is-invalid @enderror" id="category" name="category" value="{{old('category') ?? $article['category']}}">
                            @error('category')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea class="form-control" id="content" name="content">{{old('content') ?? $article['content']}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="header" class="form-label">Header</label>
                            <img class="mb-3 d-block" src="{{asset($header)}}" width="480px">
                            <input type="file" class="form-control" id="header" name="header">
                        </div>
                        <input type="hidden" class="form-control" id="oldheader" name="oldheader" value="{{$article['header']}}">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
@parent
<script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>

<script>
    ClassicEditor
        .create( document.querySelector( '#content' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection