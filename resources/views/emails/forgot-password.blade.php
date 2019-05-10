<h1>Hello</h1>
<p>
	Please click on the following link to reset password,

	<a href="{{ env('APP_URL')}}/reset/{{ $user->email}}/{{$code}}"> click here.</a>
</p>