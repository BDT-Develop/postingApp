/*navbar colors*/
$( "#linkhome" ).removeClass( "active" );
$( "#linknews" ).addClass( "active" );

/*Function to request querys[AJAX]*/
$(document).ready(function(){
$("#btnRefresh").click(function(){
  var idUsuario = document.getElementById('idUsuario').value;
  var username = document.getElementById('username').value;
  var parametros = {
    'idUsuario':idUsuario,
    'user':username
  };
    $.ajax({
        data : parametros,
    		url: "http://localhost:8080/posting.com/php/ajax/news.php",
    		type:'POST',
    		success: function(result){
        $("#resultset").html(result);
    }
			});
});
});
