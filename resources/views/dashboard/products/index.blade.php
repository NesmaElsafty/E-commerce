<?php $name = "Products" ?>
 
@extends ('../../db-layout')


@section ('content')

<a href="{{ route('products.create') }}">
    <button type="submit" class="btn btn-primary pull-left">Add New Product</button>
  </a>
<div class="clearfix"></div>


<table>
<div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Products</h4>
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
                No Products in this category
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