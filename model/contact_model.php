<?php
class Contact
{   
    public int $id;
    private $pdo;
    public string $firstName;
    public string $lastName;
    public string $email;
    public string $subject;
    public string $message;


public function __construct()
{
        
    try {
        $this->pdo = new PDO('mysql:host=localhost;dbname=NetWEB;charset=utf8', 'admin', 'Azerty123');
        } catch (PDOException $e) {
        
        header('Location: /');

        }
}


public function create()
{
    $sql = 'INSERT INTO `contact_form` (`firstName`, `lastName`, `email`, `subject`, `message`) 
    VALUES (:firstName,:lastName,:email,:subject,:message)';
    $req = $this->pdo->prepare($sql);
    $req->bindValue(':firstName', $this->firstName, PDO::PARAM_STR);
    $req->bindValue(':lastName', $this->lastName, PDO::PARAM_STR);
    $req->bindValue(':email', $this->email, PDO::PARAM_STR);
    $req->bindValue(':subject', $this->subject, PDO::PARAM_STR);
    $req->bindValue(':message', $this->message, PDO::PARAM_STR);
        return $req->execute();
}


public function getInfosByEmail()
{
    $sql = 'SELECT `firstName`, `lastName`, `email`, `subject`, `message` FROM `contact_form` WHERE `email` = :email';
    $req = $this->pdo->prepare($sql);
    $req->bindValue(':email', $this->email, PDO::PARAM_STR);
    $req->execute();
       return $req->fetch(PDO::FETCH_ASSOC);
}

}
