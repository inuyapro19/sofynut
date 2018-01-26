@component('mail::message')
#Mensaje enviado de Sofynut
![logo]({{ asset('/front/img/logo.jpg') }})
@component('mail::table')
    |        |          |
    |--------|----------|
	|Nombre  | {{ strtoupper($nombre).' '.strtoupper($apellido) }} |		
	|Email  | {{ $email }} |	
	|Teléfono | {{ $telefono }} |	
	|Mensaje | {{ $mensaje }} |
	
@endcomponent

Mensaje generado autromaticamente,<br>
{{ config('app.name') }}
@endcomponent
