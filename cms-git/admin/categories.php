
<?php include "includes/header.php" ?>

<div id="wrapper">

  <!-- Navigation -->
  <?php include "includes/navigation.php" ?>

  <div id="page-wrapper">

    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">
            Dobrodošli u admin stranicu
            <small>Odeljak za kategorije</small>
          </h1>

          <div class="col-xs-6">

           <?php  
         insertCategories();
               ?>

               <form action="" method="post">
                <div class="form-group">
                  <label for="cat_title">Dodaj kategoriju</label>
                  <input type="text" name="cat_title" class="form-contraol">
                </div>
                <div class="form-group">

                  <input class="btn btn-primary" type="submit" name="submit" value="Dodaj kategoriju">
                </div>

              </form>


            
                <!-- Za izmenu i include tj.ukljucivanje f-je update-->
            <?php if (isset($_GET['izmeni'])) {
               $cat_id=$_GET['izmeni']; #preko key u post zahtevu dolazimo do value;
               include "includes/update_categories.php";
            } ?>
</div> <!-- FORMA ZA DODAVANJE KATEGORIJE *** bootsrap class -6 columns xtra small, half of screen -->
            <div class="col-xs-6" >

              <table class="table table-bordered table-hover">

                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Naziv kategorije</th>

                  </tr>

                </thead>

                <tbody>

                  

                 <?php findAllCategories(); ?>
                   
                 </tbody>
               </table>       
              <?php deleteCategories(); ?>
            </div>
          </div>

        </div>
      </div>
      
                <table   id="t">

                 </table>
      <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- /#page-wrapper -->

  <?php include "includes/footer.php" ?>

  </body>