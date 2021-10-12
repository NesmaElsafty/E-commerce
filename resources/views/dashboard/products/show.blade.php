<?php $name = "Show Product Data" ?>
 
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
        <strong>Product Ar Name: </strong>
        {{ $data['name']['ar'] }}
      </p>
      <p class="card-description">
        <strong>Product En Name: </strong>
        {{ $data['name']['en'] }}
      </p>

      <p class="card-description">
        <strong>Price: </strong>
        {{ $product->price }}
      </p>

      <p class="card-description">
        <strong>Image: </strong>
        {{ $product->image }}
      </p>
      <p class="card-description">
          <strong>Active: </strong>
          {{ $product->active }}
      </p> 
      <p class="card-description">
      <strong>Category Name:</strong>

        <p>{{$category->name == NULL ?  'No Category Selected' : $category->name}}</p>
      </p>

    <a href="{{ route('products.edit',$product->id) }}" class="btn btn-primary btn-round">Edit</a>
</div>
</div>
  
</div>
</div>
<!-- End take -->

@endsection