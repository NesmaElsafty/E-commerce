<?php $name = "Branches" ?>
@extends ('../db-layout')


@section ('content')

<!-- Bttnn -->
	<a href="{{ route('branches.create') }}">
		<button type="submit" class="btn btn-primary pull-left">Add New Branch</button>
	</a>
<div class="clearfix"></div>

<!-- End btn -->
<div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Branches</h4>
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
                          Address
                        </th>
                        <th>
                          Lat
                        </th>
                        <th>
                          Long
                        </th>
                        <th style="text-align:center;">
                          Control
                        </th>
                      </thead>
                      <tbody>
                      	@forelse ($branches as $branch)
                        <tr>
                          <td>
                            {{$branch->id}}
                          </td>
                          <td>
                            {{$branch->name}}
                          </td>
                          <td>
                            {{$branch->address}}
                          </td>
                          <td>
                            {{$branch->lat}}
                          </td>
                          <td class="text-primary">
                            {{$branch->long}}
                          </td>
                          <td class="text-primary" style="text-align:center;">
                            <a href="{{ route('branches.show',$branch->id) }}">
                            <button class="btn btn-primary">Show</button>
                            </a>
                            <a href="{{ route('branches.edit',$branch->id) }}">
                            <button class="btn btn-primary">Edit</button>
                            </a>
                            <form style="display:inline-block;" action="{{ route('branches.destroy',$branch->id) }}" method="POST">
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