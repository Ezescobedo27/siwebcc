<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>SIWEBCC | Prestamos de equipos de computo</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <link href="img/favicon.ico" rel="icon">


    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

>
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <link href="css/style.min.css" rel="stylesheet">
</head>     


<body>
<?php 
include("./admin/bd.php"); // We need to add the db

if(isset($_GET['txtID'])){ // If the key 'txtID' exists in the $_GET array
    $sentencia=$conexion->prepare("DELETE FROM `tbl_historial_prestamos` WHERE ID=:ID"); // Prepare the query
    $sentencia->bindParam(':ID', $_GET['txtID']);
    $sentencia->execute();
}
 $sentencia=$conexion->prepare("SELECT * FROM `tbl_historial_prestamos`");
 $sentencia->execute();
    $lista_servicios=$sentencia->fetchAll(PDO::FETCH_ASSOC); // We need to fetch the data
     
    include("../../templates/header.php");
?>
     <!-- Navbar Start -->
     <?php include("./templates/header.php");
?>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="mb-5 container-fluid page-header position-relative overlay-bottom">
        <div class="pt-0 d-flex flex-column align-items-center justify-content-center pt-lg-5" style="min-height: 400px">
            <h1 class="mt-0 mb-3 text-white display-4 mt-lg-5 text-uppercase">Prestamos</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="">Home</a></p>
                <p class="px-2 m-0 text-white">/</p>
                <p class="m-0 text-white">Services</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Prestamos Start -->
    
<div class="card">
    <div class="card-header">
    <a
        name=""
        id=""
        class="btn btn-primary"
        href="prestamos-crear.php"
        role="button"
        >Agregar registro</a
    >
        
    </div>
    <div class="card-body">
    <div
        class="table-responsive-sm"
    >
        <table
            class="table"
        > 
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Asunto</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Fecha  Creación</th>
                </tr>
            </thead>
            <tbody>
                <!-- Go through all records -->
                <?php foreach($lista_servicios as $registro) {?>
                    <tr class="">
                    <td><?php echo $registro['ID'] ?></td>
                    <td><?php echo $registro['s_asunto'] ?></td>
                    <td><?php echo $registro['s_descripcion'] ?></td>
                    <td><?php echo $registro['d_fecha_creacion'] ?></td>
                    <td>
           
                        
                    </td>
                </tr>
             
               <?php } ?>
              
            </tbody>
        </table>
    </div>
    
    </div>
</div>
    <!-- Prestamos End -->


    <!-- Footer Start -->
    <?php include("./templates/footer.php");?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>