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
                    <h4 class="text-themecolor">Panier</h4>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Mon Panier</h2>
                    <h4 class="card-subtitle">Liste de tous les produits dans mon panier</h4>
                    <div class="table-responsive m-t-40">

                        @if (session()->get('msg'))
                            <div class="alert alert-success" role="alert">
                                <strong>{{ session()->get('msg') }}</strong>
                            </div>
                        @endif

                        <div id="myTable_wrapper" class="dataTables_wrapper no-footer table-hover">
                            <div class="dataTables_length" id="myTable_length"></div>
                            <div id="myTable_filter" class="dataTables_filter"></div>
                            <table id="myTable" class="table table-bordered table-striped dataTable no-footer" role="grid" aria-describedby="myTable_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending">
                                            Image
                                        </th>
                                        <th class="sorting_asc" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">
                                            Titre
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">
                                            Prix
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending">
                                            Quantité
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending">
                                            Description
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($product as $item)

                                        <tr role="row" class="odd">
                                            <td>{{ $item["image"] }}</td>
                                            <td>{{ $item["productName"] }}</td>
                                            <td>{{ intval($item["price"] ) * intval($item["quantite"]) }}</td>
                                            <td>{{ $item["quantite"] }}</td>
                                            <td>{{ $item["description"] }}</td>
                                            <td>
                                                <a href="/valider_panier/{{ $item["id"] }}">
                                                    <button type="button" class="btn btn-warning">
                                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr><tr role="row" class="even">

                                    @endforeach

                                </tbody>
                            </table>
                        <div class="dataTables_info" id="myTable_info" role="status" aria-live="polite"></div>
                    </div>
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
