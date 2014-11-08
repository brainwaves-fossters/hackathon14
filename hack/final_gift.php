<?php

$database = "bank";
$con = mysqli_connect( "localhost", "home", "home125", "$database" );			// Connection to mysql server
if( mysqli_connect_errno() )
{
	echo "Failed to connect mysql: mysqli_connect( \"localhost\", \"home\", \"home125\", \"$database\" ) ";
}

$amt = $_POST['amt'];
$ph = $_POST['ph'];
$acc_no = 10000;// = $_POST['acc_no'];
//echo $amt . "<br>" . $ph . "<br>";

$rand1 = rand(100000, 999999);
$rand2 = rand(100000, 999999);

$query = "update customer SET otp = " . $rand1 . $rand2 . " , giftamt = " . $amt . " where accno = " . $acc_no . " ; ";
//echo $query;

$result = mysqli_query( $con, $query );
if ( $result == 0 )
	echo "Error in executing the query: $query <br>" ;

$query = "select balance, giftamt from customer where accno=" . $acc_no . " ; ";
$result = mysqli_query( $con, $query );
if ( $result == 0 )
	echo "Error in executing the query: $query <br>" ;

$row = mysqli_fetch_array( $result );

$bal = $row['balance'];
$gift = $row['giftamt'];

if( $bal >= $gift )
{
	$query = "update customer set status=status+1 where accno=" .  $acc_no . " ; ";
	$result = mysqli_query( $con, $query );
	if ( $result == 0 )
		echo "Error in executing the query: $query <br>" ;	
	echo "GRANTED!";
}

else
	echo "NOT GRANTED!";

//echo "<br> " . rand(100000, 999999);

?>
