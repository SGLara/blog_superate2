@extends('admin.layouts.dashboard')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>{{ "$role->name | $role->slug"}}</h2>
        </div>
        <div class="card-body">
            <h2 class="bg-warning font-weight-bold text-white p-3 d-inline-block rounded">{!! "El ID de este role es <span class='badge badge-pill badge-light'>$role->id<span>" !!}</h2>
        </div>
        <div class="card-footer">
            <a href="{{ url()->previous() }}" class="btn btn-primary">Regresar</a>
        </div>
    </div>
</div>
@endsection