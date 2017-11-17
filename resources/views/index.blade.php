@extends('template')
@section('content')
 	<h2 align=center>TABELA 1 - NÚMERO DE JOGOS/MÊS</h2>
	 	<div class="row">
		 	<div class="col-md-6">
		 			<h3 align="center">TITULO</h3>
		 			<p align="center">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
		 	</div>
		 	<div class="col-md-6">
				<canvas class="line-chart"></canvas>
				<script>
					var ctx = document.getElementsByClassName("line-chart");

					var chartGraph = new Chart(ctx,{
						type:'line',
						data: {
							labels: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun"],
							datasets: [{
								label: "Número de Jogos 2017",
								data:[1,1,3,4,8,3],
								borderWidth: 5,
								borderColor: 'rgba(150, 0, 0, 0.85)',
								backgroundColor: 'transparent',
							},
							{
								label: "Número de Jogos 2017",
								data:[3,4,3,4,3,4],
								borderWidth: 5,
								borderColor: 'rgba(0,150, 0, 0.85)',
								backgroundColor: 'transparent',
							},
							{
								label: "Número de Jogos 2017",
								data:[5,6,3,2,4,2],
								borderWidth: 5,
								borderColor: 'rgba(0, 0, 150, 0.85)',
								backgroundColor: 'transparent',
							},
							]	
						},
						options: {
							title:{
								display:true,
								fontSize:20,
								text:" Gráfico de Relatório"
							},
							labels:{
								fontStyle: "bold"
							}
						}
					});
				</script>
			</div>
		</div>
		<hr>
		<div class="row">
		 	<div class="col-md-6">
		 			<h3 align="center">TITULO</h3>
		 			<p align="center">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
		 	</div>
		 	<div class="col-md-6">
				<canvas class="line-chart"></canvas>
				<script>
					var ctx = document.getElementsByClassName("line-chart");

					var chartGraph = new Chart(ctx,{
						type:'line',
						data: {
							labels: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun"],
							datasets: [{
								label: "Número de Jogos 2017",
								data:[1,1,3,4,8,3],
								borderWidth: 5,
								borderColor: 'rgba(150, 0, 0, 0.85)',
								backgroundColor: 'transparent',
							},
							{
								label: "Número de Jogos 2017",
								data:[3,4,3,4,3,4],
								borderWidth: 5,
								borderColor: 'rgba(0,150, 0, 0.85)',
								backgroundColor: 'transparent',
							},
							{
								label: "Número de Jogos 2017",
								data:[5,6,3,2,4,2],
								borderWidth: 5,
								borderColor: 'rgba(0, 0, 150, 0.85)',
								backgroundColor: 'transparent',
							},
							]	
						},
						options: {
							title:{
								display:true,
								fontSize:20,
								text:" Gráfico de Relatório"
							},
							labels:{
								fontStyle: "bold"
							}
						}
					});
				</script>
			</div>
		</div>
@stop