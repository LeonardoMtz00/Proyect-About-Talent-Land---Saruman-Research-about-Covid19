<?php
include("conexion.php");
?> 

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ensayos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="css/tabEnsayos.css" rel="stylesheet">
</head>
<body>
    <nav >
		<?php include("barNav.php");?>
	</nav>

    <table class="table table-striped table-hover"><?php 
    $miConsulta = "SELECT * FROM trials";
                    
    $sql = mysqli_query($con, $miConsulta);

    if(mysqli_num_rows($sql) == 0){
        echo '<tr><td colspan="8">No hay datos.</td></tr>';
    }else{
        
        echo '
            <tr> 
                <td><b>No.</b></td>
                <td><b>Nombre Púbico</b></td>
            </tr>';

        $no = 1;
        while($row = mysqli_fetch_assoc($sql)){
            
            echo '
            <tr> 
                <td><b>'.$no.'</b></td>
                <td><a href="info.php?id='.$row['TrialID'].'"> '.$row['Public_title'].'</a></td>
            </tr>';
            
            $no++;
        }
    }
    ?>
    </table>

    <footer class="main-footer">
		<p>2022 &nbsp;&nbsp;&nbsp;<a href="#">PONYS GROUP</a></p>
	</footer>
</body>
</html>