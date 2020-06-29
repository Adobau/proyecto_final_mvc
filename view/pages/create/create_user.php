
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
      <div class="row form-background">
        <form class="col s12 ">
          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">person</i>
              <input id="nombres" type="text" class="validate">
              <label for="nombres">Nombres</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">person_outline</i>
              <input id="apellidos" type="text" class="validate">
              <label for="apellidos">Apellidos</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">phone</i>
              <input id="telefono" type="text" class="validate">
              <label for="telefono">Teléfono</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">mail</i>
              <input id="email" type="email" class="validate">
              <label for="email">Email</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">vpn_key</i>
              <input id="clave1" type="password" class="validate">
              <label for="clave1">Clave</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">vpn_key</i>
              <input id="clave2" type="password" class="validate">
              <label for="clave2">Confirmar clave</label>
            </div>

            <div class="input-field col s12">
              <i class="material-icons prefix form-icon">live_help</i>
              <label for="idpreguntasecreta">Pregunta secreta</label>
              <br>
            </div>
            <div class="input-field col s12">
              <select id="idpreguntasecreta" name="idpreguntasecreta" class="validate">
                <option value="1">Pregunta 1</option>
                <option value="2">Pregunta 2</option>
                <option value="3">Pregunta 3</option>
              </select>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">keyboard</i>
              <input id="respuestasecreta1" type="password" class="validate">
              <label for="respuestasecreta1">Respuesta</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">keyboard</i>
              <input id="respuestasecreta2" type="password" class="validate">
              <label for="respuestasecreta2">Confirmar respuesta</label>
            </div>

            <div class="input-field col s12">
              <i class="material-icons prefix form-icon">contacts</i>
              <label for="idtipousuario">Tipo de usuario</label>
              <br>
            </div>
            <div class="input-field col s12">
              <select id="idtipousuario" name="idtipousuario" class="validate">
                <option value="1">Tipo 1</option>
                <option value="2">Tipo 2</option>
                <option value="3">Tipo 3</option>
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