<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $website = $_POST["website"];
    $username= $_POST["username"];
    $pwd = $_POST["pwd"];

    try{
        require_once "db.inc.php";
        $query = "INSERT INTO userd (website, username, pwd) VALUES(?,?,?);";

        $stmt = $pdo->prepare($query);
        $stmt->execute([$website, $username, $pwd]);

        $pdo = null;
        $stmt = null;
        header("Location: ../keep_secure.html");
        die();
    }
    catch (PDOException $e){
        die("QUERY FAILED: " . $e->getMessage());
    }
}
else{
    header("Location: ../keep_secure.html");
}