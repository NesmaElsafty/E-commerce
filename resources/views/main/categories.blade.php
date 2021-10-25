@extends ('../layout')


@section ('content')

<div id="images">
          <div class="title">
            <h2>Categories</h2>
          </div>
          <br> 
          <div class="row">

            @forelse ($categories as $category)
            <div class="col-sm-2">
            <a href="{{ route('CategoryShow',$category->id) }}">
              <img src="{{ asset('./db-assets/img/'.$category->image) }}" alt="Rounded Image" class="rounded img-fluid">
              <h4>{{$category->name}}</h4>
            </a>

            </div>
            @empty
            <h4>Empty for now</h4>
            @endforelse
          </div>
@endsection