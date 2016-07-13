@extends('default')

@section('content')

<div class="col-md-4 col-md-offset-4 enter">
	<h3><i class="glyphicon glyphicon-option-vertical"></i> Sign up</h3>
	<form action="{{ route('reg') }}" method="POST">
		{{ csrf_field() }}
		<div class="form-group clearfix {{ $errors->has('email') ? 'has-error' : '' }}">
			<input type="email" name="email" required class="input2" placeholder="Your Email">
			<span class="error pull-right">{{ $errors->has('email') ? $errors->first('email') : '' }}</span>
		</div>
		<div class="form-group clearfix {{ $errors->has('password') ? 'has-errors' : '' }}">
			<input type="password" name="password" required class="input2" placeholder="Password">
			<span class="error pull-right">{{ $errors->has('password') ? $errors->first('password') : '' }}</span>
		</div>
		<div class="form-group clearfix {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
			<input type="password" name="password_confirmation" required class="input2" placeholder="Repeat password">
			<span class="error pull-right">{{ $errors->has('password_confirmation') ? $errors->first('password_confirmation') : '' }}</span>
		</div>
		<div class="form-group clearfix">
			<button type="submit" class="btn2 btn2-primary pull-right"><i class="glyphicon glyphicon-check"></i> Submit</button>
		</div>
	</form>
</div>

@endsection