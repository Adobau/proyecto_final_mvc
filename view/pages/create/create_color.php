
<!-- inicio del cuerpo -->
  <div class="section no-pad-bot" id="index-banner">
    <div class="row">      
    <h2 class="center naranja-ast-text"><i class="medium material-icons">color_lens</i> Registrar Color</h2>
    <hr class="separador">

    </div>
  </div>
  
<div class="container">
    <div class="section">

      <!--   Form Section   -->
      <div class="row card form-background">
        <form class="col s12" action="?c=<?php echo base64_encode('Color'); ?>&a=<?php echo base64_encode('RegistrarColor'); ?>" method="post">
          <div class="row">

            <div class="input-field col s12">
            <br>
            </div>

            <div class="input-field col s12 m8">
              <i class="material-icons prefix form-icon">format_color_fill</i>
              <input id="nombre" type="text" class="validate" name="nombre" required autofocus>
              <label for="nombre">Nombre del color</label>
            </div>
            
            <div class="input-field col s12 m2">
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