
<!-- inicio del cuerpo -->
  <div class="section no-pad-bot" id="index-banner">
    <div class="row">      
    <h2 class="center naranja-ast-text"><i class="medium material-icons">supervisor_account</i> Editar <?php echo $cliente->apellido; ?></h2>
    <hr class="separador">

    </div>
  </div>
  
<div class="container">
    <div class="section">

      <!--   Form Section   -->
      <div class="row card form-background">
        <form class="col s12" action="?c=<?php echo base64_encode('Cliente'); ?>&a=<?php echo base64_encode('ActualizarCliente'); ?>" method="post">
        <input type="hidden"  value="<?php echo $cliente->idcliente; ?>" name="idcliente">
          <div class="row">

            <div class="input-field col s12">
            <br>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">person</i>
              <input id="nombres" type="text" class="validate" value="<?php echo $cliente->nombre; ?>" name="nombre" required>
              <label for="nombres">Nombres</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">person_outline</i>
              <input id="apellidos" type="text" class="validate" value="<?php echo $cliente->apellido; ?>" name="apellido" required>
              <label for="apellidos">Apellidos</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">phone</i>
              <input id="telefono" type="text" class="validate" value="<?php echo $cliente->telefono; ?>" name="telefono" required>
              <label for="telefono">Teléfono</label>
            </div>

            <div class="input-field col s6">
            <i class="material-icons prefix form-icon">home</i>
            <input id="direccion" type="text" class="validate" value="<?php echo $cliente->direccion; ?>" name="direccion" required>
            <label for="direccion">Dirección</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">mail</i>
              <input id="email" type="email" class="validate" value="<?php echo $cliente->email; ?>" name="email" required>
              <label for="email">Email</label>
            </div>

            <div class="input-field col s12 m2">
            <i class="material-icons prefix form-icon">wc</i>
            <label for="sexo">Sexo</label>
            </div>

            <div class="input-field col s12 m4">            
                <p>
                <label>
                    <input class="with-gap" name="sexo" type="radio" value="M" <?php echo $cliente->sexo == "M" ? "checked" : "" ?> />
                    <span>Masculino</span>
                </label>

                <label>
                    <input class="with-gap" name="sexo" type="radio" value="F"  <?php echo $cliente->sexo == "F" ? "checked" : "" ?> />
                    <span>Femenino</span>
                </label>
                </p>
            </div>

            <div class="input-field col s12 m6">
            <i class="material-icons prefix form-icon">event</i>
            <input type="text" class="datepicker" id="fechanacimiento" class="validate" name="fechanacimiento" required value="<?php echo $cliente->fechanacimiento; ?>">
            <label for="fechanacimiento">Fecha de nacimiento</label>
            </div>
            
            <div class="input-field col s12">
              <button class="btn waves-effect waves-light azul-ast hoverable" type="submit" name="editar" title="Editar registro">Editar
                <i class="material-icons right">send</i>
              </button>
            </div>

          </div>
        </form>
      </div>

    </div>
    
  </div>
<!-- fin del cuerpo -->