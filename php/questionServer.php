<?php
header ( "Access-Control-Allow-Origin: *" );
if (! (class_exists ( 'contentClass' ))) {
	include 'dbConnector.php';
}
if (empty ( $_REQUEST ["page_id"] )) {
	$q = '1';
} else {
	$q = $_REQUEST ["page_id"];
	;
}
?>
<?php
$hint = "";

// lookup all hints from array if $q is different from ""
if ($q == "") {
	$q = 1;
}
$connection = contentClass::singleton ();
function createContent() {
	global $connection;
	global $q;
	global $language;
	$sql = "select content,option_a,option_b,option_c,option_d from project_one.questions;";
	$result = $connection->conn->query ( $sql );
	if ($result->num_rows > 0) {
		while ( $row = $result->fetch_assoc () ) {
			echo $row ["content"] . "<br/><br/>";
			echo "A> ". $row ["option_a"] . "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"
			."&nbsp&nbsp&nbsp&nbsp&nbsp";
			echo "B> ". $row ["option_b"] ."<br/>";
			echo "C> ". $row ["option_c"] ."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"
			."&nbsp&nbsp&nbsp&nbsp&nbsp";
			echo "D> ". $row ["option_d"] . "<br/><hr/><hr/><br/>";
		}
	}
}
try {
	createContent ();
} catch ( Exception $e ) {
	// echo 'Caught exception: ', $e->getMessage(), "\n";
	echo "error occured";
}
?>