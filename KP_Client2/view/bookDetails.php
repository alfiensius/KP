<?php
?>

<body class="bg-grey-lightest">

<div class="result-search pb-5">


    <section class="container mt-8">

        <div class="container">
            <div class="flex flex-wrap">
                <div class="row w-25">
                    <div class="shadow">
                        <div class="col>"
                            <div class="card-deck rounded w-25">
                                <?php
                                $cover=$data[0]->book_cover;
                                if (isset($cover)) {
                                    if ($cover == null) {
                                        echo '<img class="rounded" src="uploads/default.jpg"> ';
                                    } else {
                                        echo '<img class="card-img-top" width=100 src="uploads/' . $cover . '">';
                                    }
                                } else {
                                    echo '<img class="card-img-top" width=100 src="uploads/default.jpg">';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="flex-1 p-0 mt-4 px-md-4">
                    <blockquote class="blockquote">
                        <h4 class="mb-2"><?php echo $data[0]->book_title ?></h4>
                    </blockquote>
                    <hr>
                    <p class="text-grey-darker">
                        <?php echo $data[0]->book_description?></p>
                    <hr>

                    <h5 class="mt-4 mb-1">Availability</h5>
                    <h5 class="mt-4 mb-1">Detail Information</h5>
                    <div class="mt-4 mb-1">
                            <dl class="row">
                                <dt class="col-sm-3">ISBN</dt>
                                <dd class="col-sm-9">
                                    <div><?php echo $data[0]->book_isbn?></div>
                                </dd>
                                <div class="mt-5 mb-1"></div>
                                <dt class="col-sm-3">Author</dt>
                                <dd class="col-sm-9">
                                    <div itemprop="author" property="author"><?php echo $data[0]->book_author?></div>
                                </dd>
                                <div class="mt-5 mb-1"></div>
                                <dt class="col-sm-3">Publisher</dt>
                                <dd class="col-sm-9">
                                    <div itemprop="isbn" property="isbn"><?php echo $data[0]->book_publisher?></div>
                                </dd>
                                <div class="mt-5 mb-1"></div>
                                <dt class="col-sm-3">Series Title</dt>
                                <dd class="col-sm-9">
                                    <div><?php echo $data[0]->book_series_title?></div>
                                </dd>
                                <div class="mt-5 mb-1"></div>
                                <dt class="col-sm-3">Call Number</dt>
                                <dd class="col-sm-9">
                                    <div><?php echo $data[0]->book_call_number?></div>
                                </dd>
                                <div class="mt-5 mb-1"></div>
                                <dt class="col-sm-3">Collation</dt>
                                <dd class="col-sm-9">
                                    <div itemprop="numberOfPages" property="numberOfPages"><?php echo $data[0]->book_collation?></div>
                                </dd>
                                <div class="mt-5 mb-1"></div>
                                <dt class="col-sm-3">Language</dt>
                                <dd class="col-sm-9">
                                    <div>
                                        <meta itemprop="inLanguage" property="inLanguage" content="Indonesia"><?php echo $data[0]->book_language?></div>
                                </dd>
                                <div class="mt-5 mb-1"></div>
                                <dt class="col-sm-3">Classification</dt>
                                <dd class="col-sm-9">
                                    <div><?php echo $data[0]->book_classification?></div>
                                </dd>
                                <div class="mt-5 mb-1"></div>
                                <dt class="col-sm-3">Content Type</dt>
                                <dd class="col-sm-9">
                                    <div itemprop="bookFormat" property="bookFormat"><?php echo $data[0]->book_content_type?></div>
                                </dd>
                                <div class="mt-5 mb-1"></div>
                                <dt class="col-sm-3">Media Type</dt>
                                <dd class="col-sm-9">
                                    <div itemprop="bookFormat" property="bookFormat"><?php echo $data[0]->book_media_type?></div>
                                </dd>
                                <div class="mt-5 mb-1"></div>
                                <dt class="col-sm-3">Carrier Type</dt>
                                <dd class="col-sm-9">
                                    <div itemprop="bookFormat" property="bookFormat"><?php echo $data[0]->book_carrier_type?></div>
                                </dd>
                                <div class="mt-5 mb-1"></div>
                                <dt class="col-sm-3">Edition</dt>
                                <dd class="col-sm-9">
                                    <div itemprop="bookEdition" property="bookEdition"><?php echo $data[0]->book_edition?></div>
                                </dd>
                                <div class="mt-5 mb-1"></div>
                                <dt class="col-sm-3">Subject</dt>
                                <dd class="col-sm-9">
                                    <div class="s-subject" itemprop="keywords" property="keywords"><?php echo $data[0]->book_subject?></div>
                                </dd>
                                <div class="mt-5 mb-1"></div>
                                <dt class="col-sm-3">Spesific Detail Info</dt>
                                <dd class="col-sm-9">
                                    <div><?php echo $data[0]->book_specific_detail_info?></div>
                                </dd>
                                <div class="mt-5 mb-1"></div>
                                <dt class="col-sm-3">Statement of Responsibility</dt>
                                <dd class="col-sm-9">
                                    <div><?php echo $data[0]->book_statement_of_responsibility?></div>
                                </dd>
                            </dl>

                        <h5 class="mt-4 mb-1">Comments</h5>
                        <hr>
                        <?php
                        if ($_SESSION['my_session']==true) {
                        ?>

                            <?php
                            if ($_SESSION['user_Role']==1) {
                                ?>
                                <div class="container">
                                    <form>
                                        <div class="form-group">
                                            <textarea class="form-control" rows="5" id="comment"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <a href="?navito=home" class="btn btn-outline-primary">Submit</a>
                                <?php
                            }
                            ?>
                                <?php
                            }
                            ?>

                        <?php
                        if ($_SESSION['my_session']==false) {
                        ?>
                        <a href="?navito=home" class="btn btn-outline-primary">You must be logged in to post a comment</a>
                            <?php
                        }
                        ?>
                    </div>

                </div>
            </div>
        </div>
        <br>
    </section>
</div>

</body>
