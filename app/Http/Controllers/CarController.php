<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Category;
use App\Services\Tenant\CarService;
use Illuminate\Http\Request;

class CarController extends Controller
{
    //
    protected $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function index()
    {
        $title = "Car";

        $category = Category::get();

        // dd(Car::with('user')->get());

        return view('pages.admin.car.index', [
            'title' => $title,
            'category' => $category,
        ]);
    }

    public function ajax(Request $request)
    {
        if ($request->ajax()) {
            $data = Car::query()->with('user', 'categories')->where('is_deleted', NULL)->latest();
            // dd($data);
            return datatables()->of($data)
                ->addIndexColumn()
                ->editColumn('price_car', function ($row) {
                    return 'Rp. ' . number_format($row->price_car, 0, ',', '.');
                })
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        # code...
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $response = $this->carService->storeCar($request->all());

        // dd($response);

        if ($response['status']) {
            # code...
            return back()->withSuccess($response['message']);
        } else {
            return back()->withError($response['message']);
        }
    }
}
