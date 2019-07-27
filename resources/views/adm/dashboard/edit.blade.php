<div aria-hidden="true" aria-labelledby="exampleModalLabel1" class="modal fade" id="edit_article" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel1">
                    Editar Articulo
                </h4>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">
                        ×
                    </span>
                </button>
            </div>
            <form id="article_edit">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <div class="col-md-6">
                                <label for="nombre">
                                    Nombre
                                </label>
                                <input class="form-control" id="nombre" name="nombre" placeholder="Nombre" type="text">
                                </input>
                            </div>
                            <div class="col-md-6">
                                <label for="apellido">
                                    Descripción
                                </label>
                                <textarea class="form-control" id="descripcion" name="descripcion" rows="5">
                                </textarea>
                            </div>
                        </div>
                        <div class="col-md-6 form-group">
                            <div class="col-md-12">
                                <label for="apodo">
                                    Precio
                                </label>
                                <input class="form-control" id="precio" min="1" name="precio" placeholder="Precio" step="any" type="number">
                                </input>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-dismiss="modal" type="button">
                            Cerrar
                        </button>
                        <button class="btn btn-primary btn-rounded" id="editar" type="submit">
                            Editar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>