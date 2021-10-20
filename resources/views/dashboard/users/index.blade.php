<?php $name = "Users" ?>
@extends ('../db-layout')


@section ('content')

<!-- Bttnn -->
	
<div class="clearfix"></div>

<!-- End btn -->
<div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Users</h4>
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
                          Email
                        </th>
                        
                        <th style="text-align:center;">
                          Control
                        </th>
                      </thead>
                      <tbody>
                        
                      	@forelse ($users as $user)
                        @if ($user->email != 'admin@malaz.com')
                      
                        <tr>
                          <td>
                            {{$user->id}}
                          </td>
                          <td>
                            {{$user->name}}
                          </td>
                          <td>
                            {{$user->email}}
                          </td>
                          
                          <td class="text-primary" style="text-align:center;">
                            <a href="{{ route('users.show',$user->id) }}">
                            <button class="btn btn-primary">Show</button>
                            </a>
                            
                            <form style="display:inline-block;" action="{{ route('users.destroy',$user->id) }}" method="POST">
			                    @csrf
			                    @method('DELETE')
                            	<button class="btn btn-primary">Delete</button>
                        	</form>
                          </td>
                        </tr>
                        @endif
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