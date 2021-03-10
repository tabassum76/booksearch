<?php include "includes/header.php";?>
<?php include "includes/db.php";?>
<?php include "includes/fun.php";?>

<body>
    <div class="page-wrapper bg-img-3 p-t-240 p-b-120">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-body">
                   
                    <form method="POST" action="searchresult.php">
                       <div class="col-2">
                                <div class="input-group">
                        <label class="title">Search Book </label><br>
                           </div>
                        </div>
                        <div class="row row-space">
                                                      <div class="col-2">

                                <div class="input-group">
                                    <label class="label">Book Title/Publisher/Published Year </label>
                                  <input  placeholder="Enter your search term..." type="search" value="" name="search" id="search" class="input--style-1">
                                                          </div>
                            </div>
                    
                           <br>
                            <div class="col-2">
                             <div class="input-group">
              <input type="submit" class="btn-submit m-b-0" value="Search" style="margin-top: 38px;"> 
                
                        </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>