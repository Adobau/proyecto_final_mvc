
<!-- inicio del cuerpo -->
  <div class="section no-pad-bot" id="index-banner">
    <div class="row">      
    <h2 class="center naranja-ast-text"><i class="medium material-icons">account_circle</i> Editar <?php echo $usuario->apellido; ?></h2>
    <hr class="separador">

    </div>
  </div>
  
<div class="container">
    <div class="section">

      <!--   Form Section   -->
      <div class="row card form-background">
        <form class="col s12" action="?c=<?php echo base64_encode('Usuario'); ?>&a=<?php echo base64_encode('ActualizarUsuario'); ?>" method="post">
        <input type="hidden"  value="<?php echo $usuario->idusuario; ?>" name="idusuario">
          <div class="row">

            <div class="input-field col s12">
            <br>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">person</i>
              <input id="nombres" type="text" class="validate" value="<?php echo $usuario->nombre; ?>" name="nombre" required>
              <label for="nombres">Nombres</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">person_outline</i>
              <input id="apellidos" type="text" class="validate" value="<?php echo $usuario->apellido; ?>" name="apellido" required>
              <label for="apellidos">Apellidos</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">phone</i>
              <input id="telefono" type="text" class="validate" value="<?php echo $usuario->telefono; ?>" name="telefono" required>
              <label for="telefono">Teléfono</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">mail</i>
              <input id="email" type="email" class="validate" value="<?php echo $usuario->email; ?>" name="email" required>
              <label for="email">Email</label>
            </div>

            <div class="input-field col s12">
              <i class="material-icons prefix form-icon">contacts</i>
              <label for="idtipousuario">Tipo de usuario</label>
              <br>
            </div>
            <div class="input-field col s12">
              <i class="material-icons prefix form-icon">arrow_drop_down</i>
              <select id="idtipousuario" name="idtipousuario" class="validate" required> 
                <option value="<?php echo $usuario->idtipousuario; ?>"><?php echo $usuario->tipo; ?></option>             
                <?php foreach($this->modelTipoUsuario->ListarTiposUsuarios() as $r): ?>
                    <option value="<?php echo $r->idtipousuario; ?>"><?php echo $r->nombre; ?></option>
                <?php endforeach; ?>
              </select>
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