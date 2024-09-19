<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\NewsList\StoreNewsListRequest;
use App\Http\Requests\Admin\NewsList\UpdateNewsListRequest;
use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function index()
    {
        $newsLists = News::paginate(10);

        return view('admin.newsList.index', compact('newsLists'));
    }

    public function create()
    {
        $newsCategories = NewsCategory::all();
        return view('admin.newsList.create', compact('newsCategories'));
    }

    public function store(StoreNewsListRequest $request,)
    {
        DB::transaction(function () use ($request) {
            $newsList = News::create($request->validated());
            foreach ($request->validated(['files']) as $file) {
                $newsList->files()->create([
                    'file_name' => $file->getClientOriginalName(),
                    'file' => $file->store('newsList/' . Str::slug($request->input('title'), '_'), 'public'),
                    'size' => $file->getSize(),
                    'extension' => $file->getClientOriginalExtension()
                ]);
            }
        });

        alert("form submitted");
        return back();
    }

    public function show(News $newsList)
     {
        return view('admin.newsList.show', compact('newsList'));
     }

    public function edit(News $newsList)
    {
        $newsCategories = NewsCategory::all();
        return view('admin.newsList.edit', compact('newsList', 'newsCategories'));
    }

    public function update(UpdateNewsListRequest $request, News $newsList)
    {
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $newsList->files()->create([
                    'file_name' => $file->getClientOriginalName(),
                    'file' => $file->store('newsLists/' . Str::slug($request->input('title'), '_'), 'public'),
                    'size' => $file->getSize(),
                    'extension' => $file->getClientOriginalExtension()
                ]);
            }
        }
        $newsList->update($request->validated());

        alert("form updated");

        return back();
    }


    public function destroy(News $newsList)
    {
        foreach ($newsList->files as $file) {

            $this->deleteFile($file->file);
        }
        $newsList->delete();
        alert('News List deleted successfully');
        return back();
    }
}
