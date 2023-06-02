<?php include_once "header.php"; ?>
<div class="row my-5">
    <h1 class="text-center  ">FORMULARIO ROLES</h1>
</div>

<div class="row">
    <div class="col-3 d-flex justify-content-end align-items-center">
        <span class="fw-bolder mb-3">Nombre Rol:</span>
    </div>

    <div class="col-6">
        <div class="form-floating mb-3">
            <input type="text" id="txtRol" class="form-control" placeholder="admin">
            <label for="txtRol">Nombre rol</label>
        </div>
    </div>

    <div class="col-3 d-flex align-items-center">
        <a onclick="create()" class="btn btn-primary">Crear</a>
    </div>

</div>

<div class="row mt-5 justify-content-center ">
    <h1 class="text-white text-center bg-dark ">Tabla de roles</h1>
    <div class="col-8">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody id="tableBodyRol"></tbody>
        </table>
    </div>
</div>

<div>


    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-warning bg-gradient">
                    <h1 class="modal-title fs-5 col-10 text-center ms-4" id="updateModalLabel">Modificar Rol</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-3 d-flex justify-content-end align-items-center">
                            <span class="fw-bolder mb-3">Nombre Rol:</span>
                        </div>

                        <div class="col-8">
                            <div class="form-floating mb-3">
                                <input type="text" id="txtRolMod" name="txtRolMod" class="form-control" placeholder="admin">
                                <label for="txtRolMod">Nombre rol</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerar</button>
                    <button onclick="update()" type="button" class="btn btn-warning " data-bs-dismiss="modal">Modificar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="./assets/js/rol.js"></script>
<?php include_once "footer.php"; ?>