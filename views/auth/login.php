<h1 class="nombre-pagina">Login</h1>
<p class="descripcion-pagina">Inicia sesion con tus datos</p>
<!-- formulario que envia por metodo POst a la direccion / en el router en 'public/index.php' -->
<form action="/" class="formulario" method="POST"> 
    <div class="campo">
        <label for="email">Email:</label>
            <input 
            type="email" 
            id="email"
            placeholder="Tu email"
            name="email" 
            />
            <!-- el name nos va permitir leer el dato por el metodo post: $_POST['email']; -->
    </div>
    <div class="campo">
        <label for="password">Contraseña:</label>
            <input 
            type="password" 
            id="password"
            placeholder="tu password"
            name="password" 
            />
    </div>
    <div class="campo">
        <input type="input" value="Inicio Sesion" class="boton">
    </div>
</form>

<div class="acciones">
    <a href="/crear">Crear Cuenta</a>
    <a href="/olvide">Recuperar Contraseña</a>
</div>