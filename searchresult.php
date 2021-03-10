<?php include "includes/header.php";?>
<?php include "includes/db.php";?>
<?php include "includes/fun.php";?>
    <div class="page-wrapper bg-img-3 p-t-240 p-b-120">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-body">
                <div class="input-group">

<?php
if(isset($_POST['search']))
{ 
$search=$_POST['search'];
$query="SELECT * FROM bookinfo where book_tittle LIKE '%$search%' OR book_pub LIKE '%$search%' OR book_year LIKE '%$search%'";
$search_query=mysqli_query($con,$query);
       if(!$search_query)
    {
        die("Queryfeild".mysqli_error($con));
    }
    $count= mysqli_num_rows($search_query);
    if ($count == 0)
    {
         echo "<h1 style='padding: 100px;color:black ;background:aliceblue;'>No Result found for \"$search\"</h1> ";
    }else 
    {
echo "<h1 style='text-align:left;font-size:28px;padding-top: 10px; color:white;'> Result  for \"$search\"</h1> "
                ?>
<table style="padding: 100px;color:black ;background:aliceblue;">
                                <thead>
                                <tr>
                                      <th>Id</th>
                                      <th>ISBN</th>
                                      <th>Tittle</th>
                                      <th>Author</th>
                                      <th>Publisher</th>
                                      <th>Year</th>
                                       <th>Number</th>
                                       
                                 </tr>
                                </thead>
                               <tbody> 
 <?php
 while($row=mysqli_fetch_assoc($search_query))   
{                                                          
$book_id=$row['book_id'];
                               $isbn=$row['isbn'];  
                               $book_tittle=$row['book_tittle'];
                               $book_author=$row['book_author'];
                               $book_pub=$row['book_pub'];   
                               $book_year=$row['book_year'];   
                               $book_num=$row['book_num'];
                        echo"<tr>";
                                   echo"<td>$book_id</td>";
                                   echo"<td>$isbn</td>";
                                   echo"<td>$book_tittle</td>";
                                   echo"<td>$book_author</td>";
                                   echo"<td>$book_pub</td>";
                                   echo"<td>$book_year</td>";
                                   echo"<td>$book_num</td>";
                   

                        echo"</tr>";
                                    
                               }
                                   ?>
                                    
                            </tbody>
                        </table>
                        <?php
}
    }
    
     
    ?>
                </div>
            </div>
        </div>
</div>
</div>