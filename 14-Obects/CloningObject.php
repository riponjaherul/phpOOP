<?php
class Post{
    public $post = null;
    public function __construct(string $post = null)
    {
        $this->post = $post;
    }
}

$post1 = new Post('This is my first Post');
echo "Post 1 Object : ".$post1->post.'<br>';
$post2 = $post1; // Copy by reference
echo "Post 2 Object : ".$post2->post.'<br>';
echo '<br>--------After Modified [In Copy by reference]---------<br>';
$post2->post = "This is Modified";
echo "Post 1 Object : ".$post1->post.'<br>';
echo "Post 2 Object : ".$post2->post.'<br>';
echo '<br>--------After Modified [In Clone Object]---------<br>';
$post3 = clone $post2;
$post3->post = "This is Modified Too!";
echo "Post 1 Object : ".$post1->post.'<br>';
echo "Post 3 Object : ".$post3->post.'<br>';