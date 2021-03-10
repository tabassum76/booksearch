<?php include "includes/header.php";?>
<?php include "includes/db.php";?>
<?php include "includes/fun.php";?>

   <?php
    if(isset($_GET['update_book'])){
      $the_book_id=$_GET['update_book'];
        $query="SELECT * FROM bookinfo WHERE book_id=$the_book_id ";
                               $select_book_query=mysqli_query($con,$query);
                               while($row=mysqli_fetch_assoc($select_book_query)){
                               $book_id=$row['book_id'];
                               $isbn=$row['isbn'];  
                               $book_tittle=$row['book_tittle'];
                               $book_author=$row['book_author'];
                               $book_pub=$row['book_pub'];   
                               $book_year=$row['book_year'];   
                               $book_num=$row['book_num'];
                               }
    }
    if(isset($_POST['update_book'])){
                               $isbn=$_POST['isbn'];   
                               $book_tittle=$_POST['book_tittle'];
                               $book_author=$_POST['book_author'];   
                               $book_pub=$_POST['book_pub'];
                               $book_year=$_POST['book_year'];   
                               $book_num=$_POST['book_num'];  
          $query = "UPDATE bookinfo SET ";
          $query .="isbn = '{$isbn}', ";
          $query .="book_tittle = '{$book_tittle}', ";
          $query .="book_author = '{$book_author}', ";
          $query .="book_pub   = '{$book_pub}', ";
          $query .="book_year= '{$book_year}', ";
          $query .="book_num  = '{$book_num}' ";
          $query .= "WHERE book_id = {$the_book_id} ";
        $update_book_query = mysqli_query($con,$query);
        confirm($update_book_query);
    }
    ?>      
<body>
    <div class="page-wrapper bg-img-3 p-t-240 p-b-120">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-body">
                   
                    <form method="POST" action="#" >
                       <div class="col-2">
                                <div class="input-group">
                        <label class="title">Update Book Details </label><br>
                           </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">ISBN</label>
          <input type="text" class="input--style-1" name="isbn"  placeholder="Enter the ISBN" required value="<?php echo $isbn;?>">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
            <label class="label">Book Tittle</label>
          <input type="text" class="input--style-1" name="book_tittle" required placeholder="enter the title" value="<?php echo $book_tittle;?>">
                                </div>
                            </div>
                        </div>
                    <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
<label class="label">Author</label>
          <input type="text" class="input--style-1" name="book_author" required placeholder="Enter the Author name" value="<?php echo $book_author;?>">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
        <label class="label">Publisher</label>
         <input type="text" class="input--style-1" name="book_pub" required placeholder="Enter the publisher " value="<?php echo $book_pub;?>">
                                </div>
                            </div>
                        </div>
                    <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
        <label class="label">Year</label>
         <input type="text" class="input--style-1" name="book_year" required placeholder="Enter the year " value="<?php echo $book_year;?>">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
   <label class="label">Number</label>
         <input type="text" class="input--style-1" name="book_num" required placeholder="enter the Number" value="<?php echo $book_num;?>">
                                </div>
                            </div>
                        </div>
                          <div class="input-group">
         <input type="submit" name="update_book" value="update Book" class="btn-submit m-b-0"> 
                        </div>
          
                    </form>
                   <div class="input-group">
                               <button class="but" type="submit"><a href="view_book.php" style="color:white">Back to Home </a></button>
                            </div> 
            </div>
    </div>
    </div>
     </div>