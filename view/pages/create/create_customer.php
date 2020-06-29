
<!-- inicio del cuerpo -->
  <div class="section no-pad-bot" id="index-banner">
    <div class="row">      
    <h2 class="center naranja-ast-text"><i class="medium material-icons">supervisor_account</i> Registrar Cliente</h2>
    <hr class="separador">

    </div>
  </div>
  
<div class="container">
    <div class="section">

      <!--   Form Section   -->
      <div class="row card form-background">
        <form class="col s12" action="?c=<?php echo base64_encode('Cliente'); ?>&a=<?php echo base64_encode('RegistrarCliente'); ?>" method="post">
        <div class="row">

            <div class="input-field col s12">
            <br>
            </div>

            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">person</i>
              <input id="nombre" type="text" class="validate" name="nombre" required autofocus>
              <label for="nombre">Nombres</label>
            </div>

            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">person_outline</i>
              <input id="apellido" type="text" class="validate" name="apellido" required>
              <label for="apellido">Apellidos</label>
            </div>

            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">phone</i>
              <input id="telefono" type="text" class="validate" name="telefono" required>
              <label for="telefono">Teléfono</label>
            </div>

            <div class="input-field col s12 m6">
            <i class="material-icons prefix form-icon">home</i>
            <input id="direccion" type="text" class="validate" name="direccion" required>
            <label for="direccion">Dirección</label>
            </div>

            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">mail</i>
              <input id="email" type="email" class="validate" name="email" required>
              <label for="email">Email</label>
            </div>

            <div class="input-field col s12 m2">
              <i class="material-icons prefix form-icon">wc</i>
              <label for="sexo">Sexo</label>
            </div>

            <div class="input-field col s12 m4">            
                <p>
                <label>
                    <input class="with-gap" name="sexo" type="radio" value="M" checked />
                    <span>Masculino</span>
                </label>

                <label>
                    <input class="with-gap" name="sexo" type="radio" value="F" />
                    <span>Femenino</span>
                </label>
                </p>
            </div>

            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">event</i>
              <input type="text" class="datepicker" id="fechanacimiento" class="validate" name="fechanacimiento" required>
              <label for="fechanacimiento">Fecha de nacimiento</label>
            </div>
            
            <div class="input-field col s12">
              <button class="btn waves-effect waves-light azul-ast hoverable" type="submit" name="guardar" title="Guardar registro">Guardar
                <i class="material-icons right">send</i>
              </button>
            </div>

          </div>
        </form>
      </div>

    </div>
    
  </div>
<!-- fin del cuerpo -->