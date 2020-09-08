@extends('layouts.app')

@section('content')
<!-- Page Header -->
<header class="masthead" style="background-image: url('/img/superate(1).jpg'); background-attachment: fixed;">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1 style="text-shadow: 2px 2px 6px black">Bienvenido a ¡Supérate! <span style="color: #00b6d8;">|</span> BLOG
          </h1>
          <span class="subheading" style="text-shadow: 2px 2px 6px black; font-weight: bold;">Un gran lugar para dejar
            fluir tus
            ideas</span>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Main Content -->
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      @foreach ($blogs as $blog)

      <div class="post-preview">
        <a href="post.html">
          <h2 class="post-title">
            {{ $blog->title }}
          </h2>
          <h3 class="post-subtitle">
            {!! getShorterString($blog->content, 100) !!}
          </h3>
        </a>
        <p class="post-meta">Posted by
          <a href="#">{{ $blog->user->first_name." ".$blog->user->last_name }}</a>
          {{ $blog->created_at }}</p>
      </div>
      <hr>
      
      @endforeach
      <!-- Pager -->
      <div class="clearfix">
        <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
      </div>
    </div>
  </div>
</div>

<hr>
@endsection