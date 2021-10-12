 @extends ('../layout')


@section ('content')

<div id="images">
          <div class="title">
            <h2>Products</h2>
          </div>
          <br> 
          <div class="row">

            @forelse($products as $product)
            <div class="col-sm-2">
            <a href="{{ route('ProductShow',$product->id) }}">
              <img src="{{ asset('assets/img/faces/avatar.jpg') }}" alt="Rounded Image" class="rounded img-fluid">
              <div class="row">
              <h4 style="font-family: bold;">{{$product->name}}</h4>
              <p style="font-family: bold;">{{$product->price}}L.E</p>
            </div>
            </a>

            </div>
            @empty
            <h4>Empty for now</h4>
            @endforelse
          </div>
@endsection