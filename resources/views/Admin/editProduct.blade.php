@extends('Templates/layoutAdmin')

@section('content')


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
                    <h4 class="m-b-0 text-white">Modifier le Produit {{ $product[0]->productName }}</h4>
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


                    <form action="{{ route("admin.editProduct_post") }}" method="post">
                        @csrf
                        <div class="form-body">
                            <div class="row p-t-20">
                                <div class="col">
                                    <div class="form-group">
                                        <input type="hidden" value="{{ $product[0]->idProduct }}" name="idProduit">
                                        <label class="control-label">Titre</label>
                                        <input value="{{ $product[0]->productName }}" required name="titre" type="text" id="firstName" class="form-control" placeholder="Entrer le titre du produits">
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col">
                                    <div class="form-group has-danger">
                                        <label class="control-label">Prix</label>
                                        <input value="{{ $product[0]->price }}" required name="prix" type="number" id="" class="form-control" placeholder="Entrer le Prix">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group has-success">
                                        <label class="control-label">Quantité</label>
                                        <input value="{{ $product[0]->quantity }}" required name="quantite" type="number" id="" class="form-control" placeholder="La quantité du produit">
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="control-label">Description</label>
                                        <textarea required name="description" class="form-control form-control" id="idDesc" cols="30" rows="5" placeholder="Commentez">{{ $product[0]->description }}</textarea>
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

@endsection
