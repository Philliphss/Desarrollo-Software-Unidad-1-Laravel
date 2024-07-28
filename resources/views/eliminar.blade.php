<form action="/proyectos/{{ $proyecto->id }}" method="POST">
    @method('DELETE')
    @csrf
    <button type="submit">Eliminar Proyecto</button>
</form>
<x-valor-uf />
