@extends('layout')
@section('title','Portafolio')
@section('section')

Portafolio

@endsection


@section('content')
 <h1>PORTAFOLIO</h1>

 <ul>
 <?php
 /*
 	foreach ($portfolio as $portfolioItem) {
 		
 		echo "<li>".$portfolioItem['title']."</li>";

 	}
*/


 ?>

 <!-- foreach en blade y sentencia de control if-->

{{--@if($portfolio)
 
	 @foreach ($portfolio as $portfolioItem)
	 
		<li>{{$portfolioItem['title']}}</li>

	 @endforeach

@else

	<li>No hay proyectos para mostrar</li>

@endif--}}

<!-- foreach en blade y función nativa isset-->

{{--@isset($portfolio)
 
	 @foreach ($portfolio as $portfolioItem)
	 
		<li>{{$portfolioItem['title']}}</li>

	 @endforeach

@else

	<li>No hay proyectos para mostrar</li>

@endisset--}}

<!-- Estructura de control forelse, tomar en cuenta var_dump para los detalles de un array-->

@forelse($portfolio as $portfolioItem)
	<!--Saber si el primero o el ultimo dentro de un array-->
    {{--$portfolioItem['title']}}<pre>{{$loop->last ? 'Es el ultimo': 'Nada nada'--}}
    <li>{{$portfolioItem['title']}}</li> <pre>{{$loop->first ? 'Es el primero': 'Nada nada'}}</pre>
@empty
	<li>No hay proyectos disponibles</li>
@endforelse
 </ul>

@endsection