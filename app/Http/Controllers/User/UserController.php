<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Produto;
use Illuminate\Support\Facades\Auth;
use App\Models\Tag;

class UserController extends Controller
{

    public function index()
    {
        if (Auth::check()) {
            $produtos = Produto::where("user_id", Auth::user()->id)->get();
            return view('pages.profile.index', ['produtos' => $produtos]);
        } else {
            return redirect()->route('login.login');
        }
    }


    public function create()
    {
        if (Auth::check()) {
            $produtos = Produto::where("user_id", Auth::user()->id)->get();
            return view('pages.profile.create', ['tags' => Tag::all(), 'produtos' => $produtos]);
        } else {
            return redirect()->route('login.login');
        }
    }


    public function store(Request $request)
    {
        $data = new Produto($this->requestValidate());

        if ($request->hasFile('image') && $request->image->isValid()) {
            $name = uniqid(date('HisYmd'));
            $extension = $request->file('image')->getClientOriginalExtension();
            $nameFile = "{$name}.{$extension}";
            $imagePath = $request->image->storeAs('img_produtos', $nameFile, 'img_produtos');
            $data['image'] = $imagePath;
        }

        $data->user_id = Auth::user()->id;
        $data->save();


        $data->tags()->attach(request('tags'));


        return redirect(route('user.profile'));
    }

    public function show($id)
    {
        //
    }


    public function edit(User $id)
    {
        //
        return view('pages.profile.edit', ['user' => $id]);
    }

    public function update(User $id)
    {
        $id->update($this->requestValidateUser());
        return redirect(route('user.profile'));
    }


    public function destroy(Produto $id)
    {
        $post = Produto::find($id->id);
        $post->tags()->detach(request('tags'));
        $post->delete();
        return redirect(route('user.profile'));
    }
    public function requestValidate()
    {
        return request()->validate([
            'user_id' => 'required',
            'name' => 'required',
            'descricao' => 'required',
            'image' => 'required|image',
            'tags' => 'exists:tags,id'
        ]);
    }
    public function requestValidateUser()
    {
        return request()->validate([
            'name' => 'nullable',
            'secondName' => 'nullable',
            'email' => 'nullable',
            'phone' => 'nullable'
        ]);
    }
}
