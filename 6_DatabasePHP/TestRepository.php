<?php 

    require_once __DIR__ . '/GetConnection.php';
    require_once __DIR__ . '/Model/Comment.php';
    require_once __DIR__ . '/Repository/CommentRepository.php';

    use Repository\CommentRepositoryImpl;
    use Model\Comment;

    $connection = getConnection();
    $repository = new CommentRepositoryImpl($connection);

    // fungsi insert
    // $comment = new Comment(email: "repo@gmail.com", comment: "hi");
    // $newComment = $repository->insert($comment);
    // var_dump($newComment->getId());


    // fungsi find by id
    // $comment = $repository->findById(27);
    // var_dump($comment);

    $comments =$repository->findAll();
    var_dump($comments);

    $connection = null;



?>