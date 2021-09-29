<?php $name = "Show Branch" ?>
 
@extends ('../../db-layout')


@section ('content')

<!-- + div class row -->
<div class="row">
    <div class="col-md-4">
        <div class="card-avatar">
    </div>

    <!--  -->
      <div class="card card-profile">
        
    <div class="card-body">

      <p class="card-description">
        <strong>Name Ar: </strong>
        {{ $data['name']['ar'] }}
      </p>
      <p class="card-description">
        <strong>Name En: </strong>
        {{ $data['name']['en'] }}
      </p>

      <p class="card-description">
        <strong>Address Ar: </strong>
        {{ $data['address']['ar'] }}
      </p>
      <p class="card-description">
          <strong>Address en: </strong>
          {{ $data['address']['en'] }}
      </p>
      <p class="card-description">
        <strong>Lat: </strong>
         {{ $branch->lat }} 
      </p>
      <p class="card-description">
          <strong>Long: </strong>
          {{ $branch->long }}
      </p>


    <a href="{{ route('branches.edit',$branch->id) }}" class="btn btn-primary btn-round">Edit</a>
</div>
</div>
</div>
</div>
<!-- End take -->

@endsection