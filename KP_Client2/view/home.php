<?php
if ($_SESSION['my_session']==false) {

?>
<div class="jumbotron jumbotron-fluid">
    <div class="container mt-5">
        <h1>Please Login</h1>
        <form method="post" action="?navito=home">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="txtEmail">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="txtPassword">
            </div>

            <button type="submit" class="btn btn-primary" name="btnSignIn" value="Login">Submit</button>
        </form>
    </div>
</div>
<?php } ?>