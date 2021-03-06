<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Dashboard</a>
        </li>
          
      </ul>

      <ul class="navbar-nav">
        @guest
          <li class="nav-item">
            <a class="nav-link" href="/register">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
          </li>
        @else
          <li class="nav-item">
              <a class="nav-link" href="#">{{ Auth::user()->name }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/logout" 
                onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Logout</a>
                <form action="/logout" method="post" id="logout-form">@csrf</form>
            </li>
        @endguest
      </ul>
    
    </div>
  </nav>