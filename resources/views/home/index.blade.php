@extends('layouts.app') @section('content')

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8 col-md-offset-2">
			<div id ="passport" class="panel-body">
				<passport-clients></passport-clients>
				<passport-authorized-clients></passport-authorized-clients>
				<passport-personal-access-tokens></passport-personal-access-tokens>
			</div>
		</div>
	</div>
</div>
@endsection
