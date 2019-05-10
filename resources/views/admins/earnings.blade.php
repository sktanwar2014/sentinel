<form action="/logout" method="POST" id="logout-form">
    {{csrf_field()}}
    <a class="btn btn-primary text-light" onclick="document.getElementById('logout-form').submit()">Logout</a>
</form>