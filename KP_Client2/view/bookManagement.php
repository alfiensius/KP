<?php
?>
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <form id="contact-form" role="form" method="post">
        <div class="row justify-content-center mt-5 mb-2">
            <div class="col">
                <h1 class="text-center">Book Management</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group"> <label for="form_name">ISBN</label> <input id="form_name" type="text" name="txtISBN" class="form-control" placeholder="Enter ISBN" value="<?php if (isset($bookid)){echo $data[0]->book_isbn;}if($submitPressedAdd){echo $isbn;}?>" > </div>
            </div>

            <div class="col">
                <div class="form-group"> <label for="form_lastname">Title</label> <input id="form_lastname" type="text" name="txtTilte" class="form-control" placeholder="Enter title" required="required" data-error="Title is required." value="<?php if (isset($bookid)){echo $data[0]->book_title;}if($submitPressedAdd){echo $title;}?>" > </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group"> <label for="form_lastname">Author</label> <input id="form_lastname" type="text" name="txtAuthor" class="form-control" placeholder="Enter author" required="required" data-error="Author is required." value="<?php if (isset($bookid)){echo $data[0]->book_author;}if($submitPressedAdd){echo $author;}?>"> </div>
            </div>
            <div class="col">
                <div class="form-group"> <label for="form_lastname">Publisher</label> <input id="form_lastname" type="text" name="txtPublisher" class="form-control" placeholder="Enter publisher" required="required" data-error="Publisher is required." value="<?php if (isset($bookid)){echo $data[0]->book_publisher;}if($submitPressedAdd){echo $publisher;}?>"> </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group"> <label for="form_lastname">Language</label> <input id="form_lastname" type="text" name="txtLanguage" class="form-control" placeholder="Enter Language" required="required" data-error="Language is required." value="<?php if (isset($bookid)){echo $data[0]->book_language;}if($submitPressedAdd){echo $language;}?>"> </div>
            </div>
            <div class="col">
                <div class="form-group"> <label for="form_lastname">Stock</label> <input id="form_lastname" type="text" name="txtStock" class="form-control" placeholder="Enter Stock" required="required" data-error="Stock is required." value="<?php if (isset($bookid)){echo $data[0]->book_Stok;}if($submitPressedAdd){echo $stock;}?>"> </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group"> <label for="form_message">Description</label> <textarea id="form_message" name="txtDescription" class="form-control" placeholder="Write description here." rows="4" required="required" data-error="Please, leave us a message."></textarea> </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mb-2">
                <div class="form-group">
                    <label for="form_message">Cover</label>
                    <div class="custom-file">
                        <input type="file" name="albumsCover" class="custom-file-input" accept="image/png,image/jpeg">
                        <label class="custom-file-label" for="inputGroupFile01"><?php if (isset($bookid)){echo $data[0]->book_isbn;}if($submitPressedAdd){echo $isbn;}?></label>
                    </div>
                </div>
            </div>
        </div>


        <button type="submit" value="Add" name="btnSubmitAdd" class="btn btn-primary mb-5">Submit</button>

        </form>
    </div>
</div>