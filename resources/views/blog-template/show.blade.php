@extends('layouts.app')

@section('content')

<!-- Page Header -->
<header class="masthead"
    style="border-bottom: 8px solid #00b6d8; 
    background-image: url('{{ asset('/storage/img/blogs_images/' . $blog->image_url) }}');
    background-attachment: fixed;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-heading">
                    <h1 style="text-shadow: 1px 1px 1px black;">{{ $blog->title }}</h1>
                    <h2 class="subheading" style="text-shadow: 1px 1px 1px black;">By
                        {{ $blog->user->first_name . " " . $blog->user->last_name }}</h2>
                    <span class="meta">{{ $blog->created_at->formatLocalized('%d de %B de %Y %I:%M:%S %p') }}</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto" style="text-align: justify;">
            <p>{!! $blog->content !!}</p>
        </div>
    </div>
    <a href="{{ url()->previous() }}" class="btn btn-primary rounded">Regresar</a>
</div>

<hr>

@endsection