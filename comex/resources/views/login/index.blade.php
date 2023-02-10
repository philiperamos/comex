<x-layout title="Login">
    <form method="post">
       @csrf
       <div class="card" style="margin-top:10px">

          <div class="card-header">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
          </div>

          <div class="card-body">
            <label for='email' class="form-label">Email</label>
            <input type="email" id="email" name="email" class="form-control"/>

            <label for='password' class="form-label">Senha</label>
            <input type="password" id="password" name="password" class="form-control"/>
          </div>
          
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Logar</button>
            <a class="btn btn-secondary" href="{{route('user.create')}}">Novo usuário</a>
          </div>
       </div>
    </form>
</x-layout>