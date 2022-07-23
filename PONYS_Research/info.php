<?php
include("conexion.php");
$idE = $_GET['id'];
?> 

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        if (isset($idE)){
            echo '
            <title>Ensayo - '.$idE.'</title>
            ';
        }else{
            echo '
            <title>Info</title>
            ';
        }
        
    ?>

<link href="css/info.css" rel="stylesheet">

</head>
<body>
    <nav >
		<?php include("barNav.php");?>
	</nav>

    <div id="map">

	</div>

    <main class="main">

        <?php
            $miConsulta = "SELECT * FROM trials WHERE TrialID='$idE'";
                    
            $sql = mysqli_query($con, $miConsulta);
        
            if(mysqli_num_rows($sql) == 0){
                echo '<h1>No hay datos.</h1>';
            }else{
                
                
                while($row = mysqli_fetch_assoc($sql)){
                    $direc = $row['Contact_Address'];
                    echo '
                    <p><b>Id. de prueba: </b>'.$row['TrialID'].'<br><br>
                    <b>Última actualización el: </b>'.$row['Last_Refreshed_on'].'<br><br>
                    <b> Título público: </b>'.$row['Public_title'].'<br><br>
                    <b> Título científico: </b>'.$row['Scientific_title'].'<br><br>
                    <b> Acrónimo: </b>'.$row['Acronym'].'<br><br>
                    <b> patrocinador principal: </b>'.$row['Primary_sponsor'].'<br><br>
                    <b> Registro de fecha: </b>'.$row['Date_registration'].'<br><br>
                    <b> Fecha de registro3: </b>'.$row['Date_registration3'].'<br><br>
                    <b> Fecha de exportación: </b>'.$row['Export_date'].'<br><br>
                    <b> Registro de fuente: </b>'.$row['Source_Register'].'<br><br>
                    <b> dirección web: </b>'.$row['web_address'].'<br><br>
                    <b> Estado de reclutamiento: </b>'.$row['Recruitment_Status'].'<br><br>
                    <b> Otros registros: </b>'.$row['other_records'].'<br><br>
                    <b> Edad minima de inclusión: </b>'.$row['Inclusion_agemin'].'<br><br>
                    <b> Edad máxima de inclusión: </b>'.$row['Inclusion_agemax'].'<br><br>
                    <b> Género de inclusión: </b>'.$row['Inclusion_gender'].'<br><br>
                    <b> Fecha de inscripción: </b>'.$row['Date_enrollement'].'<br><br>
                    <b> Tamaño objetivo: </b>'.$row['Target_size'].'<br><br>
                    <b> Tipo de estudio: </b>'.$row['Study_type'].'<br><br>
                    <b> Diseño del estudio: </b>'.$row['Study_design'].'<br><br>
                    <b> Fase: </b>'.$row['Phase_c'].'<br><br>
                    <b> Países:</b> '.$row['Countries'].'<br><br>
                    <b> Nombre de contacto: </b>'.$row['Contact_Firstname'].'<br><br>
                    <b> Apellido de contacto: </b>'.$row['Contact_Lastname'].'<br><br>
                    <b> dirección de contacto: </b>'.$row['Contact_Address'].'<br><br>
                    <b> Email de contacto: </b>'.$row['Contact_Email'].'<br><br>
                    <b> Teléfono de contacto: </b>'.$row['Contact_Tel'].'<br><br>
                    <b> Contacto Afiliación: </b>'.$row['Contact_Affiliation'].'<br><br>
                    <b> Criterios de inclusión: </b>'.$row['Inclusion_Criteria'].'<br><br>
                    <b> Criterio de exclusión: </b>'.$row['Exclusion_Criteria'].'<br><br>
                    <b> Condición: </b>'.$row['Condition'].'<br><br>
                    <b> Intervención: </b>'.$row['Intervention'].'<br><br>
                    <b> Resultado primario: </b>'.$row['Primary_outcome'].'<br><br>
                    <b> fecha de publicación de los resultados: </b>'.$row['results_date_posted'].'<br><br>
                    <b> resultados fecha completada: </b>'.$row['results_date_completed'].'<br><br>
                    <b> enlace URL de resultados: </b>'.$row['results_url_link'].'<br><br>
                    <b> Bandera retrospectiva: </b>'.$row['Retrospective_flag'].'<br><br>
                    <b> Bandera puente verdader o falso: </b>'.$row['Bridging_flag_truefalse'].'<br><br>
                    <b> tipo puente: </b>'.$row['Bridged_type'].'<br><br>
                    <b> resultados si o no: </b>'.$row['results_yes_no'].'<br><br>
                    </p>
                    ';
                }
            }
        ?>
	
		
	
	</main>

    <footer class="main-footer">
		<p>2022 &nbsp;&nbsp;&nbsp;<a href="#">PONYS GROUP</a></p>
	</footer>
    
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="js/mapa.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDai40lvZ3-D0bC2Y_VZ8kP_d2OaYwlKQA&callback=iniciarMap"></script>
    
</body>
</html>