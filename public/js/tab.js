$(document).ready(function () {
  var $T= $("#matricula-tab").DataTable({
        pageLength: 6,
        "dom": '<"top"i>rt<"bottom"lp><"clear">',
        lengthChange: false,
        ordering: false,
        language:{
            
                "sEmptyTable": "Nenhum registro encontrado",
                "sInfo": "",
                "sInfoEmpty": "",
                "sInfoFiltered": "",
                "sInfoPostFix": "",
                "sInfoThousands": ".",
                "sLengthMenu": "MENU resultados por página",
                "sLoadingRecords": "Carregando...",
                "sProcessing": "Processando...",
                "sZeroRecords": "Nenhum registro encontrado",
                "sSearch": "Pesquisar",
                "oPaginate": {
                  "sNext": "Próximo",
                  "sPrevious": "Anterior",
                  "sFirst": "Primeiro",
                  "sLast": "Último"
                }
        },
        select: true
    });
    $("#filtro").on("change", function() {
        var filtro = $(this).val(); 
        $T.column(5).search(filtro).draw(); // Filtra a tabela pela sexta coluna com o valor selecionado
      });
      $("#filtro1").on("change", function() {
        var filtro1 = $(this).val(); 
        $T.column(0).search(filtro1).draw(); // Filtra a tabela pela primeira coluna com o valor selecionado
      });
      $("#filtro2").on("change", function() {
        var filtro2 = $(this).val(); 
        $T.column(1).search(filtro2).draw(); // Filtra a tabela pela segundacoluna com o valor selecionado
      });
      $("#filtro3").on("change", function() {
        var filtro3 = $(this).val(); 
        $T.column(2).search(filtro3).draw(); // Filtra a tabela pela  terceira coluna com o valor selecionado
      });
      $("#filtro4").on("change", function() {
        var filtro4 = $(this).val(); 
        $T.column(3).search(filtro4).draw(); // Filtra a tabela pela quarta coluna com o valor selecionado
      });
      $("#filtro5").on("change", function() {
        var filtro5 = $(this).val(); 
        $T.column(4).search(filtro5).draw(); // Filtra a tabela pela quinta coluna com o valor selecionado
      });
      $("#filtro7").on("change", function() {
        var filtro7 = $(this).val(); 
        $T.column(6).search(filtro7).draw(); // Filtra a tabela pela sétima coluna com o valor selecionado
      });
    
$(".paginate_button").addClass("paginate_button");
$(".paginate").addClass("float-end");


$("#pesquisa").on("keyup", function () {
   $T.search(this.value).draw();
   
});
 
});
