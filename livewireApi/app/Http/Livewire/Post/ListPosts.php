<?php

namespace App\Livewire\Post;


use App\Repositories\Post\PostRepository;
use Livewire\Component;

class ListPosts extends Component
{

    public $postRepository;
    public $posts;

    public function render(PostRepository $postRepository)
    {
        $this->posts = $postRepository->all();
        return view('livewire.post.list-posts')
        ->extends('layouts.admin')
        ->section('content');
    }
}
