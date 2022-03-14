@extends('Templates/layout')

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
                    <h4 class="m-b-0 text-white">Ajouter au Panier le Produit {{ $product["productName"] }}</h4>
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


                    <form action="{{ route("client.add_to_card_post") }}" method="post">
                        @csrf
                        <div class="form-body">
                            <div class="row p-t-20">
                                <div class="col">
                                    <div class="form-group">
                                        <input name="idProduit" type="hidden" value="{{ $product["id"] }}">
                                        <label class="control-label">Titre</label>
                                        <p><h4><label name="titre">{{ $product["productName"] }}</label></h4></p>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col">
                                    <div class="form-group has-danger">
                                        <label class="control-label">Prix</label>
                                        <p><h4><label name="prix">{{ $product["price"] }}</label></h4></p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group has-success">
                                        <label class="control-label">Reste</label>
                                        <p><h4><label name="reste">{{ $product["quantity"] }}</label></h4></p>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col">
                                    <div class="form-group has-success">
                                        <label class="control-label">Quantité</label>
                                        <p>
                                            <input required name="quantite" type="number" id="" class="form-control" placeholder="La quantité du produit">
                                        </p>
                                    </div>
                                </div>
                                <!--/span-->

                            </div>

                        <div class="form-actions">
                            <button type="submit" class="btn btn-success"> <i class="fa fa-cart-plus"></i> Ajouter au Panier</button>
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
