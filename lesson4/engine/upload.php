<?

if(!isset($_FILES["image"]["tmp_name"])){
    $mas = scandir("img_big");
    foreach($mas as $file){
        echo $file."<br>";
    }
}
else {
    for ($i = 0; $i < count($_FILES["image"]["name"]); $i++) {
        $path = "img_big/" . $_FILES["image"]["name"][$i];
        if (move_uploaded_file($_FILES["image"]["tmp_name"][$i], $path))
            echo $_FILES["image"]["name"][$i] . " успешно загружен!<br>";
    }
}