$(document).on("ready",inicio);
function inicio(){

	mostrarDatos("");
	$("#buscar").keyup(function(){
		buscar=$("#buscar").val();
		mostrarDatos(buscar);
	});

$("form").submit(function (event){
		event.preventDefault();
		$.ajax({
			url:$("form").attr("action"),
			type:$("form").attr("method"),
			data:$("form").serialize(),
			success:function(respuesta)
			{
				alert(respuesta);
			}
		 });
	   });
}

function mostrarDatos(valor){
  $.ajax({

	url:"http://localhost/MVC4/034interfaz/index.php/usuarios/validarmen",
	type:"POST",
	data:{buscar:valor},
	success:function(respuesta){
		alert(respuesta);
	}

	});


}