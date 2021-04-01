@include('header')


<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="background-color: black;">
  <div class="carousel-inner">
    	@foreach($items as $item)
    <div class="carousel-item {{$item['id']==1?'active':''}}">
      <img class="d-block w-100" src="{{$item['images']}}" alt="{{$item['product']}}">
       <div class="carousel-caption d-none d-md-block">
       	<h4>{{$item['product']}}</h4>
       <p class="item_desc">{{$item['discription']}}}</p>
      </div>
    </div>
   @endforeach
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-onl">Next</span>
  </a>
</div>
<hr>
<section>
	<div class="container">
		<div class="row">
    	@foreach($items as $item)
			<div class="col-md-4 border mt-2" >
     		 <caption>{{$item['product']}}</caption>
     		 <img class="d-block w-100" src="{{$item['images']}}" alt="{{$item['product']}}">
     	      <div class="row">
              <div class="col-sm-3 m-2">
                <form method="post" action="/addToCart">
              @csrf
                  <input type="hidden" name="product_id" value="{{$item['id']}}">
                 <button class="btn btn-warning">Add to Cart</button>
            </form>
              </div>
              <div class="col-sm-3 m-2">
                <a href="/product_details/{{$item['id']}}" class="btn btn-danger">View More</a>
              </div>
              <div class="col-sm-4 m-2">
                <span style="float: right;"><b>RS,{{$item['price']}}</b></span>
                
              </div>
            </div>
     	
			</div>
  		 @endforeach
		</div>
		
	</div>
</section>

<style type="text/css">

	.carousel-item img{
		height:350PX;
		max-width: 450px;
	}
	.item_desc{
		text-align: center;
	}
	.carousel-caption{
		background: #1e3cd285;
	}

</style>
@include('footer')