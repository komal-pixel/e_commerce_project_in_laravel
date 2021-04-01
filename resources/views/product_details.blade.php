@include('header')
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<img src="{{$items['images']}}" alt="{{$items['product']}}" height="300" width="300">
		</div>
		<div class="col-md-6 mt-5">
			<h3><b>{{$items['product']}}</b></h3>
			<p>Description:-{{$items['discription']}}</p>
			<span>Price:RS. {{$items['price']}} Only</span><br><br>
			<a href="#" class="btn btn-danger mr-4">Buy Now</a>
			<a  href="#"class="btn btn-warning mr-4">Add to Cart</a>
		</div>
			
		
	</div>
	
</div>

@include('footer')