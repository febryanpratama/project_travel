<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Models\Rental;
use App\Services\Tenant\RentalService;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    //

    protected $rentalService;

    public function __construct(RentalService $rentalService)
    {
        $this->rentalService = $rentalService;
    }

    public function index()
    {
        $response = $this->rentalService->getRental();

        return view('pages.tenant.rental.index', [
            'data' => $response->data,
            'title' => 'Rental'
        ]);
    }

    public function detail($id)
    {
        $response = $this->rentalService->getDetailRental($id);

        // dd($response->data);
        return view('pages.tenant.rental.detail', [
            'data' => $response->data,
        ]);
    }


    public function takecar($rent_id)
    {

        Rental::where('id', decrypt($rent_id))->update([
            'rental_status' => 'On Rent'
        ]);

        return redirect()->back()->with('success', 'Success Take Car');
    }
    public function rentCar($rent_id)
    {

        Rental::where('id', decrypt($rent_id))->update([
            'rental_status' => 'On Return'
        ]);

        return redirect()->back()->with('success', 'Success Take Car');
    }
    public function returnCar($rent_id)
    {

        Rental::where('id', decrypt($rent_id))->update([
            'rental_status' => 'On Finish'
        ]);

        return redirect()->back()->with('success', 'Success Take Car');
    }

    public function addRating(Request $request)
    {

        $response = $this->rentalService->addRating($request->all());

        if ($response->status) {
            return redirect()->back()->with('success', $response->message);
        } else {
            return redirect()->back()->with('error', $response->message);
        }
    }
}
