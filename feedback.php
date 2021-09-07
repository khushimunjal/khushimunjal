<!-- <?php 


$Platform = $_POST['Platform'];
$Recommendation = $_POST['Recommendation'];
$Concern = $_POST['Concern'];
$Trouble = $_POST['Trouble'];
$Suggestion = $_POST['Suggestion'];

$conn = new mysqli("localhost","root","","websiteuserdata");
if($conn->connect_error){
	die('connection failed : '.$conn->connect_error);
}
else{
	$stmt = $conn->prepare(" INSERT INTO feedback (Platform, Recommendation, Concern, Trouble, Suggestion)
values (?, ?, ?, ?, ?) ");
	$stmt->bind_param("ssssi, $Platform, $Recommendation, $Concern, $Trouble, $Suggestion");
	$stmt->execute();
	echo "registration successful";
	$stmt->close();
	$conn->close();
}

?>
-->