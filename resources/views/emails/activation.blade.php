<h1>Hello</h1>
<p>
	Please click on the following link to activate account,

	<a href="{{ env('APP_URL')}}/activate/{{ $user->email}}/{{$code}}"> activate account</a>
</p>