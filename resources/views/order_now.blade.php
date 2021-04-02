@include('header')

<div class="container align-center">
	<div class="heading text-center">
		<h4>Your Cart Items</h4>
	</div>
	<div class="row text-center">
	<table class="table">
         
            <tbody>
              <tr>
                <td>Amount</td>
              <td>$ {{$amounts}}</td>
              </tr>
              <tr>
                <td>Tax</td>
                <td>$ 0</td>
              </tr>
              <tr>
                <td>Delivery </td>
                <td>$ 10</td>
              </tr>
              <tr>
                <td>Total Amount</td>
              <td>$ {{$amounts+10}}</td>
              </tr>
            </tbody>
          </table>	
	</div>
	<form action="/proceed_order" method="POST" >
              @csrf
                <div class="form-group">
                	<label>Address</label>
                  <textarea name="address" placeholder="enter your address" class="form-control" ></textarea>
                </div>
                <div class="form-group">
                  <label for="pwd">Payment Method</label> <br> <br>
                  <input type="radio" value="cash" name="payment"> <span>online payment</span> <br> <br>
                  <input type="radio" value="cash" name="payment"> <span>EMI payment</span> <br><br>
                  <input type="radio" value="cash" name="payment"> <span>Payment on Delivery</span> <br> <br>
                  <input type="hidden" name="amount" value="{{$amounts+10}}">
                </div>
                <button type="submit" class="btn btn-success">Order Now</button> $ {{$amounts+10}} 
              </form>
</div>
@include('footer')
<style type="text/css">
	.heading{
		padding: 5px;
	}

</style>