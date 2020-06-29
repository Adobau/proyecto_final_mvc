
<!-- inicio del cuerpo -->
  <div class="section no-pad-bot" id="index-banner">
    <div class="row">      
    <h2 class="center naranja-ast-text"><i class="medium material-icons">supervisor_account</i> Clientes Registrados</h2>
    <hr class="separador">
      <div class="row right-align">
        <a href="?c=<?php echo base64_encode('Cliente'); ?>&a=<?php echo base64_encode('CrearCliente'); ?>" class="waves-effect waves-light btn gris-ast"><i class="material-icons left">add_circle</i>Nuevo</a>      
        <a href="?c=<?php echo base64_encode('Pdf'); ?>&a=<?php echo base64_encode('ClienteActivo'); ?>" class="waves-effect waves-light btn azul-ast"><i class="material-icons left">description</i>PDF</a>&nbsp;&nbsp;&nbsp;&nbsp;
      
      </div>

    </div>
  </div>
  
<div class="row">
    <div class="section">

      <!--   Data Section   -->
            <div class="row">
              <div class="col s12">
                <ul class="tabs">
                  <li class="tab col s3"><a class="active tab-activos" href="#activos">Activos</a></li>
                  <li class="tab col s3"><a class="tab-inactivos" href="#inactivos">Inactivos</a></li>
                </ul>
              </div>
              <!-- tabla de activos -->
              <div id="activos" class="col s12">
                <table id="tabla-activos" class="striped responsive-table highlight">
                  <thead>
                      <tr>
                          <th>Id</th>
                          <th>Nombre</th>
                          <th>Apellido</th>
                          <th>Teléfono</th>
                          <th>Dirección</th>
                          <th>Email</th>
                          <th class="center">Sexo</th>
                          <th class="center">Edad</th>
                          <th class="center">Colores</th>
                          <th class="center">Tallas</th>
                          <th>Registrado por</th>
                          <th class="center">Editar</th>
                          <th class="center">Desactivar</th>
                      </tr>
                  </thead>
                  <tbody>
                    <!-- inicio del cuerpo de la tabla activos -->
                    <?php foreach($this->model->ListarClientesActivos() as $r): ?>
                        <tr>
                            <td><?php echo $r->idcliente; ?></td>
                            <td><?php echo $r->nombre; ?></td>
                            <td><?php echo $r->apellido; ?></td>
                            <td><?php echo $r->telefono; ?></td>
                            <td><?php echo $r->direccion; ?></td>
                            <td><?php echo $r->email; ?></td>
                            <td class="center"><?php echo $r->sexo; ?></td>
                            <td class="center"><?php echo $r->edad; ?></td>
                            <td class="center">
                                <a href="?c=<?php echo base64_encode('Cliente'); ?>&a=<?php echo base64_encode('ColorFavorito'); ?>&idcliente=<?php echo base64_encode($r->idcliente); ?>" title="Agregar color favorito" ><i class="mini material-icons naranja-ast-text hoverable circle ">color_lens</i></a>
                                
                                <a href="?c=<?php echo base64_encode('Cliente'); ?>&a=<?php echo base64_encode('VerColorFavorito'); ?>&idcliente=<?php echo base64_encode($r->idcliente); ?>" title="Ver colores favoritos" ><i class="mini material-icons gris-ast-text hoverable circle ">content_paste</i></a>
                            </td>
                            <td class="center">
                                <a href="?c=<?php echo base64_encode('Cliente'); ?>&a=<?php echo base64_encode('TallaCliente'); ?>&idcliente=<?php echo base64_encode($r->idcliente); ?>" title="Agregar tallas"><i class="mini material-icons azul-ast-text hoverable circle ">style</i></a>
                                
                                <a href="?c=<?php echo base64_encode('Cliente'); ?>&a=<?php echo base64_encode('VerTallaCliente'); ?>&idcliente=<?php echo base64_encode($r->idcliente); ?>" title="Ver tallas" ><i class="mini material-icons gris-ast-text hoverable circle ">content_paste</i></a>
                            </td>
                            <td><?php echo $r->registradopor; ?></td>
                            <td class="center">
                                <a href="?c=<?php echo base64_encode('Cliente'); ?>&a=<?php echo base64_encode('EditarCliente'); ?>&idcliente=<?php echo base64_encode($r->idcliente); ?>" title="Editar Registro" ><i class="mini material-icons azul-ast-text hoverable circle ">edit</i></a>
                            </td>
                            <td class="center">
                                <a onclick="javascript:return confirm('¿Seguro que desea desactivar este registro?');" href="?c=<?php echo base64_encode('Cliente'); ?>&a=<?php echo base64_encode('CambiarEstado'); ?>&nuevo_estado=<?php echo base64_encode('0'); ?>&idcliente=<?php echo base64_encode($r->idcliente); ?>" title="Desactivar Registro" ><i class="material-icons red-text hoverable circle mini">cancel</i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <!-- fin del cuerpo de la tabla activos -->
                  </tbody>
                </table>
              </div>
              
              <!-- tabla de inactivos -->
              <div id="inactivos" class="col s12">
                <table id="tabla-inactivos" class="striped responsive-table highlight">
                  <thead>
                      <tr>
                          <th>Id</th>
                          <th>Nombre</th>
                          <th>Apellido</th>
                          <th>Teléfono</th>
                          <th>Dirección</th>
                          <th>Email</th>
                          <th class="center">Sexo</th>
                          <th class="center">Edad</th>
                          <th>Registrado por</th>
                          <th class="center">Activar</th>
                      </tr>
                  </thead>
                  <tbody>                  
                    <!-- inicio del cuerpo de la tabla inactivos -->
                    <?php foreach($this->model->ListarClientesInactivos() as $r): ?>
                        <tr>
                            <td><?php echo $r->idcliente; ?></td>
                            <td><?php echo $r->nombre; ?></td>
                            <td><?php echo $r->apellido; ?></td>
                            <td><?php echo $r->telefono; ?></td>
                            <td><?php echo $r->direccion; ?></td>
                            <td><?php echo $r->email; ?></td>
                            <td class="center"><?php echo $r->sexo; ?></td>
                            <td class="center"><?php echo $r->edad; ?></td>
                            <td><?php echo $r->registradopor; ?></td>
                            <td class="center">
                                <a onclick="javascript:return confirm('¿Seguro que desea desactivar este registro?');" href="?c=<?php echo base64_encode('Cliente'); ?>&a=<?php echo base64_encode('CambiarEstado'); ?>&nuevo_estado=<?php echo base64_encode('1'); ?>&idcliente=<?php echo base64_encode($r->idcliente); ?>" title="Desactivar Registro" ><i class="material-icons green-text hoverable circle mini">check_circle</i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <!-- fin del cuerpo de la tabla inactivos -->
                  </tbody>
                </table>
              </div>
            </div>

    </div>
    
  </div>
<!-- fin del cuerpo -->