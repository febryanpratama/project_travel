@extends('layouts.base_admin')

@section("content")
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 breadcrumb-wrapper mb-4"><span class="text-muted fw-light">DataTables /</span> Basic</h4>

    <!-- DataTable with Buttons -->
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h6 class="card-title">DataTables with Buttons</h6>
            <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#largeModal">Add {{ $title }}</button>
        </div>
        <div class="card-body">
            <table class="table table-bordered yajra-datatable">
                <thead class="text-center">
                    <tr>
                        <th class="text-center" width="10%">Nama</th>
                        <th class="text-center">Tipe User</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">No. Telp</th>
                        <th class="text-center">Alamat</th>
                        <th class="text-center">Status</th>
                        <th class="text-center" width="10%">Action</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($user as $item)
                    {{-- {{ dd($item) }} --}}
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->roles->first()->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ @$item->detail->phone_number_1 }}</td>
                            <td>{{ @$item->detail->address }}</td>
                            <td>
                                @if ($item->status == 1)
                                    <span class="badge bg-success">Active</span>
                                @else
                                    <span class="badge bg-danger">Inactive</span>
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-outline-light " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" style="width: 15px;height: 15px;color: black" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12H12m-8.25 5.25h16.5" />
                                    </svg>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">Aktifkan</a></li>
                                    <li><a class="dropdown-item" href="#">Nonaktifkan</a></li>
                                    {{-- <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
                                </ul>
                                {{-- <a href="">
                                    


                                </a> --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Modal to add new record -->
    <div class="modal fade" id="largeModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <form action="{{ url('admin/category-car') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel3">Add {{ $title }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="nameLarge" class="form-label">Category Car Name</label>
                                <input type="text" id="nameLarge" name="category_name" class="form-control" placeholder="Category Car Name">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--/ DataTable with Buttons -->

</div>

@endsection


{{-- @section('script')
    <script type="text/javascript">
    $(function () {
        
        var table = $('.yajra-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('admin/category-car/ajax') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'category_name', name: 'category_name'},
                
                {
                    data: 'action', 
                    name: 'action', 
                    orderable: true, 
                    searchable: true
                },
            ]
        });
        
    });
    </script>
@endsection --}}