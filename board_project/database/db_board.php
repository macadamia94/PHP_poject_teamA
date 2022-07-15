<?php
include_once 'db.php';

function ins_board(&$param)
{
  $title = $param["title"];
  $ctnt = $param["ctnt"];
  $i_user = $param["i_user"];
  $filename = $param["filename"];

  $conn = get_conn();
  $sql = "INSERT INTO t_board (title, ctnt, i_user, filename)
                VALUES ('$title', '$ctnt', $i_user, '$filename')";

  $rs = mysqli_query($conn, $sql);
  mysqli_close($conn);

  return $rs;
}

function ins_reply(&$param)
{
  $i_board = $param['i_board'];
  $i_user = $param['i_user'];
  $ctnt = $param['ctnt'];
  $rv = $param['rv'];

  $conn = get_conn();
  $sql = "INSERT INTO t_reply (i_board, ctnt, i_user, rv)
                VALUES ($i_board, '$ctnt', $i_user, $rv)";

  $rs = mysqli_query($conn, $sql);
  mysqli_close($conn);

  return $rs;
}

function sel_paging_cnt(&$param)
{
  $conn = get_conn();
  $sql = "SELECT ceil(count(i_board) / {$param['row_cnt']}) as cnt 
                FROM t_board";
  if ($param['search_txt'] != "") {
    $sql .= " WHERE title LIKE '%{$param['search_txt']}%'";
  }

  $rs = mysqli_query($conn, $sql);
  mysqli_close($conn);
  $row = mysqli_fetch_assoc($rs);

  return $row['cnt'];
}

function sel_board_list(&$param)
{
  $s_idx = $param['s_idx'];
  $row_cnt = $param['row_cnt'];

  $conn = get_conn();
  $sql = "SELECT a.*, b.nm, b.profile_img 
                FROM t_board a
                INNER JOIN t_user b
                ON a.i_user = b.i_user ";
  if ($param['search_txt'] != "") {
    $sql .= " WHERE a.title LIKE '%{$param['search_txt']}%' ";
  }
  $sql .= " ORDER BY a.i_board desc LIMIT $s_idx, $row_cnt";

  $rs = mysqli_query($conn, $sql);
  mysqli_close($conn);

  return $rs;
}

function sel_board_list2()
{
  $conn = get_conn();
  $sql = "SELECT a.*, b.nm
                FROM t_board a, t_user b
                WHERE a.i_user = b.i_user
                ORDER BY a.i_board desc";

  $rs = mysqli_query($conn, $sql);
  mysqli_close($conn);

  return mysqli_num_rows($rs);
  // return $rs;
}

function sel_board(&$param)
{
  $i_board = $param["i_board"];

  $conn = get_conn();
  $sql = "SELECT a.*, b.nm 
                FROM t_board a, t_user b
                WHERE a.i_user = b.i_user and a.i_board = $i_board";

  $rs = mysqli_query($conn, $sql);
  mysqli_close($conn);

  return mysqli_fetch_assoc($rs);
}

function sel_reply(&$param)
{
  $i_board = $param['i_board'];

  $conn = get_conn();
  $sql = "SELECT a.*, b.nm FROM t_reply a, t_user b 
                WHERE a.i_board = $i_board and a.i_user = b.i_user
                ORDER BY i_re asc";

  $rs = mysqli_query($conn, $sql);
  mysqli_close($conn);

  return $rs;
}

function sel_reply2(&$param)
{
  $i_board = $param['i_board'];

  $conn = get_conn();
  $sql = "SELECT sum(a.rv) as rv_cnt FROM t_reply a, t_user b 
                WHERE a.i_board = $i_board and a.i_user = b.i_user";

  $rs = mysqli_query($conn, $sql);
  mysqli_close($conn);

  return $rs;
}

function upd_board(&$param)
{
  $i_board = $param["i_board"];
  $i_user = $param["i_user"];
  $title = $param["title"];
  $ctnt = $param["ctnt"];
  $filename = $param["filename"];

  $conn = get_conn();
  $sql = "UPDATE t_board 
                SET title = '$title', ctnt = '$ctnt', 
                    updated_at = now(), filename = '$filename'
                WHERE i_board = $i_board and i_user = $i_user";

  $rs = mysqli_query($conn, $sql);
  mysqli_close($conn);

  return $rs;
}

function del_board(&$param)
{
  $i_board = $param["i_board"];
  $i_user = $param["i_user"];

  $conn = get_conn();
  $sql = "DELETE FROM t_board
                WHERE i_board = $i_board and i_user = $i_user";

  $rs = mysqli_query($conn, $sql);
  mysqli_close($conn);

  return $rs;
}

function del_reply(&$param)
{
  $i_re = $param['i_re'];
  $i_board = $param['i_board'];

  $conn = get_conn();
  $sql = "DELETE FROM t_reply
                WHERE i_board = $i_board and i_re = $i_re";

  $rs = mysqli_query($conn, $sql);
  mysqli_close($conn);

  return $rs;
}

function sel_next_board(&$param)
{
  $i_board = $param['i_board'];

  $conn = get_conn();
  $sql = "SELECT i_board FROM t_board
                WHERE i_board > $i_board
                ORDER BY i_board
                LIMIT 1";

  $rs = mysqli_query($conn, $sql);
  mysqli_close($conn);
  $row = mysqli_fetch_assoc($rs);

  if ($row) {
    return $row['i_board'];
  }
  return 0;
}

function sel_prev_board(&$param)
{
  $i_board = $param['i_board'];

  $conn = get_conn();
  $sql = "SELECT i_board FROM t_board
                WHERE i_board < $i_board
                ORDER BY i_board desc
                LIMIT 1";

  $rs = mysqli_query($conn, $sql);
  mysqli_close($conn);
  $row = mysqli_fetch_assoc($rs);

  if ($row) {
    return $row['i_board'];
  }
  return 0;
}

function view_board(&$param)
{
  $i_board = $param['i_board'];

  $conn = get_conn();
  $sql = "UPDATE t_board
                SET view_cnt = view_cnt+1
                WHERE i_board = $i_board";

  $rs = mysqli_query($conn, $sql);
  mysqli_close($conn);

  return $rs;
}

function search_board(&$param)
{
  $search_sel = $param['search_sel'];
  $search_inp = $param['search_inp'];
  $textArray = explode(" ", $search_inp);
  $where = [];

  $conn = get_conn();
  $sql = "SELECT a.*, b.nm, b.i_user
                FROM t_board a
                INNER JOIN t_user b
                ON a.i_user = b.i_user
                WHERE ";

  switch ($search_sel) {
    case "search_nm":
      $where += ["b.nm"];
      break;
    case "search_title":
      $where += ["a.title"];
      break;
    case "search_ctnt":
      $where += ["a.title", "a.ctnt"];
      break;
    default:
  }

  for ($i = 0; $i < count($textArray); $i++) {
    for ($j = 0; $j < count($where); $j++) {
      $sql = $sql . " $where[$j] LIKE '%$textArray[$i]%' ";
      if (($i != count($textArray) - 1) || ($j != count($where) - 1)) {
        $sql = $sql . " OR ";
      }
    }
  }
  $sql = $sql . " ORDER BY i_board desc";
  // print $sql;
  $rs = mysqli_query($conn, $sql);
  mysqli_close($conn);

  return $rs;
  // return null;
}
