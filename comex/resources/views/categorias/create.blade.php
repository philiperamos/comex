<x-layout title="Categorias - Criar">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form method="POST" action="{{route('categorias.store')}}">
        @csrf
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" />
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</x-layout>