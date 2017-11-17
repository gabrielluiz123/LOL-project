@extends('template')
@section('content')

<h2 align="center"> Painel do Administrador</h2>
<hr>

	<ul class="nav nav-tabs">
		<li class="active"><a href="#home" data-toggle="tab"> Informações principais </a></li>
		<li><a href="#inserir" data-toggle="tab"> Inserir Partida </a></li>
	</ul>

	<div class="tab-content">
		<div class="tab-pane active" id="home">
			Pode haver os dados do último jogo inserido <br><br>
			Você está logado como: <b>Administrador 1</b><br>
			Existem "<b>100000</b>" partidas registradas <br>

		</div>
		<div class="tab-pane" id="inserir">
			  <h2><font color="blue">Time Azul</font></h2>       
			      
			  <table class="table">
			    <thead>
			      <tr>
			        <th>Campeão</th>
			        <th>Feitiço 1</th>
			        <th>Feitiço 2</th>
			        <th>Banimento</th>
			      </tr>
			    </thead>
			    <tbody>
			      <tr>
			      	<td>@include('drop_champ')</td>
			        <td>@include('drop_spell')</td>
			        <td>@include('drop_spell')</td>
			        <td>@include('drop_champ')</td>
			      </tr>
			      <tr>
			        <td>@include('drop_champ')</td>
			        <td>@include('drop_spell')</td>
			        <td>@include('drop_spell')</td>
			        <td>@include('drop_champ')</td>
			      </tr>
			      <tr>
			        <td>@include('drop_champ')</td>
			        <td>@include('drop_spell')</td>
			        <td>@include('drop_spell')</td>
			        <td>@include('drop_champ')</td>
			      </tr>
			      <tr>
			      	<td>@include('drop_champ')</td>
			        <td>@include('drop_spell')</td>
			        <td>@include('drop_spell')</td>
			        <td>@include('drop_champ')</td>
			      </tr>
			      <tr>
			      	<td>@include('drop_champ')</td>
			        <td>@include('drop_spell')</td>
			        <td>@include('drop_spell')</td>
			        <td>@include('drop_champ')</td>
			      </tr>
			    </tbody>
			  </table>
			  <hr>
			  <h2><font color="red">Time Vermelho</font></h2>    		      
			  <table class="table">
			    <thead>
			      <tr>
			        <th>Campeão</th>
			        <th>Feitiço 1</th>
			        <th>Feitiço 2</th>
			        <th>Banimento</th>
			      </tr>
			    </thead>
			    <tbody>
			      <tr>
			      	<td>@include('drop_champ')</td>
			        <td>@include('drop_spell')</td>
			        <td>@include('drop_spell')</td>
			        <td>@include('drop_champ')</td>
			      </tr>
			      <tr>
			        <td>@include('drop_champ')</td>
			        <td>@include('drop_spell')</td>
			        <td>@include('drop_spell')</td>
			        <td>@include('drop_champ')</td>
			      </tr>
			      <tr>
			        <td>@include('drop_champ')</td>
			        <td>@include('drop_spell')</td>
			        <td>@include('drop_spell')</td>
			        <td>@include('drop_champ')</td>
			      </tr>
			      <tr>
			      	<td>@include('drop_champ')</td>
			        <td>@include('drop_spell')</td>
			        <td>@include('drop_spell')</td>
			        <td>@include('drop_champ')</td>
			      </tr>
			      <tr>
			      	<td>@include('drop_champ')</td>
			        <td>@include('drop_spell')</td>
			        <td>@include('drop_spell')</td>
			        <td>@include('drop_champ')</td>
			      </tr>
			    </tbody>
			  </table>
			  <hr>
			  <h2>Eventos - Quantidades</h2>   

			   <table class="table">
			    <thead>
			      <tr>
			        <th></th>
			        <th align="center">Baron Na'Shor</th>
			        <th align="center">Dragões</th>
			        <th align="center">Torres destruídas</th>
			        <th align="center">Inibidores destruídos</th> 
			        <th align="center">Arauto do Vale</th>

			      </tr>
			    </thead>
			    <tbody>
			      <tr>
			      	<td><font color="blue">Time Azul</font></td>
			        <td align="center">@include('qutd_eventos')</td>
			        <td align="center">@include('qutd_eventos')</td>
			        <td align="center">@include('qutd_torre')</td>
			        <td align="center">@include('qutd_inib')</td>
			        <td align="center">
			        	<div class="radio">
  							<label><input type="radio" name="optradio"></label>
						</div>
					</td>

			      </tr>

			      <tr>
			      	<td><font color="red">Time Vermelho</font></td>
			        <td align="center">@include('qutd_eventos')</td>
			        <td align="center">@include('qutd_eventos')</td>
			        <td align="center">@include('qutd_torre')</td>
			        <td align="center">@include('qutd_inib')</td>
			        <td align="center">
			        	<div class="radio">
  							<label><input type="radio" name="optradio" ></label>
						</div>
					</td>
			      </tr>
			    </tbody>
			  </table>

			  <hr>

			  <h2>Eventos - Primeiros</h2> 

			  <table class="table">
			    <thead>
			      <tr>
			        <th></th>
			        <th align="center"><p align="center">Primeira Eliminação</p></th>
			        <th align="center"><p align="center">Primeira Torre</p></th>
			        <th align="center"><p align="center">Primeiro Dragão</p></th>
			        <th align="center"><p align="center">Primeiro Arauto do Vale</p></th> 
			        <th align="center"><p align="center">Primeiro Barão Na'Shor</p></th> 
			        <th align="center"><p align="center">Vencedor da Partida</p></th>
			      </tr>
			    </thead>
			    <tbody>
			      <tr>
			      	<td><font color="blue">Time Azul</font></td>
			        <td align="center">
			        	<div class="radio">
  							<label><input type="radio" name="optradio"></label>
						</div>
					</td>
					<td align="center">
			        	<div class="radio">
  							<label><input type="radio" name="optradio"></label>
						</div>
					</td>
			        <td align="center">
			        	<div class="radio">
  							<label><input type="radio" name="optradio"></label>
						</div>
					</td>
					<td align="center">
			        	<div class="radio">
  							<label><input type="radio" name="optradio"></label>
						</div>
					</td>
					<td align="center">
			        	<div class="radio">
  							<label><input type="radio" name="optradio"></label>
						</div>
					</td>
					<td align="center">
			        	<div class="radio">
  							<label><input type="radio" name="optradio"></label>
						</div>
					</td>

			      </tr>

			      <tr>
			      	<td><font color="red">Time Vermelho</font></td>
			        <td align="center">
			        	<div class="radio">
  							<label><input type="radio" name="optradio"></label>
						</div>
					</td>
					<td align="center">
			        	<div class="radio">
  							<label><input type="radio" name="optradio"></label>
						</div>
					</td>
			        <td align="center">
			        	<div class="radio">
  							<label><input type="radio" name="optradio"></label>
						</div>
					</td>
					<td align="center">
			        	<div class="radio">
  							<label><input type="radio" name="optradio"></label>
						</div>
					</td>
					<td align="center">
			        	<div class="radio">
  							<label><input type="radio" name="optradio"></label>
						</div>
					</td>
					<td align="center">
			        	<div class="radio">
  							<label><input type="radio" name="optradio"></label>
						</div>
					</td>
			      </tr>
			    </tbody>
			  </table>
			  <hr>
			  
			  <div class="form-group">
			  		<div class="row">
				  	  <div class="col-md-3">
				  	  	Tempo da partida (segundos)
					  	<input type="text" class="form-control">
					  </div>
					  </div>
			  </div>
			  <hr>
			  <button type="button" class="btn btn-outline-primary">Inserir Partida</button>
		</div>
	</div>

@stop