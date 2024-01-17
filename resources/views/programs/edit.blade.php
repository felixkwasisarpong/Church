@extends('layout.master')

@push('plugin-styles')
@endpush

@section('content')
<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">

        <div class="pull-left">

            <h2>Edit New User</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('view.index') }}"> Back</a>

        </div>

   

@if (count($errors) > 0)

  <div class="alert alert-danger">

    <strong>Whoops!</strong> There were some problems with your input.<br><br>

    <ul>

       @foreach ($errors->all() as $error)

         <li>{{ $error }}</li>

       @endforeach

    </ul>

  </div>

@endif


{!! Form::model($program, ['method' => 'PATCH','route' => ['view.update', $program->id]]) !!}

<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Title:</strong>

            {!! Form::text('title', null, array('placeholder' => 'Title','class' => 'form-control')) !!}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Start Date:</strong>
            {!! Form::date('startDate',null, ['class' => 'form-control']) !!}
        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>End Date:</strong>
            {!! Form::date('endDate',null, ['class' => 'form-control']) !!}
        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Description:</strong>

            {!! Form::textarea('desc',null,['class'=>'form-control', 'rows' => 4, 'cols' => 40]) !!}

        </div>

    </div>

   

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

        <button type="submit" class="btn btn-primary">Submit</button>

    </div>

</div>

</div>

</div>


</div>

</div>

{!! Form::close() !!}
  @endsection

@push('plugin-scripts')
@endpush

@push('custom-scripts')
@endpush