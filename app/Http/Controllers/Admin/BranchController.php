<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Branch\StoreBranchRequest;
use App\Http\Requests\Admin\Branch\UpdateBranchRequest;
use App\Models\Branch;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BranchController extends Controller
{

    public function index()
    {
        $branches = Branch::paginate(10);
        return view('admin.branch.index',compact('branches'));
    }


    public function store(StoreBranchRequest $request)
    {
        Branch::create($request->validated());
        Alert::success('Branch added successfully');
        return back();
    }

    public function edit(Branch $branch)
    {
        return view('admin.branch.edit',compact('branch'));
    }

    public function update(UpdateBranchRequest $request, Branch $branch)
    {

        $branch->update($request->validated());
        Alert::success('Branch updated successfully');
        return redirect(route('admin.branch.index'));
    }

    public function destroy(Branch $branch)
    {
        $branch->delete();
        Alert::success('Branch deleted successfully');
        return back();
    }
}
