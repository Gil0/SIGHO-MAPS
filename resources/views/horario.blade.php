<!DOCTYPE html>
<html>
<head>
	<title>proyecto sitios web</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon"  href="imagenes/2.ico">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<script src="js/proyecto.js"></script>
	<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
</head>

<body>

	<form onsubmit="return false;" id="panel" class="form-horizontal">



  		<select id="carrera" class="form1">
	  		<option value="1">Carrera</option>
	  		<option value="ITI">ITI</option>
	  		<option value="ICC">ICC</option>
	  		<option value="LCC">LCC</option>

  		</select>
		&nbsp

		<input name="nombreCurso" id="materia" list="cursos" type="text" placeholder="Materia" required class="form1">
		<datalist id="cursos">
	 		<option value=""></option>
	 		<option value="Programacion"></option>
	 		<option value="Matematicas"></option>
	 		<option value="redacción"></option>
	 		<option value="Calculo"></option>
	 		<option value="circuitos electricos"></option>
	 		<option value="tecnologias web"></option>
	 		<option value="Desarrollo de sitios web"></option>
	 		<option value="Sistemas operativos"></option>
		</datalist>
		&nbsp

	 	<select id="seccion" class="form1">
			<option value="1">Sección</option>
			<option value="101">101</option>
			<option value="102">102</option>
			<option value="102">102</option>
			<option value="102">103</option>
			<option value="102">104</option>
			<option value="102">105</option>
		</select>
		&nbsp

 <select id="edificio" class="form1">
	<option value="1">Edificio</option>
	<option value="ICC01">ICC01</option>
	<option value="ICC02">ICC02</option>
	<option value="ICC03">ICC03</option>
	<option value="ICC04">ICC04</option>
	</select>
&nbsp


<select id="salon" class="form1">
		<option value="1">Salón</option>
	</select>
&nbsp

	<input name="nombreProfesor" class="form1" id="profe" list="profesor" type="text" placeholder="Profesor"  >
	<datalist id="profesor">
	<option value=""></option>
	<option value="Carlos Armando Rios Acevedo"></option>
	<option value="Mario Anzures Garcia"></option>
	<option value="Lilia Mantilla Narvaez"></option>
<option value="Juan Carlos Conde Ramirez"></option>
<option value="Maria De Lourdes Sandoval Solis"></option>

</datalist>
&nbsp


<select id="dia" class="form1">
	<option value="0">Día</option>
	<option value="1">Lunes</option>
	<option value="2">Martes</option>
	<option value="3" >Miércoles</option>
	<option value="4" >Jueves</option>
	<option value="5" >Viernes</option>
	<option value="6" >Sábado</option>

</select>
&nbsp

<select id="Inicio" class="form1">
		<option value="1">Hora Inicio</option>
		<option value="7">7:00</option>
		<option value="8">8:00</option>
		<option value="9">9:00</option>
		<option value="10">10:00</option>
		<option value="11">11:00</option>
		<option value="12">12:00</option>
		<option value="13">13:00</option>
		<option value="14">14:00</option>
		<option value="15">15:00</option>
		<option value="16">16:00</option>
		<option value="17">17:00</option>
		<option value="18">18:00</option>
		<option value="19">19:00</option>
		<option value="20">20:00</option>
	</select>
	&nbsp
	
	<select id="fin" class="form1">
		<option value="1">Hora Final</option>
	</select>
	&nbsp

	<input type="color" id="color" class="form1" >
	&nbsp
	

	<button type="submit" onclick="validar()">Agregar curso</button>
	</form>
<div id="tabla">
<table class="horario" id="horario">
	<tbody>
		<tr>
			<th scope="col">Horas</th>
			<th scope="col">Lunes</th>
			<th scope="col">Martes</th>
			<th scope="col">Miercoles</th>
			<th scope="col">Jueves</th>
			<th scope="col">Viernes</th>
			<th scope="col">Sabado</th>
			
		</tr>

		<tr>
			<td class="hora">07:00 - 07:59</td>
			<td id="lunes7"></td>
			<td id="martes7"></td> 	
			<td id="miercoles7"></td>
			<td id="jueves7"></td>
			<td id="viernes7"> </td>
			<td id="sabado7"> </td>
			
		</tr>
		<tr>
			<td class="hora">08:00 - 08:59</td>
			<td id="lunes8"></td>
			<td id="martes8"></td>
			<td id="miercoles8"></td>
			<td id="jueves8"></td>
			<td id="viernes8"></td>
			<td id="sabado8"></td>
			
		</tr>

			<tr>
				<td class="hora">09:00 - 09:59</td>
				<td id="lunes9"></td>
				<td id="martes9"></td>
				<td id="miercoles9"></td>
				<td id="jueves9"></td>
				<td id="viernes9"></td>
				<td id="sabado9"></td>
			
			</tr>

			<tr>
				<td class="hora">10:00 - 10:59</td>
				<td id="lunes10"></td>
			<td id="martes10"></td>
			<td id="miercoles10"></td>
			<td id="jueves10"></td>
			<td id="viernes10"></td>
			<td id="sabado10"></td>
				
			</tr>
			<tr>
				<td class="hora">11:00 - 11:59</td>
				<td id="lunes11"></td>
			<td id="martes11"></td>
			<td id="miercoles11"></td>
			<td id="jueves11"></td>
			<td id="viernes11"></td>
			<td id="sabado11"></td>
			
			</tr>
			
			<tr>
				<td class="hora">12:00 - 12:59</td>
				<td id="lunes12"></td>
			<td id="martes12"></td>
			<td id="miercoles12"></td>
			<td id="jueves12"></td>
			<td id="viernes12"></td>
			<td id="sabado12"></td>
			
			</tr>

			<tr>
				<td class="hora">13:00 - 13:59</td>
				<td id="lunes13"></td>
			<td id="martes13"></td>
			<td id="miercoles13"></td>
			<td id="jueves13"></td>
			<td id="viernes13"></td>
			<td id="sabado13"></td>
				
			</tr>
			<tr>
				<td class="hora">14:00 - 14:59</td>
					<td id="lunes14"></td>
			<td id="martes14"></td>
			<td id="miercoles14"></td>
			<td id="jueves14"></td>
			<td id="viernes14"></td>
			<td id="sabado14"></td>
			
			</tr>

			<tr>
				<td class="hora">15:00 - 15:59</td>
					<td id="lunes15"></td>
			<td id="martes15"></td>
			<td id="miercoles15"></td>
			<td id="jueves15"></td>
			<td id="viernes15"></td>
			<td id="sabado15"></td>
				
			</tr>

			<tr>
				<td class="hora">16:00 - 16:59</td>
				<td id="lunes16"></td>
			<td id="martes16"></td>
			<td id="miercoles16"></td>
			<td id="jueves16"></td>
			<td id="viernes16"></td>
			<td id="sabado16"></td>
				
			</tr>

			<tr>
				<td class="hora">17:00 - 17:59</td>
					<td id="lunes17"></td>
			<td id="martes17"></td>
			<td id="miercoles17"></td>
			<td id="jueves17"></td>
			<td id="viernes17"></td>
			<td id="sabado17"></td>
				
			</tr>

			<tr>
				<td class="hora">18:00 - 18:59</td>
				<td id="lunes18"></td>
			<td id="martes18"></td>
			<td id="miercoles18"></td>
			<td id="jueves18"></td>
			<td id="viernes18"></td>
			<td id="sabado18"></td>
				
			</tr>

			<tr>
				<td class="hora">19:00 - 19:59</td>
					<td id="lunes19"></td>
			<td id="martes19"></td>
			<td id="miercoles19"></td>
			<td id="jueves19"></td>
			<td id="viernes19"></td>
			<td id="sabado19"></td>
				
			</tr>

			<tr>
				<td class="hora">20:00 - 20:59</td>
					<td id="lunes20"></td>
			<td id="martes20"></td>
			<td id="miercoles20"></td>
			<td id="jueves20"></td>
			<td id="viernes20"></td>
			<td id="sabado20"></td>
				
			</tr>
				</tbody>
				</table>
				</div>
				
<script type="text/javascript">
	$(document).ready(function(){
			$("#edificio").change(function(){
				if($(this).val() == "ICC01"){
					$("#salon").html("<option>001</option><option>002</option><option>003</option><option>004</option>")
				}else if($(this).val() == "ICC02"){
					$("#salon").html("<option>205</option><option>206</option><option>207</option>")
				}else if($(this).val() == "ICC03"){
					$("#salon").html("<option>104</option><option>109</option><option>114</option>")
				}else if($(this).val() == "ICC04"){
					$("#salon").html("<option value='101'>101</option><option value='102'>102</option><option value='103'>103</option><option value='104'>104</option><option value='201'>201</option><option value='202'>202</option><option value='203'>203</option><option value='204'>204</option><option value='301'>301</option><option value='302'>302</option><option value='303'>303</option><option value='304'>304</option><option value='305'>305</option><option value='306'>306</option>")
				}
			});
		});


				$(document).ready(function(){
			$("#Inicio").change(function(){
				if($(this).val() == "7"){
					$("#fin").html("<option value='8'>8:00</option><option value='9'>9:00</option>")
				}else if($(this).val() == "8"){
					$("#fin").html("<option value='9'>9:00</option>")
				}else if($(this).val() == "9"){
					$("#fin").html("<option value='10'>10:00</option><option value='11'>11:00</option>")
				}else if($(this).val() == "10"){
					$("#fin").html("<option value='11'>11:00</option>")
				}else if($(this).val() == "11"){
					$("#fin").html("<option value='12'>12:00</option><option value='13'>13:00</option>")
				}else if($(this).val() == "12"){
					$("#fin").html("<option value='13'>13:00</option>")
				}else if($(this).val() == "13"){
					$("#fin").html("<option value='14'>14:00</option><option value='15'>15:00</option>")
				}else if($(this).val() == "14"){
					$("#fin").html("<option value='15'>15:00</option>")
				}else if($(this).val() == "15"){
					$("#fin").html("<option value='16'>16:00</option><option value='17'>17:00</option>")
				}else if($(this).val() == "16"){
					$("#fin").html("<option value='17'>17:00</option>")
				}else if($(this).val() == "17"){
					$("#fin").html("<option value='18'>18:00</option><option value='19'>19:00</option>")
				}else if($(this).val() == "18"){
					$("#fin").html("<option value='19'>19:00</option>")
				}else if($(this).val() == "19"){
					$("#fin").html("<option value='20'>20:00</option><option value='21'>21:00</option>")
				}else if($(this).val() == "20"){
					$("#fin").html("<option value='21'>21:00</option>")
				}
			});
		});
</script>
</body>
</html>