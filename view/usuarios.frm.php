<?php include_once "header.php"; ?>

<div class="row my-5">
    <h1 class="text-center  ">FORMULARIO ROLES</h1>
</div>

<div class="row">
    <div class="col-2">
        <span class="fw-bolder">Tipo Doc:</spam>
    </div>

    <div class="col-4">
        <div class="form-floating">
            <select name="selTipoDoc" id="selTipoDoc" class="form-control">
                <option value="0" selected disabled>Seleccionar</option>
                <option value="CC">CC</option>
                <option value="TI">TI</option>
                <option value="NUIP">NUIP</option>
            </select>
            <label for="floatingInput">Tipo Doc</label>
        </div>
    </div>

    <div class="col-2">
        <span class="fw-bolder">Identificacion:</spam>
    </div>

    <div class="col-4">
        <div class="form-floating">
            <input type="number" name="txtIdentificacion" id="txtIdentificacion" class="form-control" placeholder=".">
            <label for="floatingInput">Identificacion</label>
        </div>
    </div>
</div>

<div class="row mt-3">

    <div class="col-2">
        <span class="fw-bolder">Nombre:</spam>
    </div>
    <div class="col-4">
        <div class="form-floating">
            <input type="text" name="txtNombre" id="txtNombre" class="form-control" placeholder=".">
            <label for="floatingInput">Nombre</label>
        </div>
    </div>

    <div class="col-2">
        <span class="fw-bolder">Apellido:</spam>
    </div>
    <div class="col-4">
        <div class="form-floating">
            <input type="text" name="txtApellido" id="txtApellido" class="form-control" placeholder=".">
            <label for="floatingInput">Apellido</label>
        </div>
    </div>

</div>


<div class="row mt-3">
    <div class="col-2">
        <span class="fw-bolder">Correo:</spam>
    </div>
    <div class="col-4">
        <div class="form-floating">
            <input type="email" name="txtCorreo" id="txtCorreo" class="form-control" placeholder=".">
            <label for="floatingInput">Correo</label>
        </div>
    </div>

    <div class="col-2">
        <span class="fw-bolder">Contraseña:</spam>
    </div>
    <div class="col-4">
        <div class="form-floating">
            <input type="password" name="txtContrasena" id="txtContrasena" class="form-control" placeholder=".">
            <label for="floatingInput">Contraseña</label>
        </div>
    </div>
</div>

<div class="row mt-3">
    <div class="col-2">
        <span class="fw-bolder">Direccion:</spam>
    </div>
    <div class="col-4">
        <div class="form-floating">
            <input type="text" name="txtDireccion" id="txtDireccion" class="form-control" placeholder=".">
            <label for="floatingInput">Direccion</label>
        </div>
    </div>

    <div class="col-2">
        <span class="fw-bolder">Telefono:</spam>
    </div>
    <div class="col-4">
        <div class="form-floating">
            <input type="text" name="txtTelefono" id="txtTelefono" class="form-control" placeholder=".">
            <label for="floatingInput">Telefono</label>
        </div>
    </div>
</div>

<div class="row mt-3">
    <div class="col-2">
        <span class="fw-bolder">Genero:</spam>
    </div>

    <div class="col-4">
        <div class="form-floating">
            <select name="selGenero" id="selGenero" class="form-control">
                <option value="0" selected disabled>Seleccionar</option>
                <option value="F">Femenino</option>
                <option value="M">Masculino</option>
                <option value="N/A">Prefiero no decirlo</option>
            </select>
            <label for="floatingInput">Estado</label>
        </div>
    </div>

    <div class="col-1">
        <span class="fw-bolder">Rol:</spam>
    </div>
    <div class="col-4">
        <div class="form-floating">
            <select name="selRol" id="selRol" class="form-control"></select>
            <label for="floatingInput">Rol</label>
        </div>
    </div>
</div>

<div class="row mt-5 justify-content-center">
    <div class="col-4 d-grid gap-2">
        <a onclick="create()" class="btn btn-primary">Crear</a>
    </div>
</div>


<script src="./assets/js/usuario.js"></script>
<?php include_once "footer.php"; ?>

<!-- primero se crea todo el formulario html y se crea la ruta al js
se crean las funciones en el js create, read, update y delete 
descargamos axios y agregamos el cdn o el archivo y lo viculamos
empezamos por la funcion create, haciendo la ruta al archivo del controlador usuario.create.php
se crea el objeto para traer los valores rol: selRol.value -> .then y .catch
se crea el controlador usuario.create.php y se hace el var_dump para testear que el axios este correcto 
el objeto no se puede enviar, se envia un string, se crea la variable data y la alimentamos con lo que se tenia en el objeto 
convertimos el objeto a string reemplazando las , por &
se crea la sintaxis del post en el controlador usuario.create.php= $tipoDoc = $_POST["tipoDoc"]; $identifiacion = $_POST["identificacion"]; $nombre = $_POST["nombre"];
y se crea la ruta del modelo $usuarioM = new \modelo\Usuario;
se crea el archivo usuario.php en el modelo y se incluye el archivo conexion.php
se crea el namespace modelo
se crea la clase usuario con los private del archivo controller = private $id;
se inserta el getter & setter 
se crea el constructor =  public function __construct(){ $this->conexion = new \Conexion; }
se define el metodo en seguida del constructor public function create(){}
volvemos a usuario.create.php, se retoma $usuarioM = setTipoDoc($tipoDoc); y se hace el json_encode
vamos a la funcion create del modelo y hacemos la sentencia sql, los bindparam y el execute 
luego vamos al js a la funcion select rol 
-->