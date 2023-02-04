<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container mt-1">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/car"> <font face="algerian" size="3" color="">Branda</font> </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/daftar"><font face="algerian" size="3" color="">Daftar Cosmetik</font></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('pembelian') }}"><font face="algerian" size="3" color="">Pembelian Cosmetik</font></a>
            </li> 
          </ul>
        </div>


      <ul class="navbar-nav">
      @auth
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          <font face="algerian" size="3" color="">{{ auth()->user()->name }}</font> 
        </a>
        <div class="dropdown-menu">
              <form action="/logout" method="get">
                @csrf
                <button type="submit" class="dropdown-item">Keluar</button>
              </form>
        </div>
      </li>
      @else
      @endauth

      </ul>
    </div>
  </nav>