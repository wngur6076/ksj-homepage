<?php include "./db.php";

if ($_POST["id"] == "" || $_POST["pw"] == "") {
    echo '<script> location.href="./"; </script>';
} else {
    $id = $_POST['id'];
    $pw = $_POST['pw'];
    $sql = mq("select * from member where userid='{$id}' AND password = '{$pw}'");
    $member = $sql->fetch_array();
    if ($member != null) {
        echo "<script>alert('로그인 성공!'); location.href='./';</script>";
    } else {
        echo "<script>alert('아이디 혹은 비밀번호를 확인하세요.'); history.back();</script>";
    }
}
