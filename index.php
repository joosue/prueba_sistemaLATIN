<?php
    
    require('conexion.php');

    $query = "SELECT idDepa, departamento from ubdepartamento  ORDER BY departamento ASC ";
    $resultado = $mysqli->query($query);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <script language="text/javascript">
    $(document).ready(function(){
      $("#cbx_departamento").change(function(){

          //$('#cbx_provincia').find('option').remove().end().append('<option value="whatever"></option').val('whatever');

          $("#cbx_departamento option:selected").each(function (){ idDepa = $ (this).val();
                $.post("includes/getProvincia.php", {idDepa: idDepa}, function(data){
                    $("#cbx_provincia").html(data);
                });

          });

      });
    });
    </script>


	<?php include("headlatino.php");?>
</head>
<body>
	<?php
	include("navbarlatino.php");
	?>
  <form id="combo" name="combo" action="guarda.php" method="POST">

  <center>
  <div class="container ">
  <div class="panel panel-info"></div>
  <div class="row">  
  <div  class=" input-group  input-group-lg align-self-center  col-md-10   border border-dark"><h2><b>TOP LATINO TV:</b>Hoja de Datos para Operadores de Cable</h2></div>
  <div  class="col-md-10  input-group-lg  align-self-center border border-dark bg-warning text-black"><h4><b>INFORMACION GENERAL</b></h4></div>
  <!-- Razon social  -->

  <div   class="input-group input-group-lg ">   
    <div class="input-group input-group-lg col-md-10 border border-dark">
    <div class="input-group-prepend ">
    <span class="input-group-text " id="social">Razon Social :</span>
    </div>
   <input type="text" class="form-control " aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
  </div>
    </div>

    <!-- RUC  -->
    <div class="input-group input-group-lg col-md-5 border border-dark">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm">RUC:</span>
  </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
</div>

  <!-- Telf. fijo: -->
  <div class="input-group input-group-lg col-md-5 border border-dark">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-lg">Telf. fijo:</span>
  </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
  </div>

  <!-- Celular -->
  <div class="input-group input-group-lg col-md-5 border border-dark">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-lg">Celular:</span>
  </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
  </div>  

  <!-- Whatsapp -->
  <div class="input-group input-group-lg col-md-5 border border-dark">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-lg">Whatsapp:</span>
  </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
  </div>  

  <!-- EMAIL-->
  <div   class="input-group input-group-lg ">   
    <div class="input-group input-group-lg col-md-10 border border-dark">
    <div class="input-group-prepend ">
    <span class="input-group-text " id="social">Email :</span>
    </div>
   <input type="text" class="form-control " aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
  </div>
    </div>

  <!-- Direccion Legal-->
  <div   class="input-group input-group-lg ">   
    <div class="input-group input-group-lg col-md-10 border border-dark">
    <div class="input-group-prepend ">
    <span class="input-group-text " id="social">Direccion Legal :</span>
    </div>
   <input type="text" class="form-control " aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
  </div>
    </div>

    <!-- Representante Legal-->
    <div class="input-group input-group-lg col-md-7 border border-dark">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-lg">Representante:</span>
  </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
  </div>

    <!-- DNI-->
    <div class="input-group input-group-lg col-md-3 border border-dark">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-lg">DNI:</span>
  </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
  </div>

    <!-- Pagina Web-->
    <div   class="input-group input-group-lg ">   
    <div class="input-group input-group-lg col-md-10 border border-dark">
    <div class="input-group-prepend ">
    <span class="input-group-text " id="social">Pagina web :</span>
    </div>
   <input type="text" class="form-control " aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
  </div>
    </div>

    <!-- Resolucion MTC-->
    <div class="input-group input-group-lg col-md-5 border border-dark">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-lg">Resolucion MTC :</span>
  </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
  </div>

    <!-- Focha Registral Nº-->
    <div class="input-group input-group-lg col-md-5 border border-dark">
    <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-lg">Ficha Registral Nº:</span>
    </div>
    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
  </div>
  <div  class="col-md-10  input-group-lg  align-self-center border border-dark bg-info text-white"><h4><b>INFORMACION GENERAL</b></h4></div>

  <!-- Nombre comercial-->
  <div   class="input-group input-group-lg ">   
    <div class="input-group input-group-lg col-md-10 border border-dark">
    <div class="input-group-prepend ">
    <span class="input-group-text " id="social">Nombre Comercial</span>
    </div>
   <input type="text" class="form-control " aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
  </div>
    </div>

    <!-- Total de Suscriptores-->
    <div class="input-group input-group-lg col-md-5 border border-dark">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm">Total de Suscriptores:</span>
  </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
  </div>

  <!-- Total de Suscriptores-->
  <div class="input-group input-group-lg col-md-5 border border-dark">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm">Suma De Localidades:</span>
  </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
  </div>

  <!-- Separador HR-->
  <hr class="col-md-10 " align="left" noshade="noshade" size="2" width="70%" />



  <!--SELECT DE DEPARTAMENTO PROVINCIA Y DISTRITO-->

    
    <!-- SELECCIONAR DEPARTAMENTO-->
  <div class="input-group mb-4 col-md-4">
  <div class="input-group-prepend">
    <label class="input-group-text " for="inputGroupSelect01">DEPARTAMENTO</label>
  </div>
  <select class="custom-select" name="cbx_departamento" id="cbx_departamento">
    <option value="0">Seleccionar Departamento</option>
    <?php while( $row = $resultado->fetch_assoc()) { ?>
      <option value="<?php echo $row['idDepa']; ?>"><?php echo $row['departamento']; ?></option>
     <?php } ?>
  </select>
</div>
    

  
  <!-- SELECCIONAR PROVINCIA-->
<div class="input-group mb-4 col-md-3">
  <div class="input-group-prepend">
    <label class="input-group-text " for="inputGroupSelect01">PROVINCIA</label>
  </div>
  <select class="custom-select" id="cbx_provincia" name="cbx_provincia">
    <option  value="0">Seleccionar Provincia</option> 
  </select>
</div>


<!-- SELECCIONAR Distrito-->
<div class="input-group mb-4 col-md-3">
  <div class="input-group-prepend">
    <label class="input-group-text " for="inputGroupSelect01">DISTRITO</label>
  </div>
  <select class="custom-select" id="cbx_distrito" name="cbx_distrito">
    <option value="0">Selecciona Distrito</option> 
  </select>
</div>

  <table class="table col-md-10 table-hover table-dark ">
  <thead>
    <tr >
      <th scope="col">ID</th>
      <th scope="col">DEPARTAMENTO</th>
      <th scope="col">PROVINCIA</th>
      <th scope="col">DISTRITO</th>
    </tr>
  </thead>

  

  <!-- fin-->
  </div>
    </div>    
  </center></form>
	
		

</body>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>