<?php $name = "Show Product Data" ?>
 
@extends ('../../db-layout')


@section ('content')


<!-- Start Card -->
    <form action="{{ route('storeImgs') }}" method="POST" enctype="multipart/form-data">
    @csrf
      <div class="input-file-container">  
        <input type="hidden" value="{{$product->id}}" name="product_id"/>
        <input class="input-file" id="my-file" type="file" name="imgs[]" multiple>
        <label tabindex="0" for="my-file" class="input-file-trigger">Upload Images...</label>
      </div>
      <p class="file-return"></p>
    </form>

<!-- Add Imgs -->

<!-- End Add Imgs -->

<div class="card" style="width: 20rem; text-align:;" >
  <img class="card-img-top" src="{{ asset('db-assets/img/'.$product->image) }}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{ $data['name']['ar'] }}</h5>
    <h5 class="card-title">{{ $data['name']['en'] }}</h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">{{ $product->price }} L.E</li>
    <li class="list-group-item">{{ $product->active == 1 ? 'Activated' : 'Not Activated'}}</li>
    <li class="list-group-item">{{$category->name == NULL ?  'No Category Selected' : $category->name}}</li>
  </ul>
  <div class="card-body">
    <a href="{{ route('products.edit',$product->id) }}" class="btn btn-primary btn-round">Edit</a>

    <form style="display:inline-block;" action="{{ route('products.destroy',$product->id) }}" method="POST">
        @csrf
        @method('DELETE') 
        <button class="btn btn-primary btn-round">Delete</button>
    </form>
    
  </div>
</div>

<!-- End Card -->

@endsection