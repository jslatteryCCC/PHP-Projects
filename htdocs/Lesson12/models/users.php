<?php 
    //use the db variable to interact with the db 
    //i'll need to be able to add a new user
    //i'll need to be able to check if a user exists in order
    //to log them in

function add_user($userid, $email, $password) {
    global $db;
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $query = 'INSERT INTO users
                (user_id, email, password)
              VALUES
                (:user_id, :email, :password)';
    $statement = $db->prepare($query);
    $statement->bindValue(':user_id', $userid);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $hash);
    $statement->execute();
    $statement->closeCursor();
}

function get_user($userid) {
  global $db;

    $query = 'SELECT * FROM users WHERE user_id = :userid';
    $statement = $db->prepare($query);
    $statement->bindValue(':userid', $userid);
    $statement->execute();
    $statement->closeCursor();
    }
    
function validate_login($user_id, $password) {
  global $db;

  $query = 'SELECT password FROM users WHERE user_id = :user_id';
  $statement = $db->prepare($query);
  $statement->bindValue(':user_id', $user_id);
  $statement->execute();
  $row = $statement->fetch();
  $statement->closeCursor();
  $hash = $row['password'];
  return password_verify($password, $hash);
    }
?>