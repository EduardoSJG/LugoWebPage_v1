<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $('#tabla').DataTable();
    });

    function ejecutar(tipo, cant, id) {
        var asset = "{{ asset('') }}";
        var ruta = asset + 'ejecutar_ajax/' + tipo + '/' + cant + '/' + id;

        $.ajax({
            type: 'GET',
            url: ruta,
            success: function(data) {
                $("#respuesta").html(data);
            }
        });
    }

    function actualizar(id, exis, pc, pv) {
        var asset = "{{ asset('') }}";
        var ruta = asset + 'actualizar_prod/' + id + '/' + exis + '/' + pc + '/' + pv;
        $.ajax({
            type: 'GET',
            url: ruta,
            success: function(data) {
                $("#respuesta_actualizar").html(data);
            }
        })
    }
    function llenar_entidades(id_pais) 
    {
        $("#id_entidad").empty();
        var asset = "{{ asset('') }}";
        var ruta = asset + 'combo_entidades_x_pais/' + id_pais;
        
        $.ajax(
        {
            type: 'GET',
            url: ruta,
            success: function(data) 
            {
                
                var entidades = data;
                for (var i = 0; i < entidades.length; i++) 
                {
                    $('#id_entidad').append('<option value="'+
                    entidades[i].id+'">'+
                    entidades[i].nombre+
                    '</option>');
                }
            }
        });
    }

    function llenar_campos(id) {
        var asset = "{{ asset('') }}";
        var ruta = asset + 'llenar_campos/' + id;
        $.ajax({
            type: 'GET',
            url: ruta,
            success: function(data) {
                $("#campos").html(data);
            }
        })
    }

    
</script>

</body>

</html>