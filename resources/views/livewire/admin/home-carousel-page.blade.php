<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Carousel</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Carousel</li>
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
                    <div class="card card-success card-outline shadow">
                        <div class="card-header">
                            <h3 class="card-title">All Carousel List</h3>
                            <div class="card-tools">
                                <a href="{{ route('admin.carousel.add') }}" class="btn btn-sm btn-primary">Add new</a>
                                <button type="button" class="btn btn-tool" data-card-widget="maximize" title="Expand">
                                    <i class="fas fa-expand"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success text-uppercase alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                            @endif
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th style="width: 13%">Title</th>
                                        <th style="width: 13%">Sub-Title</th>
                                        <th style="width: 10%">Image</th>
                                        <th style="width: 40%">Link</th>
                                        <th style="width: 8%">Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $sl = 1;
                                    @endphp
                                    @foreach ($carousel as $key)
                                        <tr>
                                            <td>{{ $sl++ }}</td>
                                            <td>
                                                <a>
                                                    {{ $key->title }}
                                                </a>
                                                <br/>
                                                <small>
                                                    Created: {{ $key->created_at }}
                                                </small>
                                            </td>
                                            <td>{{ $key->subtitle }}</td>
                                            <td>
                                                <img alt="Carousel-{{ $sl++ }}" class="img-thumbnail" src="{{ asset('assets/images/slideshow-banners/' . $key->image ) }}">
                                            </td>
                                            <td>{{ $key->link }}</td>
                                            <td>
                                                <a class="text-capitalize"><span class="badge {{ $key->status === 1 ? 'badge-success' : 'badge-danger' }} pb-1">{{ $key->status === 1 ? 'Active' : 'Inactive' }}</span></a>
                                            </td>
                                            <td class="d-flex justify-content-center align-items-center">
                                                <a href="{{ route('admin.carousel.edit', $key->id) }}" class="btn btn-info btn-sm mr-1"><i class="fas fa-edit"></i></a>
                                                <a href="#" onclick="confirm('Are you sure, you want to Delete?') || event.stopImmediatePropagation()" class="btn btn-danger btn-sm" wire:click.prevent="deleteItem('{{ $key->id }}')"><i class="fas fa-trash"></i></a>
                                                {{-- <div class="btn-group btn-group-sm">
                                                    <a href="{{ route('admin.carousel.edit', $key->id) }}" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal{{ $key->id }}"><i class="fas fa-trash"></i></button> --}}
                                                    {{-- <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a> --}}
                                                {{-- </div> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
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

        {{-- Modal --}}
        {{-- @foreach ($carousel as $key)
            <div class="modal fade" id="modal{{ $key->id }}">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Are you sure, you want to Delete <span class="text-capitalize text-danger">[{{ $key->title }}]</span></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p class="text-info">If you Delete this Product, You won't be able to see this Product.</p>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <a href="#" class="btn btn-danger" wire:click.prevent="deleteItem('{{ $key->id }}')">Delete</a> --}}
                            {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                        {{-- </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
        @endforeach --}}
        <!-- /.modal -->
    </section>
    <!-- /.content -->
</div>

@push('script')
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('admin/dist/js/demo.js') }}"></script>
@endpush
