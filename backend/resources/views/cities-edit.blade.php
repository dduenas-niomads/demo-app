<h1>Formulario para editar ciudad</h1>
<br>
<form method="POST" action="{{ route('cities.update', $city->id) }}">
    @csrf
    @method('put')
    <label for="">Nombre Ciudad</label><br>
    <input type="text" name="name" value="{{ $city->name }}" required><br><br>
    <label for="">Descripción Ciudad</label><br>
    <textarea name="description" required>{{ $city->description }}</textarea><br><br>
    <button type="submit">Enviar</button>
</form>