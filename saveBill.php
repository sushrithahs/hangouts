<?php
$conn = mysqli_connect("localhost", "root", "", "hangouts");
if (
    isset($_POST["user"]) && isset($_POST['expenseName']) &&  isset($_POST['amount'])  &&  isset($_POST['payerid'])
) {
    $expenseName = $_POST['expenseName'];
    $totalAmount = $_POST['amount'];
    $payerId = $_POST['payerid'];
    // When selecting friends, dont select your name
    $totalFriends = count($_POST['user']) + 1;
    $splitAmount = ($totalAmount) / ($totalFriends-1);

    foreach ($_POST['user'] as $user) {
        $sqlBills = "insert into hangouts.bills(bill_name,payer_id,payee_id,split_amount) values ('$expenseName', '$payerId', '$user', '$splitAmount')";
        if($user==$payerId)
        $sqlStatus = "insert into hangouts.status(owe_amount,payer_id,payee_id,recieve_amount) values ('0','$user','$payerId', '$splitAmount')";
        else
        $sqlStatus = "insert into hangouts.status(owe_amount,payer_id,payee_id,recieve_amount) values ('$splitAmount','$user','$payerId', '0')";
                                                                                                      // owe_amount needs be updated by joining two tables
       
        print($user);                                                                                              try {
            mysqli_query($conn, $sqlBills);
            mysqli_query($conn, $sqlStatus);
        } catch (Exception $exe) {
            die('Error : ' . mysqli_error($conn));
        } finally {
            header('location:profile.php');
        
        }
    }
}
