<?php $name = "Create Product" ?>


@extends ('../../db-layout')


@section ('content')

<div class="row">
    <div class="col-md-8">
        <div class="card-body">
            <form action="{{ route('products.store') }}" method="POST" aria-label="{{ __('Upload') }}">

                @csrf

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">Name Ar</label>
                      <input class="form-control" type="text" name="name_ar"  required>
                    </div>
                      </div>
                    <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name En</label>
                          <input class="form-control" type="text" name="name_en" required>
                      </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Price</label>
                          <input class="form-control" type="number" name="price" required>
                      </div>
                    </div>
            </div>
            <select class="form-control" name="category_id">
                <!-- <option>Tap to Select Category</option> -->
                    @forelse($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @empty
                    <option>No Categories Yet</option>
                    @endforelse
            </select>
            <br>
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