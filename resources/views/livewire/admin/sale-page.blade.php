<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Manage Sale Time</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Manage Sale</li>
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
                    @if (session('status'))
                        <div class="alert alert-success text-uppercase alert-dismissible fade show" role="alert">
                            {{ session('status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                    @endif
                    <form wire:submit.prevent="updateSale">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Update Sale</h3>

                                <div class="card-tools">
                                    <a href="#" class="btn btn-tool"><i class="fas fa-undo"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="date">Date</label>
                                    <div class="input-group date" id="datepicker" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#datepicker" id="datepicker" wire:model="sale_date"/>
                                        <div class="input-group-append" data-target="#datepicker" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="form-control" id="status" wire:model="status">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                        <div class="form-group">
                            <a href="#" class="btn btn-secondary">Cancel</a>
                            <input type="submit" value="Save Changes" class="btn btn-success float-right">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>

@push('script')
    <!-- InputMask -->
    <script src="{{ asset('admin/plugins/moment/moment.min.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
@endpush

@push('script1')
    <!-- Page specific script -->
    <script>
      $(function () {
          //Date picker
          $('#datepicker').datetimepicker({
              format: 'Y-M-D',
              viewMode: 'years',
              daysOfWeekDisabled: [0, 6]
          })
          .on('dp.change', function (ev) {
              var data = $('#datepicker').val();
              @this.set('sale_date', data);
          });
      })
    </script>
@endpush
