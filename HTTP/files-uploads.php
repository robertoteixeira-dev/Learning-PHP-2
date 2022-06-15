<?php

/*

ON THE INDEX.PHP FILE:

    define('STORAGE_PATH', __DIR__ , '/../storage');
$router
    ->post('/upload', [src\Home::class, 'upload'])

 
*/

class Home {
    public function index(): string {
        return <<<FORM
        <form action="/upload" method="post" enctype="multipart/form-data">
        <input type="file" name="receipt" />
        <button type="submit">Upload</button>
        </form>
        FORM;
    }

    public function upload(){

        $filePath = STORAGE_PATH . '/' . $_FILES['receipt']['name'];

        move_uploaded_file($_FILES['receipt']['tmp_name'], $filePath);

        var_dump(pathinfo($filePath));

    }
    
   

}


