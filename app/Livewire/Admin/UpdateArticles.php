<?php

namespace App\Livewire\Admin;

use App\Models\Article;
use App\Models\Doctor;
use App\Models\Section;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Livewire\Attributes\Validate;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithPagination;

class UpdateArticles extends Component
{ use WithPagination;
    use WithFileUploads;
    public $id;
    public $title;
   public $body;
   public $article;
 

   public function mount(){
    $this->id=request()->id;
    $this->article=Article::whereId($this->id)->first();
    $this->title=$this->article->title;
    $this->body=$this->article->body;
   

   }
    public function render()
    {
        $articles=Article::all();
        return view('livewire.admin.update_article',['articles'=>$articles]);   
    }
    
    public function return_to_addArticler(){
        return redirect()->to('/Articles');
    }
    public function update(Request $request){ 
        $this->Validate([
          'title'  =>'required',
          'body'  =>'required',
        ]);
     
      $article=Article::whereId($this->id)->first();
       $article->title=$this->title;
       $article->body=$this->body;
       $article->update();
       session()->flash('message','success');
       return redirect()->to('/Articles');
      }
}
