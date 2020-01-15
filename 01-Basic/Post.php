<?php
class Post{
    public $content;

    public function __construct(string $content)
    {
        echo 'Called Constructor.....<br>';
        $this->content = $content;
    }

    public function __destruct()
    {
        echo 'Called Destructor.....<br>';
    }

    public function printContent()
    {
        echo $this->content.'<br>';
        return $this;
    }
}

$post = new Post('This my first Post');
// Print Method value and get value from Properties at the same time
$content = $post->printContent()->content;
echo $content.'<br>';