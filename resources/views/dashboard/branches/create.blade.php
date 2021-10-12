<?php $name = "Update Branch" ?>


@extends ('../../db-layout')


@section ('content')

<div class="row">
    <div class="col-md-8">
        <div class="card-body">
            <form action="{{ route('branches.store') }}" method="POST">
                @csrf

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Name Ar</label>
                      <input class="form-control" type="text" name="name_ar"  required>
                    </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name En</label>
                          <input class="form-control" type="text" name="name_en" required>
                      </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Address Ar</label>
                      <input class="form-control" type="text" name="address_ar"  required>
                    </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Address En</label>
                          <input class="form-control" type="text" name="address_en" required>
                      </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Lat</label>
                      <input class="form-control" type="number" name="lat"  required>
                    </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Long</label>
                          <input class="form-control" type="number" name="long" required>
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