@include('header')

<div class="container align-center">
	<div class="heading text-center">
		<h2>You Ordered This</h2>
	</div>
	<div class="row text-center">
  
         @foreach($orders as $order)
           <div class="col-sm-5">
                    <img class="trending-image" src="{{$order->images}}" style="height: 200px;width: 200px;">
             </div>
                <div class="col-sm-5">
                    <div class="">
                      <h3>Name : {{$order->product}}</h3>
                      <h5>Delivery Status : {{$order->status}}</h5>
                      <h5>Address : {{$order->address}}</h5>
                      <h5>Payment Method : {{$order->payment}}</h5>
                    </div>
             </div>
            @endforeach
	</div>

</div>
@include('footer')
<style type="text/css">
	.heading{
		padding: 5px;
	}

</style>