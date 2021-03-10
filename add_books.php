<?php include "includes/header.php";?>
<?php include "includes/db.php";?>
<?php include "includes/fun.php";?>


    <?php
    if(isset($_POST['add_book'])){
                               $isbn=$_POST['isbn'];   
                               $book_tittle=$_POST['book_tittle'];
                               $book_author=$_POST['book_author'];   
                               $book_pub=$_POST['book_pub'];
                               $book_year=$_POST['book_year'];   
                               $book_num=$_POST['book_num'];   
        
$query = "INSERT INTO bookinfo(isbn, book_tittle, book_author, book_pub, book_year, book_num) ";
$query .= "VALUES('{$isbn}','{$book_tittle}', '{$book_author}', '{$book_pub}', '{$book_year}', '{$book_num}') ";
        $add_book_query=mysqli_query($con, $query);

        confirm($add_book_query);

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
                        <label class="title">Add New Book Details </label><br>
                           </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">ISBN</label>
          <input type="text" class="input--style-1" name="isbn"  placeholder="Enter the ISBN" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
            <label class="label">Book Tittle</label>
          <input type="text" class="input--style-1" name="book_tittle" required placeholder="enter the title">
                                </div>
                            </div>
                        </div>
                    <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
<label class="label">Author</label>
          <input type="text" class="input--style-1" name="book_author" required placeholder="Enter the Author name">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
        <label class="label">Publisher</label>
         <input type="text" class="input--style-1" name="book_pub" required placeholder="Enter the publisher ">
                                </div>
                            </div>
                        </div>
                    <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
        <label class="label">Year</label>
         <input type="text" class="input--style-1" name="book_year" required placeholder="Enter the year ">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
   <label class="label">Number</label>
         <input type="text" class="input--style-1" name="book_num" required placeholder="enter the Number">
                                </div>
                            </div>
                        </div>
                          <div class="input-group">
              <input type="submit" name="add_book" class="btn-submit m-b-0" value="Add book"> 
                        </div>
          
                    </form>
                   <div class="input-group">
                               <button class="but" type="submit"><a href="Admin.php" >Back to Home </a></button>
                            </div> 
            </div>
    </div>
    </div>
     </div>