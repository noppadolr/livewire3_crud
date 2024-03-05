<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithPagination;


class PostComponent extends Component
{
    use WithPagination;
    #[Layout("components.layouts.app")]
    #[Rule('required|min:3')]
    public $title;
    public $postId;
    #[Rule('required|min:3')]
    public $body;

    public $isOpen =0;

    public function create(){
        $this->reset('title','body','postId');
        $this->OpenModal();
    }//end nethod

    public function store()
    {
        $this->validate();
        Post::query()->create([
            'title' => $this->title,
            'body' => $this->body,
        ]);
        session()->flash('success', 'Post created successfully.');

        $this->reset('title','body');
        $this->closeModal();
    }//end method

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $this->postId = $id;
        $this->title = $post->title;
        $this->body = $post->body;
 
        $this->openModal();
    }//end method


    public function update()
    {
        if ($this->postId) {
            $post = Post::findOrFail($this->postId);
            $post->update([
                'title' => $this->title,
                'body' => $this->body,
            ]);
            session()->flash('success', 'Post updated successfully.');
            $this->closeModal();
            $this->reset('title', 'body', 'postId');
        }
    }//end method

    public function delete($id)
  {
      Post::find($id)->delete();
      session()->flash('success', 'Post deleted successfully.');
      $this->reset('title','body');
  }//end method


    public function render()
    {
//        return view('livewire.post-component');
        return view('livewire.post-component',[
            // 'posts' => Post::all()
            'posts' => Post::paginate(5)
        ]);
    }//end method

    public function OpenModal()
    {
        $this->isOpen = true;
        $this->resetValidation();
    }
    //end method

    public function closeModal(){
        $this->isOpen = false;
    }
    //end method
}
