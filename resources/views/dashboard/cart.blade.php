@extends ('../layout')


@section ('content')
<!-- FETCH CART DATA -->
			<div class="card" style="width: 18rem;">
			  <div class="card-body">
			    <h5 class="card-title">Order Number</h5>
			    <p class="card-text">Product Name: Some Name</p>
			    <p class="card-text">price: 45L.E</p>
			    <p class="card-text">quantity: 5</p>
			    <p class="card-text">created-at: Some Time</p>
			    <div style="text-align:right;">
			    	<!-- Delete method -->
			    <a href="#" class="btn btn-danger btn-fab btn-round">
			    	<i class="material-icons">delete_forever</i>
			    </a>
			    <!-- End method -->
			  	</div>
			  </div>
			</div>		
	<!-- <h5>There is no Items in the cart</h5> -->
<!-- End Data -->

<!-- Confirmation method -->
<div style="text-align:center;">

<form method="get" action="{{ route('confirm') }}">
		@csrf 
	<button class="btn btn-primary">Confirm</button>
</form>
</div>

<!-- End Confirmation -->
@endsection
