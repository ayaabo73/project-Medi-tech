<?php

namespace App\Livewire\Doctor;

use App\Models\Article;
use App\Models\Doctor;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithPagination;

class Articles extends Component
{ use WithPagination;
    use WithFileUploads;
    public function render()
    {  $articles=Article::all();
        $doctors= Doctor::all();
        return view('livewire.doctor.Articles',['articles'=>$articles,'doctors'=>$doctors,]);
    }
    
    public function create_article(){
   
      return redirect()->to('/create/article');
    }
    
    public function update_article($id){
        $article=Article::whereId($id)->wheredoctorid(auth()->id())->first();
        if($article){
        return redirect()->to('update/article/'.$id);
        }
     
    session()->flash('message_error','you can not update');
    return redirect()->to('/Articles');
    }


    public function delete_article($id){
        $article=Article::whereId($id);
        $article->delete();
        DB::statement("SET @count = 0;");
        DB::statement("UPDATE articles SET articles.id = @count:= @count + 1;");
        DB::statement("ALTER TABLE articles AUTO_INCREMENT = 1;");
        session()->flash('message','success');
        return redirect()->to('/Articles');

    }
    
}


