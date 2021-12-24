<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Coupons</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Coupons</li>
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
                            <h3 class="card-title">All Coupons List</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                @if ($coupons->count() > 0)
                                    @foreach ($coupons as $key)
                                    <div class="col-sm-2">
                                        <div class="position-relative p-3 bg-gray" style="height: 130px">
                                            <div class="ribbon-wrapper">
                                                <div class="ribbon bg-success">
                                                    Coupon
                                                </div>
                                            </div>
                                            Coupon Code <br /> Coupon Type <br /> Coupon Value <br />
                                            <small>Cart Value</small>
                                            <small>Action</small>
                                        </div>
                                    </div>
                                    @endforeach
                                @else
                                    <div class="col-sm-12">
                                        <div class="alert alert-info" role="alert">
                                            <h4 class="alert-heading"><i class="icon fas fa-ban"></i> Sorry..!!</h4>
                                            <p>There is no Coupons Exist in server.</p>
                                            <hr>
                                            <p class="mb-0">Please make sure you have already added some Coupons.</p>
                                        </div>
                                    </div>
                                @endif

                            </div>
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
