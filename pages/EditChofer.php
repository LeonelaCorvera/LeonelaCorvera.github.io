
<section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Modificar Chofer</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <!-- /.box-header -->

     <div class="box-body">

      <table id="example1" action="insertarchofer.php" method="post">
              <div class="row">
                <div class="col-xs-3">
                  <label>Nombre:</label>
                  <input type="text" class="form-control" name="nombre">
                </div>
                <div class="col-xs-3">
                  <label>Apellido:</label>
                  <input type="text" class="form-control" name="apellido">
                </div>
                 <div class="col-xs-2">
                  <label>DNI:</label>
                  <input type="text" class="form-control" name="dni">
                </div>
                 <div class="col-xs-3">
                  <label>Telefono:</label>
                  <input type="text" class="form-control" name="telefono">
                </div>
            </div>
<br>
             <div class="row">
              <div class="col-xs-3">
                <div class="form-group">
                  <label>Vehiculo:</label>
                  <select class="form-control" name="tipo">
                    <option>1</option>
                  </select>
                </div>
              </div>
            </div>
            <br>
                

              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Modificar</button>
              </div>
        </table>
        <!-- /.box-body -->
       
      </div>
      <!-- /.box -->
