@extends ('../layout')


@section ('content')

<div id="images">
          <div class="title">
            <h2>{{ $data['name']['en'] }}</h2>
          </div>
          <br> 
          <div class="row">
          @forelse($products as $product)

            <div class="col-sm-2">
              <a href="{{ route('ProductShow',$product->id) }}">
                <img src="{{ asset('assets/img/faces/avatar.jpg') }}" alt="Rounded Image" class="rounded img-fluid">
            <?php $proName = json_decode($product->name); ?>
            <div class="row">
                <h5>{{$proName->en}}</h5>
                <p>{{$product->price}} L.E</p>
            </div>  
              </a>
            </div>

             @empty
                <h4>No Products in this category</h4>
            @endforelse
          </div>
</div>
@endsection
