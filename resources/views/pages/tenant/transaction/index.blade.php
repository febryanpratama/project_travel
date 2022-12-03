@extends('layouts.base_admin')

@section("content")
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 breadcrumb-wrapper mb-4"><span class="text-muted fw-light">DataTables /</span> Basic</h4>

    <!-- DataTable with Buttons -->
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h6 class="card-title">DataTables with Buttons</h6>
            {{-- <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#largeModal">Add {{ $title }}</button> --}}
        </div>
        <div class="card-body">
            {{-- {{ dd($data) }} --}}
            <table class="table table-bordered yajra-datatable">
                <thead class="text-center">
                    <tr>
                        <th class="text-center" width="10%">No</th>
                        <th class="text-center">Transaction Code</th>
                        <th class="text-center">Payment Method</th>
                        <th class="text-center">Car Name</th>
                        <th class="text-center">Date Start</th>
                        <th class="text-center">Date End</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Fee</th>
                        <th class="text-center">Status</th>
                        <th class="text-center" width="10%">Action</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($data as $key=>$item)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $item->merchant_ref }}</td>
                            <td>{{ $item->payment_name }}</td>
                            <td>{{ $item->car->name_car }}</td>
                            <td>{{ \Carbon\Carbon::parse($item->cart->start_date)->format('d M Y') }}</td>
                            <td>{{ \Carbon\Carbon::parse($item->cart->end_date)->format('d M Y') }}</td>
                            <td>{{ $item->amount_received }}</td>
                            <td>{{ $item->total_fee }}</td>
                            <td class="justify-content-center">
                                @switch($item->status)
                                    @case('PAID')
                                        <div class="btn-sm btn btn-sm btn-success">{{ $item->status }}</div>
                                        @break
                                    @case('UNPAID')
                                        <div class="btn-sm btn btn-sm btn-warning">{{ $item->status }}</div>
                                        @break
                                    @default
                                        
                                @endswitch
                            </td>
                            <td>
                                @if ($item->status == 'PAID')
                                    <a href="{{ url('tenant/rental/detail/'.$item->id) }}" class="btn btn-sm btn-primary">Detail</a>
                                @endif
                                @if ($item->status == 'UNPAID')
                                <a href="">
                                    <button class="btn btn-primary">Pay</button>
                                </a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal to add new record -->
    {{-- <div class="modal fade" id="largeModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ url('tenant/car') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel3">Add {{ $title }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6 mb-3">
                                <label for="nameLarge" class="form-label">Brand Car</label>
                                <select name="brand_car" class="form-control" id="" required>
                                    <option value="" selected disabled> == Option == </option>
                                    <option value="Honda">Honda</option>
                                    <option value="Toyota">Toyota</option>
                                    <option value="Suzuki">Suzuki</option>
                                    <option value="Daihatsu">Daihatsu</option>
                                    <option value="Wuling">Wuling</option>
                                </select>
                            </div>
                            <div class="col-6 mb-3">
                                <label for="nameLarge" class="form-label">Category Car Name</label>
                                <select name="category_id" class="form-control" id="" required>
                                    <option value="" selected disabled> == Option == </option>
                                    @foreach ($category as $item)
                                        <option value="{{ $item->id }}">{{ $item->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-6 mb-3">
                                <label for="nameLarge" class="form-label">Car Name</label>
                                <input type="text" name="name_car" class="form-control" placeholder="Input Your Car Name">
                            </div>
                            <div class="col-6 mb-3">
                                <label for="nameLarge" class="form-label">Seat Car</label>
                                <input type="number" name="seat_car" class="form-control" placeholder="Input Your Car Name">
                            </div>
                            <div class="col-6 mb-3">
                                <label for="nameLarge" class="form-label">Door Car</label>
                                <input type="number" name="door_car" class="form-control" placeholder="Input Your Car Name">
                            </div>
                            <div class="col-6 mb-3">
                                <label for="nameLarge" class="form-label">Baggage Car</label>
                                <input type="number" name="baggage_car" class="form-control" placeholder="Input Your Car Name">
                            </div>
                            <div class="col-6 mb-3">
                                <label for="nameLarge" class="form-label">License Plate</label>
                                <input type="text" name="license_plate" class="form-control" placeholder="Input Your Car Name">
                            </div>
                            <div class="col-6 mb-3">
                                <label for="nameLarge" class="form-label">Transmission Type</label>
                                <select name="transmission_car" class="form-control">
                                    <option value="" selected disabled> == Option == </option>
                                    <option value="Manual">Manual</option>
                                    <option value="Automatic">Automatic</option>
                                </select>
                            </div>
                            <div class="col-6 mb-3">
                                <label for="nameLarge" class="form-label">Year Car</label>
                                <select name="year_car" class="form-control" id="">
                                    <option value="" selected disabled> == Option == </option>
                                    @for ($i = 2010; $i < 2025; $i++)
                                        <option value="{{ $i }}" @if ($i == \Carbon\Carbon::now()->format('Y'))
                                            selected
                                        @endif>{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col-6 mb-3">
                                <label for="" class="form-label">Price /day</label>
                                <input type="text" class="form-control" name="price_car" placeholder="Price /Day" id="rupiah">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="" class="form-label">Car Photo</label>
                                <input type="file" class="dropify" name="car_photo[]" multiple>
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
    </div> --}}
    <!--/ DataTable with Buttons -->

</div>

@endsection


{{-- @section('script')
    <script type="text/javascript">
    $(function () {
        
        var table = $('.yajra-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('tenant/car/ajax') }}",
            columns: [
                {data: 'DT_RowIndex', 'orderable': false, 'searchable': false},
                {data: 'name_car', name: 'name_car'},
                {data: 'categories.category_name', name: 'categories.category_name'},
                {data: 'door_car', name: 'door_car'},
                {data: 'seat_car', name: 'seat_car'},
                {data: 'bagage_car', name: 'bagage_car'},
                {data: 'price_car', name: 'price_car'},
                
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
    <script type="text/javascript">
		
		var rupiah = document.getElementById('rupiah');
		rupiah.addEventListener('keyup', function(e){
			// tambahkan 'Rp.' pada saat form di ketik
			// gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
			rupiah.value = formatRupiah(this.value, 'Rp. ');
		});
 
		/* Fungsi formatRupiah */
		function formatRupiah(angka, prefix){
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
 
			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}
 
			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
		}
	</script>
@endsection --}}