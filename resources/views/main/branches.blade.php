@extends ('../layout')


@section ('content')


        <!--                nav tabs               -->
        <div id="nav-tabs">
          <h3>Branches</h3>
          <div class="row">

          @forelse ($branches as $branch)

            <div class="col-md-3">
              <h3><small>{{$branch->name}}</small></h3>

<!-- Tabs with icons on Card -->
              <div class="card card-nav-tabs">
               
                <div class="card-body ">
                  <div class="tab-content text-center">
                    <div class="tab-pane active" id="profile">
                      <strong>Address: </strong>
                      <p>{{$branch->address}}</p>

                      <strong>Lat: </strong>
                      <p>{{$branch->lat}}</p>

                      <strong>Long: </strong>
                      <p>{{$branch->long}}</p>

                    </div>      
                  </div>
                </div>
              </div>
            </div>
              @empty
                <p>Empty for now</p>
            @endforelse
<!-- End Tabs with icons on Card -->
</div>
</div>

@endsection