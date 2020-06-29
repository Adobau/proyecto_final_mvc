
<!-- inicio del cuerpo -->
  <div class="section no-pad-bot" id="index-banner">
    <div class="row">      
    <h2 class="center naranja-ast-text"><i class="medium material-icons">label_outline</i> Tallas de <?php echo $cliente->nombre." ".$cliente->apellido; ?></h2>
    <hr class="separador">

    </div>
  </div>
  
<div class="container">
    <div class="section">

      <!--   Form Section   -->
      <div class="row card form-background">
        <form class="col s12" action="?c=<?php echo base64_encode('Cliente'); ?>&a=<?php echo base64_encode('RegistrarTallaCliente'); ?>" method="post">
        <input type="hidden" value="<?php echo $cliente->idcliente; ?>" name="idcliente">
          <div class="row">

            <div class="input-field col s12">
            <br>
            </div>

            <div class="input-field col s12">
              <i class="material-icons prefix form-icon">label</i>
              <label for="idpreguntasecreta">Seleccionar la talla</label>
              <br>
            </div>
            <div class="input-field col s12 m6">              
            <i class="material-icons prefix form-icon">arrow_drop_down</i>
            <select id="idtalla" name="idtalla" class="validate" required>                
                <?php foreach($this->modelTalla->ListarTallasActivas() as $r): ?>
                    <option value="<?php echo $r->idtalla; ?>"><?php echo $r->nombre; ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">info</i>
              <input id="detalle" type="text" class="validate" name="detalle" required>
              <label for="detalle">Detalle</label>
            </div>
            
            <div class="input-field col s12">
              <button class="btn waves-effect waves-light azul-ast hoverable" type="submit" name="editar" title="Editar registro">guardar talla del cliente
                <i class="material-icons right">send</i>
              </button>
            </div>

          </div>
        </form>
      </div>

    </div>
    
  </div>
<!-- fin del cuerpo -->