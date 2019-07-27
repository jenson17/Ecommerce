<script>
    $(function(){
        var table_contend = $("#table_index_articles");

        inicializar();
        function inicializar() {
                    table_contend.DataTable({
                        'deferLoading': true,
                        'paging': true,
                        'info': true,
                        "processing": false,
                        "serverSide": false,
                        'filter': true,
                        'stateSave': true,
                        'responsive': true,
                        "language": {
                            "paginate": {
                                "previous": "<span aria-hidden='true'>&laquo;</span>",
                                "next": "<span aria-hidden='true'>&raquo;</span>",
                            },
                            lengthMenu: 'Mostrar _MENU_ ',
                            zeroRecords: 'Sin resultados',
                            info: '',
                            infoEmpty: 'Sin registros disponibles',
                            infoFiltered: 'Filtrados de _MAX_ registros totales',
                            search: 'Buscar',
                        },
                        'ajax': {
                            "url": '{{url("articles")}}',
                            "type": "GET",
                            dataSrc: '',
                        },
                        'columns': [
                            {data: 'nombre'},
                            {data: 'descripcion'},
                            {
                                "render": function (data, type, JsonResultRow, meta) {
                                    return '<img class="thumbnail" width="50px" height="50px" src="'+JsonResultRow.foto_url+'">';
                                }
                            },
                            { data: 'precio'},
                            {
                                render: function (data, type, row) {

                                    var btn_ver = '<a href="' + row.id + '" class="btn btn-info ver-article" title="Ver" data-toggle="tooltip"><i class="fa fa-search"></i></a>';

                                    var btn_editar = '<a href="' + row.id + '" class="btn btn-success editar-article" title="Editar" data-toggle="tooltip"><i class="fa fa-edit"></i></a>';
                                 
                                    var btn_eliminar = '<a href="' + row.id + '" class="btn btn-danger eliminar-article" title="Eliminar" data-toggle="tooltip"><i class="fa fa-remove"></i></a>';
                                    
                                    return (btn_ver + ' ' + btn_editar + ' ' +btn_eliminar);
                                }
                            }
                        ]
                    });
                }

                $("#create_article").submit(function(e){
            
                   var formData = new FormData(this);
                   e.preventDefault();

                    $.ajax({
                        url: '{{ url('articles') }}',
                        type: 'POST',
                        enctype: 'multipart/form-data',
                        data: formData,
                        contentType: false,
                        processData: false,
                        beforeSend: function(){
                            console.log('procesando peticion');
                        },
                        success: function(respuesta){
                            if (respuesta.success) {
                                 toastr.success(respuesta.mensaje,'Enhorabuena');
                                    $("#create_article")[0].reset();
                                    $("#create").modal('hide');
                                    table_contend.DataTable().ajax.reload();
                            }
                        },
                        error: function (e) {
                           console.log(e);
                            $.each(e.responseJSON.errors, function (index, element) {
                                if ($.isArray(element)) {
                                    toastr.error(element[0],'¡Error inesperado!');
                                }
                            });
                        }
                    });
                });

                $('body').on('click', 'tbody .ver-article', function (e) {

                    e.preventDefault();

                    id = $(this).attr('href');

                    $.ajax({
                        url: "{{url('articles')}}/" + id,
                        type: 'GET',
                        dataType: 'json',
                        beforeSend: function(){
                            console.log('procesando peticion');
                        },
                        success: function(respuesta){
                            if (respuesta.success) {
                                
                                $("#article_show #nombre").html(respuesta.nombre);
                                
                                $("#article_show #descripcion").html(respuesta.descripcion);

                                $("#article_show #precio").html(respuesta.precio);

                                $("#article_show #foto").attr('src', "{{ url("/") }}" + respuesta.foto);

                                $("#show_article").modal('show');
                            }
                        },
                        error: function (e) {
                           console.log(e);
                            $.each(e.responseJSON.errors, function (index, element) {
                                if ($.isArray(element)) {
                                    toastr.error(element[0],'¡Error inesperado!');
                                }
                            });   
                        }
                    });
                });

                $('body').on('click', 'tbody .editar-article', function (e) {

                    e.preventDefault();

                    id = $(this).attr('href');

                    $.ajax({
                        url: "{{url('/articles/')}}/" + id,
                        type: 'GET',
                        dataType: 'json',
                        beforeSend: function(){
                            console.log('procesando peticion');
                        },
                        success: function(respuesta){
                            if (respuesta.success) {

                                $("#article_edit").attr('action' , '{{ url('articles') }}/'+respuesta.id );
                                $("#article_edit").attr('method', 'PUT');

                                 $("#article_edit #nombre").val(respuesta.nombre);
                                
                                $("#article_edit #descripcion").val(respuesta.descripcion);

                                $("#article_edit #precio").val(respuesta.precio);

                                $("#edit_article").modal('show');
    
                            }
                        },
                        error: function (e) {
                           console.log(e);
                            $.each(e.responseJSON.errors, function (index, element) {
                                if ($.isArray(element)) {
                                    toastr.error(element[0],'¡Error inesperado!');
                                }
                            });   
                        }
                    });
                });

                $("#article_edit").submit(function(e){

                    var formData = $(this).serialize();
                    e.preventDefault();


                    $.ajax({
                        url: $("#article_edit").attr("action"),
                        type: 'PUT',
                        dataType: 'json',
                        data: formData,
                        beforeSend: function(){
                            console.log('procesando peticion');
                        },
                        success: function(respuesta){
                            if (respuesta.success) {
                                 toastr.success(respuesta.mensaje,'Enhorabuena');
                                 $("#article_edit")[0].reset();
                                 $("#edit_article").modal('hide');
                                 table_contend.DataTable().ajax.reload();
                            }
                        },
                        error: function (e) {
                           console.log(e);
                            $.each(e.responseJSON.errors, function (index, element) {
                                if ($.isArray(element)) {
                                    toastr.error(element[0],'¡Error inesperado!');
                                }
                            });   
                        }
                    });
                });


                $('body').on('click', 'tbody .eliminar-article', function (e) {
                    id=$(this).attr('href');
                    token = $("input[name=_token]").val();
                    e.preventDefault();
                    swal({
                        title: '',
                        text: '¿Seguro deseas eliminar el artículo?',
                        type: 'question',
                        showCancelButton: true,
                        confirmButtonText: 'Si',
                        cancelButtonText: 'No'
                      }).then(function() {
                         $.ajax({
                            url: "{{url('articles')}}/"+id,
                            headers: {'X-CSRF-TOKEN': token},
                            type: 'DELETE',
                            datatype: 'json',
                            success: function (respuesta) {
                                if (respuesta.success) {
                                        table_contend.DataTable().ajax.reload();
                                        toastr.success(respuesta.mensaje,'Enhorabuena');
                                } else {
                                     toastr.error(respuesta.error,'¡Error inesperado!');
                                }
                            },
                            error: function (e) {
                                console.log(e);
                                $.each(e.responseJSON.errors, function (index, element) {
                                    if ($.isArray(element)) {
                                        toastr.error(element[0],'¡Error inesperado!');
                                    }
                                });
                            }
                        });
                    }).catch(swal.noop);
                }); 
    });
</script>