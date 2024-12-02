<nav class="navbar navbar-expand-lg bg-nav-custom">
    <div class="container-fluid">
      <a class="navbar-brand text-info" href="{{route('homepage')}}">Lorem Computer</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white active" aria-current="page" href="{{route('homepage')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('article.create')}}">Crea articolo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('article.index')}}">Articoli</a>
          </li>
        </ul>
        @auth
        <ul class="navbar-nav justify-content-end px-5">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Ciao {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Profilo</a></li>
                    <li>
                        <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
                        <form action="{{route('logout')}}" method="POST" class="d-none" id="form-logout">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    @endauth
      </div>
    </div>
  </nav>