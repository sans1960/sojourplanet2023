@extends('front.layouts.base')
@section('title')
    All Blogs
@endsection
@section('css')

@endsection
@section('content')
<div class="container">
    <h1 class="text-center patua mt-4">Travel Blog</h1>
    <div class="row mt-5">
      @foreach ($blogs as $blog)
      <div class="col-md-3 mb-4">
        <a href="{{ route('blog', $blog) }}" class="nav-link  ">
            <div class="d-flex justify-content-center align-items-center p-2 "
                style="background-image: url({{ Storage::url($blog->image) }});background-size:cover; height:200px;">
                <h5 class="fs-5 open fw-bold text-white">{{ $blog->name }}</h5>

            </div>
        </a>
      </div>
          
      @endforeach

    </div>
    <div class="row">
        <div class="col-md-8 mx-auto d-flex justify-content-end">
            {!! $blogs->links() !!}
        </div>
    </div>
</div>

@endsection
@section('js')

@endsection