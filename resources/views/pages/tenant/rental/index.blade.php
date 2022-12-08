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
                        <th class="text-center">Name Car</th>
                        <th class="text-center">Start Rent</th>
                        <th class="text-center">End Rent</th>
                        <th class="text-center">Status</th>
                        <th class="text-center" width="20%">Action</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    {{-- {{ dd($data) }} --}}
                    @foreach ($data as $key=>$item)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $item->car->name_car }}</td>
                            <td>{{ \Carbon\Carbon::parse($item->transaction->cart->start_date)->format('d M Y') }}</td>
                            <td>{{ \Carbon\Carbon::parse($item->transaction->cart->end_date)->format('d M Y') }}</td>
                            <td>{{ $item->rental_status }}</td>
                            <td class="d-flex justify-content-center">
                                <a href="{{ url('tenant/rental/take-car/'.encrypt($item->id)) }}" class="btn btn-sm btn-info">Detail</a>
                                @switch($item->rental_status)
                                    @case('On Take')
                                        <a href="{{ url('tenant/rental/take-car/'.encrypt($item->id)) }}" class="btn btn-sm btn-info">{{ $item->rental_status }}</a>
                                        @break
                                    @case('On Rent')
                                        <a href="{{ url('tenant/rental/rent-car/'.encrypt($item->id)) }}" class="btn btn-sm btn-primary">{{ $item->rental_status }}</a>
                                        @break
                                    @case('On Return')
                                        <a href="{{ url('tenant/rental/return-car/'.encrypt($item->id)) }}" class="btn btn-sm btn-warning">{{ $item->rental_status }}</a>
                                        @break
                                    @case('On Finish')
                                        @if (App\Helpers\Format::checkRating($item->id) == NULL)
                                        <button type="button" class="btn btn-sm btn-primary m-1" data-bs-toggle="modal" data-bs-target="#editUser"> Rating </button>
                                        @endif
                                        <a href="#" class="btn btn-sm btn-success m-1">{{ $item->rental_status }}</a>
                                        @break
                                    @default
                                        
                                @endswitch
                            </td>
                        </tr>
                        <div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-simple modal-edit-user">
                                <div class="modal-content p-3 p-md-5">
                                    <div class="modal-body">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        <div class="text-center mb-4">
                                            <h3>Rating</h3>
                                            <p>Add Rating For This Rent</p>
                                        </div>
                                        <form id="editUserForm" class="row g-3" method="POST" action="{{ url('tenant/rental/rating') }}" >
                                            @csrf
                                            <input type="hidden" name="rent_id" value="{{ encrypt($item->id) }}">
                                            <input type="hidden" name="rating" id="rating">
                                            <div class="col-12">
                                                <label class="form-label control-label" for="modalEditUserName">Rating</label>
                                                <br>
                                                <span class="fa fa-star" id="star1" onclick="add(this,1)"></span>
                                                <span class="fa fa-star" id="star2" onclick="add(this,2)"></span>
                                                <span class="fa fa-star" id="star3" onclick="add(this,3)"></span>
                                                <span class="fa fa-star" id="star4" onclick="add(this,4)"></span>
                                                <span class="fa fa-star" id="star5" onclick="add(this,5)"></span>
                                            </div>
                                            <div class="col-12">
                                                <label for="" class="form-label">Review</label>
                                                <textarea name="review" id="" cols="30" rows="5" class="form-control"></textarea>
                                            </div>
                                            <div class="col-12 text-center mt-4">
                                                <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                                                <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>

@endsection

@section('script')
    <script>
        function add(ths,sno){

            for (var i=1;i<=5;i++){
                var cur=document.getElementById("star"+i)
                cur.className="fa fa-star"
            }
            // console.log(sno);

            $('#rating').val(sno);

            for (var i=1;i<=sno;i++){
            var cur=document.getElementById("star"+i)
            if(cur.className=="fa fa-star")
                {
                cur.className="fa fa-star checked"
                }
            }

        }
        
    </script>
@endsection
