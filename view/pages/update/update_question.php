
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
        <form class="col s12" action="?c=<?php echo base64_encode('Usuario'); ?>&a=<?php echo base64_encode('ActualizarPregunta'); ?>" method="post">
        <input type="hidden" value="<?php echo $usuario->idusuario; ?>" name="idusuario">
          <div class="row">
          
            <div class="input-field col s12">
            <i class="material-icons prefix form-icon">live_help</i>
            <label for="idpreguntasecreta">Pregunta secreta</label>
            <br>
            </div>
            <div class="input-field col s12">              
            <i class="material-icons prefix form-icon">arrow_drop_down</i>
            <select id="idpreguntasecreta" name="idpreguntasecreta" class="validate" required>    
                <option value="<?php echo $usuario->idpreguntasecreta; ?>"><?php echo $usuario->pregunta; ?></option>            
                <?php foreach($this->modelPreguntaSecreta->ListarPreguntasSecretas() as $r): ?>
                    <option value="<?php echo $r->idpreguntasecreta; ?>"><?php echo $r->nombre; ?></option>
                <?php endforeach; ?>
            </select>
            </div>

            <div class="input-field col s6">
            <i class="material-icons prefix form-icon">keyboard</i>
            <input id="respuestasecreta1" type="password" class="validate" name="respuestasecreta1" required value="<?php echo $usuario->respuestasecreta; ?>">
            <label for="respuestasecreta1">Respuesta</label>
            </div>

            <div class="input-field col s6">
            <i class="material-icons prefix form-icon">keyboard</i>
            <input id="respuestasecreta2" type="password" class="validate" name="respuestasecreta2" required value="<?php echo $usuario->respuestasecreta; ?>">
            <label for="respuestasecreta2">Confirmar respuesta</label>
            </div>

            
            <div class="input-field col s12">
              <button class="btn waves-effect waves-light azul-ast hoverable" type="submit" name="editar" title="Editar registro">Cambiar pregunta secreta
                <i class="material-icons right">send</i>
              </button>
            </div>

          </div>
        </form>
      </div>

    </div>
    
  </div>
<!-- fin del cuerpo -->