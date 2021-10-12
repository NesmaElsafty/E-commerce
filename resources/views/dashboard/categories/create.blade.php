<?php $name = "Create Category" ?>


@extends ('../../db-layout')


@section ('content')

<div class="row">
    <div class="col-md-8">
        <div class="card-body">
            <form action="{{ route('categories.store') }}" method="POST" aria-label="{{ __('Upload') }}">

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
                    
                    <label class="bmd-label-floating">uploadImage</label>
                      <input type="file" name="image">
                </div>
                      <div class="col-md-6">
                        
                          <label class="bmd-label-floating">Active</label>
                          <input type="checkbox" name="active" value="1">
                      </div>
                
            </div>
            

<button type="submit" class="btn btn-primary pull-right">Submit</button>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>

@endsection