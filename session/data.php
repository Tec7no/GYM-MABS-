<?php
if (isset($username)) {
    $sql = "SELECT id FROM users WHERE username = :username";
    $stmt = $connection->prepare($sql);
    $stmt->bindValue(':username', $username, PDO::PARAM_STR);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        $user_id = $user['id'];

        $sql1 = "SELECT * FROM cart WHERE user_id = :user_id";
        $stmt1 = $connection->prepare($sql1);
        $stmt1->bindValue(':user_id', $user_id, PDO::PARAM_INT);
        $stmt1->execute();
        $cart_items = $stmt1->fetchAll(PDO::FETCH_ASSOC);
        
        // Count data in cart
        $p = count($cart_items);
    } else {
        $p = 0; // User not Exist
    }
} else {
    $p = 0; // $username not defined
}
?>
