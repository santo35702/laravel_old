<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Manage New Arrivals</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Manage Arrivals</li>
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
                    <form wire:submit.prevent="updateItem" enctype="multipart/form-data">
                        @if (session('status'))
                            <div class="alert alert-success text-uppercase alert-dismissible fade show" role="alert">
                                {{ session('status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                        @endif
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">Arrivals Information</h3>
                                <div class="card-tools">
                                    <a href="{{ route('admin.dashboard') }}" class="btn btn-sm btn-info">Home</a>
                                    <button type="button" class="btn btn-tool" data-card-widget="maximize" title="Expand">
                                        <i class="fas fa-expand"></i>
                                    </button>
                                </div>
                                <!-- /.card-tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="form-group" wire:ignore>
                                    <label for="category">Category</label>
                                    <select class="custom-select select2" id="category" name="category[]" multiple="multiple" wire:model="category_id">
                                        @foreach (\App\Models\Category::orderBy('name', 'ASC')->get() as $key)
                                            <option value="{{ $key->id }}">{{ $key->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="no_of_products">No of Products</label>
                                    <input type="text" class="form-control" id="no_of_products" placeholder="Enter Products Number" wire:model="no_of_products">
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                        <div class="form-group">
                            <a href="#" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-success float-right">Submit</button>
                        </div>
                    </form>
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
    <script src="{{ asset('admin/dist/js/demo.js') }}"></script>
@endpush

@push('script1')
    <script>
      $(function () {
        //Initialize Select2 Elements
        $('.select2').select2({
            placeholder: 'Select an option'
        });
        $('.select2').on('change', function (e) {
            var data = $('.select2').select2("val");
            $this.set('category_id', data);
        });
      })

    </script>
@endpush
