<h1>Formulario para crear nuevas ciudades</h1>
<br>
<form method="POST" action="/cities">
    @csrf
    <label for="">Nombre Ciudad</label><br>
    <input type="text" name="name" required><br><br>
    <label for="">Descripción Ciudad</label><br>
    <textarea name="description" required></textarea><br><br>
    <button type="submit">Enviar</button>
</form>