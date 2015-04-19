<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;

use App\Http\Requests\CreateArticleRequest;

class ArticlesController extends Controller {
    const CONSTANT = 5;
	public function index(){
        echo "Hey, Honey!";
        $articles = Article::latest('published_at')->published()->get();
        return view('articles.index', compact('articles'));
    }

    public function show($id){
        $article = Article::findOrFail($id);

        dd($article->published_at);

        return view('articles.show', compact('article'));
    }

    public function create(){
        return view('articles.create');
    }

    /**
     * @param CreateArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */

    public function store(CreateArticleRequest $request){
        Article::create($request->all());

        return redirect('articles');
    }
}
