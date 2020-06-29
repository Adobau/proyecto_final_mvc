
<!-- inicio del cuerpo -->
  <div class="section no-pad-bot" id="index-banner">
    <div class="row">      
    <h2 class="center naranja-ast-text"><i class="medium material-icons">account_circle</i> Registrar Usuarios</h2>
    <hr class="separador">

    </div>
  </div>
  
<div class="container">
    <div class="section">

      <!--   Form Section   -->
      <div class="row card form-background">
        <form class="col s12" action="?c=<?php echo base64_encode('Usuario'); ?>&a=<?php echo base64_encode('RegistrarUsuario'); ?>" method="post">
        <div class="row">

            <div class="input-field col s12">
            <br>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">person</i>
              <input id="nombre" type="text" class="validate" name="nombre" required autofocus>
              <label for="nombre">Nombres</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">person_outline</i>
              <input id="apellido" type="text" class="validate" name="apellido" required>
              <label for="apellido">Apellidos</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">phone</i>
              <input id="telefono" type="text" class="validate" name="telefono" required>
              <label for="telefono">Teléfono</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">mail</i>
              <input id="email" type="email" class="validate" name="email" required>
              <label for="email">Email</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">vpn_key</i>
              <input id="clave1" type="password" class="validate" name="clave1" required>
              <label for="clave1">Clave</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">vpn_key</i>
              <input id="clave2" type="password" class="validate" name="clave2" required>
              <label for="clave2">Confirmar clave</label>
            </div>

            <div class="input-field col s12">
              <i class="material-icons prefix form-icon">live_help</i>
              <label for="idpreguntasecreta">Pregunta secreta</label>
              <br>
            </div>
            <div class="input-field col s12">              
            <i class="material-icons prefix form-icon">arrow_drop_down</i>
            <select id="idpreguntasecreta" name="idpreguntasecreta" class="validate" required>                
                <?php foreach($this->modelPreguntaSecreta->ListarPreguntasSecretas() as $r): ?>
                    <option value="<?php echo $r->idpreguntasecreta; ?>"><?php echo $r->nombre; ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">keyboard</i>
              <input id="respuestasecreta1" type="password" class="validate" name="respuestasecreta1" required>
              <label for="respuestasecreta1">Respuesta</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">keyboard</i>
              <input id="respuestasecreta2" type="password" class="validate" name="respuestasecreta2" required>
              <label for="respuestasecreta2">Confirmar respuesta</label>
            </div>

            <div class="input-field col s12">
              <i class="material-icons prefix form-icon">contacts</i>
              <label for="idtipousuario">Tipo de usuario</label>
              <br>
            </div>
            <div class="input-field col s12">              
            <i class="material-icons prefix form-icon">arrow_drop_down</i>
            <select id="idtipousuario" name="idtipousuario" class="validate" required>              
                <?php foreach($this->modelTipoUsuario->ListarTiposUsuarios() as $r): ?>
                    <option value="<?php echo $r->idtipousuario; ?>"><?php echo $r->nombre; ?></option>
                <?php endforeach; ?>
              </select>
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