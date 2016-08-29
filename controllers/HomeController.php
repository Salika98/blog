<?php

class HomeController extends BaseController
{
    function index() {
    	if($this->isLoggedIn)
    	$posts = $this->model->getAll();
    	else
    	$posts = $this->model->getLatestPosts(5);
    
        $this->postsSidebar = $posts;
        $this->posts = $posts;
    }
	
	function view(int $id) {
		$post = $this->model->getPostById($id);
		if(!$post){
			$this->addErrorMessage("oops sorry, this post does not exist");
			$this->redirect("");
		}
		$this->post = $post;
    }
}