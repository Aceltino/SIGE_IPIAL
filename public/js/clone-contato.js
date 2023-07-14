/*inicio */ 

var cliks=0;

$("#clonebtn").on("click",function(){
    if(cliks<2){
        var $cl = $("#clone").clone().find("input").val("").end();
         // Obtém o valor atual do atributo "name"
    var $clone=$cl.find('input');

    var $atualneme = $clone.attr('name');
    
    // Incrementa o valor do atributo "name"
    var $novoname = $atualneme + '_' + cliks;
    
    // Define o novo valor do atributo "name"
        $clone.attr('name', $novoname);
        $cl.insertAfter("#clone");
        cliks++;
    }
    if(cliks==2){
        $(this).remove();
    }
     
});

/*fim*/ 



/*inicio */ 

var cliks1=0;

$("#clonebtn2").on("click",function(){
    if(cliks1<2){
        var $cl2 = $("#clone2").clone().find("select").val("").end();
        // Obtém o valor atual do atributo "name"
    var $clone2=$cl2.find('select');

    var $atualneme2 = $clone2.attr('name');
    
    // Incrementa o valor do atributo "name"
    var $novoname2 = $atualneme2 + '_' + cliks1;
    
    // Define o novo valor do atributo "name"
        $clone2.attr('name', $novoname2);
        $cl2.insertAfter("#clone2");
        cliks1++;
    }
    if(cliks1==2){
        $(this).remove();
    }
    
});

/*Fim */ 




/*inicio */ 

var cliks2=0;


$("#clonebtn1").on("click",function(){
    if(cliks2<2)

        var $cl2 = $("#clone1").clone().find("input").val("").end();
    // Obtém o valor atual do atributo "name"
    var $clone=$cl2.find('input');

    var $atualneme = $clone.attr('name');
    
    // Incrementa o valor do atributo "name"
    var $novoname = $atualneme + '_' + cliks2;
    
    // Define o novo valor do atributo "name"
            $clone.attr('name', $novoname);
            $cl2.insertAfter("#clone1");
            cliks2++;
        
        if(cliks2==2){
            $(this).remove();
        }
    
});

/*Fim */ 

/*inicio */ 

var cliks3=0;

$("#clonebtn3").on("click",function(){
    if(cliks3<2){

        var $cl2 = $("#clone3").clone().find("input").val("").end();
        // Obtém o valor atual do atributo "name"
    var $clone=$cl2.find('input');

    var $atualneme = $clone.attr('name');
    
    // Incrementa o valor do atributo "name"
    var $novoname = $atualneme + '_' + cliks3;
    
    // Define o novo valor do atributo "name"
        $clone.attr('name', $novoname);
        $cl2.insertAfter("#clone3");
        cliks3++;
    }
    if(cliks3==2){
        $(this).remove();
    }
    
});

/*Fim */ 