<nav>
	<!--Invocación del metodo requet= Illuminate/http/Request-->
	<!-- El metodo url detecta la urla interna de la pagina activa en el momento y pack el nombre del archivo, routeIs determina en boooleano la pagina activa en base a la los parametros-->
		
	<ul>
		<li class="{{setActive('home')}}"><a href="/">Home</a></li>
		<li class="{{setActive('contact')}}"><a href="/contact">Contacto</a></li>
		<li class="{{setActive('portafolio')}}"><a href="/portafolio">Portafolio</a></li>
		<li class="{{setActive('about')}}"><a href="/about">About</a></li>
	</ul>
</nav>