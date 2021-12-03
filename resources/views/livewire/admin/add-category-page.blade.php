<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Categories</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.categories.index') }}">Categories</a></li>
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
                            <h3 class="card-title">Categories Information</h3>
                            <div class="card-tools">
                                <a href="{{ route('admin.categories.index') }}" class="btn btn-sm btn-info">Categories</a>
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
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter Category Name" wire:model="name" wire:keyup="generateslug">
                                </div>
                                <div class="form-group">
                                    <input type="hidden" class="form-control" wire:model="slug">
                                </div>
                                <div class="form-group" id="summernote">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" rows="5" placeholder="Enter Description" id="description" wire:model="description"></textarea>
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
