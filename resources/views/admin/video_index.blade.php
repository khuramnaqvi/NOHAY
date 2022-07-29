@extends('admin.layout.main')


@section('body')
 <link rel="stylesheet" href="{{asset('AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('AdminLTE/dist/css/adminlte.min.css')}}">
 <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Nohay</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" action="{{url('/admins/nohay')}}" class="login-form" enctype="multipart/form-data">
                        @csrf
                    <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tittle</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter First Name" name="tittle">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Url</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Last Name" name="url">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Year</label>
                      <select class="form-control" name="year">
                         
                          <option value="2022">2022</option>
                          <option value="2021">2021</option>
                          <option value="2020">2020</option>
                          <option value="2019">2019</option>
                          <option value="2019">2018</option>
                          
                      </select>
                  </div>
                  
                  
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Select Noha Khawan</label>
                      <select class="form-control" name="user_id">
                          @foreach($user as $compay)
                          <option value="{{$compay->id}}">{{$compay->name}}</option>
                          @endforeach
                      </select>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Nohay</h3>
                <button class="btn btn-info" style="float:right;" data-toggle="modal" data-target="#modal-default">Add</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                  <thead>
                    <tr>
                      <th >#</th>
                      <th>Tittle</th>
                      <th>Noha Khawan</th>
                      <th>URL</th>
                      <th>Action</th>

                      
                    </tr>
                  </thead>
                  <tbody>
                    @php  $r=0; @endphp
                  @foreach($emp as $row)
                                      @php  $r++; @endphp

                    <tr>
                      <td>{{$r}}</td>
                      <td>{{$row->tittle}} 
                      </td>
                     
                      
                      
                      <td>{{$row->campanyname->name}}</td>
                      <td>{{$row->url}} 
                      </td>
                      <td>
                          
                            <button class="btn btn-info"  style="min-width: 103px !important;" data-toggle="modal" data-target="#edit-default{{$r}}">Edit</button>
                          
                          <form action="{{ url('/admins/nohay/' .$row->id) }}" method="POST">@method('DELETE')@csrf<button class="btn btn-danger"  onclick="return confirm('Are you sure you want to delete this?');">Delete</button></form>
                        </td>

                    </tr>
                      <div class="modal fade" id="edit-default{{$r}}">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Update Nohay</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form method="POST" action="{{url('/admins/nohay/' .$row->id)}}" class="login-form" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Tittle</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter First Name" name="tittle" value="{{$row->tittle}}">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Url</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Last Name" name="url" value="{{$row->url}}">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Year</label>
                                      <select class="form-control" name="year">
                                         
                                          <option value="2022"  {{ ( $row->year ==2022 ) ? 'selected' : '' }}>2022</option>
                                          <option value="2021" {{ ( $row->year ==2021 ) ? 'selected' : '' }}>2021</option>
                                          <option value="2020" {{ ( $row->year ==2020 ) ? 'selected' : '' }}>2020</option>
                                          <option value="2019" {{ ( $row->year ==2019 ) ? 'selected' : '' }}>2019</option>
                                          <option value="2019" {{ ( $row->year ==2018 ) ? 'selected' : '' }}>2018</option>
                                          
                                      </select>
                                  </div>
                                  
                                  
                                  
                                  
                                <!-- /.card-body -->

                                <div class="card-footer">
                                  <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                              </form>
                            </div>
                            <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>

                    @endforeach
                    
                  </tbody>
                </table>
                    

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- /.card -->
          </div>
        </div>

      </div><!-- /.container-fluid -->
    </section>

<!-- jQuery -->
<script src="{{asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('AdminLTE/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->





<!-- Bootstrap 4 -->
<script src="{{asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- SweetAlert2 -->
<script src="{{asset('AdminLTE/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<!-- Toastr -->
<script src="{{asset('AdminLTE/plugins/toastr/toastr.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('AdminLTE/dist/js/adminlte.min.js')}}"></script>
<script>
     




    @if(session('success'))
    toastr.success("{{ session('success') }}");
    @endif
    @if(session('errory'))
    toastr.error("{{ session('errory') }}");
    @endif

    @if(session('errors'))

            @foreach ($errors->all() as $error)
            toastr.error("{{$error}}");

            @endforeach
    @endif






</script>

@endsection

@section('js')

<script src="{{asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('AdminLTE/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('AdminLTE/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<!-- Page specific script -->

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    
  });
</script>


@endsection