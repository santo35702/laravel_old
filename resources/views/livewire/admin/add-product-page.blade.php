<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Products</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.products.index') }}">Products</a></li>
                        <li class="breadcrumb-item active">Add New</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <form wire:submit.prevent="storeItem" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-6">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">Products Information</h3>
                                <div class="card-tools">
                                    <a href="{{ route('admin.products.index') }}" class="btn btn-sm btn-info">Products</a>
                                    <button type="button" class="btn btn-tool" data-card-widget="maximize" title="Expand">
                                        <i class="fas fa-expand"></i>
                                    </button>
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
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" placeholder="Enter Products Title" wire:model="title" wire:keyup="generateslug">
                                </div>
                                <div class="form-group">
                                    <input type="hidden" class="form-control" wire:model="slug">
                                </div>
                                <div class="form-group">
                                    <label for="short_description">Short Description</label>
                                    <textarea class="form-control" rows="5" placeholder="Enter Description" id="short_description" wire:model="short_description"></textarea>
                                </div>
                                <div class="form-group" id="summernote">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" rows="5" placeholder="Enter Description" id="description" wire:model="description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="regular_price">Regular Price</label>
                                    <input type="text" class="form-control" id="regular_price" placeholder="Enter Products Title" wire:model="regular_price">
                                </div>
                                <div class="form-group">
                                    <label for="sale_price">Sale Price</label>
                                    <input type="text" class="form-control" id="sale_price" placeholder="Enter Products Title" wire:model="sale_price">
                                </div>
                                <div class="form-group">
                                    <label for="sku">SKU</label>
                                    <input type="text" class="form-control" id="sku" placeholder="Enter Products Title" wire:model="sku">
                                </div>
                                <div class="form-group">
                                    <label for="stock">Stock Status</label>
                                    <select class="form-control" id="stock">
                                        <option>In-Stock</option>
                                        <option>Out of Stock</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="featured">Featured</label>
                                    <select class="form-control" id="featured">
                                        <option>No</option>
                                        <option>Yes</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="quantity">Quantity</label>
                                    <input type="text" class="form-control" id="quantity" placeholder="Enter Products Title" wire:model="quantity">
                                </div>
                                <div class="form-group">
                                    <label for="image">Product Image</label>
                                    <input type="file" class="form-control" id="image" wire:model="image">
                                </div>
                                <div class="form-group">
                                    <label for="featured">Category</label>
                                    <select class="form-control" id="featured">
                                        <option>Select Category...</option>
                                        <option>Category1</option>
                                        <option>Category2</option>
                                        <option>Category3</option>
                                        <option>Category4</option>
                                        <option>Category5</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-6">
                        <div class="card card-secondary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">Others Information</h3>
                                <div class="card-tools">
                                    <a href="{{ route('admin.products.index') }}" class="btn btn-tool"><i class="fas fa-undo"></i></a>
                                    <button type="button" class="btn btn-tool" data-card-widget="maximize" title="Expand">
                                        <i class="fas fa-expand"></i>
                                    </button>
                                </div>
                                <!-- /.card-tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" placeholder="Enter Products Title" wire:model="title" wire:keyup="generateslug">
                                </div>
                                <div class="form-group">
                                    <input type="hidden" class="form-control" wire:model="slug">
                                </div>
                                <div class="form-group">
                                    <label for="short_description">Short Description</label>
                                    <textarea class="form-control" rows="5" placeholder="Enter Description" id="short_description" wire:model="short_description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" rows="5" placeholder="Enter Description" id="description" wire:model="description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" placeholder="Enter Products Title" wire:model="title" wire:keyup="generateslug">
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-12">
                        <div class="form-group">
                            <a href="#" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-success float-right">Submit</button>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </form>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
