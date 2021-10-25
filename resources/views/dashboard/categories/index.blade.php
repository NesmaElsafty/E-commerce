<?php $name = "Categories" ?>
@extends ('../db-layout')


@section ('content')

<!-- Bttnn -->
	<a href="{{ route('categories.create') }}">
		<button type="submit" class="btn btn-primary pull-left">Add New Category</button>
	</a>
<div class="clearfix"></div>

<!-- End btn -->
<div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Categories</h4>
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
                        
                        <th style="text-align:center;">
                          Control
                        </th>
                      </thead>
                      <tbody>
                      	@forelse ($categories as $category)
                        <tr>
                          <td>
                            {{$category->id}}
                          </td>
                          <td>
                            {{$category->name}}
                          </td>
                          <td>
                            {{$category->active}}
                          </td>
                          <td>
                            {{$category->image}}
                          </td>
                          
                          <td class="text-primary" style="text-align:center;">
                            <a href="{{ route('categories.show',$category->id) }}">
                            <button class="btn btn-primary">Show</button>
                            </a>
                            <a href="{{ route('categories.edit',$category->id) }}">
                            <button class="btn btn-primary">Edit</button>
                            </a>
                            <form style="display:inline-block;" action="{{ route('categories.destroy',$category->id) }}" method="POST">
                              @csrf
                              @method('DELETE')
                                  <button class="btn btn-primary">Delete</button>
                            </form>
                          </td>
                        </tr>
                        @empty
                        <tr>
                        	<td>
								Empty for now
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
<!-- Data -->

<!-- End Data -->
@endsection