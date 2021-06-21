<?php
?>
<div class="jumbotron jumbotron-fluid">
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">

        <div class="container">

            <?php
            if ($_SESSION['my_session']==true) {
            ?>

                    <?php
                    if ($_SESSION['user_Role']==0) {
                    ?>
                        <div class="container">

                            <div class="row">
                                <div class="col-lg-12">
                                    <button class="btn btn-success float-right" onclick=window.location="?navito=bookMng">Add Book
                                    </button>
                                </div>
                                <div class="col-lg-12">
                                    <p></p>
                                </div>
                            </div>

                            <table id="tableId" class="display">
                                <thead>
                                <tr>
                                    <th>Cover</th>
                                    <th>ISBN</th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Publisher</th>
                                    <?php
                                    if ($_SESSION['user_Role']==0) {
                                        ?>
                                        <th>Action</th>
                                        <?php
                                    }
                                    ?>
                                </tr>
                                </thead>
                                <?php
                                foreach ($books as $row){
                                ?>
                                <tbody>
                                <tr>
                                    <td width="20" onclick="getBookDetail('<?php echo $row->book_id_local ?>')"><?php
                                        $cover=$row->book_cover;
                                        if (isset($cover)) {
                                            if ($cover == null) {
                                                echo '<img class="" width=100 src="uploads/default.jpg" >';
                                            } else {
                                                echo '<img class="" width=100 src="uploads/' . $cover . '>';
                                            }
                                        } else {
                                            echo '<img class="" width=100 src="uploads/default.jpg">';
                                        }
                                        ?></td>
                                    <td onclick="getBookDetail('<?php echo $row->book_id_local ?>')"><?php echo $row->book_isbn ?></td>
                                    <td onclick="getBookDetail('<?php echo $row->book_id_local ?>')"><?php echo $row->book_title ?></td>
                                    <td><?php echo $row->book_author ?></td>
                                    <td><?php echo $row->book_publisher ?></td>
                                    <?php
                                    if ($_SESSION['user_Role']==0) {
                                        ?>
                                        <td><input type="button" name="btnUpdate" onclick="updateValueBook('<?php echo $row->book_id_local ?>')" class="btn-success w-25" value="update"></input>
                                            <input type="button"   onclick="deleteValueBook('<?php echo $row->book_id_local ?>')" class="btn-danger w-25" value="delete"></input></td>
                                        <?php
                                    }
                                    ?>
                                </tr>
                                <?php
                                }
                                ?>
                                </tbody>
                            </table>


                        </div>

                        <?php
                    }
                ?>

                        <?php
                    }
                    ?>


            <?php
            if ($_SESSION['my_session']) {
            ?>

                <div class="container">
                        <div class="container">
                            <form id="contact-form" role="form" method="post">
                                <div class="input-group rounded ">
                                    <input type="search" id="myInput" name="txtSearch" class="form-control rounded" placeholder="Search" aria-label="Search"
                                           aria-describedby="search-addon" />
                                    <button type="submit" value="search" name="btnSearch" class="btn btn-dark mb-5">Search</button>
                                    <span class="input-group-text border-0" id="search-addon">
                                <i class="fas fa-search"></i>
                                </span>
                                </div>
                            </form>
                        </div>
                        <script>
                            var input = document.getElementById("myInput");
                            input.addEventListener("keyup", function(event) {
                                if (event.keyCode=== 13) {
                                    event.preventDefault();
                                    document.getElementById("myBtn").click();
                                }
                            });
                        </script>

                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <ul id="portfolio-flters">
                                    <li data-filter="*" class="filter-active">All</li>
                                    <li data-filter=".filter-app">A</li>
                                    <li data-filter=".filter-card">B</li>
                                    <li data-filter=".filter-web">C</li>
                                    <li data-filter=".filter-web">D</li>
                                    <li data-filter=".filter-web">E</li>
                                    <li data-filter=".filter-web">F</li>
                                </ul>
                            </div>
                        </div>



                        <div class="row portfolio">
                            <?php
                            if($books[0]->ErrCode==0) {
                                foreach ($books as $row){
                                    ?>
                                    <div class="col-lg-4 col-md-6 portfolio-item filter-app"
                                         onclick="getBookDetail('<?php echo $row->book_id_local ?>')">
                                        <div class="card shadow">
                                            <?php
                                            $cover = $row->book_cover;
                                            if (isset($cover)) {
                                                if ($cover == null) {
                                                    echo '<img class="card-img-top" width=100  src="uploads/default.jpg"> ';
                                                } else {
                                                    echo '<img class="card-img-top" width=100 src="uploads/' . $cover . '">';
                                                }
                                            } else {
                                                echo '<img class="card-img-top" width=100 src="uploads/default.jpg">';
                                            }
                                            ?>
                                            <div class="card-body">
                                                <div class="card-text"><?php echo $row->book_title ?></div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                            }
                            ?>
                            <?php
                        } else{
                        ?>
                            <div class="wraper ml-5">
                                <h2 class="text-danger">No Result</h2>
                                <hr>
                                <p class="text-danger">Please try again</p>
                            </div>
                            <?php
                            }
                            ?>
                        </div>

                </div>
                <?php
            }
            ?>

        </div>



    </section><!-- End Portfolio Section -->
</div>
