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
                    <h4 class="text-themecolor">Acceuil</h4>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Les Produits</h2>
                    <h4 class="card-subtitle">Liste de tous les produits</h4>
                    <div class="table-responsive m-t-40">
                        <div id="myTable_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="myTable_length"></div><div id="myTable_filter" class="dataTables_filter"></div><table id="myTable" class="table table-bordered table-striped dataTable no-footer" role="grid" aria-describedby="myTable_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 170.172px;">
                                        Name
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 267.906px;">
                                        Position
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 129.359px;">
                                        Office
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 65.1094px;">
                                        Age
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 110.125px;">
                                        Start date
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 91.328px;">
                                        Salary
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">Airi Satou</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>33</td>
                                    <td>2008/11/28</td>
                                    <td>$162,700</td>
                                </tr><tr role="row" class="even">
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
