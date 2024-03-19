<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\HomeSectionRequest;
use App\Models\HomeSection;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class HomeSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $homeSection = HomeSection::all();
        // return view('backend.home_section.index', compact('homeSection'));
        return view('backend.home_section.index_test', compact('homeSection'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.home_section.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HomeSectionRequest $request)
    {
        // return $request->all();
        $inputData = $request->all();
        $homeSection = HomeSection::create($inputData);
        if ($homeSection) {
            Toastr::success('Created successful!', 'Success');
            return redirect()->route('home-section.index');
        } else {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back()->withInput();
        }
    }

    public function storeByAjax(HomeSectionRequest $request)
    {
        $inputData = $request->all();
        $homeSection = HomeSection::create($inputData);
        if ($homeSection) {
            Toastr::success('Created successful!', 'Success');
            $updatedHomeSections = HomeSection::all();
            return response()->json($updatedHomeSections);
        } else {
            Toastr::error('Something went wrong!', 'Error');
            return response()->json(['error' => 'Something went wrong'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
