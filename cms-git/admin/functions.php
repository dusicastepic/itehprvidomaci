
<?php 

function confirm($result){
  global $mysqli;
 
 if (!$result) {
   die("UPIT SE NE MOZE IZVRSITI!Greska!" . $mysqli->error);
 }
}

function insertCategories(){

global $mysqli;
if (isset($_POST['submit'])) {
  $cat_title=$_POST['cat_title'];
  if ($cat_title=="" || empty($cat_title)) {
    echo "Polje ne sme biti prazno";
  }
else{

      $query="INSERT INTO categories(cat_title) VALUES('$cat_title')"; #ili '{$cat_title}' ili '".$cat_title."'
      $result=$mysqli->query($query);
      if (!$result) {
       die("UPIT SE NE MOZE IZVRSITI!" . $mysqli->error);
                 }

               }
             }
           }


function findAllCategories(){
global $mysqli;
echo "<tr>";
$query="SELECT * FROM categories order by cat_id asc";
$result=$mysqli->query($query);
while ($row=$result->fetch_assoc()) {
 $cat_id=$row['cat_id'];
 $cat_title=$row['cat_title'];

 
 echo "<td>$cat_id</td>" ; 
 echo "<td>{$cat_title}</td>" ;
 echo "<td><a href='categories.php?obrisi={$cat_id}'>obriši</a></td>"; 
          echo "<td><a href='categories.php?izmeni={$cat_id}'>izmeni</a></td>"; # <!-- key=izmeni, value={$cat_id} -->
          echo "</tr>";
        }  

      }

function deleteCategories(){
  global $mysqli;

  if (isset($_GET['obrisi'])) {
    $get_cat_id=$_GET['obrisi'];
    $query="DELETE FROM categories WHERE cat_id={$get_cat_id}";
    $mysqli->query($query); 
    header("Location: categories.php");
  }
  

}




?>