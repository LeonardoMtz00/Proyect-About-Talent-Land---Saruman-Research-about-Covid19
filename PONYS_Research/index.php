<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ponys Research</title>

    <link href="css/style.css" rel="stylesheet">
	
</head>

<body style="background-color:rgb(195,219,255);;">
	
	<nav >
		<?php include("barNav.php");?>
	</nav>

	
	<main class="main">
	
		<div >
			<TR>
				
				<center> 
				
				La finalidad de esta pagina web es que con el uso de datos se pueda <span class="centered"></span> vizualizar de manera correcta el como unos simples datos guardados en algun lugar, pueden crear figuras vizuales para todos los usuarios.<br><br><br>
			
			    </center>

			</TR>

			<table id="tabla-de-datos">

				<tr>
			  
				  <td><canvas id="myChart" width="280" height="200"></canvas></td>

				  <td><canvas id="myChart_1" width="280" height="200"></canvas></td>

				</tr>
			  
			  </table>

			  <table >
			  	<span>
			  		<br><br><br><br>
			  	</span>
			  </table>


			  <table style="background-color:rgb(1,1,1);;">

			  	


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
 
    <script>


        const ctx = document.getElementById('myChart');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                datasets: [{
                    label: '# Ensayos subidos por país',
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        let url = 'http://localhost/PONYS_Research/WS/MPaises.php'
        fetch(url)
            .then( response => response.json() )
            .then( datos => mostrar(datos) )
            .catch( error => console.log(error) )


        const mostrar = (articulos) =>{
            var valor = 1;
            articulos.forEach(element => {
                if (valor == 20) {
                    myChart.data['labels'].push(element.Countries)
                    myChart.data['datasets'][0].data.push(element.cantidad)
                    myChart.update()
                    valor = 1;
                } else{

                }
                valor++;
            });
            console.log(myChart.data)
        } 

    </script>
			  	

			  </table>
			
		<div>


			  	

			  

		</div>
	
	</main> <!-- / #main-content -->

	
	
	<footer class="main-footer">
		<p>2022 &nbsp;&nbsp;&nbsp;<a href="#">PONYS GROUP</a></p>
	</footer>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>