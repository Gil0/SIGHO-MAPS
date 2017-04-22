function graficar(){ 
			
				var carrera=document.getElementById("carrera").value;
				var materia= document.getElementById("materia").value;
				var edificio=document.getElementById("edificio").value;
				var salon=document.getElementById("salon").value;
				var profesor=document.getElementById("profe").value;
				var dia= document.getElementById("dia").value;
				var inicio=document.getElementById("Inicio").value;
				var fin= document.getElementById("fin").value;
				var color=document.getElementById("color").value;
				var o= document.getElementById("lunes7").value;
					
	// Grafica lunes -------------------------------------------------------------------------------------------------------------------------				
				if(dia==1 && inicio==7 && fin==8 &&edificio!="-1"){
				var td = document.getElementById("lunes7");
				td.setAttribute("style", "background-color:"+color+";");
				document.getElementById("lunes7").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: " + edificio +"<br/>" +"Salón: " + salon;
				
	 				}

	 			if(dia==1 && inicio==7 && fin==9){
	 			var td = document.getElementById("lunes7");
	 			var td2 = document.getElementById("lunes8");
				td.setAttribute("style", "background-color:"+color+";");
				td2.setAttribute("style", "background-color:"+color+";");
				document.getElementById("lunes7").innerHTML= materia+ "<br/>" +profesor+ "<br/>" + "Edificio: " +edificio +"<br/>" + "Salón: " +salon;
				document.getElementById("lunes8").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: " + edificio +"<br/>" +"Salón: " + salon;
	 				} 

	 			if(dia==1 && inicio==8 && fin==9){	 		
				var td = document.getElementById("lunes8");
				td.setAttribute("style", "background-color:"+color+";");
				document.getElementById("lunes8").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: " + edificio +"<br/>" +"Salón: " + salon;
	 			}  	

	 			
	 			if(dia==1 && inicio==9 && fin==10){
	 			var td = document.getElementById("lunes9");
				td.setAttribute("style", "background-color:"+color+";");
				document.getElementById("lunes9").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: " + edificio +"<br/>" +"Salón: " + salon;
	 			} 


	 			if(dia==1 && inicio==9 && fin==11){
				var td = document.getElementById("lunes9");
	 			var td2 = document.getElementById("lunes10");
				td.setAttribute("style", "background-color:"+color+";");
				td2.setAttribute("style", "background-color:"+color+";");
				document.getElementById("lunes9").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: " + edificio +"<br/>" +"Salón: " + salon;
				document.getElementById("lunes10").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: " + edificio +"<br/>" +"Salón: " + salon;
	 				} 		

	 			if(dia==1 && inicio==10 && fin==11){
	 			var td = document.getElementById("lunes10");
				td.setAttribute("style", "background-color:"+color+";");
				document.getElementById("lunes10").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			}  	


	 			if(dia==1 && inicio==11 && fin==12){
	 			var td = document.getElementById("lunes11");
				td.setAttribute("style", "background-color:"+color+";");
				document.getElementById("lunes11").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 


	 			if(dia==1 && inicio==11 && fin==13){
	 			var td = document.getElementById("lunes11");
	 			var td2 = document.getElementById("lunes12");
				td.setAttribute("style", "background-color:"+color+";");
				td2.setAttribute("style", "background-color:"+color+";");
				document.getElementById("lunes11").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
				document.getElementById("lunes12").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 		

	 			if(dia==1 && inicio==12 && fin==13){
	 			var td = document.getElementById("lunes12");	 			
				td.setAttribute("style", "background-color:"+color+";");				
				document.getElementById("lunes12").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			}  			



	 			if(dia==1 && inicio==13 && fin==14){
	 			var td = document.getElementById("lunes13");	 			
				td.setAttribute("style", "background-color:"+color+";");				
				document.getElementById("lunes13").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;	 			
				}



	 			if(dia==1 && inicio==13 && fin==15){
	 			var td = document.getElementById("lunes13");
	 			var td2 = document.getElementById("lunes14");
				td.setAttribute("style", "background-color:"+color+";");
				td2.setAttribute("style", "background-color:"+color+";");
				document.getElementById("lunes13").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
				document.getElementById("lunes14").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 		

	 			if(dia==1 && inicio==14 && fin==15){
	 			var td = document.getElementById("lunes14");	 		
				td.setAttribute("style", "background-color:"+color+";");				
				document.getElementById("lunes14").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: " +salon;
	 			} 


	 			if(dia==1 && inicio==15 && fin==16){
	 			var td = document.getElementById("lunes15");	 			
				td.setAttribute("style", "background-color:"+color+";");				
				document.getElementById("lunes15").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: " +salon;
	 			} 


	 			if(dia==1 && inicio==15 && fin==17){
	 			var td = document.getElementById("lunes15");
	 			var td2 = document.getElementById("lunes16");
				td.setAttribute("style", "background-color:"+color+";");
				td2.setAttribute("style", "background-color:"+color+";");
				document.getElementById("lunes15").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: " +salon;
				document.getElementById("lunes16").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: " +salon;
	 			} 		

	 			if(dia==1 && inicio==16 && fin==17){
	 			var td = document.getElementById("lunes16");	 			
				td.setAttribute("style", "background-color:"+color+";");				
				document.getElementById("lunes16").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: " +salon;
	 			} 


	 			if(dia==1 && inicio==17 && fin==18){
	 			var td = document.getElementById("lunes17");	 			
				td.setAttribute("style", "background-color:"+color+";");				
				document.getElementById("lunes17").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: " +salon;
	 			} 


	 			if(dia==1 && inicio==17 && fin==19){
	 			var td = document.getElementById("lunes17");
	 			var td2 = document.getElementById("lunes18");
				td.setAttribute("style", "background-color:"+color+";");
				td2.setAttribute("style", "background-color:"+color+";");
				document.getElementById("lunes17").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: " +salon;
				document.getElementById("lunes18").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: " +salon;
	 			} 		

	 			if(dia==1 && inicio==18 && fin==19){
	 			var td = document.getElementById("lunes18");	 			
				td.setAttribute("style", "background-color:"+color+";");				
				document.getElementById("lunes18").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: " + salon;
	 			} 


	 			if(dia==1 && inicio==19 && fin==20){
	 			var td = document.getElementById("lunes19");	 			
				td.setAttribute("style", "background-color:"+color+";");				
				document.getElementById("lunes19").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: " + salon;
	 			} 


	 			if(dia==1 && inicio==19 && fin==21){
	 			var td = document.getElementById("lunes19");
	 			var td2 = document.getElementById("lunes20");
				td.setAttribute("style", "background-color:"+color+";");
				td2.setAttribute("style", "background-color:"+color+";");
				document.getElementById("lunes19").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: " + salon;
				document.getElementById("lunes20").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: " + salon;
	 			} 		

	 			if(dia==1 && inicio==20 && fin==21){
	 			var td = document.getElementById("lunes20");	 			
				td.setAttribute("style", "background-color:"+color+";");				
				document.getElementById("lunes20").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: " + salon;
	 			} 
// Termina lunes-----------------------------------------------------------------------------------------------------------------------------

//Empieza Martes ----------------------------------------------------------------------------------------------------------------------------

				if(dia==2 && inicio==7 && fin==8){
				var td = document.getElementById("martes7");	 		
				td.setAttribute("style", "background-color:"+color+";");				
				document.getElementById("martes7").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: " + salon;
	 				}  

	 			if(dia==2 && inicio==7 && fin==9){
	 			var td = document.getElementById("martes7");
	 			var td2 = document.getElementById("martes8");
				td.setAttribute("style", "background-color:"+color+";");
				td2.setAttribute("style", "background-color:"+color+";");
				document.getElementById("martes7").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: " + salon;
				document.getElementById("martes8").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+edificio +"<br/>" + "Salón: " +salon;
	 			} 

	 			if(dia==2 && inicio==8 && fin==9){
	 			var td = document.getElementById("martes8");	 			
				td.setAttribute("style", "background-color:"+color+";");				
				document.getElementById("martes8").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>"+ "Salón: "+ salon;
	 			}  	

	 			
	 			if(dia==2 && inicio==9 && fin==10){
	 			var td = document.getElementById("martes9");	 			
				td.setAttribute("style", "background-color:"+color+";");				
				document.getElementById("martes9").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>"+ "Salón: "+ salon;
	 			} 


	 			if(dia==2 && inicio==9 && fin==11){
	 			var td = document.getElementById("martes9");
	 			var td2 = document.getElementById("martes10");
				td.setAttribute("style", "background-color:"+color+";");
				td2.setAttribute("style", "background-color:"+color+";");
				document.getElementById("martes9").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>"+ "Salón: "+ salon;
				document.getElementById("martes10").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>"+ "Salón: "+ salon;
	 			} 		

	 			if(dia==2 && inicio==10 && fin==11){
	 			var td = document.getElementById("martes10");	 			
				td.setAttribute("style", "background-color:"+color+";");				
				document.getElementById("martes10").innerHTML= materia+ "<br/>" +profesor + "<br/>" + "Edificio: "+edificio +"<br/>" +"Salón: "+salon;
				}  	


	 			if(dia==2 && inicio==11 && fin==12){
	 			var td = document.getElementById("martes11");	 			
				td.setAttribute("style", "background-color:"+color+";");				
				document.getElementById("martes11").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>"+ "Salón: "+ salon;
	 			} 


	 			if(dia==2 && inicio==11 && fin==13){
	 			var td = document.getElementById("martes11");
	 			var td2 = document.getElementById("martes12");
				td.setAttribute("style", "background-color:"+color+";");
				td2.setAttribute("style", "background-color:"+color+";");
				document.getElementById("martes11").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>"+ "Salón: "+ salon;
				document.getElementById("martes12").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>"+ "Salón: "+ salon;
	 			} 		

	 			if(dia==2 && inicio==12 && fin==13){
	 			var td = document.getElementById("martes12");	 			
				td.setAttribute("style", "background-color:"+color+";");				
				document.getElementById("martes12").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>"+ "Salón: "+ salon;
	 			}  			

			 	if(dia==2 && inicio==13 && fin==14){
			 	var td = document.getElementById("martes13");	 			
				td.setAttribute("style", "background-color:"+color+";");				
				document.getElementById("martes13").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 

	 			if(dia==2 && inicio==13 && fin==15){
	 			var td = document.getElementById("martes13");
	 			var td2 = document.getElementById("martes14");
				td.setAttribute("style", "background-color:"+color+";");
				td2.setAttribute("style", "background-color:"+color+";");
				document.getElementById("martes13").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
				document.getElementById("martes14").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 		

	 			if(dia==2 && inicio==14 && fin==15){
	 			var td = document.getElementById("martes14");	 			
				td.setAttribute("style", "background-color:"+color+";");				
				document.getElementById("martes14").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 

//*******************************
//*******************************
//*******************************
	 			if(dia==2 && inicio==15 && fin==16){
	 			var td = document.getElementById("martes15");	 			
				td.setAttribute("style", "background-color:"+color+";");
				document.getElementById("martes15").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 


	 			if(dia==2 && inicio==15 && fin==17){
	 			var td = document.getElementById("martes15");
	 			var td2 = document.getElementById("martes16");
				td.setAttribute("style", "background-color:"+color+";");
				td2.setAttribute("style", "background-color:"+color+";");
				document.getElementById("martes15").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
				document.getElementById("martes16").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 				} 		

	 			if(dia==2 && inicio==16 && fin==17){
				var td = document.getElementById("martes16");	 			
				td.setAttribute("style", "background-color:"+color+";");
				document.getElementById("martes16").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 


	 			if(dia==2 && inicio==17 && fin==18){
	 			var td = document.getElementById("martes17");	 			
				td.setAttribute("style", "background-color:"+color+";");
				document.getElementById("martes17").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 				} 


	 			if(dia==2 && inicio==17 && fin==19){
	 			var td = document.getElementById("martes17");
	 			var td2 = document.getElementById("martes18");
				td.setAttribute("style", "background-color:"+color+";");
				td2.setAttribute("style", "background-color:"+color+";");
				document.getElementById("martes17").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
				document.getElementById("martes18").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 		

	 			if(dia==2 && inicio==18 && fin==19){
	 			var td = document.getElementById("martes18");	 			
				td.setAttribute("style", "background-color:"+color+";");
				document.getElementById("martes18").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 


	 			if(dia==2 && inicio==19 && fin==20){
	 			var td = document.getElementById("martes19");	 			
				td.setAttribute("style", "background-color:"+color+";");
				document.getElementById("martes19").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 


	 			if(dia==2 && inicio==19 && fin==21){
				var td = document.getElementById("martes19");
	 			var td2 = document.getElementById("martes20");
				td.setAttribute("style", "background-color:"+color+";");
				td2.setAttribute("style", "background-color:"+color+";");
				document.getElementById("martes19").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
				document.getElementById("martes20").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 		

	 			if(dia==2 && inicio==20 && fin==21){
	 			var td = document.getElementById("martes20");	 			
				td.setAttribute("style", "background-color:"+color+";");
				document.getElementById("martes20").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón:"+ salon;
	 			} 
  //Termina martes ----------------------------------------------------------------------------------------------------------------

  // Empieza Miercoles------------------------------------------------------------------------------------------------------------

  				if(dia==3 && inicio==7 && fin==8){
  				var td = document.getElementById("miercoles7");	 			
				td.setAttribute("style", "background-color:"+color+";");
				document.getElementById("miercoles7").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón:"+ salon;
	 			}  

	 			if(dia==3 && inicio==7 && fin==9){
	 			var td = document.getElementById("miercoles7");
	 			var td2 = document.getElementById("miercoles8");
				td.setAttribute("style", "background-color:"+color+";");
				td2.setAttribute("style", "background-color:"+color+";");
				document.getElementById("miercoles7").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón:"+ salon;
				document.getElementById("miercoles8").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón:"+ salon;
	 			} 

	 			if(dia==3 && inicio==8 && fin==9){
	 			var td = document.getElementById("miercoles8");	 			
				td.setAttribute("style", "background-color:"+color+";");
				document.getElementById("miercoles8").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón:"+ salon;
	 			}  	

	 			
	 				if(dia==3 && inicio==9 && fin==10){
	 			var td = document.getElementById("miercoles9");	 			
				td.setAttribute("style", "background-color:"+color+";");
				document.getElementById("miercoles9").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón:"+ salon;
	 				} 


	 			if(dia==3 && inicio==9 && fin==11){
	 			var td = document.getElementById("miercoles9");
	 			var td2 = document.getElementById("miercoles10");
				td.setAttribute("style", "background-color:"+color+";");
				td2.setAttribute("style", "background-color:"+color+";");
				document.getElementById("miercoles9").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón:"+ salon;
				document.getElementById("miercoles10").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón:"+ salon;
	 			} 		

	 			if(dia==3 && inicio==10 && fin==11){
				var td = document.getElementById("miercoles10");	 			
				td.setAttribute("style", "background-color:"+color+";");
				document.getElementById("miercoles10").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio:"+ edificio +"<br/>" +"Salón: "+ salon;
	 			}  	


	 			if(dia==3 && inicio==11 && fin==12){
	 			var td = document.getElementById("miercoles11");	 			
				td.setAttribute("style", "background-color:"+color+";");
				document.getElementById("miercoles11").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio:"+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 


	 			if(dia==3 && inicio==11 && fin==13){
	 			var td = document.getElementById("miercoles11");
	 			var td2 = document.getElementById("miercoles12");
				td.setAttribute("style", "background-color:"+color+";");
				td2.setAttribute("style", "background-color:"+color+";");
				document.getElementById("miercoles11").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio:"+ edificio +"<br/>" +"Salón: "+ salon;
				document.getElementById("miercoles12").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio:"+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 		

	 			if(dia==3 && inicio==12 && fin==13){
	 			var td = document.getElementById("miercoles12");	 			
				td.setAttribute("style", "background-color:"+color+";");
				document.getElementById("miercoles12").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio:"+ edificio +"<br/>" +"Salón: "+ salon;
	 			}  			



	 			if(dia==3 && inicio==13 && fin==14){
	 			var td = document.getElementById("miercoles13");	 			
				td.setAttribute("style", "background-color:"+color+";");
				document.getElementById("miercoles13").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio:"+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 


	 			if(dia==3 && inicio==13 && fin==15){
	 			var td = document.getElementById("miercoles13");
	 			var td2 = document.getElementById("miercoles14");
				td.setAttribute("style", "background-color:"+color+";");
				td2.setAttribute("style", "background-color:"+color+";");
				document.getElementById("miercoles13").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio:"+ edificio +"<br/>" +"Salón: "+ salon;
				document.getElementById("miercoles14").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio:"+ edificio +"<br/>" +"Salón: "+ salon;
	 				} 		

	 			if(dia==3 && inicio==14 && fin==15){
	 			var td = document.getElementById("miercoles14");	 			
				td.setAttribute("style", "background-color:"+color+";");
				document.getElementById("miercoles14").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 


	 			if(dia==3 && inicio==15 && fin==16){
	 			var td = document.getElementById("miercoles15");	 			
				td.setAttribute("style", "background-color:"+color+";");
				document.getElementById("miercoles15").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 


	 			if(dia==3 && inicio==15 && fin==17){
	 			var td = document.getElementById("miercoles15");
	 			var td2 = document.getElementById("miercoles16");
				td.setAttribute("style", "background-color:"+color+";");
				td2.setAttribute("style", "background-color:"+color+";");
				document.getElementById("miercoles15").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
				document.getElementById("miercoles16").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 		

	 			if(dia==3 && inicio==16 && fin==17){
	 			var td = document.getElementById("miercoles16");	 			
				td.setAttribute("style", "background-color:"+color+";");
				document.getElementById("miercoles16").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 


	 			if(dia==3 && inicio==17 && fin==18){
	 			var td = document.getElementById("miercoles17");	 			
				td.setAttribute("style", "background-color:"+color+";");
				document.getElementById("miercoles17").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 


	 			if(dia==3 && inicio==17 && fin==19){
	 			var td = document.getElementById("miercoles17");
	 			var td2 = document.getElementById("miercoles18");
				td.setAttribute("style", "background-color:"+color+";");
				td2.setAttribute("style", "background-color:"+color+";");
				document.getElementById("miercoles17").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
				document.getElementById("miercoles18").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 		

	 			if(dia==3 && inicio==18 && fin==19){
	 			var td = document.getElementById("miercoles18");	 			
				td.setAttribute("style", "background-color:"+color+";");
				document.getElementById("miercoles18").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 


	 			if(dia==3 && inicio==19 && fin==20){
	 			var td = document.getElementById("miercoles19");	 			
				td.setAttribute("style", "background-color:"+color+";");
				document.getElementById("miercoles19").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 

	 			if(dia==3 && inicio==19 && fin==21){
	 			var td = document.getElementById("miercoles19");
	 			var td2 = document.getElementById("miercoles20");
				td.setAttribute("style", "background-color:"+color+";");
				td2.setAttribute("style", "background-color:"+color+";");
				document.getElementById("miercoles19").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
				document.getElementById("miercoles20").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 		

	 			if(dia==3 && inicio==20 && fin==21){
	 			var td = document.getElementById("miercoles20");	 			
				td.setAttribute("style", "background-color:"+color+";");
				document.getElementById("miercoles20").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 

  //termina Miércoles

  //Empieza Juebebes ---------------------------------------------------------------------------------------------------------------


  				if(dia==4 && inicio==7 && fin==8){
				var td = document.getElementById("jueves7");	 			
				td.setAttribute("style", "background-color:"+color+";");
				document.getElementById("jueves7").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			}  

	 			if(dia==4 && inicio==7 && fin==9){
	 			var td = document.getElementById("jueves7");
	 			var td2 = document.getElementById("jueves8");
				td.setAttribute("style", "background-color:"+color+";");
				td2.setAttribute("style", "background-color:"+color+";");
				document.getElementById("jueves7").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
				document.getElementById("jueves8").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: " +salon;
	 			} 

	 			if(dia==4 && inicio==8 && fin==9){
	 			var td = document.getElementById("jueves8");	 			
				td.setAttribute("style", "background-color:"+color+";");
				document.getElementById("jueves8").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: " +salon;
	 			}  	

	 			
	 			if(dia==4 && inicio==9 && fin==10){
	 			var td = document.getElementById("jueves9");	 			
				td.setAttribute("style", "background-color:"+color+";");
				document.getElementById("jueves9").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: " +salon;
	 			} 


	 			if(dia==4 && inicio==9 && fin==11){
	 			var td = document.getElementById("jueves9");
	 			var td2 = document.getElementById("jueves10");
				td.setAttribute("style", "background-color:"+color+";");
				td2.setAttribute("style", "background-color:"+color+";");
				document.getElementById("jueves9").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: " +salon;
				document.getElementById("jueves10").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: " +salon;
	 			} 		

	 			if(dia==4 && inicio==10 && fin==11){
				var td = document.getElementById("jueves10");	 			
				td.setAttribute("style", "background-color:"+color+";");
				document.getElementById("jueves10").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: " +salon;
	 			}  	


	 			if(dia==4 && inicio==11 && fin==12){
				var td = document.getElementById("jueves11");	 			
				td.setAttribute("style", "background-color:"+color+";");
				document.getElementById("jueves11").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: " +salon;
	 			} 


	 			if(dia==4 && inicio==11 && fin==13){
	 			var td = document.getElementById("jueves11");
	 			var td2 = document.getElementById("jueves12");
				td.setAttribute("style", "background-color:"+color+";");
				td2.setAttribute("style", "background-color:"+color+";");
				document.getElementById("jueves11").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: " +salon;
				document.getElementById("jueves12").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: " +salon;
	 			} 		

	 			if(dia==4 && inicio==12 && fin==13){
				var td = document.getElementById("jueves12");	 			
				td.setAttribute("style", "background-color:"+color+";");
				document.getElementById("jueves12").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			}  			

				if(dia==4 && inicio==13 && fin==14){
				var td = document.getElementById("jueves13");	 			
				td.setAttribute("style", "background-color:"+color+";");	
				document.getElementById("jueves13").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 


	 			if(dia==4 && inicio==13 && fin==15){
	 			var td = document.getElementById("jueves13");
	 			var td2 = document.getElementById("jueves14");
				td.setAttribute("style", "background-color:"+color+";");
				td2.setAttribute("style", "background-color:"+color+";");
				document.getElementById("jueves13").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
				document.getElementById("jueves14").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 		

	 			if(dia==4 && inicio==14 && fin==15){
				var td = document.getElementById("jueves14");	 			
				td.setAttribute("style", "background-color:"+color+";");
				document.getElementById("jueves14").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 


	 			if(dia==4 && inicio==15 && fin==16){
	 			var td = document.getElementById("jueves15");	 			
				td.setAttribute("style", "background-color:"+color+";");
				document.getElementById("jueves15").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 


	 			if(dia==4 && inicio==15 && fin==17){
	 			var td = document.getElementById("jueves15");
	 			var td2 = document.getElementById("jueves16");
				td.setAttribute("style", "background-color:"+color+";");
				td2.setAttribute("style", "background-color:"+color+";");
				document.getElementById("jueves15").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
				document.getElementById("jueves16").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 		

	 			if(dia==4 && inicio==16 && fin==17){
	 			var td = document.getElementById("jueves16");	 			
				td.setAttribute("style", "background-color:"+color+";");
				document.getElementById("jueves16").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 


	 			if(dia==4 && inicio==17 && fin==18){
	 			var td = document.getElementById("jueves17");	 			
				td.setAttribute("style", "background-color:"+color+";");
				document.getElementById("jueves17").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 


	 			if(dia==4 && inicio==17 && fin==19){
	 			var td = document.getElementById("jueves17");
	 			var td2 = document.getElementById("jueves18");
				td.setAttribute("style", "background-color:"+color+";");
				td2.setAttribute("style", "background-color:"+color+";");
				document.getElementById("jueves17").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
				document.getElementById("jueves18").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 				} 		

	 			if(dia==4 && inicio==18 && fin==19){
	 			var td = document.getElementById("jueves18");	 			
				td.setAttribute("style", "background-color:"+color+";");
				document.getElementById("jueves18").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 

				if(dia==4 && inicio==19 && fin==20){
				var td = document.getElementById("jueves19");	 			
				td.setAttribute("style", "background-color:"+color+";");
				document.getElementById("jueves19").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 


	 			if(dia==4 && inicio==19 && fin==21){
	 			var td = document.getElementById("jueves19");
	 			var td2 = document.getElementById("jueves20");
				td.setAttribute("style", "background-color:"+color+";");
				td2.setAttribute("style", "background-color:"+color+";");
				document.getElementById("jueves19").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
				document.getElementById("jueves20").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 		

	 			if(dia==4 && inicio==20 && fin==21){
				var td = document.getElementById("jueves20");	 			
				td.setAttribute("style", "background-color:"+color+";");
				document.getElementById("jueves20").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 


  //termina juebes ----------------------------------------------------------------------------------------------------------------

//Empieza Viernes -------------------------------------------------------------------------------------------------------------------


  				if(dia==5 && inicio==7 && fin==8){
	  				var td = document.getElementById("viernes7");	 			
					td.setAttribute("style", "background-color:"+color+";");  				
					document.getElementById("viernes7").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			}  

	 			if(dia==5 && inicio==7 && fin==9){
	 			var td = document.getElementById("viernes7");
	 			var td2 = document.getElementById("viernes8");
				td.setAttribute("style", "background-color:"+color+";");
				td2.setAttribute("style", "background-color:"+color+";");
				document.getElementById("viernes7").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
				document.getElementById("viernes8").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 

	 			if(dia==5 && inicio==8 && fin==9){
					var td = document.getElementById("viernes8");	 			
					td.setAttribute("style", "background-color:"+color+";");  				
				document.getElementById("viernes8").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			}  	

	 			
	 			if(dia==5 && inicio==9 && fin==10){
	 			var td = document.getElementById("viernes9");	 			
				td.setAttribute("style", "background-color:"+color+";");  				
				document.getElementById("viernes9").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 


	 			if(dia==5 && inicio==9 && fin==11){
	 			var td = document.getElementById("viernes9");
	 			var td2 = document.getElementById("viernes10");
				td.setAttribute("style", "background-color:"+color+";");
				td2.setAttribute("style", "background-color:"+color+";");
				document.getElementById("viernes9").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
				document.getElementById("viernes10").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 		

	 			if(dia==5 && inicio==10 && fin==11){
	 			var td = document.getElementById("viernes10");	 			
				td.setAttribute("style", "background-color:"+color+";");  		
				document.getElementById("viernes10").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			}  	


	 			if(dia==5 && inicio==11 && fin==12){
	 			var td = document.getElementById("viernes11");	 			
				td.setAttribute("style", "background-color:"+color+";");  		
				document.getElementById("viernes11").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 				} 


	 			if(dia==5 && inicio==11 && fin==13){
	 			var td = document.getElementById("viernes11");
	 			var td2 = document.getElementById("viernes12");
				td.setAttribute("style", "background-color:"+color+";");
				td2.setAttribute("style", "background-color:"+color+";");
				document.getElementById("viernes11").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
				document.getElementById("viernes12").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 				} 		

	 			if(dia==5 && inicio==12 && fin==13){
				var td = document.getElementById("viernes12");	 			
				td.setAttribute("style", "background-color:"+color+";");  		
				document.getElementById("viernes12").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 				}  			



	 			if(dia==5 && inicio==13 && fin==14){
	 			var td = document.getElementById("viernes13");	 			
				td.setAttribute("style", "background-color:"+color+";");  		
				document.getElementById("viernes13").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 


	 			if(dia==5 && inicio==13 && fin==15){
	 			var td = document.getElementById("viernes13");
	 			var td2 = document.getElementById("viernes14");
				td.setAttribute("style", "background-color:"+color+";");
				td2.setAttribute("style", "background-color:"+color+";");
				document.getElementById("viernes13").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
				document.getElementById("viernes14").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 		

	 			if(dia==5 && inicio==14 && fin==15){
	 			var td = document.getElementById("viernes14");	 			
				td.setAttribute("style", "background-color:"+color+";");  		
				document.getElementById("viernes14").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 


	 			if(dia==5 && inicio==15 && fin==16){
				var td = document.getElementById("viernes15");	 			
				td.setAttribute("style", "background-color:"+color+";");  		
				document.getElementById("viernes15").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 


	 			if(dia==5 && inicio==15 && fin==17){
	 			var td = document.getElementById("viernes15");
	 			var td2 = document.getElementById("viernes16");
				td.setAttribute("style", "background-color:"+color+";");
				td2.setAttribute("style", "background-color:"+color+";");
				document.getElementById("viernes15").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
				document.getElementById("viernes16").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 		

	 			if(dia==5 && inicio==16 && fin==17){
				var td = document.getElementById("viernes16");	 			
				td.setAttribute("style", "background-color:"+color+";");  		
				document.getElementById("viernes16").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 


	 			if(dia==5 && inicio==17 && fin==18){
	 			var td = document.getElementById("viernes17");	 			
				td.setAttribute("style", "background-color:"+color+";");  		
				document.getElementById("viernes17").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 


	 			if(dia==5 && inicio==17 && fin==19){
	 			var td = document.getElementById("viernes17");
	 			var td2 = document.getElementById("viernes18");
				td.setAttribute("style", "background-color:"+color+";");
				td2.setAttribute("style", "background-color:"+color+";");	
				document.getElementById("viernes17").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
				document.getElementById("viernes18").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 		

	 			if(dia==5 && inicio==18 && fin==19){
	 			var td = document.getElementById("viernes18");	 			
				td.setAttribute("style", "background-color:"+color+";");  		
				document.getElementById("viernes18").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 


	 			if(dia==5 && inicio==19 && fin==20){
	 			var td = document.getElementById("viernes19");	 			
				td.setAttribute("style", "background-color:"+color+";");  		
				document.getElementById("viernes19").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 


	 			if(dia==5 && inicio==19 && fin==21){
	 			var td = document.getElementById("viernes19");
	 			var td2 = document.getElementById("viernes20");
				td.setAttribute("style", "background-color:"+color+";");
				td2.setAttribute("style", "background-color:"+color+";");	
				document.getElementById("viernes19").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
				document.getElementById("viernes20").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 		

	 			if(dia==5 && inicio==20 && fin==21){
	 			var td = document.getElementById("viernes20");	 			
				td.setAttribute("style", "background-color:"+color+";");  		
				document.getElementById("viernes20").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 


//Termina viernes ---------------------------------------------------------------------------------------------------------------------

//Comienza Sábado ---------------------------------------------------------------------------------------------------------------------

  				if(dia==6 && inicio==7 && fin==8){
  				var td = document.getElementById("sabado7");	 			
				td.setAttribute("style", "background-color:"+color+";");  		
				document.getElementById("sabado7").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			}  

	 			if(dia==6 && inicio==7 && fin==9){
				var td = document.getElementById("sabado7");
	 			var td2 = document.getElementById("sabado8");
				td.setAttribute("style", "background-color:"+color+";");
				td2.setAttribute("style", "background-color:"+color+";");	
				document.getElementById("sabado7").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
				document.getElementById("sabado8").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 

	 			if(dia==6 && inicio==8 && fin==9){
	 			var td = document.getElementById("sabado8");	 			
				td.setAttribute("style", "background-color:"+color+";");  		
				document.getElementById("sabado8").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			}  	

	 			
	 			if(dia==6 && inicio==9 && fin==10){
	 			var td = document.getElementById("sabado9");	 			
				td.setAttribute("style", "background-color:"+color+";");  		
				document.getElementById("sabado9").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 


	 			if(dia==6 && inicio==9 && fin==11){
	 			var td = document.getElementById("sabado9");
	 			var td2 = document.getElementById("sabado10");
				td.setAttribute("style", "background-color:"+color+";");
				td2.setAttribute("style", "background-color:"+color+";");	
				document.getElementById("sabado9").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
				document.getElementById("sabado10").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 		

	 			if(dia==6 && inicio==10 && fin==11){
				var td = document.getElementById("sabado10");	 			
				td.setAttribute("style", "background-color:"+color+";");  		
				document.getElementById("sabado10").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			}  	


	 			if(dia==6 && inicio==11 && fin==12){
	 			var td = document.getElementById("sabado11");	 			
				td.setAttribute("style", "background-color:"+color+";");  		
				document.getElementById("sabado11").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 


	 			if(dia==6 && inicio==11 && fin==13){
	 			var td = document.getElementById("sabado11");
	 			var td2 = document.getElementById("sabado12");
				td.setAttribute("style", "background-color:"+color+";");
				td2.setAttribute("style", "background-color:"+color+";");	
				document.getElementById("sabado11").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
				document.getElementById("sabado12").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 		

	 			if(dia==6 && inicio==12 && fin==13){
	 			var td = document.getElementById("sabado12");	 			
				td.setAttribute("style", "background-color:"+color+";");  		
				document.getElementById("sabado12").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			}  			



	 			if(dia==6 && inicio==13 && fin==14){
	 			var td = document.getElementById("sabado13");	 			
				td.setAttribute("style", "background-color:"+color+";");  		
				document.getElementById("sabado13").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 


	 			if(dia==6 && inicio==13 && fin==15){
				var td = document.getElementById("sabado13");
	 			var td2 = document.getElementById("sabado14");
				td.setAttribute("style", "background-color:"+color+";");
				td2.setAttribute("style", "background-color:"+color+";");	
				document.getElementById("sabado13").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
				document.getElementById("sabado14").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 		

	 			if(dia==6 && inicio==14 && fin==15){
				var td = document.getElementById("sabado14");	 			
				td.setAttribute("style", "background-color:"+color+";");  		
				document.getElementById("sabado14").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 


	 			if(dia==6 && inicio==15 && fin==16){
	 			var td = document.getElementById("sabado15");	 			
				td.setAttribute("style", "background-color:"+color+";");  		
				document.getElementById("sabado15").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 


	 			if(dia==6 && inicio==15 && fin==17){
				var td = document.getElementById("sabado15");
	 			var td2 = document.getElementById("sabado16");
				td.setAttribute("style", "background-color:"+color+";");
				td2.setAttribute("style", "background-color:"+color+";");	
				document.getElementById("sabado15").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
				document.getElementById("sabado16").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 				} 		

	 			if(dia==6 && inicio==16 && fin==17){
	 			var td = document.getElementById("sabado16");	 			
				td.setAttribute("style", "background-color:"+color+";");  		
				document.getElementById("sabado16").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 


	 			if(dia==6 && inicio==17 && fin==18){
	 			var td = document.getElementById("sabado17");	 			
				td.setAttribute("style", "background-color:"+color+";");  		
				document.getElementById("sabado17").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 


	 			if(dia==6 && inicio==17 && fin==19){
				var td = document.getElementById("sabado17");
	 			var td2 = document.getElementById("sabado18");
				td.setAttribute("style", "background-color:"+color+";");
				td2.setAttribute("style", "background-color:"+color+";");	
				document.getElementById("sabado17").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
				document.getElementById("sabado18").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 				} 		

	 			if(dia==6 && inicio==18 && fin==19){
	 			var td = document.getElementById("sabado18");	 			
				td.setAttribute("style", "background-color:"+color+";");  		
				document.getElementById("sabado18").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 


	 			if(dia==6 && inicio==19 && fin==20){
	 			var td = document.getElementById("sabado19");	 			
				td.setAttribute("style", "background-color:"+color+";");  		
				document.getElementById("sabado19").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 


	 			if(dia==6 && inicio==19 && fin==21){
				var td = document.getElementById("sabado19");
	 			var td2 = document.getElementById("sabado20");
				td.setAttribute("style", "background-color:"+color+";");
				td2.setAttribute("style", "background-color:"+color+";");	
				document.getElementById("sabado19").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
				document.getElementById("sabado20").innerHTML= materia+ "<br/>" +profesor+ "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 		

	 			if(dia==6 && inicio==20 && fin==21){
	 			var td = document.getElementById("sabado20");	 			
				td.setAttribute("style", "background-color:"+color+";");  		
				document.getElementById("sabado20").innerHTML= materia+ "<br/>" +profesor + "<br/>" +"Edificio: "+ edificio +"<br/>" +"Salón: "+ salon;
	 			} 
	 		}

	 		function validar(){
	 			var carrera=document.getElementById("carrera").value;
				var materia= document.getElementById("materia").value;
				var seccion=document.getElementById("seccion").value;
				var edificio=document.getElementById("edificio").value;
				var salon=document.getElementById("salon").value;
				var profesor=document.getElementById("profe").value;
				var dia= document.getElementById("dia").value;
				var inicio=document.getElementById("Inicio").value;
				var fin= document.getElementById("fin").value;

				if(carrera==1 && materia=="" && seccion==1 && profesor=="" && edificio==1 &&dia==0 &&inicio==1 &&fin==1){
					alert("seas mamón... todos los campos están vacios");
				} else if(carrera==1){
					alert("Error: Debes seleccionar una carrera");
				} else if(materia==""){
					alert("Error: Debes ingresar o seleccionar una materia");
				} else if(seccion==1 ){
					alert("Selecciona una sección");
				} else if(profesor==""){
					alert("Error: Debes ingresar o seleccionar un profesor");
				} else if(edificio==1){
					alert("Selecciona un edificio");
				} else if(dia==0){
					alert("debes seleccionar un día");
				} else if(inicio==1){
					alert("Selecciona la hora de inicio");
				} else if(fin==1){
					alert("Selecciona la hora Final");
				}

				if(carrera!=1 && materia!="" && seccion!=1 && profesor!="" && edificio!=1 &&dia!=0 &&inicio!=1 &&fin!=1){
					graficar();
				}

	 		}