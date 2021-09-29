<?php $name = "Show Category" ?>
 
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
        <strong>Category Ar Name: </strong>
        {{ $data['name']['ar'] }}
      </p>
      <p class="card-description">
        <strong>Category En Name: </strong>
        {{ $data['name']['en'] }}
      </p>

      <p class="card-description">
        <strong>Image: </strong>
        {{ $category->image }}
      </p>
      <p class="card-description">
          <strong>Active: </strong>
          {{ $category->active }}
      </p>
    <a href="{{ route('categories.edit',$category->id) }}" class="btn btn-primary btn-round">Edit</a>
</div>
</div>
  
</div>
</div>
<!-- End take -->
<table>
<div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Products of {{ $data['name']['en'] }}</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Active
                        </th>
                        <th>
                          Image
                        </th>
                        <th>
                          Price
                        </th>
                        
                        <th style="text-align:center;">
                          Control
                        </th>
                      </thead>
                      <tbody>
                        @forelse($products as $product)
                        <tr>
                          <td>
                            {{$product->id}}
                          </td>
                          <td>
                            {{$product->name}}
                          </td>
                          <td>
                            {{$product->active}}
                          </td>
                          <td>
                            {{$product->image}}
                          </td>
                          <td>
                            {{$product->price}}
                          </td>
                          
                          <td class="text-primary" style="text-align:center;">
                            <a href="{{ route('products.show',$product->id) }}">
                            <button class="btn btn-primary">Show</button>
                            </a>
                            <a href="{{ route('products.edit',$product->id) }}">
                            <button class="btn btn-primary">Edit</button>
                            </a>
                            <form style="display:inline-block;" action="{{ route('products.destroy',$product->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                              <button class="btn btn-primary">Delete</button>
                          </form>
                          </td>
                        </tr>
                        @empty
                        <tr>
                          <td class=" text-primary">
                No Products yet
              </td>
            </tr>
            @endforelse
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
@endsection