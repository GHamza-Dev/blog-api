<?php

$db = new Db();

function notFound(){
    header('HTTP/1.0 404 Not found');
    echo json_encode(['message_err'=>'Please provide a valide url']);
    exit;
}

function posts($limit = '0,12'){
    global $db;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = json_decode(file_get_contents('php://input'));
        $title = $data->title;
        $body = $data->body;
        if ($db->insertPost($title,$body)) {
            header("HTTP/1.0 201 Created a new post");
            post($db->insertedId());
        }else {
            header("HTTP/1.0 500 Something went wrong");
            echo json_encode(['message_err'=>'Error 500']);
        }
        return;
    }

    if (!($limit === '0,12') && !(filter_var($limit,FILTER_VALIDATE_INT))) {
        notFound();
    }
    
    $data['data'] = $db->selectPosts($limit);
    echo json_encode($data);
}

function post($id = 1){
    global $db;
    if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
        $data = json_decode(file_get_contents('php://input'));
        $title = $data->title;
        $body = $data->body;
        if ($db->updatePost($id,$title,$body)) {
            header("HTTP/1.0 200 Updated successfully");
            echo json_encode(['message'=>'Post Updated Successfully']);
        }else {
            header("HTTP/1.0 500 Something went wrong");
            echo json_encode(['message_err'=>'Error 500']);
        }
        return;
    }

    $data['data'] = $db->selectPostById($id);
    echo json_encode($data);
}