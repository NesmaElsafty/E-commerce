@extends ('../layout')


@section ('content')

  <div class="main main-raised">
    <div class="profile-content">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile">
              
              <div class="name">

                <h3 class="title">{{Auth::user()->name;}}</h3>
                <h6>Email: {{Auth::user()->email;}}</h6>
         		<div style="text-align:center;">
                <a title="Edit" href="#" class="btn btn-just-icon btn-link btn-dribbble"><i class="material-icons">build</i></a>
            	</div>
              </div>
            </div>
          </div>
        </div>
   
      </div>
    </div>
  </div>



@endsection