<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index(Request $request)
    {
        $title = "Category Car";


        $data = $this->categoryService->getAll();
        return view('pages.admin.category.index', [
            'title' => $title,
            'data' => $data
        ]);
    }

    public function ajax(Request $request)
    {
        if ($request->ajax()) {
            # code...
            $data = Category::latest()->get();
            return datatables()->of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }


    public function store(Request $request)
    {
        $response = $this->categoryService->storeCat($request->all());

        if ($response->status) {
            return redirect()->back()->withSuccess($response->message);
        } else {
            // return redirect()->back()->with('error', $response->message);
        }
    }
}
