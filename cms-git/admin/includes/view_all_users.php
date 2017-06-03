 
          <table class="table table-hovered table-bordered">
            
  <thead>    


  <tr>
    <th>Id</th>
    <th>Korisničko ime</th> 
    <th>Ime</th>
    <th>Prezime</th>
    <th>Email</th> 
    <th>Uloga</th>
    <th>Promeni u admina</th>
    <th>Promeni u pretplatnika</th>
    <th>Izmeni</th>
    <th>Obriši</th>
    
 

  </tr>

<a href=""></a>

  </thead>
   
<?php 
   $query="SELECT * FROM users ORDER BY username asc";
              $result=$mysqli->query($query);
              while ($row=$result->fetch_assoc()) {

               $user_id=$row['user_id'];
               $username=$row['username'];
               #$user_password=$row['user_password'];
               $user_firstname=$row['user_firstname'];
               $user_lastname=$row['user_lastname'];
               $user_email=$row['user_email'];
               #$user_image=$row['user_image'];
               $user_role=$row['user_role'];
                
            

    echo "<tr>";
    echo "<td>$user_id</td>";
    echo "<td>$username</td>";
    #echo "<td>$user_password</td>";
 
    echo "<td>{$user_firstname}</td>"; 
    echo "<td> $user_lastname </td>";
    echo "<td> $user_email </td>";
    #echo " <td> <img width='500' class='img-responsive' src= '../images/$user_image'  alt='img' > </td>";  
    echo "<td>$user_role</td>";
    echo "<td><a href='users.php?change_to_admin={$user_id}'> Admin </a></td>";
    echo "<td><a href='users.php?change_to_sub={$user_id}'> Pretplatnik </a></td>";
    echo "<td><a href='users.php?source=edit_user&uid={$user_id}'> Izmeni</a> </td>";
    echo "<td><a href='users.php?delete={$user_id}'> Obriši </a></td>";
    echo "</tr>";


} ?>
          </table>

          <?php 

            if (isset($_GET['delete'])) {
              $user_id=$_GET['delete'];
              $query="DELETE from users where user_id={$user_id}";
              $result=$mysqli->query($query);
              confirm($result);
               header("Location: users.php"); 
            }
           ?>


             <?php 

            if (isset($_GET['change_to_admin'])) {
              $user_id=$_GET['change_to_admin'];
              $user_role="Admin";
              $query="UPDATE users set user_role='$user_role' where user_id={$user_id}";
              $result=$mysqli->query($query);
              confirm($result);
               header("Location: users.php"); 
            }
           ?>

              <?php 
              if (isset($_GET['change_to_sub'])) {
              $user_id=$_GET['change_to_sub'];
              $user_role="Pretplatnik";
              $query="UPDATE users set user_role='$user_role' where user_id={$user_id}";
              $result=$mysqli->query($query);
              confirm($result);
               header("Location: users.php"); 
            }
           ?>
 