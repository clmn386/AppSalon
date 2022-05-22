<h1 class="nombre-pagina">Olvide mi Contraseña</h1>
<p class="descripcion-pagina">Reestablece tu contraseña enviando tu email a continuacion.</p>

<form class="formulario" action="/olvide" action="POST">
    <div class="campo">
        <label for="email">email:</label>
        <input 
            type="email"
            id="email"
            placeholder="Tu email"
            name="email"
        />
    </div>

    <input type="submit" class="boton" value="Recuperar Contraseña">
</form>


<div class="acciones">
    <a href="/">Acceder Cuenta</a>
    <a href="/crear">Crear Cuenta</a>
</div>