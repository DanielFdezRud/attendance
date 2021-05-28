$(function(){

    $('#id_module').prepend('<option selected disabled hidden></option>');
    $('#id_uf').prop('disabled',true).html('<option selected disabled hidden></option>');
    $('#id_module').change(cargarUf);
    $('#id_uf').change(cargarInfo);

    var creado = false;
    var creado2 = false;
    var category = '';

    $.getJSON('./classes/form/getCategory.php',getCategory);

    function getCategory(data){
        console.log(data);
    }

    function cargarUf(){
        var indiceSeleccionado = this.selectedIndex;
        var opcionSeleccionada = this.options[indiceSeleccionado];
        var texto = opcionSeleccionada.text;

        $.getJSON('./classes/form/extract_json.php',pintaUF);

        function pintaUF(dades) {
            var res = JSON.parse(dades);
            var ufs = res['DAM'][texto];
            var regex = /^uf[1-9]/i;
            var contenido = ``;
            var i = 0;
            for(var indice in ufs){
                if (indice.match(regex)) {
                    contenido += `<option value = ${i}>${indice}</option>`;
                    i++;
                }
            }

            $('#id_uf').html(contenido).prop('disabled',false);

            if (creado) {
                $('#div1').remove();
                $('#div2').remove();
                $('#div3').remove();
                $('#div4').remove();
            }else{
                creado = true;
            }
            $('#fitem_id_module').append('<div id="div1">- Nom: ' + res['DAM'][texto]['nom'] + '     </br></div>');
            $('#div1').append('<div id="div2">- Hores minimes: '+ res['DAM'][texto]['hores_min'] + '       </br></div> ' ).css('margin','0% 25%');
            $('#div2').append('<div id="div3">- Hores minimes: '+ res['DAM'][texto]['hores_hld'] + '       </br></div> ' );
            $('#div3').append('<div id="div4">- Hores minimes: '+ res['DAM'][texto]['hores_totals'] + '       </br></div> ' );
        }
    }
    function cargarInfo(){
        var select = document.getElementById('id_module');
        var indiceSeleccionadoMod = select.selectedIndex;
        var opcionSeleccionadaMod = select.options[indiceSeleccionadoMod];
        var textoMod = opcionSeleccionadaMod.text;


        var indiceSeleccionadoUf = this.selectedIndex;
        var opcionSeleccionadaUf = this.options[indiceSeleccionadoUf];
        var textoUf = opcionSeleccionadaUf.text;

        $.getJSON('./classes/form/extract_json.php',pintaInfo);

        function pintaInfo(dades) {
            var res = JSON.parse(dades);
            if (creado2) {
                $('#div5').remove();
                $('#div6').remove();
            }else{
                creado2 = true;
            }
            $('#fitem_id_uf').append('<div id="div5">- Nom: ' + res['DAM'][textoMod][textoUf]['nom'] + '</br></div>');
            $('#div5').append('<div id="div6">- Hores: '+ res['DAM'][textoMod][textoUf]['hores'] + '       </br></div> ' ).css('margin','0% 25%');
        }
    }
});