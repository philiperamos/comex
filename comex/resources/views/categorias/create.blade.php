<x-layout title="Categorias - Criar">
    <form method="POST" action="/categorias/salvar">
        @csrf
        <input type="text" id="nome" name="nome" placeholder="Nome" />
        <button type="submit">Salvar</button>
    </form>
</x-layout>