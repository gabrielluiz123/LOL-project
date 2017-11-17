<html>
<head> 
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
	<title> BD2 </title>
</head>

<body>
	<div class="container">

		<div class="row"> 
			<!-- AVATAR -->
			<aside class="col-md-12">
				<div class="avatar">
					<img src="avt3.png">
				</div>
			</aside>
		</div>
			
		<div class="row"> 
			<!-- MENU -->
			<div class="col-md-12">
				<div class="row">	
					<nav class="nav-edit">
							<ul class="nav nav-justified">
								<li class="active"><a href="/"><b> HOME </b></a></li>
								<li><a href="/sobre"><b> Sobre </b></a></li>
								<li role="presentation" class="dropdown active"> 
									<a class="dropdown-toggle" data-toggle="dropdown" href="#">
										<b>Análises</b> <span class="caret"></span>
									</a>
									<ul class="dropdown-menu">
										<li><a href="relatorio_por"><b> Relatorio 1 </b></a></li>
										<li><a href="#"><b> Relatorio 2 </b></a></li>
										<li><a href="#"><b> Relatorio 3 </b></a></li>
									</ul>
								</li>
								<li><a href="/contato"> <b>Contato </b></a></li>
							</ul>
					</nav>	
				</div>	
			</div>
		</div>
				<div class="content">
					@yield("content")
				</div>
	</div>
</body>
</html>