<?php include "includes/header.php";?>
<?php include "includes/db.php";?>
<?php include "includes/fun.php";?>
    <div class="page-wrapper bg-img-3 p-t-240 p-b-120">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-body">
                <div class="input-group">

<div class="col-2">
                                <div class="input-group">
                        <label class="title">View All Book Details </label><br>
                           </div>
                        </div>
               
 <table style="padding: 100px;color:black ;background:aliceblue;margin-left: -32px;">
                                <thead>
                                <tr>

                                      <th>ISBN</th>
                                      <th>Tittle</th>
                                      <th>Author</th>
                                      <th>Publisher</th>
                                      <th>Year</th>
                                       <th>Number</th>
                                         <th>Update</th>
                                           <th>Delete</th>
                                 </tr>
                                </thead>
                               <tbody>    
                                <?php
                               $query="SELECT * FROM bookinfo order by book_id asc";
                               $select_book=mysqli_query($con,$query);
                               while($row=mysqli_fetch_assoc($select_book)){
                               $book_id=$row['book_id'];
                               $isbn=$row['isbn'];  
                               $book_tittle=$row['book_tittle'];
                               $book_author=$row['book_author'];
                               $book_pub=$row['book_pub'];   
                               $book_year=$row['book_year'];   
                               $book_num=$row['book_num'];
                        echo"<tr>";
                                 
                                   echo"<td>$isbn</td>";
                                   echo"<td>$book_tittle</td>";
                                   echo"<td>$book_author</td>";
                                   echo"<td>$book_pub</td>";
                                   echo"<td>$book_year</td>";
                                   echo"<td>$book_num</td>";
                    echo"<td><a href='update_books.php?update_book={$book_id}' style='color:blue;'>Update</a></td>";
                    echo"<td><a href='view_books.php?delete={$book_id}' style='color:blue;'>Delete</a></td>";

                        echo"</tr>";
                                    
                               }
                                   ?>
                                    
                            </tbody>
                        </table>
               
               
               
               
               
                </div>
            </div>
        </div>
</div>
</div>
                       <?php



if(isset($_GET['delete'])){
   $the_book_id=$_GET['delete'];
    $query="DELETE FROM bookinfo WHERE book_id={$the_book_id} ";
    $delete_book_query=mysqli_query($con, $query);
    header("Location: view_book.php");
    
}

?>