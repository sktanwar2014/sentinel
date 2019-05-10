<form action="/posts" method="POST">
	{{csrf_field()}}
	<input type="text" name="post_title" placeholder="Title">
    <input type="submit" value="Create Post">
</form>


<form action="/logout" method="POST" id="logout-form">
    {{csrf_field()}}
    <a class="btn btn-primary text-light" onclick="document.getElementById('logout-form').submit()">Logout</a>
</form>
