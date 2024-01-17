@extends('layout.master')

@push('plugin-styles')
@endpush

@section('content')
<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">

        <div class="pull-left">

            <h2>Weekly Activities</h2>

        </div>

        <div class="pull-right">

        @can('role-create')

            <a class="btn btn-success" href="{{ route('roles.create') }}"> Add New Program</a>

            @endcan

        </div>
        </div>
        </div>
        </div>
        </div>
  @endsection

@push('plugin-scripts')
@endpush

@push('custom-scripts')
@endpush