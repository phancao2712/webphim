<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Services\Notify;
use Illuminate\Http\Request;
use Illuminate\View\View;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $categories = Category::paginate(10);
        return view('admin.categories.index', compact(
            'categories'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:255'],
            'description' => ['required', 'max:255']
        ]);

        $category = Category::create($request->all());

        return to_route('admin.categories.index')->with('success', 'Create Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function changeStatus(string $id)
    {
        $category = Category::findOrFail($id);
        $status = ($category->status == 'active') ? 'inactive' : 'active';
        Category::updateOrCreate(
            ['id' => $id],
            ['status' => $status]
        );
        Notify::UpdateNotify();
        return response(['message' => 'Success'], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit', compact(
            'category'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'max:255'],
            'description' => ['required', 'max:255']
        ]);

        $category = Category::updateOrCreate(
            ['id' => $id],
            $request->all()
        );
        Notify::UpdateNotify();
        return to_route('admin.categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $category = Category::findOrFail($id)->delete();
            Notify::DeleteNotify();
            return response(['message' => 'success'], 200);
        } catch (\Exception $e) {
            logger($e);
            return response(['message' => 'error'], 500);
        }
    }
}
