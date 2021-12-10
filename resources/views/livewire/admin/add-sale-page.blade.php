<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Sale Timer</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.sale.index') }}">Sale</a></li>
                        <li class="breadcrumb-item active">Add New</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Sale Timer Information</h3>
                            <div class="card-tools">
                                <a href="{{ route('admin.sale.index') }}" class="btn btn-sm btn-info">Sale</a>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success text-uppercase" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form wire:submit.prevent="storeItem">
                                {{-- <div class="input-group date mb-3" id="reservationdate" data-target-input="nearest">
                                    <div class="input-group-prepend">
                                        <label for="date" class="input-group-text">Date:</label>
                                    </div> --}}
                                    {{-- <div class="input-group date" id="reservationdate" data-target-input="nearest"> --}}
                                        {{-- <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" wire:model="slug"/>
                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div> --}}
                                    {{-- </div> --}}
                                {{-- </div> --}}
                                {{-- <div class="form-group">
                                    <label for="date">Date:</label>
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" wire:model="slug"/>
                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div> --}}
                                {{-- <div class="form-group">
                                    <label for="date">Date from Tempus:</label>
                                    <div class="input-group" id="datetimepicker4" data-td-target-input='nearest' data-td-target-toggle='nearest'>
                                        <input type="text" class="form-control" data-td-target='#datetimepicker4' id='datetimepicker4Input' wire:model="slug"/>
                                        <div class="input-group-append" data-td-target='#datetimepicker4' data-td-toggle='datetimepicker'>
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="form-group">
                                    <label>Date:</label>
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label for="status" class="input-group-text">Status</label>
                                    </div>
                                    <select class="custom-select" id="status" wire:model="status">
                                        <option value="0">Active</option>
                                        <option value="1">In-Active</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success float-right">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@push('script')
    <!-- InputMask -->
    <script src="{{ asset('admin/plugins/moment/moment.min.js') }}"></script>
    <!-- date-range-picker -->
    <script src="{{ asset('admin/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('admin/dist/js/demo.js') }}"></script>
@endpush

@push('script')
    <script>
      $(function () {

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })

        //Date picker
        $('#reservationdate').datetimepicker({
            format: 'L'
        });

      })
    </script>
@endpush
