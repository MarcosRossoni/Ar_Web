$(function(){
    $("#btn-formacao").click(function(e){

        e.preventDefault();

        var linha = 
        '<br></br>' +
        '<div class="card"></div>' +
        '   <div class="imputBox">' +
        '       <div class="row">'+
        '           <div class="col-12 col-md-5">' +
        '               <input type="text" class="inputUser" name="curso[]">' +
        '               <label>Curso</label>' +
        '           </div>' +
        '           <br></br>' +
        '           <div class="col-12 col-md-5">' +
        '               <input type="text" class="inputUser" name="instituicao[]">' +
        '               <label>Instituacao</label>' +
        '           </div>' +
        '           <br></br>' +
        '           <label>Status</label>' +
        '           <select name="selectFormacao[]">' +
        '               <option value="Cursando">Cursando</option>' +
        '               <option value="Concluido">Concluido</option>' +
        '           </select>' +
        '       </div>' +
        '   </div>' +
        '</div>';
        
        $("#div-formacoes").append(linha);
    });

    $("#btn-experiencia").click(function(e){
        e.preventDefault();

        var linha = 
        '<br></br>' +
        '<div class="card"></div>' +
        '   <div class="imputBox">' +
        '       <div class="row">'+
        '           <div class="col-12 col-md-5">' +
        '              <input type="text" class="inputUser" name="empresa[]">' +
        '               <label>Empresa</label>' +
        '           </div>' +
        '           <br></br>' +
        '           <div class="col-12 col-md-5">' +
        '               <input type="text" class="inputUser" name="cargo[]">' +
        '               <label>Cargo</label>' +
        '           </div>' +
        '           <br></br>' +
        '           <label>Periodo</label>' +
        '           <div class="date">' +
        '               <label for="dataInicio">Informe a data de Inicio</label>' +
        '               <input type="date" name="dataInicio" id="dataInicio">' +
        '           </div>' +
        '           <br></br>' +
        '           <div class="date">' +
        '               <label for="dataFim">Informe a data de dataFim</label>' +
        '               <input type="date" name="dataFim" id="dataFim">' +
        '           </div>' +
        '           <br></br>' +
        '           <label>Status</label>' +
        '           <select name="selectFormacao[]">' +
        '               <option value="Cursando">Cursando</option>' +
        '               <option value="Concluido">Concluido</option>' +
        '           </select>' +
        '       </div>' +
        '   </div>' +
        '</div>';
        
        $("#div-experiencia").append(linha);
    });

    $("#div-formacoes, #div-experiencia").on("click", ".btn-remover-item", function(){
        $(this).parent().parent().parent().parent().remove();
    })
});