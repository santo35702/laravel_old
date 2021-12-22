<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <style media="screen">
        .coupon {
            display: inline-block;
            overflow: hidden;
            border-radius: 10px;
        }
        .coupon-left {
            float: left;
            width: 150px;
            height: 150px;
            position: relative;
        }
        .coupon-left::before {
            content: '';
            position: absolute;
            top: -210px;
            display: block;
            right: -210px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            border: 200px solid #252525;
            clip: rect(auto, auto, 285px, auto);
        }
        .coupon-left::after {
            content: '';
            position: absolute;
            bottom: -210px;
            display: block;
            right: 210px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            border: 200px solid #252525;
            clip: rect(135px, auto, auto, auto);
        }
        .coupon-con {
            float: left;
            width: 350px;
            height: 150px;
            position: relative;
        }
        .coupon-con::before {
            content: '';
            position: absolute;
            top: -410px;
            display: block;
            right: -410px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            border: 400px solid #fff;
            clip: rect(0, auto, 485px, 410px);
        }
        .coupon-con::after {
            content: '';
            position: absolute;
            bottom: -410px;
            display: block;
            left: -410px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            border: 400px solid #fff;
            clip: rect(335px, auto, auto, 410px);
        }
    </style>
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
                                <div class="col-sm-2">
                                    <div class="position-relative p-3 bg-gray" style="height: 120px">
                                        <div class="ribbon-wrapper">
                                            <div class="ribbon bg-success">
                                                Coupon
                                            </div>
                                        </div>
                                        Coupon Default <br /> Coupon body <br />
                                        <small>.ribbon-wrapper.ribbon-lg .ribbon</small>
                                        <small>https://codepen.io/xiazhaowei/pen/ZZYPjz</small>
                                    </div>
                                </div>


                                <div class="col-sm-2 wrap">
                                    <div class="coupon">
                                        <div class="coupon-left"></div>
                                        <div class="coupon-con"></div>
                                    </div>
                                </div>

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
