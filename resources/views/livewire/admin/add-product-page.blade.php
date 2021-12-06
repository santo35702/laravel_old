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
                    @if (session('status'))
                        <div class="col-12">
                            <div class="alert alert-success text-uppercase alert-dismissible fade show" role="alert">
                                {{ session('status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                        </div>
                    @endif
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
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" placeholder="Enter Products Title" wire:model="title" wire:keyup="generateslug">
                                </div>
                                <div class="form-group">
                                    <input type="hidden" class="form-control" wire:model="slug">
                                </div>
                                <div class="form-group">
                                    <label for="short_description">Short Description</label>
                                    <textarea class="form-control" rows="5" placeholder="Enter Short Description" id="short_description" wire:model="short_description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="regular_price">Regular Price</label>
                                    <input type="number" class="form-control" id="regular_price" placeholder="Enter Products Regular Price" wire:model="regular_price">
                                </div>
                                <div class="form-group ">
                                    <div class="custom-file mb-3">
                                        <label for="image" class="custom-file-label">Product Image</label>
                                        <input type="file" class="custom-file-input" id="image" wire:model="image">
                                        @if ($image)
                                            <img src="{{ $image->temporaryUrl() }}" alt="Product image" class="img-fluid img-thumbnail" width="100">
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="featured">Category</label>
                                    <select class="custom-select select2" id="featured" wire:model="category_id">
                                        <option>Select Category...</option>
                                        @foreach (\App\Models\Category::orderBy('name', 'ASC')->get() as $key)
                                            <option value="{{ $key->id }}">{{ $key->name }}</option>
                                        @endforeach
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
                                <div class="form-group"> <!-- id="summernote" -->
                                    <label for="description">Description</label>
                                    <textarea class="form-control" rows="5" placeholder="Enter Description" id="description" wire:model="description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="sale_price">Sale Price</label>
                                    <input type="number" class="form-control" id="sale_price" placeholder="Enter Products Sale Price" wire:model="sale_price">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label for="stock" class="input-group-text">Stock Status</label>
                                    </div>
                                    <select class="custom-select" id="stock" wire:model="stock_status">
                                        <option value="instock">In-Stock</option>
                                        <option value="outofstock">Out of Stock</option>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label for="featured" class="input-group-text">Featured</label>
                                    </div>
                                    <select class="custom-select" id="featured" wire:model="featured">
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="quantity">Quantity</label>
                                    <input type="text" class="form-control" id="quantity" placeholder="Enter Products Quantity" wire:model="quantity">
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <label for="sku" class="input-group-text">SKU</label>
                                    </div>
                                    <input type="text" class="form-control" id="sku" placeholder="Enter Products SKU" wire:model="sku">
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
