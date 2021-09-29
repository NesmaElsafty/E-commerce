<?php $name = "Update Product" ?>


@extends ('../../db-layout')


@section ('content')

<div class="row">
    <div class="col-md-8">
        <div class="card-body">
            <form method="POST" aria-label="{{ __('Upload') }}" action="{{ route('products.update', $product->id) }}">
                @csrf 
                @method('PUT')

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">Name Ar</label>
                      <input class="form-control" type="text" name="name_ar" value="{{$data['name']['ar']}}" required>
                    </div>
                      </div>
                    <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name En</label>
                          <input class="form-control" type="text" name="name_en" value="{{$data['name']['en']}}" required>
                      </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Price</label>
                          <input class="form-control" type="number" name="price" value="{{$product->price}}" required>
                      </div>
                    </div>
            </div>
            <select class="form-control" name="category_id">
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
                  <input type="checkbox" name="active" value="1" {{$product->active != 0 ? 'checked' : ''}}>
                </div>
            </div>
            

<button type="submit" class="btn btn-primary pull-right">Submit</button>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>

@endsection
