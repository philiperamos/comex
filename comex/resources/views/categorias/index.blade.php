<x-layout title="Categorias">
    <a href="{{route('categorias.create')}}" class="btn btn-primary">Criar nova categoria</a>
    @if($messageSuccess)
     <div class="alert alert-success alert-dismissible" role="alert">
        {{$messageSuccess}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    
    <ul class="list-group">
    @foreach ($categorias as $categoria )
        <li class="list-group-item">{{$categoria->nome}}</li>
    @endforeach
    </ul>
</x-layout>