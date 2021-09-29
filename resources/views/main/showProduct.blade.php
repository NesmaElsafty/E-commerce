@extends ('../layout')


@section ('content')

<?php $user = auth()->user(); ?>

<div class="title">
          <h3><strong>{{ $data['name']['en'] }}</strong></h3>
          
          <p>{{ $product->price }}L.E</p>
        </div>
            
        <form method="POST" action="{{ route('addToCart') }}">
          @csrf
            <div class="row">
              <div class="col-md-3">
                <div class="form-group bmd-form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">add_circle_outline</i>
                      </span>
                    </div>
                    <input type="hidden" name="user_id" value="{{$user['id']}}">
                    
                    <input type="hidden" name="product_id" value="{{$product->id}}">
       
                    <input type="number" title="add more" class="form-control" value="1" name="quantity" required>

                    <button type="submit" title="add to cart" class="btn btn-primary btn-round">
                      <i class="material-icons">add_shopping_cart</i>
                      <div class="ripple-container"></div>
                    </button>
                  </div>

                </div>
              </div>
            </div>
        </form>





    <!--         carousel  -->
    <div class="section" id="carousel">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mr-auto ml-auto">
            <!-- Carousel Card -->
            <div class="card card-raised card-carousel">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="caddarousel" data-interval="3000">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset('assets/img/bg2.jpg')}}" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h4>
                        <i class="material-icons">location_on</i>
                        Yellowstone National Park, United States
                      </h4>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('assets/img/bg3.jpg')}}" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h4>
                        <i class="material-icons">location_on</i>
                        Somewhere Beyond, United States
                      </h4>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('assets/img/bg.jpg')}}" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h4>
                        <i class="material-icons">location_on</i>
                        Yellowstone National Park, United States
                      </h4>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <i class="material-icons">keyboard_arrow_left</i>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <i class="material-icons">keyboard_arrow_right</i>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <!-- End Carousel Card -->
          </div>
        </div>
      </div>
    </div>
    <!--         end carousel -->
            


@endsection