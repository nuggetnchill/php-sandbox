<?php

class Post
{
    public $title;
    public $author;
    public $published;
    public function __construct($title, $author, $published)
    {
        $this->title = $title;
        $this->author = $author;
        $this->published = $published;
    }
};

$posts = [

    new Post('My First Post', 'JN', true),
    new Post('My Second Post', 'JN', true),
    new Post('My Third Post', 'ST', true),
    new Post('My Fourth Post', 'LN', false)

];

// var_dump($posts);


// $unpublishedPost = array_filter($posts, function ($post) {
//     return !$post->published;
// });

// var_dump($unpublishedPost);


// $modified = array_map(function ($post) {
//     return (array) $post;
//     // return ['title' => $post->title];
// }, $posts);

// var_dump($modified);


$authors = array_column($posts, 'author', 'title');
// $params need to be PUBLIC
//3rd $param will be used to set as key

var_dump($authors);
