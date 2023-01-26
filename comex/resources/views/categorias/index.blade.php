<x-layout title="Categorias">
    <ul>
    @foreach ($categorias as $categoria )
        <li>{{$categoria->nome}}</li>
    @endforeach
    </ul>
</x-layout>