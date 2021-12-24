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
                            <h3 class="card-title">Add New Coupons</h3>
                        </div>
                        <!-- /.card-header -->
                        <form>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-8 mx-auto">
                                        <div class="form-group">
                                            <label for="code">Coupon Code</label>
                                            <input type="text" class="form-control form-control-border" id="code" placeholder="Coupon Code">
                                        </div>
                                        <div class="form-group">
                                            <label for="type">Coupon Type</label>
                                            <select class="custom-select form-control-border" id="type">
                                                <option>Select</option>
                                                <option value="fixed">Fixed</option>
                                                <option value="percent">Percent</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="value">Coupon Value</label>
                                            <input type="text" class="form-control form-control-border" id="value" placeholder="Coupon Value">
                                        </div>
                                        <div class="form-group">
                                            <label for="c_value">Cart Value</label>
                                            <input type="text" class="form-control form-control-border" id="c_value" placeholder="Coupon Value">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-sm-8 mx-auto">
                                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
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
