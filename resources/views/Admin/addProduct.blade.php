@extends('Templates/layoutAdmin')

@section('content')

    <link rel="stylesheet" href="assets/node_modules/dropify/dist/css/dropify.min.css">

    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor">Produit</h4>
                </div>
            </div>

            <div class="card">
                <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white">Formulaire d'ajout</h4>
                </div>
                <div class="card-body">

                    @if (session()->get('success'))
                        <div class="alert alert-success" role="alert">
                            <strong>{{ session()->get('success') }}</strong>
                        </div>
                    @endif

                    @if (session()->get('error'))
                        <div class="alert alert-danger" role="alert">
                            <strong>{{ session()->get('error') }}</strong>
                        </div>
                    @endif


                    <form action="{{ route("admin.addProduct_post") }}" method="post">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">File Upload1</h4>
                                            <label for="input-file-now">Your so fresh input file — Default version</label>
                                            <div class="dropify-wrapper"><div class="dropify-message"><span class="file-icon"></span> <p>Drag and drop a file here or click</p><p class="dropify-error">Ooops, something wrong appended.</p></div><div class="dropify-loader"></div><div class="dropify-errors-container"><ul></ul></div><input type="file" id="input-file-now" class="dropify"><button type="button" class="dropify-clear">Remove</button><div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p><p class="dropify-infos-message">Drag and drop or click to replace</p></div></div></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="control-label">Titre</label>
                                        <input required name="titre" type="text" id="firstName" class="form-control" placeholder="Entrer le titre du produits">
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col">
                                    <div class="form-group has-danger">
                                        <label class="control-label">Prix</label>
                                        <input required name="prix" type="number" id="" class="form-control" placeholder="Entrer le Prix">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group has-success">
                                        <label class="control-label">Quantité</label>
                                        <input required name="quantite" type="number" id="" class="form-control" placeholder="La quantité du produit">
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="control-label">Description</label>
                                        <textarea required name="description" class="form-control form-control" id="idDesc" cols="30" rows="5" placeholder="Commentez"></textarea>
                                    </div>
                                </div>
                            </div>
                            <!--/row-->

                        <div class="form-actions">
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Enregistrer</button>
                            <button type="button" class="btn btn-inverse">Annuler</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Info box -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    </div>

    <script src="assets/node_modules/dropify/dist/js/dropify.min.js"></script>

    <script>
        $(document).ready(function() {
            // Basic
            $('.dropify').dropify();

            // Translated
            $('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez',
                    replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                    remove: 'Supprimer',
                    error: 'Désolé, le fichier trop volumineux'
                }
            });

            // Used events
            var drEvent = $('#input-file-events').dropify();

            drEvent.on('dropify.beforeClear', function(event, element) {
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });

            drEvent.on('dropify.afterClear', function(event, element) {
                alert('File deleted');
            });

            drEvent.on('dropify.errors', function(event, element) {
                console.log('Has Errors');
            });

            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function(e) {
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                } else {
                    drDestroy.init();
                }
            })
        });
        </script>

@endsection
