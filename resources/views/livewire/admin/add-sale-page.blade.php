<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Sale Time</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.sale.index') }}">Manage Sale</a></li>
                        <li class="breadcrumb-item active">Insert Sale</li>
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
                    <form wire:submit.prevent="addSale">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Sale Information</h3>

                                <div class="card-tools">
                                    <a href="{{ route('admin.sale.index') }}" class="btn btn-tool"><i class="fas fa-undo"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="datetimepicker">Date</label>
                                    <div class="input-group date" id="datetimepicker" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker" id="datetimepicker" wire:model="sale_date"/>
                                        <div class="input-group-append" data-target="#datetimepicker" data-toggle="datetimepicker">
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
                            <input type="submit" value="Add Sale Date" class="btn btn-success float-right">
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
          $('#datetimepicker').datetimepicker({
              format: 'Y-M-D h:mm:ss A',
              // viewMode: 'years',
              // daysOfWeekDisabled: [0, 6]
              // tooltips: {
              //     today: 'Go to Today',
              // },
              icons: {
                  time: 'far fa-clock',
                  date: "far fa-calendar",
              }
          })
          // .on('dp.change', function (ev) {
          //     var data = $('#datepicker').val();
          //     #this.set('sale_date', data);
          // });
      })
    </script>
@endpush
