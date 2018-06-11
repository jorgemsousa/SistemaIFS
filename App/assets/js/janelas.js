function reatorio(){
    var page = "relatorioPerini.php";
    $.ajax({
         type: 'POST',
         datatype:'html',
         url: page,
         beforeSend: function(){
             $("#resultado").html("Carregando...");
         },
         data: {gerar: gerar},
         success: function(msg)
         {
             $("#resultado").html(msg);
         }
       
    });
}

$('#gerar').click(function(){
   relatorio($("dataRperini").val());
});