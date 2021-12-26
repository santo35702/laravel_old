<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Coupons</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.coupons.index') }}">Coupons</a></li>
                        <li class="breadcrumb-item active">Add</li>
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
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Coupons Information</h3>
                        </div>
                        <!-- /.card-header -->
                        <form wire:submit.prevent="storeItem">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-8 mx-auto">
                                        @if (session('status'))
                                            <div class="alert alert-success text-uppercase alert-dismissible fade show" role="alert">
                                                {{ session('status') }}
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                        @endif

                                        <div class="form-group">
                                            <label for="code">Coupon Code <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control form-control-border @error('code') is-invalid @enderror" id="code" placeholder="Coupon Code" wire:model="code">
                                            @error ('code')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div><!-- /.form-group -->

                                        <div class="form-group">
                                            <label for="type">Coupon Type <span class="text-danger">*</span></label>
                                            <select class="custom-select form-control-border @error('type') is-invalid @enderror" id="type" wire:model="type">
                                                <option>Select</option>
                                                <option value="fixed">Fixed</option>
                                                <option value="percent">Percent</option>
                                            </select>
                                            @error ('type')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div><!-- /.form-group -->

                                        <div class="form-group">
                                            <label for="value">Coupon Value <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control form-control-border @error('value') is-invalid @enderror" id="value" placeholder="Coupon Code" wire:model="value">
                                            @error ('value')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div><!-- /.form-group -->

                                        <div class="form-group">
                                            <label for="cart_value">Cart Value <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control form-control-border @error('cart_value') is-invalid @enderror" id="cart_value" placeholder="Coupon Code" wire:model="cart_value">
                                            @error ('cart_value')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-sm-8 .mx-auto -->
                                </div><!-- /.row -->
                            </div><!-- /.card-body -->
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-sm-8 mx-auto">
                                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                                    </div><!-- /.col-sm-8 .mx-auto -->
                                </div><!-- /.row -->
                            </div><!-- /.card-footer -->
                        </form>
                    </div><!-- /.card -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
