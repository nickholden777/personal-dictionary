@extends('default')

@section('content')

<div class="col-md-4 col-md-offset-4 enter">
	<h3><i class="fa fa-ellipsis-v" aria-hidden="true"></i> Sign in</h3>
	@if($errors)
		<p class="error">{{ $errors->first() }}</p>
	@endif
	<form action="{{ route('login') }}" method="POST">
		{{ csrf_field() }}
		<div class="form-group">
			<input type="email" name="email" required class="input2" placeholder="Your Email" value="{{ old('email') }}">
		</div>
		<div class="form-group clearfix">
			<input type="password" name="password" required class="input2" placeholder="Your password">
		</div>
		<div class="form-group clearfix">
			<button type="submit" class="btn2 btn2-primary pull-right"><i class="glyphicon glyphicon-check"></i> Enter</button>
		</div>
	</form>
</div>

@endsection
