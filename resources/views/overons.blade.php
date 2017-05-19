@extends('layouts.app')


@section('content')

<!-- Banner bovenaan het scherm -->
<div class="banner row-6 vague-green-background" style="background-image: url(http://www.oosterplasdoet.nl/wp-content/uploads/2016/03/cropped-IMG_7544-1.jpg);">
	 <img src="//www.oosterplasdoet.nl/wp-content/uploads/2016/11/Schermafbeelding-2016-11-02-om-22.13.56-e1478121477474.png" alt="" class="centered-logo">
</div>


<!--  STIJN MAAKT HIER DE OVER ONS PAGINA -->
<div class="container">
	<div class="text" style="width: 70%; float: left;">
		<h1>Over ons...</h1>
		<p>Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door elkaar husselde om een font-catalogus te maken. Het heeft niet alleen vijf eeuwen overleefd maar is ook, vrijwel onveranderd, overgenomen in elektronische letterzetting. Het is in de jaren '60 populair geworden met de introductie van Letraset vellen met Lorem Ipsum passages en meer recentelijk door desktop publishing software zoals Aldus PageMaker die versies van Lorem Ipsum bevatten.</p>

		<p>Wil je meer weten?! Kijk dan op onze social media pagina's!</p>
		<a href="https://twitter.com/OosterplasDoet" target="_blank"><img src="{{asset('img/overons/twitter.png')}}" alt="twitter"> <a href="https://twitter.com/OosterplasDoet"></a></img></a>
		<a href="https://nl-nl.facebook.com/OosterplasDoet/" target="_blank"><img src="{{asset('img/overons/facebook.png')}}" alt="facebook"><a href="https://nl-nl.facebook.com/OosterplasDoet/"></a></img></a>

	</div>
	<div class="image" style="width: 29%; float: right;"><img src="//www.oosterplasdoet.nl/wp-content/uploads/2016/11/Schermafbeelding-2016-11-02-om-22.13.56-e1478121477474.png" alt="logo" style="width: 80%; height: auto; margin-top: 40px; margin-left: 20px;"></div>
</div>
@endsection