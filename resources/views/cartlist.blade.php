@include('header')
<div class="container align-center">
	<div class="heading text-center">
		<h4>Your Cart Items</h4>
	</div>
	<div class="row text-center">
		<table class="table table-responsive table-striped">
			<tr>
				<th>Cart_id</th>
				<th>Product Name</th>
				<th>Description</th>
				<th>Price</th>
				<th>Remove Item</th>
			</tr>
			@foreach($items as $list)
			<tr>
				<td>{{$list->cart_id}}</td>
				<td>{{$list->product}}</td>
				<td>{{$list->discription}}</td>
				<td>{{$list->price}}</td>
				<td><a href="/removeitem/{{$list->cart_id}}"><i class="fa fa-trash"></i></a></td>

			</tr>
			@endforeach
		</table>
		
	</div>
	
</div>
@include('footer')
<style type="text/css">
	.heading{
		padding: 5px;
	}

</style>