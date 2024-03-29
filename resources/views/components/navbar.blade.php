<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Ristoranti</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/">FeedBack</a>
          </li>
          @auth


          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             {{auth()->user()->name}}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Inserisci FeedBack</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" onclick="
                event.preventDefault();
                getElementById('form-logout').submit();
                ">Logout</a>
            <form action="/logout" method="POST" id="form-logout">
            @csrf
            </form>
        </a></li>
        @endauth
            </ul>
        </li>
        </ul>

        @guest
        <a href="/register"><button class="btn btn-success" style="margin-right:10px;">Sign In</button></a>
        <a href="/login"><button class="btn btn-outline-success" type="submit">Log In</button></a>
        @endguest
      </div>
    </div>
  </nav>
