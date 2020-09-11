<?php
  class Pages extends Controller {
    public function __construct(){
      $this->postModel = $this->model('Post');
      $this->userModel = $this->model('User');
     
    }
    
    public function index(){
      $posts = $this->postModel->getPosts();

      $data = [
        'title' => 'Portfolio',
        'description' => '',
        'posts' => $posts
      ];
     
      $this->view('pages/index', $data);
    }
  }