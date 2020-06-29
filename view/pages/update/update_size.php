
<!-- inicio del cuerpo -->
  <div class="section no-pad-bot" id="index-banner">
    <div class="row">      
    <h2 class="center naranja-ast-text"><i class="medium material-icons">style</i> Editar <?php echo $talla->nombre; ?></h2>
    <hr class="separador">

    </div>
  </div>
  
<div class="container">
    <div class="section">

      <!--   Form Section   -->
      <div class="row card form-background">
        <form class="col s12" action="?c=<?php echo base64_encode('Talla'); ?>&a=<?php echo base64_encode('ActualizarTalla'); ?>" method="post">
        <input type="hidden"  value="<?php echo $talla->idtalla; ?>" name="idtalla">
          <div class="row">

            <div class="input-field col s12">
            <br>
            </div>

            <div class="input-field col s8">
              <i class="material-icons prefix form-icon">person</i>
              <input id="nombres" type="text" class="validate" value="<?php echo $talla->nombre; ?>" name="nombre" required>
              <label for="nombres">Nombre</label>
            </div>
            
            <div class="input-field col s4">
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