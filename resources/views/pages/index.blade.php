@extends('default')

@section('content')

<div class="row">
<div class="col-md-4 col-sm-6 col-xs-12" id="block">
	<div><h3 class="pull-xs-left">Nouns</h3> <i class="fa fa-plus pull-xs-right more" id="more_1"></i></div>
	<div id="plus_1" class="clearfix plus">
		<div class="form-group">
			<input type="text" id="field1_1" class="input2" placeholder="Word">
		</div>
		<div class="form-group">
			<input type="text" id="field2_1" class="input2" placeholder="Translate">
		</div>
		<button id="cancel_1" class="btn2 btn2-danger pull-xs-right">Cancel</button>
		<button id="add_1" class="btn2 btn2-primary pull-xs-right">Add</button>
		<button id="edit_1" class="btn2 btn2-primary pull-xs-right">Change</button>
	</div>
	<table class="table white">
		<tbody id="here_1">
			<tr id="line_1">
				<td>test</td>
				<td class="text-xs-right edit">
					<i class="fa fa-pencil change" id="change_1"></i>
					<i class="fa fa-trash-o delete" id="delete_1"></i>
				</td>
				<td class="text-xs-right">test</td>
			</tr>
		</tbody>
	</table>
</div>

<div class="col-md-4 col-sm-6 col-xs-12" id="block">
	<div><h3 class="pull-left">Verbs</h3> <i class="fa fa-plus pull-xs-right more" id="more_2"></i></div>
	<div id="plus_2" class="clearfix plus">
		<div class="form-group">
			<input type="text" id="field1_2" class="input2" placeholder="Word">
		</div>
		<div class="form-group">
			<input type="text" id="field2_2" class="input2" placeholder="Translate">
		</div>
		<button id="cancel_2" class="btn2 btn2-danger pull-xs-right">Cancel</button>
		<button id="add_2" class="btn2 btn2-primary pull-xs-right">Add</button>
		<button id="edit_2" class="btn2 btn2-primary pull-xs-right">Change</button>
	</div>
	<table class="table white">
		<tbody id="here_2">
			<tr id="line_2">
				<td>test</td>
				<td class="text-xs-right edit">
					<i class="fa fa-pencil change" id="change_2"></i>
					<i class="fa fa-trash-o delete" id="delete_2"></i>
				</td>
				<td class="text-xs-right">test</td>
			</tr>
		</tbody>
	</table>
</div>

<div class="col-md-4 col-sm-6 col-xs-12" id="block">
	<div><h3 class="pull-left">Numbers</h3> <i class="fa fa-plus pull-xs-right more" id="more_3"></i></div>
	<div id="plus_3" class="clearfix plus">
		<div class="form-group">
			<input type="text" id="field1_3" class="input2" placeholder="Word">
		</div>
		<div class="form-group">
			<input type="text" id="field2_3" class="input2" placeholder="Translate">
		</div>
		<button id="cancel_3" class="btn2 btn2-danger pull-xs-right">Cancel</button>
		<button id="add_3" class="btn2 btn2-primary pull-xs-right">Add</button>
		<button id="edit_3" class="btn2 btn2-primary pull-xs-right">Change</button>
	</div>
	<table class="table white">
		<tbody id="here_3">
			<tr id="line_3">
				<td>test</td>
				<td class="text-xs-right edit">
					<i class="fa fa-pencil change" id="change_3"></i>
					<i class="fa fa-trash-o delete" id="delete_3"></i>
				</td>
				<td class="text-xs-right">test</td>
			</tr>
		</tbody>
	</table>
</div>

</div>
<div class="row">
	<div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12 index">
		@if(!Auth::user())
			<p class="text-center">Hi, friend! Please <a href="{{ route('reg') }}" class="btn2 btn2-primary">Sign Up</a> for create your own account where you can able to add new words for learning</p>
		@else
			<p class="text-center">Hi, friend! Please choose language for learning</p>
		@endif
	</div>
</div>
@endsection

<script type="text/javascript" src="/main.js"></script>
