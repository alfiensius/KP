<?php
?>
<div class="container"> <div class=" text-center mt-5 ">
        <h1>Server Management</h1>
    </div>
    <div class="row ">
        <div class="col-lg-10 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                        <form id="contact-form" role="form" method="post">
                            <div class="controls">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group"> <label for="form_name">Username</label> <input id="form_name" type="email" name="txtUsername" class="form-control" placeholder="Enter Username"  > </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group"> <label for="form_lastname">URL</label> <input id="form_lastname" type="url" name="txtURL" class="form-control" placeholder="Enter URL" required="required" data-error="URL is required." > </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group"> <label for="form_lastname">Name Server</label> <input id="form_lastname" type="text" name="txtNameServer" class="form-control" placeholder="Enter Name Server" required="required" data-error="Name Server is required."> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group"> <label for="form_lastname">Password</label> <input id="form_lastname" type="password" name="txtPassword" class="form-control" placeholder="Enter Password" required="required" data-error="Password is required."> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group"> <label for="form_lastname">Re-Type Password</label> <input id="form_lastname" type="password" name="txtReTypePassword" class="form-control" placeholder="Enter Password" required="required" data-error="Re-Type Password is required."> </div>
                                    </div>
                                </div>
                                <button type="submit" value="Add" name="btnSubmitAdd" class="btn btn-primary mb-5">Submit</button>


                        </form>
                    </div>
                </div>
            </div> <!-- /.8 -->
        </div> <!-- /.row-->
    </div>
</div>
</div>