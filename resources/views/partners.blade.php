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

	<!-- Container voor de rest van de inhoud -->
	<div class="container" id="test2">

		<!-- Titel voor de pagina met bijbehorende text -->
		<div class="row"  style="width: calc(100vw - 300px); background-color: white; min-height: 184px; margin-top: -60px; padding-top: 20px; text-align: center;">
				{!! $content->content !!}
		</div>

		<!-- Grid met afbeeldingen van alle bedrijven -->
		<div class="row sponsor-container green-background" style="background-color: #A9C80C;">
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
					<h2>Normale Sponsoren</h2>
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