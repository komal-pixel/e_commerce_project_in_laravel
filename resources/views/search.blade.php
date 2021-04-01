@include('header')
<div class="container">
	<div class="col-sm-4">
		<a href="#">Filter</a>
	</div>
			<h3>You Search For</h3>
			<div class="row">
				@foreach($keywords as $words)
			<div class="col-sm-6 item">
				<img src="{{$words['images']}}" alt="{{$words['product']}}">
			</div>
			<div class="col-sm-6">
				<h3><b>{{$words['product']}}</b></h3>
				<p>Description : {{$words['discription']}}</p>
				<p>Price : {{$words['price']}}</p>
				<a href="#" class="btn btn-danger mr-4">Buy Now</a>
			    <a  href="#"class="btn btn-warning mr-4">Add to Cart</a>
			</div>
			@endforeach
			</div>
		
	
</div>

@include('footer')
<style type="text/css">
	.item> img{
		width: 350px;
		height: 500px
	}
</style>