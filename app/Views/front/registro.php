<!-- Registro de la web-->
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-header bg-light text-black">
                        <h2 class="mb-4 text-center ">Registro de Usuario</h2>
                    <form>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="nombre" class="form-label">Nombre/s</label>
                                <input type="text" class="form-control" placeholder="nombre/s *" id="nombre" required>
                            </div>
                            <div class="col-md-6">
                                <label for="apellido" class="form-label">Apellido/s</label>
                                <input type="text" class="form-control" placeholder="apellido/s *" id="apellido" required>
                            </div>
                        </div>
                            <div class="mb-3">
                                <label for="direccion" class="form-label">Dirección</label>
                                <input type="text" class="form-control" placeholder="dirección *" id="direccion" required>
                            </div>
                            <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="codigoPostal" class="form-label">Código Postal</label>
                                <input type="text" class="form-control" placeholder="código postal *" id="codigoPostal" required>
                            </div>
                            <div class="col-md-4">
                                <label for="telefono" class="form-label">Número de Teléfono</label>
                                <input type="tel" class="form-control" placeholder="número de teléfono *" id="telefono" required>
                            </div>
                            <div class="col-md-4">
                                <label for="email" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" placeholder="correo electrónico *" id="email" required>
                            </div>
                        </div>
                            <div class="mb-3">
                                <label for="contrasena" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" placeholder="contraseña *" id="contrasena" required>
                            </div>
                            <div class="d-flex justify-content-evenly">
                                <button type="submit" class="btn btn-success">Guardar</button>
                                <button type="reset" class="btn btn-danger">Cancelar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fin del registro-->
