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

            <a class="btn btn-success" href="{{ route('view.create') }}"> Create New Activity</a>

        </div>




@if ($message = Session::get('success'))

<div class="alert alert-success">

  <p>{{ $message }}</p>

</div>

@endif


<table class="table table-striped">

 <tr>

   <th>No</th>
   <th></th>
   <th>Title</th>

   <th>Description</th>

   <th>Start and End Date</th>

   <th width="280px">Action</th>

 </tr>

 @foreach ($data as $key => $program)

  <tr>

    <td>{{ ++$i }}</td>
    <td><img src="{{ Storage::url($program->image) }}" style="width:70px,height:70px"></td>
    <td>{{ $program->title }}</td>

    <td>{{ $program->desc }}</td>

    <td>{{ $program->startDate }} to {{ $program->endDate }}</td>

    <td>

       <a class="btn btn-info" href="{{ route('view.show',$program->id) }}">Show</a>

       <a class="btn btn-primary" href="{{ route('view.edit',$program->id) }}">Edit</a>

        {!! Form::open(['method' => 'DELETE','route' => ['view.destroy', $program->id],'style'=>'display:inline']) !!}

            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

        {!! Form::close() !!}

    </td>

  </tr>

 @endforeach

</table>

</div>
</div>
</div>
</div>
{!! $data->render() !!}

  @endsection

@push('plugin-scripts')
@endpush

@push('custom-scripts')
@endpush