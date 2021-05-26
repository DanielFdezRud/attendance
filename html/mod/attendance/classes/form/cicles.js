$(function(){
    document.getElementById('id_module').addEventListener('change',prueba);


    function prueba(){

        $.getJSON('./classes/form/extract_json.php',pintaUF);


        function pintaUF(dades){
            var res=JSON.parse(dades);
            var prue=res.cicles.DAM.M1.nom;


            $('#id_uf').html('<option>'+prue+'</option>');

            $('#fitem_id_module').append('<p>'+prue+'</p>');

        }
        console.log('hola');
        var indiceSeleccionado = this.selectedIndex;
        console.log(indiceSeleccionado);
        var opcionSeleccionada = this.options[indiceSeleccionado];
        console.log(opcionSeleccionada.text);
    }
});