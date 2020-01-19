<?php
class Post{
    public $post = null;
    public function __construct(string $post = null)
    {
        $this->post = $post;
    }
}

/**
 * Idientical Operation (===)
 */
function compareByIdientical(&$obj1, &$obj2)
{
    return $obj1 === $obj2? true : false;
}

/**
 * Comparison Operation (==)
 */
function compareByComparison(&$obj1, &$obj2)
{
    return $obj1 == $obj2? true : false;
}

//---------Example-------------
$post1 = new Post('This is new Post');
$post3 = $post1;
echo compareByIdientical($post1, $post3)?'Same':'Different';
echo '<br>';
// echo compareByComparison($post1, $post2)?'Same':'Different';