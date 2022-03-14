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
                    <h4 class="text-themecolor">Utilisateur</h4>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Les Utilisateurs</h2>
                    <h4 class="card-subtitle">Liste de tous les utilisateurs</h4>
                    <div class="table-responsive m-t-40">
                        <div id="myTable_wrapper" class="dataTables_wrapper no-footer table-hover">
                            <div class="dataTables_length" id="myTable_length"></div>
                            <div id="myTable_filter" class="dataTables_filter"></div>

                            <table id="myTable" class="table table-bordered table-striped dataTable no-footer" role="grid" aria-describedby="myTable_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">
                                            Nom
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">
                                            Prénom
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending">
                                            Email
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user as $item)

                                        <tr role="row" class="odd">
                                            <td>{{ $item->firstName }}</td>
                                            <td>{{ $item->lastName }}</td>
                                            <td>{{ $item->email }}</td>
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
