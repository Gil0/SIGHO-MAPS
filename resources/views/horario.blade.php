@extends('layouts.app')

@section('content')
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script >
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
</script>
<style>
    @import url('http://fonts.googleapis.com/css?family=Julius+Sans+One');
    @import url('https://fonts.googleapis.com/css?family=Anton');
    body{
        padding: 0;
        margin: 0;
    }
    .margen{
        padding: 0;
        margin: 0;
    }
    /*----- Nav Superior -----*/
    .navsup{
        height: 55px;
        background: #263238;
    }
    .imglogo{
        position: absolute;
        left: 0px;
        width: 5%;
        top: -3px;
    }
    .logo{
        color: #fff;
        font-size: 20px;
        font-family: 'Anton', sans-serif;
        letter-spacing: 3px;
        padding-top: 12px;
        padding-left: 70px;
    }
    .log{
        color: #06bb84;
        font-family: 'Anton', sans-serif;
        text-align: center;
    }
    /*----- Buscador -----*/
    .buscador{
        padding-top: 10px;
    }
    /*----- Banner -----*/
    .profesor{
        color: #06bb84;
        font-family: 'Anton', sans-serif;
        letter-spacing: 2px;
        font-size: 70px;
    }
    /*----- Iconos -----*/
    .iconpencil{
        color: #5cb85c;
        border-color: #4cae4c;
    }
    .icondelete{
        color: #d9534f;
        border-color: #d43f3a;
    }
    /*----- Menu -----*/
    @media (min-width: 768px) {
        .sidebar-nav .navbar .navbar-collapse {
            padding: 0;
            max-height: none;
        }
        .sidebar-nav .navbar ul {
            float: none;
        }
        .sidebar-nav .navbar ul:not {
            display: block;
        }
        .sidebar-nav .navbar li {
            float: none;
            display: block;
        }
        .sidebar-nav .navbar li a {
            padding-top: 12px;
            padding-bottom: 12px;
        }
    }
</style>
        <div class="navsup">
    <img class="imglogo" src="../Imagenes/Logo.png">
    <a href="{{ url('/') }}"><p class="logo">SIGHO <span class="log">&</span> MAPS</p></a>
</div>
            <div class="col-sm-3">
                <div class="sidebar-nav">
                    <div class="navbar navbar-default" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <span class="visible-xs navbar-brand">Menu</span>
                        </div>
                        <div class="navbar-collapse collapse sidebar-navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li><a href="{{url ('/')}}">Inicio</a></li>
                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Profesores<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{url ('/User/Profesores')}}">Lista</a></li>
                                        <li><a href={{url ('/User/Comentarios')}}>Comentarios</a></li>
                                    </ul>
                                </li>
                                <li class="active"><a href="{{url ('/horario')}}">Horario</a></li>
                                <li><a href="{{url ('/Mapas')}}">Mapas</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
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
    <option value="6" >Sábado</option>
    <option value="6" >Domingo</option>
    <option value="6" >Domingo</option>

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
@endsection
