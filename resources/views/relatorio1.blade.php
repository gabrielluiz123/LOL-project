@extends('template')
@section('content')
<div class="row">
	<div class="col-md-12" align="center">
		<br><br>
		TEXTO EXPLICATIVO SOBRE O RELATORIO E NO QUE ELE IMPLICA+
	</div>
</div>

<?

?>
<ul class="nav nav-tabs">
		<li class="active"><a href="#dg" data-toggle="tab"> Dragão </a></li>
		<li><a href="#av" data-toggle="tab"> Arauto do Vale </a></li>
		<li><a href="#bn" data-toggle="tab"> Baron Na'Shor </a></li>
		<li><a href="#pl" data-toggle="tab"> Por lado </a></li>
		<li><a href="#fb" data-toggle="tab"> Primeira Eliminação </a></li>
		<li><a href="#ft" data-toggle="tab"> Primeira Torre </a></li>
	</ul>
	
	<div class="tab-content">
		<div class="tab-pane active" id="dg"> <!-- Dragão -->
			<div class="row">
				<div class="col-md-6">
				<canvas id="lineChart" height="200"></canvas>
				
				<?	
            	
				?>
				{{$count = 0}}
				{{$count2 = 0}}
	@foreach($game as $g)
		@if($g->t2_drag_kills < $g->t1_drag_kills)
			{{$count++}}
		@endif
		@if($g->t2_drag_kills > $g->t1_drag_kills)
			{{$count2++}}
		@endif
	@endforeach
				<script>

					const CHART = document.getElementById("lineChart");
					Chart.defaults.scale.ticks.beginAtZero = true;
					
						
					let barChart = new Chart(CHART, {
						type: 'doughnut',
						data: {
							labels: ['Time Azul' , 'Time Vermelho'],
							datasets: [
							{
								label: 'Points',
								backgroundColor: ['#002db3', '#e60000'],
								data: [{{$count}},{{$count2}}]

							}]
						}
					});
				</script>
			</div>
			</div>
		</div>
		<div class="tab-pane" id="av"> <!-- Arauto -->
			<div class="row">
				<div class="col-md-6">
				<canvas id="lineChart2" height="200"></canvas>
					{{$count = 0}}
					{{$count2 = 0}}
					@foreach($game as $g)
						@if($g->t2_herald_kills < $g->t1_herald_kills)
							{{$count++}}
						@endif
						@if($g->t2_herald_kills > $g->t1_herald_kills)
							{{$count2++}}
						@endif
					@endforeach
				<script>

					const CHART2 = document.getElementById("lineChart2");
					Chart.defaults.scale.ticks.beginAtZero = true;

					let barChart2 = new Chart(CHART2, {
						type: 'doughnut',
						data: {
							labels: ['Time Azul', 'Time Vermelho'],
							datasets: [
							{
								label: 'Points',
								backgroundColor: ['#002db3', '#e60000'],
								data: [{{$count}},{{$count2}}]

							}]
						}
					});
				</script>
			</div>
			</div>

		</div>
		<div class="tab-pane" id="bn"> <!-- Baron -->
			<div class="row">
				<div class="col-md-6">
				<canvas id="lineChart3" height="200"></canvas>
				{{$count = 0}}
					{{$count2 = 0}}
					@foreach($game as $g)
						@if($g->t2_baron_kills < $g->t1_baron_kills)
							{{$count++}}
						@endif
						@if($g->t2_baron_kills > $g->t1_baron_kills)
							{{$count2++}}
						@endif
					@endforeach
				<script>

					const CHART3 = document.getElementById("lineChart3");
					Chart.defaults.scale.ticks.beginAtZero = true;

					let barChart3 = new Chart(CHART3, {
						type: 'doughnut',
						data: {
							labels: ['Time Azul', 'Time Vermelho'],
							datasets: [
							{
								label: 'Points',
								backgroundColor: ['#002db3', '#e60000'],
								data: [{{$count}},{{$count2}}]

							}]
						}
					});
				</script>
			</div>
			</div>

		</div>
		<div class="tab-pane" id="pl"> <!-- Lado -->
						<div class="row">
				<div class="col-md-6">
				<canvas id="lineChart4" height="200"></canvas>
					{{$count = 0}}
					{{$count2 = 0}}
					@foreach($game as $g)
						@if($g->winner == 1)
							{{$count++}}
						@endif
						@if($g->winner == 2)
							{{$count2++}}
						@endif
					@endforeach
				<script>

					const CHART4 = document.getElementById("lineChart4");
					Chart.defaults.scale.ticks.beginAtZero = true;

					let barChart4 = new Chart(CHART4, {
						type: 'doughnut',
						data: {
							labels: ['Time Azul', 'Time Vermelho'],
							datasets: [
							{
								label: 'Points',
								backgroundColor: ['#002db3', '#e60000'],
								data: [{{$count}},{{$count2}}]

							}]
						}
					});
				</script>
			</div>
			</div>


		</div>
		<div class="tab-pane" id="fb"> <!-- First Blood -->
						<div class="row">
				<div class="col-md-6">
				<canvas id="lineChart5" height="200"></canvas>
				{{$count = 0}}
					{{$count2 = 0}}
					@foreach($game as $g)
						@if($g->winner == 1)
							@if($g->first_blood == 1)
								{{$count++}}
							@endif
						@endif
						@if($g->winner == 2)
							@if($g->first_blood == 2)
								{{$count2++}}
								}
							@endif
						@endif
					@endforeach
				<script>

					const CHART5 = document.getElementById("lineChart5");
					Chart.defaults.scale.ticks.beginAtZero = true;

					let barChart5 = new Chart(CHART5, {
						type: 'doughnut',
						data: {
							labels: ['Time Azul', 'Time Vermelho'],
							datasets: [
							{
								label: 'Points',
								backgroundColor: ['#002db3', '#e60000'],
								data: [{{$count}},{{$count2}}]

							}]
						}
					});
				</script>
			</div>
			</div>

		</div>
		<div class="tab-pane" id="ft"> <!-- First Tower -->
						<div class="row">
				<div class="col-md-6">
				<canvas id="lineChart6" height="200"></canvas>
				{{$count = 0}}
					{{$count2 = 0}}
					@foreach($game as $g)
						@if($g->winner == 1)
							@if($g->first_tower == 1)
								{{$count++}}
							@endif
						@endif
						@if($g->winner == 2)
							@if($g->first_tower == 2)
								{{$count2++}}
								}
							@endif
						@endif
					@endforeach
				<script>

					const CHART6 = document.getElementById("lineChart6");
					Chart.defaults.scale.ticks.beginAtZero = true;

					let barChart6 = new Chart(CHART6, {
						type: 'doughnut',
						data: {
							labels: ['Time Azul', 'Time Vermelho'],
							datasets: [
							{
								label: 'Points',
								backgroundColor: ['#002db3', '#e60000'],
								data: [{{$count}},{{$count2}}]

							}]
						}
					});
				</script>
			</div>
			</div>

		</div>
	</div>

@stop