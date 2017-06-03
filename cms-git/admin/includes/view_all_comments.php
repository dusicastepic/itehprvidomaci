 
          <table class="table table-hovered table-bordered">
            
  <thead>    


  <tr>
    <th>Id</th>
    <th>Id objave</th>
    <th>Autor</th>
    <th>Odgovor na</th>
    <th>Email</th>
    <th>Datum</th>
    <th>Status</th>
    <th>Sadržaj</th>
    <th>Odobravanje</th>
    <th>Neodobravanje</th>
    
    <th>Brisanje</th>
    
    <!-- <th>comments</th>-->

  </tr>

<a href=""></a>

  </thead>
   
<?php 

   $query="SELECT * FROM comments  ORDER BY comment_date desc";
              $result=$mysqli->query($query);
              while ($row=$result->fetch_assoc()) {

               $comment_id=$row['comment_id'];
               $comment_post_id=$row['comment_post_id'];
               $comment_author=$row['comment_author'];
               $comment_email=$row['comment_email'];
               $comment_date=$row['comment_date'];
               $comment_content=$row['comment_content'];
               $comment_status=$row['comment_status'];
               
              
            
 
    echo "<tr>";
    echo "<td>$comment_id</td>";
    echo "<td>$comment_post_id</td>";

    echo "<td>$comment_author</td>";

      $query2="SELECT * from posts where post_id=$comment_post_id";
          $res=$mysqli->query($query2);
              while ($rs=$res->fetch_assoc()){

                $post_id=$rs['post_id'];
                $post_title=$rs['post_title'];
               
              }
               echo "<td> <a href='../post.php?p_id=$post_id'>$post_title</a></td>";

    
    echo "<td>$comment_email</td>";

      

    
      
$dat=date('d-m-Y H:i', strtotime($comment_date));

     
    echo "<td> $dat </td>";
    echo "<td> $comment_status</td>";
    echo "<td>$comment_content</td>";
    echo "<td><a href='comments.php?approve_comment={$comment_id}'> odobri </a></td>";
    echo "<td><a href='comments.php?unapprove_comment={$comment_id}'>odbij</a></td>";
   
    echo "<td><a href='comments.php?delete={$comment_id}'>obriši</a></td>";
    #echo "<td>$post_comment_count</td>";
    echo "</tr>";

 
} ?>
          </table>

          <?php 

            if (isset($_GET['delete'])) {
              $comment_id=$_GET['delete'];
              $query="DELETE from comments where comment_id={$comment_id}";
              $result=$mysqli->query($query);
              confirm($result);
               header("Location: comments.php"); 
            }
           ?>

           <?php 
            if (isset($_GET['approve_comment'])) {
              $odobren_prom='odobren';
              $comment_id=$_GET['approve_comment'];
              $query="UPDATE comments set comment_status='$odobren_prom' where comment_id={$comment_id}";
              $result=$mysqli->query($query);
              confirm($result);
               header("Location: comments.php"); 
            }
            ?>

          <?php
          if (isset($_GET['unapprove_comment'])) {
               $neodobren_prom='neodobren';
               $comment_id=$_GET['unapprove_comment'];
               $query="UPDATE comments SET comment_status=  '$neodobren_prom' WHERE comment_id={$comment_id}";
               $res=$mysqli->query($query);
               confirm($res);
               header("Location: comments.php");
            } 
            ?>
