<?php
class Pdoconnection{
private  $server = 'mysql:dbname=bootcamp2021;host=localhost';
private $servername = 'root';
private $password = '';
private  $mypdo;



public function __construct(){

        $this->mypdo = new PDO($this->server, $this->servername, $this->password);
        $this->mypdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
public function  validator(array $fields){

}
    public function ourquery($query, array $variables){
        $stmt = $this->mypdo->prepare($query);
        $stmt->execute($variables);
        return $stmt;
    }
}
// $pdo = new Pdoconnection();
// $title ='first';
// $author ='second';
// $query = 'SELECT * FROM blogs   WHERE blog_title = ? AND author = ?';
// $variables = [$title, $author];
// $resp = $pdo->ourquery($query, $variables);
// $row = $resp->fetchAll(PDO::FETCH_ASSOC);
// $sql = "INSERT INTO blogs (blog_title, slug, author, image) VALUES (?,?,?,?)";
// $sth = $pdo->ourquery($sql,['php','yuy','php', 'php']);