@extends('admin.layouts.dashboard')

@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#" class="text-success font-weight-bold">{{ Auth::user()->first_name." ".Auth::user()->last_name }}</a>
  </li>
  <li class="breadcrumb-item active"> {{ (Auth::user()->is_admin) ? 'Administrador' : 'Usuario' }}</li>
</ol>
<!-- Icon Cards-->
<div class="row">
  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white o-hidden h-100" style="background-color: #00c800;">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fas fa-fw fa-book"></i>
        </div>
        <div class="mr-5">¡Tenemos <strong class="badge badge-light">{{ $totalBlogs }}</strong> blogs publicados!</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="{{ route('blog.blogs.index') }}">
        <span class="float-left">Ver más detalles</span>
        <span class="float-right">
          <i class="fas fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-info o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fas fa-fw fa-user"></i>
        </div>
        <div class="mr-5">¡Tenemos <strong class="badge badge-light">{{ $users }}</strong> usuarios registrados!</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="{{ route('blog.admin.users.index') }}">
        <span class="float-left">Ver más detalles</span>
        <span class="float-right">
          <i class="fas fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>
</div>

<!-- Area Chart Example-->
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-chart-area"></i>
    Area Chart Example</div>
  <div class="card-body">
    <canvas id="myAreaChart" width="100%" height="30"></canvas>
  </div>
  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>

@endsection