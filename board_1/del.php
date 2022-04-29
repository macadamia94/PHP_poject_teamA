<?php
include_once "db_1.php";
$number = $_GET['number'];

$connect= get_connect();
$query = "select id from board where number = $number";
$result= mysqli_query($connect, $query);
$rows = mysqli_fetch_assoc($result);

$userid = $rows['id'];

session_start();

$URL = "./index.php";
?>

<?php
if (!isset($_SESSION['id'])) {
?> <script>
        alert("권한이 없습니다.");
        location.replace("<?php echo $URL ?>");
    </script>

<?php } else if ($_SESSION['id'] == $userid) {
    $query1 = "delete from board where number = $number";
    $result1 = $connect->query($query1); ?>
    <script>
        alert("게시글이 삭제되었습니다.");
        location.replace("<?php echo $URL ?>");
    </script>

<?php } else { ?>
    <script>
        alert("권한이 없습니다.");
        location.replace("<?php echo $URL ?>");
    </script>
<?php }
?>


