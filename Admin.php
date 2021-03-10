<?php include "includes/header.php";?>

<body>
    <div class="page-wrapper bg-img-3 p-t-240 p-b-120">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-body">
                   <div class="col-2">
                                <div class="input-group">
                        <label class="title">Admin Page </label><br>
                           </div>
                        </div>
                    <form method="POST" action="">
                        <div class="row row-space">

                            <div class="col-2">
                            <button class="btn-submit m-b-0" type="submit"><a href="view_book.php">View Books</a></button>
                            </div>
                             <div class="col-2">
                               <button class="btn-submit m-b-0" type="submit"><a href="add_books.php">Add New Book</a></button>
                        
                            </div>
                        </div>
                        <div class="row row-space">

                            <div class="col-2">
                            <button class="btn-submit m-b-0" type="submit"> <a href="view_book.php">Update Book</a></button>
                            </div>
                             <div class="col-2">
                               <button class="btn-submit m-b-0" type="submit"><a href="view_book.php">Delete Book</a></button>
                        
                            </div>
                        </div>
                        <div class="row row-space">

                            <div class="col-2">
                               <button class="btn-submit m-b-0" type="submit"><a href="search.php">Search Book</a></button>
                            </div>
                             <div class="col-2">
                    <button class="btn-submit m-b-0" type="submit"><a href="logout.php">Logout</a></button>
                        
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>