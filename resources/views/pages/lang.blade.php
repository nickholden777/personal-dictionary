@extends('default')

@section('content')
<div class="row">
<div class="col-md-4" id="block">
	<div><h3 class="pull-left">Nouns</h3> <i class="glyphicon glyphicon-plus pull-right more" id="more_1"></i></div>
	<div id="plus_1" class="clearfix plus">
		<div class="form-group">
			<input type="text" id="field1_1" class="input2" placeholder="Word">
		</div>
		<div class="form-group">
			<input type="text" id="field2_1" class="input2" placeholder="Translate">
		</div>
		<button id="cancel_1" class="btn2 btn2-danger pull-right">Cancel</button>
		<button id="add_1" class="btn2 btn2-primary pull-right">Add</button>
		<button id="edit_1" class="btn2 btn2-primary pull-right">Change</button> 
	</div>
	<table class="table white">
		<tbody id="here_1">
		@if($nouns->count() > 0)
			@foreach($nouns as $word)
				@include('parts.lineWord')
			@endforeach
		@else
			<tr id="here">
				<td>test</td>
				<td class="text-right edit">
					<i class="glyphicon glyphicon-trash delete" id="delete"></i>
				</td>
				<td class="text-right">test</td>
			</tr>	
		@endif

		</tbody>
	</table>
</div>

<div class="col-md-4" id="block">
	<div><h3 class="pull-left">Verbs</h3> <i class="glyphicon glyphicon-plus pull-right more" id="more_2"></i></div>
	<div id="plus_2" class="clearfix plus">
		<div class="form-group">
			<input type="text" id="field1_2" class="input2" placeholder="Word">
		</div>
		<div class="form-group">
			<input type="text" id="field2_2" class="input2" placeholder="Translate">
		</div>
		<button id="cancel_2" class="btn2 btn2-danger pull-right">Cancel</button>
		<button id="add_2" class="btn2 btn2-primary pull-right">Add</button>
		<button id="edit_2" class="btn2 btn2-primary pull-right">Change</button> 
	</div>
	<table class="table white">
		<tbody id="here_2">
		@if($verbs->count() > 0)
			@foreach($verbs as $word)
				@include('parts.lineWord')
			@endforeach
		@else
			<tr id="here">
				<td>test</td>
				<td class="text-right edit">
					<i class="glyphicon glyphicon-trash delete"></i>
				</td>
				<td class="text-right">test</td>
			</tr>	
		@endif	
		</tbody>
	</table>
</div>

<div class="col-md-4" id="block">
	<div><h3 class="pull-left">Subsidiary</h3> <i class="glyphicon glyphicon-plus pull-right more" id="more_3"></i></div>
	<div id="plus_3" class="clearfix plus">
		<div class="form-group">
			<input type="text" id="field1_3" class="input2" placeholder="Word">
		</div>
		<div class="form-group">
			<input type="text" id="field2_3" class="input2" placeholder="Translate">
		</div>
		<button id="cancel_3" class="btn2 btn2-danger pull-right">Cancel</button>
		<button id="add_3" class="btn2 btn2-primary pull-right">Add</button>
		<button id="edit_3" class="btn2 btn2-primary pull-right">Change</button> 
	</div>
	<table class="table white">
		<tbody id="here_3">
		@if($sub->count() > 0)
			@foreach($sub as $word)
				@include('parts.lineWord')
			@endforeach
		@else
			<tr id="here">
				<td>test</td>
				<td class="text-right edit">
					<i class="glyphicon glyphicon-trash delete"></i>
				</td>
				<td class="text-right">test</td>
			</tr>	
		@endif	
		</tbody>
	</table>
</div>

<div class="col-md-4" id="block">
	<div><h3 class="pull-left">Numbers</h3> <i class="glyphicon glyphicon-plus pull-right more" id="more_4"></i></div>
	<div id="plus_4" class="clearfix plus">
		<div class="form-group">
			<input type="text" id="field1_4" class="input2" placeholder="Word">
		</div>
		<div class="form-group">
			<input type="text" id="field2_4" class="input2" placeholder="Translate">
		</div>
		<button id="cancel_4" class="btn2 btn2-danger pull-right">Cancel</button>
		<button id="add_4" class="btn2 btn2-primary pull-right">Add</button>
		<button id="edit_4" class="btn2 btn2-primary pull-right">Change</button> 
	</div>
	<table class="table white">
		<tbody id="here_4">
		@if($numbers->count() > 0)
			@foreach($numbers as $word)
				@include('parts.lineWord')
			@endforeach
		@else
			<tr id="here">
				<td>test</td>
				<td class="text-right edit">
					<i class="glyphicon glyphicon-trash delete"></i>
				</td>
				<td class="text-right">test</td>
			</tr>	
		@endif	
		</tbody>
	</table>
</div>

<div class="col-md-4" id="block">
	<div><h3 class="pull-left">Days</h3> <i class="glyphicon glyphicon-plus pull-right more" id="more_5"></i></div>
	<div id="plus_5" class="clearfix plus">
		<div class="form-group">
			<input type="text" id="field1_5" class="input2" placeholder="Word">
		</div>
		<div class="form-group">
			<input type="text" id="field2_5" class="input2" placeholder="Translate">
		</div>
		<button id="cancel_5" class="btn2 btn2-danger pull-right">Cancel</button>
		<button id="add_5" class="btn2 btn2-primary pull-right">Add</button>
		<button id="edit_5" class="btn2 btn2-primary pull-right">Change</button> 
	</div>
	<table class="table white">
		<tbody id="here_5">
		@if($days->count() > 0)
			@foreach($days as $word)
				@include('parts.lineWord')
			@endforeach
		@else
			<tr id="here">
				<td>test</td>
				<td class="text-right edit">
					<i class="glyphicon glyphicon-trash delete"></i>
				</td>
				<td class="text-right">test</td>
			</tr>	
		@endif	
		</tbody>
	</table>
</div>

<div class="col-md-4" id="block">
	<div><h3 class="pull-left">Colors</h3> <i class="glyphicon glyphicon-plus pull-right more" id="more_6"></i></div>
	<div id="plus_6" class="clearfix plus">
		<div class="form-group">
			<input type="text" id="field1_6" class="input2" placeholder="Word">
		</div>
		<div class="form-group">
			<input type="text" id="field2_6" class="input2" placeholder="Translate">
		</div>
		<button id="cancel_6" class="btn2 btn2-danger pull-right">Cancel</button>
		<button id="add_6" class="btn2 btn2-primary pull-right">Add</button>
		<button id="edit_6" class="btn2 btn2-primary pull-right">Change</button> 
	</div>
	<table class="table white">
		<tbody id="here_6">
		@if($colors->count() > 0)
			@foreach($colors as $word)
				@include('parts.lineWord')
			@endforeach
		@else
			<tr id="here">
				<td>test</td>
				<td class="text-right edit">
					<i class="glyphicon glyphicon-trash delete"></i>
				</td>
				<td class="text-right">test</td>
			</tr>	
		@endif	
		</tbody>
	</table>
</div>

<div class="col-md-8" id="block">
	<div><h3 class="pull-left">Sentences</h3> <i class="glyphicon glyphicon-plus pull-right more" id="more_7"></i></div>
	<div id="plus_7" class="clearfix plus">
		<div class="form-group">
			<input type="text" id="field1_7" class="input2" placeholder="Word">
		</div>
		<div class="form-group">
			<input type="text" id="field2_7" class="input2" placeholder="Translate">
		</div>
		<button id="cancel_7" class="btn2 btn2-danger pull-right">Cancel</button>
		<button id="add_7" class="btn2 btn2-primary pull-right">Add</button>
		<button id="edit_7" class="btn2 btn2-primary pull-right">Change</button> 
	</div>
	<table class="table white">
		<tbody id="here_7">
		@if($sentences->count() > 0)
			@foreach($sentences as $word)
				@include('parts.lineWord')
			@endforeach
		@else
			<tr id="here">
				<td>test</td>
				<td class="text-right edit">
					<i class="glyphicon glyphicon-trash delete"></i>
				</td>
				<td class="text-right">test</td>
			</tr>	
		@endif	
		</tbody>
	</table>
</div>

<div class="col-md-4" id="block">
	<div><h3 class="pull-left">Time</h3> <i class="glyphicon glyphicon-plus pull-right more" id="more_8"></i></div>
	<div id="plus_8" class="clearfix plus">
		<div class="form-group">
			<input type="text" id="field1_8" class="input2" placeholder="Word">
		</div>
		<div class="form-group">
			<input type="text" id="field2_8" class="input2" placeholder="Translate">
		</div>
		<button id="cancel_8" class="btn2 btn2-danger pull-right">Cancel</button>
		<button id="add_8" class="btn2 btn2-primary pull-right">Add</button>
		<button id="edit_8" class="btn2 btn2-primary pull-right">Change</button> 
	</div>
	<table class="table white">
		<tbody id="here_8">
		@if($times->count() > 0)
			@foreach($times as $word)
				@include('parts.lineWord')
			@endforeach
		@else
			<tr id="here">
				<td>test</td>
				<td class="text-right edit">
					<i class="glyphicon glyphicon-trash delete"></i>
				</td>
				<td class="text-right">test</td>
			</tr>	
		@endif	
		</tbody>
	</table>
</div>

</div>
<script type="text/javascript" src="/main.js"></script>

@endsection
