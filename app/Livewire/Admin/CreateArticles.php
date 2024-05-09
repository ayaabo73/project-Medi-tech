<?php

namespace App\Livewire\Admin;

use App\Models\Article;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\Attributes\Validate;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithPagination;

class CreateArticles extends Component
{ use WithPagination;
    use WithFileUploads;
    public $title;
   public $body;
  
    public function render()
    {
       $articles=Article::all();
        return view('livewire.admin.Create_article',['articles'=>$articles]);   
    }
    
    public function return_to_addArticle(){
        return redirect()->to('/Articles');
    }
    public function save(Request $request){ 
        $this->Validate([
          'title'  =>'required',
          'body'  =>'required',
        ]);
     
       $article=new Article();
       $article->doctorID=auth()->id();
       $article->title=$this->title;
       $article->body=$this->body;
       $article->save();
       session()->flash('message','success');
       return redirect()->to('/Articles');
      }
}
