<?php
/**
 * Save and retrive the copy of an Object
 */
class Post{
    public $post = null;
    public function __construct(string $post = null)
    {
        $this->post = $post;
    }
}
/**
 * Serialize and save object as serialize format in "Post.txt" file
 */
$post = new Post('This is my first Post');
$serializePost = serialize($post);
file_put_contents("Post.txt",$serializePost);
/**
 * get Serialize from "Post.txt" file and Unserializaed as "Post" Object format
 */
$serializePost = file_get_contents("Post.txt");
$post = unserialize($serializePost);
var_dump($post);