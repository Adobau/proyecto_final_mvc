
<!-- inicio del cuerpo -->
  <div class="section no-pad-bot" id="index-banner">
    <div class="row">      
    <h2 class="center naranja-ast-text"><i class="medium material-icons">label_outline</i> Tallas de <?php echo $cliente->nombre." ".$cliente->apellido; ?></h2>
    <hr class="separador">

    </div>
  </div>
  
<div class="container">
    <div class="section">

      <!--   Data Section   -->
      <div class="row">
              <!-- tabla de activos -->
              <div class="col s12">
                <table id="tabla-activos" class="striped responsive-table highlight">
                  <thead>
                      <tr>
                          <th>Talla</th>
                          <th>Detalle</th>
                          <th class="center">Elimiar</th>
                      </tr>
                  </thead>
                  <tbody>
                  <!-- inicio del cuerpo de la tabla -->
                  <?php foreach($this->modelTallaCliente->ObtenerTallasClientes($cliente->idcliente) as $r): ?>
                      <tr>
                          <td><?php echo $r->talla; ?></td>
                          <td><?php echo $r->detalle; ?></td>
                          <td class="center">
                              <a onclick="javascript:return confirm('¿Seguro que desea eliminar este registro?');" href="?c=<?php echo base64_encode('Cliente'); ?>&a=<?php echo base64_encode('EliminarTallaCliente'); ?>&idtallacliente=<?php echo base64_encode($r->idtallacliente); ?>" title="Eliminar Talla" ><i class="material-icons red-text hoverable circle mini">delete_forever</i></a>
                          </td>
                      </tr>
                  <?php endforeach; ?>
                  <!-- fin del cuerpo de la tabla activos -->
                  </tbody>
                </table>
              </div>

            </div>

    </div>
    
  </div>
<!-- fin del cuerpo -->