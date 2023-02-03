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
        <li class="list-group-item d-flex justify-content-between">
            {{$categoria->nome}} 

            <form method="post" action="{{route('categorias.destroy', $categoria->id)}}">
                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">&chi;</button>
            </form>
        </li>
    @endforeach
    </ul>
</x-layout>