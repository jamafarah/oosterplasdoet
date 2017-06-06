	@extends('layouts.app')


@section('content')

	<!-- Script voor het veranderen van de text -->
	<script type="text/javascript">
		function showText(titel, description)
		{
			text1=titel;
			text2=description
			var text4 = document.getElementById("1").innerHTML = text1;
		    var text3 = document.getElementById("2").innerHTML = text2;
		}
	</script>

	<!-- Banner bovenaan het scherm -->
	<div class="banner row-6 vague-green-background" style="background-image: url(http://www.oosterplasdoet.nl/wp-content/uploads/2016/03/cropped-IMG_7544-1.jpg);">
		 <img src="{{ asset('/img/overons/oosterplas_transparant.png') }}" alt="" class="centered-logo">
	</div>
	<!-- Titel voor de pagina met bijbehorende text -->
	<div class="container raised">
		{!! $content->content !!}
	</div>

	<!-- Container voor de rest van de inhoud -->
	<div class="container" style="background-color: white; border-style: solid;border-color: #acc90f;">
		<!-- Grid met afbeeldingen van alle bedrijven -->
		<div class="row sponsor-container">
			<div class="col-md-4 orange-background pull-right">
				<h2 class="title" id="1">Naam van instantie</h2>
				<p class="info" id="2">Hier komt een beschrijving van de sponsor te staan. Hier vind je bijvoobeeld waarom het bedrijf of club een sponsor is en wat er is begedragen</p>
			</div>
			<div class="col-md-8 sponsor-overview" style="margin-top: 10px;">

				@if (count($hoofdsponsoren) > 0)
					<h1>Hoofd Sponsoren</h1>
					@foreach ($hoofdsponsoren AS $sponsor)
						<a target="_blank" href="{!! $sponsor->url !!}"><img alt="{!! $sponsor->naam !!}" onmouseover='showText("{!! $sponsor->naam !!}", "{!! $sponsor->beschrijving !!}");' src="{{asset("img/sponsoren/$sponsor->img")}}" class="col-md-2" ></a>

					@endforeach
				@else
					<p>Geen Hoofd Sponsoren gevonden</p>
				@endif

			</div>

			<div class="col-md-8 sponsor-overview" style="margin-top: 10px;">
				@if (count($normalesponsoren) > 0)
					<h2>Sponsoren</h2>
					@foreach ($normalesponsoren AS $sponsor)
						<a target="_blank" href="{!! $sponsor->url !!}"><img alt="{!! $sponsor->naam !!}" onmouseover='showText("{!! $sponsor->naam !!}", "{!! $sponsor->beschrijving !!}");' src="{{asset("img/sponsoren/$sponsor->img")}}" class="col-md-2" ></a>
					@endforeach
				@else
					<p>Geen Normale Sponsoren gevonden</p>
				@endif

			</div>
		<br>

				<div class="col-md-8 sponsor-overview" style="margin-top: 10px;">
					@if (count($partners) > 0)
						<h2>Partners</h2>
						@foreach ($partners AS $sponsor)
							<a target="_blank" href="{!! $sponsor->url !!}"><img alt="{!! $sponsor->naam !!}" onmouseover='showText("{!! $sponsor->naam !!}", "{!! $sponsor->beschrijving !!}");' src="{{asset("img/sponsoren/$sponsor->img")}}" class="col-md-2" ></a>
						@endforeach
					@else
						<p>Geen Partners gevonden</p>
					@endif

				</div>
		<div>


		</div>

				</div>
				
			<!-- Text van elke organisatie -->

		</div>
	</div>

@endsection