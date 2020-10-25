<div id="resp">
<section class="content-header">
      <h1>
        Ususarios
      </h1>

</section>

<section class="content">

      
      <div class="row">



        <div class="col-xs-12">
       

          <div class="box">

            

            <div class="box-header">
              <h3 class="box-title">Lista de usuarios</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <div class="col-xs-3">
                 <label onclick="document.getElementById('c1').submit();">
                      <input  name="c1" type="checkbox" checked data-toggle="toggle" data-on="Activos" data-off="Inactivos" data-onstyle="success" data-offstyle="danger" >
                  </label>
                </div>


              <table id="example2" class="table table-bordered table-striped">
                <thead>

                <tr>
                  <th>Usuario</th>
                  <th>Contraseña</th>
                  <th>Perfil</th>
                  <th>Cliente</th>
                  <th>Estado</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                 
                

                  <?php


                    include('listarusuarios.php');


                  ?>


                </tbody>
                <tfoot>
                <tr>
                  <th>Usuario</th>
                  <th>Contraseña</th>
                  <th>Perfil</th>
                  <th>Cliente</th>
                  <th>Estado</th>
                  <th>Acciones</th>
                </tr>
                </tfoot>
              </table>
            </div>
            
        </div>


        

          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>


      

</section>


<div class="modal fade" id="modalConfirmDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-sm modal-notify " role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
        <h4>Seguro que desea deshabilitar este usuario?</h4>
      </div>

      <!--Body-->
      <div class="modal-body">

        <i class="fa fa-trash fa-4x animated rotateIn text-red"></i>

      </div>

      <!--Footer-->
      <div class="modal-footer flex-center">
        <a href="" class="btn btn-default pull-left">Si</a>
        <a type="button" class="btn  btn-danger waves-effect" data-dismiss="modal">No</a>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>


<script>
function sendId(id){  
  
        var url = "pages/EditUsuario.php";
        $.ajax({                        
           type: "POST",                 
           url: url,                     
           data:{"id": id}, 
           success: function(data)             
           {
             $('#resp').html(data);               
           }
       });
}


</script>

</div>