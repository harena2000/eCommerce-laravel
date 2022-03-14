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
                    <h4 class="text-themecolor">Produits</h4>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Les Produits</h2>
                    <h4 class="card-subtitle">Liste de tous les produits</h4>
                    <div class="table-responsive m-t-40">
                        <a href="{{ route("admin.addProduct") }}">
                            <button type="button" class="btn btn-success">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                Ajouter un Produit
                            </button>
                        </a>
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
                                            <td>{{ $item->image }}</td>
                                            <td>{{ $item->productName }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td>{{ $item->quantity }}</td>
                                            <td>{{ $item->description }}</td>
                                            <td>
                                                <a href="/editProduct/{{ $item->idProduct }}">
                                                    <button type="button" class="btn btn-warning">
                                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                                    </button>
                                                </a>
                                                <a href="/deleteProduct/{{ $item->idProduct }}">
                                                    <button type="button" class="btn btn-danger">
                                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr><tr role="row" class="even">

                                    @endforeach

                                </tbody>
                            </table>
                        <div class="dataTables_info" id="myTable_info" role="status" aria-live="polite"></div>

                        <div class="row">
                            <div class="col-12">

                                <!-- Row -->
                                <div class="row">
                                    <!-- column -->
                                    <div class="col-lg-3 col-md-6">
                                        <!-- Card -->
                                        <div class="card">
                                            <img class="card-img-top img-responsive" src="../assets/images/big/img1.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">Card title</h4>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                                            </div>
                                        </div>
                                        <!-- Card -->
                                    </div>
                                    <!-- column -->
                                    <!-- column -->
                                    <div class="col-lg-3 col-md-6">
                                        <!-- Card -->
                                        <div class="card">
                                            <img class="card-img-top img-responsive" src="../assets/images/big/img2.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">Card title</h4>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                                            </div>
                                        </div>
                                        <!-- Card -->
                                    </div>
                                    <!-- column -->
                                    <!-- column -->
                                    <div class="col-lg-3 col-md-6">
                                        <!-- Card -->
                                        <div class="card">
                                            <img class="card-img-top img-responsive" src="../assets/images/big/img3.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">Card title</h4>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                                            </div>
                                        </div>
                                        <!-- Card -->
                                    </div>
                                    <!-- column -->
                                    <!-- column -->
                                    <div class="col-lg-3 col-md-6 img-responsive">
                                        <!-- Card -->
                                        <div class="card">
                                            <img class="card-img-top img-responsive" src="../assets/images/big/img4.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">Card title</h4>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                                            </div>
                                        </div>
                                        <!-- Card -->
                                    </div>
                                    <!-- column -->
                                </div>
                                <!-- Row -->
                            </div>
                        </div>
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
