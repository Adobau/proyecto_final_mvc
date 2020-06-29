
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
        <form class="col s12" action="?c=<?php echo base64_encode('Usuario'); ?>&a=<?php echo base64_encode('ActualizarClave'); ?>" method="post">
        <input type="hidden"  value="<?php echo $usuario->idusuario; ?>" name="idusuario">
          <div class="row">

            <div class="input-field col s12">
            <br>
            </div>

            <div class="input-field col s6">
            <i class="material-icons prefix form-icon">vpn_key</i>
            <input id="clave1" type="password" class="validate" value="<?php echo $usuario->clave; ?>" name="clave1" required>
            <label for="clave1">Clave</label>
            </div>

            <div class="input-field col s6">
            <i class="material-icons prefix form-icon">vpn_key</i>
            <input id="clave2" type="password" class="validate" value="<?php echo $usuario->clave; ?>" name="clave2" required>
            <label for="clave2">Confirmar clave</label>
            </div>

            
            <div class="input-field col s12">
              <button class="btn waves-effect waves-light azul-ast hoverable" type="submit" name="editar" title="Editar registro">Cambiar clave
                <i class="material-icons right">send</i>
              </button>
            </div>

          </div>
        </form>
      </div>

    </div>
    
  </div>
<!-- fin del cuerpo -->