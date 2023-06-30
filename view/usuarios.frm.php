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
            </select>
            <label for="floatingInput">Genero</label>
        </div>
    </div>

    <div class="col-2">
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

<div class="row mt-5 d-flex justify-content-center">
    <h1 class="bg-dark py-1 text-center text-white">Tabla de usuarios</h1>
    <div class="col-10">
        <table class="table" id="tableUsuario">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tipo Doc</th>
                    <th scope="col">Ident.</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">correo</th>
                    <th scope="col">Rol</th>
                </tr>
            </thead>
            <tbody id="tableBodyUsuario"></tbody>
        </table>
    </div>
</div>


<!-- Modal Modificar -->
<div>
    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header bg-gradient bg-warning">
                    <h5 class="modal-title col-11 text-center ms-4 fs-5" id="updateModalLabel">Modificar Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">


                    <div class="row">
                        <div class="col-2">
                            <span class="fw-bolder">Tipo Doc:</spam>
                        </div>

                        <div class="col-4">
                            <div class="form-floating">
                                <select name="selTipoDocMod" id="selTipoDocMod" class="form-control">
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
                                <input type="number" name="txtIdentificacionMod" id="txtIdentificacionMod"
                                    class="form-control" placeholder=".">
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
                                <input type="text" name="txtNombreMod" id="txtNombreMod" class="form-control"
                                    placeholder=".">
                                <label for="floatingInput">Nombre</label>
                            </div>
                        </div>

                        <div class="col-2">
                            <span class="fw-bolder">Apellido:</spam>
                        </div>
                        <div class="col-4">
                            <div class="form-floating">
                                <input type="text" name="txtApellidoMod" id="txtApellidoMod" class="form-control"
                                    placeholder=".">
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
                                <input type="email" name="txtCorreoMod" id="txtCorreoMod" class="form-control"
                                    placeholder=".">
                                <label for="floatingInput">Correo</label>
                            </div>
                        </div>
                        <div class="col-2">
                            <span class="fw-bolder">Genero:</spam>
                        </div>

                        <div class="col-4">
                            <div class="form-floating">
                                <select name="selGeneroMod" id="selGeneroMod" class="form-control">
                                    <option value="0" selected disabled>Seleccionar</option>
                                    <option value="F">Femenino</option>
                                    <option value="M">Masculino</option>
                                </select>
                                <label for="floatingInput">Genero</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">

                        <div class="col-2">
                            <span class="fw-bolder">Rol:</spam>
                        </div>
                        <div class="col-4">
                            <div class="form-floating">
                                <select name="selRolMod" id="selRolMod" class="form-control"></select>
                                <label for="floatingInput">Rol</label>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button onclick="update()" type="button" class="btn btn-warning" data-bs-dismiss="modal">Modificar</button>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Modal Eliminar-->
<div>
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header bg-danger bg-gradient">
                    <h1 class="modal-title col-11 text-center ms-4 fs-5" id="deleteModalLabel" >Eliminar</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="mensaje"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button onclick="deletes()" type="button" class="btn btn-danger" data-bs-dismiss="modal">Eliminar</button>
                </div>
            </div>
        </div>
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

se crea un row en el formulario para hacer la tabla de los usuarios
copiamos del bootstrap la tabla
vamos a la funcion read en JS para hacer: 
axios.get("../controller/usuario.read.php")
.then(function (response){
console.log(response);
})
.catch(function(error){
console.log(error);
});
vamos al controlador a crear el archivo usuario.read.php 
vamos al modelo y creamos la funcion public function read()


vamos a la funcion read en js y alimentamos la tabla dinamicamente 
y ya se muestran 
luego se crean los botones de modificar y eliminar en el js
copiamos de bootstrap los modales para modificar y eliminar y los pegamos en este frm
se ponen los id del modal en el js 
agregamos los campos del frm al body del modal

agregamos el onclick al modal modificar 
y creamos la funcion readUpdate en el usuario.js

creamos el controlador usuaruo.readUpdate.php y todo su codigo

vamos al modelo usuario.php y creamos la funcion readUpdate con la consulta sql 
ya nos muestra por consola 

y en la funcion readUpdate empezamos a insertar los valores con las lineas: 
selTipoDocMod.selected = response.data[0].tipoDoc;
se crea una vista en workbench para actualizar la tabla y que aparezca el nombre del rol 
se llama la vista en la funcion read 
creamos una variable global var id y la alimentamos debajo de readUpdate 

asignamos la funcion update al boton de modificar y creamos la funcion update  

creamos el controlador, usuarios.update.php
volvemos al modelo usuario.php a crear la public function update 

vamos para el de eliminar
creamos la funcion readDelete para imprimir el texto de eliminar interactivo y se pasan los parametros en el boton de eliminar

en la funcion deletes hacemos el post al controller 
se crea el controlador usuario.delete.php
se crea la funcion delete en el modelo con la sentencia sql

se crea el archivo admin .php en view, se hace la interfaz
se linkea el script login.js y se crea la function login
se crea el controlador login.create.php y se escribe 

y se hacen estas lineas:
if(isset($response) AND !empty($response)){
$_SESSION["nombre"] = $response[0]["nombre"];
$_SESSION[""];
}

-->