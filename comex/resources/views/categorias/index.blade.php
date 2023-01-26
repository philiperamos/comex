<x-layout title="Categorias">
    <a href="/categorias/criar">Criar nova categoria</a>
    <ul>
    @foreach ($categorias as $categoria )
        <li>{{$categoria->nome}}</li>
    @endforeach
    </ul>
</x-layout>