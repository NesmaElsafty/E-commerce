<?php $name = "Create New Branches" ?>


@extends ('../../db-layout')


@section ('content')

<div class="row">
    <div class="col-md-8">
        <div class="card-body">
            <form action="{{ route('branches.update', $branch->id) }}" method="POST">
                @csrf
                @method('PUT')

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Name Ar</label>
                      <input class="form-control" type="text" name="name_ar" value="{{$data['name']['ar']}}" required>
                    </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name En</label>
                          <input class="form-control" type="text" name="name_en" value="{{$data['name']['en']}}" required>
                      </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Address Ar</label>
                      <input class="form-control" type="text" name="address_ar" value="{{$data['address']['ar']}}"  required>
                    </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Address En</label>
                          <input class="form-control" type="text" name="address_en" value="{{$data['address']['en']}}" required>
                      </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Lat</label>
                      <input class="form-control" type="number" name="lat" value="{{$branch->lat}}" required>
                    </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Long</label>
                          <input class="form-control" type="number" name="long"  value="{{$branch->long}}" required>
                      </div>
                </div>
            </div>

<button type="submit" class="btn btn-primary pull-right">Submit</button>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>

@endsection