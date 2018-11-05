@extends('layout')

@section('content')
<div class="container">
<div class="">
	<h4 class="page-header text-center">
		Editar departamento

	</h4>
	<a href="{{ route('dptos.index') }}" class="btn btn-outline-info float-right btn-sm">Volver a lista</a>
	
</div>

	@include('fragment.error')

	{!! Form::model($vdpto, ['route' => ['dptos.update', $vdpto->id], 'method' =>'PUT']) !!}

		@include('fragment.formdpto')

	{!! Form::close() !!}

</div>
@endsection

