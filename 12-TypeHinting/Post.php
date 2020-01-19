<?php
class Post{
    private $post = null;

    /**
     * This function return anything so return type is : "VOID"
     */
    public function setPost(string $post = null):void
    {
        $this->post = $post;
    }

    /**
     * This function return "POST" object for method chaining
     */
    public function setPost(string $post = null):Post
    {
        $this->post = $post;
        return $this;
    }

    public function getPost():string
    {
        return $this->post;
    }

    public function savePost():bool
    {
        if(!$this->post){
            return false;
        }
        echo 'Save post Data<br>';
        return true;
    }

    public function fetchPost(int $id):array
    {
        $posts = [];
        echo "Retrieve all the posts<br>";
        $posts = [ 1, "This is a post",
                   2, "Type hinting is good practise"
                 ];
        return $posts;
    }
}

$post = new Post;
echo $post->setPost('This is post')->getPost();
// echo $post->getPost();