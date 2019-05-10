 <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Sentinel</a>
    
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
      
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
        </ul>
        <div class="form-inline pull-right top-spacing">
            @if(Sentinel::check())
            {
                <p class="text-white">Hello, &nbsp;  
                    {{ Sentinel::getUser()->first_name }}
                </p>
                <form action="/logout" method="POST" id="logout-form">
                    {{csrf_field()}}
                    $nbsp; $nbsp; <a class="btn btn-primary text-light" onclick="document.getElementById('logout-form').submit()">Logout</a>    
                </form>
            }@else
            {
                <a class="btn btn-primary" href="/register">Register</a>
                &nbsp;&nbsp;&nbsp;
                <a class="btn btn-primary" href="/login">Login</a>
            }
            @endif
        </div>
  </div>
</nav>