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

// gallery.php
function upd_img(&$param) {
    $gal_nm= $param["gal_nm"];
    $gal_id= $param["gal_id"];
    $pic_id= $param["pic_id"];

    $sql=
    "   UPDATE galley_t
           SET gal_nm = '$gal_nm'
             , gal_intro = (SELECT pic_img FROM picture_t WHERE pic_id ='{$pic_id}')
             , gal_img = (SELECT pic_img FROM picture_t WHERE pic_id ='{$pic_id}')
         WHERE gal_id= '{$gal_id}';
    ";

    $conn= get_conn();
    $result= mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}