<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Tag;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request('tag')) {
            $tags = Tag::where('nome', request('tag'))->firstOrFail()->produtos;
            return view('pages.products.index', ['tags' => $tags]);
        } else {
            $produtos = Produto::latest()->get();
            $tags = Tag::all();
            return view('pages.home.index', ['produtos' => $produtos, 'tags' => $tags]);
        }
    }

    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }
    public function show(Produto $id)
    {
        return view('pages.products.show', ['produto' => $id]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
