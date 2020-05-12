$(document).ready(function(){
    $("#novo-armario").click(function(){
        $("#registra-armario").show();
        $("#botoes").hide();
    });

    $(".voltar").click(function(){
        console.log(this.closest('div'));
        $("#botoes").show();
        $(this).closest('div').hide();       
        //this.closest('div').addClass('hide');
    });

    $("#salvar-armario").click(function(){
        /*Captura valor do campo input*/
       /* numero=$("#numero-armario").val();
        numero=$("#numero-armario").val();*/
       armario= {armario:{
           curso_id:$("#curso-armario").val(), 
           numero:$("#numero-armario").val()
        }};
       // console.log(armario);
        registrarArmario(armario);
    });
    
    
    



    var registrarArmario=function (armario){
        //console.log(URL_BASE);
        /*Requisição ajax*/
   		$.ajax({
            url : "http://127.0.0.1/cimol/coordenacao/armario/registrarArmario",
            type : 'post',
            data : armario,
            beforeSend : function(){
                //$("#resultado").html("ENVIANDO...");
            }
           }).done(function(resultado){
            console.log(resultado);
            if(resultado !=null){
                //console.log(resultado);
                $("#numero-armario").val("");
                listarArmarios();
            }
           }).fail(function(jqXHR, textStatus, msg){
            alert(msg);
       
        }); 
    }

    var listarArmarios=function(){
        console.log(":-)");
        $.ajax({
            url : "http://127.0.0.1/cimol/coordenacao/armario/listarComDetalhes",
            type : 'get',
            data : null,
            beforeSend : function(){
                //$("#resultado").html("ENVIANDO...");
            }
           }).done(function(resultado){
            //console.log(resultado);
            if(resultado !=null){
                console.log(resultado);
                armarios=JSON.parse(resultado);
                str="";
                for(i=0; i<armarios.length;i++){
                    console.log(armarios[i]);
                    if(armarios[i]['ocupado']==0){
                        str+="<button type='button' class='btn btn-primary btn-armario' style='margin:5px' title='Disponível'>"+armarios[i]['numero']+"</button>";
                    }else{
                        if(armarios[i]['atraso']>0){
                            str+="<button type='button' class='btn btn-danger btn-armario' style='margin:5px' title='Atraso :"+armarios[i]['nome']+"'>"+armarios[i]['numero']+"</button>";
                        
                        }else{
                            str+="<button type='button' class='btn btn-warning btn-armario' style='margin:5px' title='Ocupado :"+armarios[i]['nome']+"'>"+armarios[i]['numero']+"</button>";
                        
                        }
                    }
                }

                $(document).on('click', '.btn-armario', function(){
                    element=$(this);
                    console.log(":-)");
                   
                    locarArmario();
                    $("#botoes").hide();
                    
                    /*id=element.attr('id');
                    restaurante.delete(id, function(){
                        list();
                    });*/
                    
                });


                $("#armarios").empty();
                console.log(str)
                $("#armarios").html(str);
                ///console.log(resultado);
            }
           }).fail(function(jqXHR, textStatus, msg){
            alert(msg);
       
        }); 
    }

    
    var buscarArmariosDisponiveis=function(callback){
        $.ajax({
            url : "http://127.0.0.1/cimol/coordenacao/armario/listarArmariosDisponiveis",
            type : 'get',
            data : null,
            beforeSend : function(){
                //$("#resultado").html("ENVIANDO...");
            }
           }).done(function(resultado){
            if(resultado !=null){
                armarios=JSON.parse(resultado);
                callback(armarios);
            }
           }).fail(function(jqXHR, textStatus, msg){
            alert(msg);
       
        });
    }

    var listarAlunos= function(callback){
        $.ajax({
            url : "http://127.0.0.1/cimol/coordenacao/aluno/listarAlunos",
            type : 'get',
            data : null,
            beforeSend : function(){
                //$("#resultado").html("ENVIANDO...");
            }
           }).done(function(resultado){
            if(resultado !=null){
                alunos=JSON.parse(resultado);
                callback(alunos);
            }
           }).fail(function(jqXHR, textStatus, msg){
            alert(msg);
       
        });
    }

    var locarArmario=function(){
        $("#aluga-armario").show();
        buscarArmariosDisponiveis(function(armarios){
            if(armarios){
                str="<option> . . . </option>";
                for(i=0; i<armarios.length;i++){
                    str+="<option value='"+armarios[i]['id']+"'>"+armarios[i]['numero']+"</option>";
                }
                $("#select-numero-armario").html(str);
               
            }
            
        });
        /*listarAlunos(function(alunos){
            if(alunos){
                str="";
                for(i=0; i<alunos.length;i++){
                    str+="<option value='"+alunos[i]['pessoa_id']+"'>"+alunos[i]['nome']+"</option>";
                }
                $("#select-aluno").html(str);
            }
        });*/
    }

    listarArmarios();
});