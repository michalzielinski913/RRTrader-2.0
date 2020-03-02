@extends('head')
@extends('menu')
@section('content')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                </br>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Personal gold offers
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>User</th>
                                        <th>Offer</th>
                                        <th>Profile Link</th>

                                    </tr>
                                </thead>
                                <tbody>
								@foreach($offer_sell as $offer_sell)
                                    <tr class="odd gradeX">
                                          <td>{{ $offer_sell['NickName'] }}</td>
                                        <td><button  data-toggle="modal" data-target="#myModal" type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Click to browse</button></td>
                                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">{{ $offer_sell['NickName'] }} 's offer</h4>
                                        </div>
                                        <div class="modal-body">
										{!! $offer_sell['Other'] !!}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
										
                                        <td class="center">   <a href="https://rivalregions.com/#slide/profile/{{ $offer_sell['RRId']}} "><button  type="button" class="btn btn-primary">PC</button></a> &nbsp <a href="https://m.rivalregions.com/#slide/profile/{{ $offer_sell['RRId']}} "><button  type="button" class="btn btn-primary">Mobile</button></a></td>
</td>

                                    </tr>
@endforeach	
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <!-- /.row -->

            <!-- /.row -->

            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
@endsection('content')
