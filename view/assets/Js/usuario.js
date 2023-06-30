
function create(){
    let data= `tipoDoc=${selTipoDoc.value}&identificacion=${txtIdentificacion.value}&nombre=${txtNombre.value}&apellido=${txtApellido.value}&correo=${txtCorreo.value}&password=${txtContrasena.value}&direccion=${txtDireccion.value}&telefono=${txtTelefono.value}&genero=${selGenero.value}&rol=${selRol.value}`


axios.post('../controller/usuario.create.php', data)
.then(function(response){
console.log(response);
read()
})
.catch(function(error){
console.log(error);
});
}

function read(){
axios.get("../controller/usuario.read.php")
.then(function (response){
console.log(response.data);
let table = "";
response.data.forEach((element, index) => {
    table += `<tr>`;
    table += `<th scope="row">${index + 1}</th>`;
    table += ` <td>${element.tipoDoc}</td>`;
    table += ` <td>${element.identificacion}</td>`;
    table += ` <td>${element.nombre} ${element.apellido}</td>`;
    table += ` <td>${element.correo}</td>`;
    table += ` <td>${element.nombreRol}</td>`;
    table += ` <td>
    <a onclick='readUpdate(${element.id})' class='btn btn-warning' data-bs-toggle="modal" data-bs-target="#updateModal"><i class="fa-solid fa-square-pen fa-flip"></i></a>
    <a onclick="readDelete(${element.id}, '${element.nombre}')" class='btn btn-danger'><i class="fa-solid fa-trash fa-beat" data-bs-toggle="modal" data-bs-target="#deleteModal"></i></a>
    </td>`;
    table += `<tr>`;
});
tableBodyUsuario.innerHTML = table;
})
.catch(function(error){
console.log(error);
});
}

var id;
function update(){
let data= `id=${this.id}&tipoDoc=${selTipoDocMod.value}&identificacion=${txtIdentificacionMod.value}&nombre=${txtNombreMod.value}&apellido=${txtApellidoMod.value}&correo=${txtCorreoMod.value}&genero=${selGeneroMod.value}&rol=${selRolMod.value}`
axios.post("../controller/usuario.update.php", data)
.then(function(response){
    console.log(response);
    read();
})
.catch(function(error){
    console.log(error);
});
}

update();
read();


function deletes(){
let data = `id=${this.id}`;
axios.post("../controller/usuario.delete.php", data)
.then(function(response){
    console.log(response);
})
read()
.catch(function(error){
console.log(error);
})
}

function selectRol(){

axios.get("../controller/rol.read.php")
.then(function(response){
console.log(response);
let roles = "";
response.data.forEach(element => {
    roles += `<option value="${element.id}">${element.nombreRol}</option>`;
    console.log(element.nombreRol);
});
selRol.innerHTML = roles; 
selRolMod.innerHTML = roles;
})
.catch(function(error){
console.log(error);
})
}


function readUpdate(id){
axios.get(`../controller/usuario.readUpdate.php?id=${id}`)
.then(function (response){
selTipoDocMod.value = response.data[0].tipoDoc;
txtIdentificacionMod.value = response.data[0].identificacion;
txtNombreMod.value = response.data[0].nombre;
txtApellidoMod.value = response.data[0].apellido;
txtCorreoMod.value = response.data[0].correo;
selGeneroMod.value = response.data[0].genero;
selRolMod.value = response.data[0].idRol;

this.id = response.data[0].id;
})
.catch(function (error){
console.log(error);
})
}

function readDelete(id, nombre){
this.id = id;
mensaje.innerHTML = `¿Está seguro de eliminar el usuario ${nombre} ?`
}

selectRol();
read();