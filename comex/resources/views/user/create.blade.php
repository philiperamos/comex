<x-layout title="Login">
    <form method="post">
       @csrf
       <div class="card" style="margin-top:10px">
          <div class="card-body">
            <label for='name' class="form-label">Nome</label>
            <input type="text" id="name" name="name" class="form-control"/>

            <label for='email' class="form-label">Email</label>
            <input type="email" id="email" name="email" class="form-control"/>

            <label for='password' class="form-label">Senha</label>
            <input type="password" id="password" name="password" class="form-control"/>
          </div>
          
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Registrar</button>
          </div>
       </div>
    </form>
</x-layout>