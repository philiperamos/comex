<nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #e3f2fd;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">{{$title}}</a>
        <div class="d-flex" >
          @auth
            <a href="{{route('logout')}}" class="btn btn-outline-danger">Sair</a>
          @endauth

          @guest
          <a href="{{route('login')}}" class="btn btn-outline-primary">Logar</a>
          @endguest
        </div>
      </div>
    </div>
  </nav>