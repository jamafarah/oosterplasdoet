@extends('layouts.app')


@section('content')

	<!-- Banner bovenaan het scherm -->
	<div class="banner row-6 vague-green-background" style="background-image: url(http://www.oosterplasdoet.nl/wp-content/uploads/2016/03/cropped-IMG_7544-1.jpg);">
		<img src="//www.oosterplasdoet.nl/wp-content/uploads/2016/11/Schermafbeelding-2016-11-02-om-22.13.56-e1478121477474.png" alt="" class="centered-logo">
	</div>


	<div class="container">
		{!! $content->content !!}
	</div>
	<div class="container">
		@if (count($medewerkers) > 0)
			@foreach ($medewerkers AS $medewerkers)
				@include('overons.medewerkers', ['medewerkers', $medewerkers])
			@endforeach
		@else
			<p>Geen medewerkers gevonden</p>
		@endif
	</div>

@endsection