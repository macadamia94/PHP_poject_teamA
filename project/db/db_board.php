<?php
include_once "db.php";

// index.php
function sel_board_list() {
    $sql=
    "   SELECT B.b_id, B.b_ctnt, B.b_date
             , U.u_nick
          FROM board_t B
         INNER JOIN user_t U
            ON B.u_id = U.u_id
         ORDER BY B.b_id DESC
    ";
    $conn= get_conn();
    $result= mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}

// upload_proc
function ins_img(&$param) {
   $s_id= $param["s_id"];
   $target_filenm= $param["pic_img"];
   $pic_img= $param["pic_img"] == '' ? "NULL" : "'$target_filenm'";

   $sql= 
   "  INSERT INTO picture_t
      (s_id, pic_img)
      VALUES
      ('$s_id', $pic_img)
   ";
   
   $conn= get_conn();
   $result= mysqli_query($conn, $sql);
   mysqli_close($conn);
   return $result;
}