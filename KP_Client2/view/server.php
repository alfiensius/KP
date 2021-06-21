<?php

?>

<div class="jumbotron jumbotron-fluid">

    <div class="container mt-5">

        <div class="row">
            <div class="col">
                <h4>Server</h4>
            </div>

            <div class="col-lg-12">
                <button class="btn btn-success float-right mb-3" onclick=window.location="?navito=serverMng">Add Server
                </button>
            </div>

        </div>

        <table class="table" class="display">
            <thead class="thead-dark">
            <tr>
                <th>Name</th>
                <th>URL</th>
                <?php
                if ($_SESSION['user_Role']==0) {
                    ?>
                    <th>Action</th>
                    <?php
                }
                ?>
            </tr>
            </thead>

            <tbody>
            <?php

            foreach ( $servers as $row){
                ?>
            <tr>
                <td><?php echo $row->username?></td>
                <td><?php echo $row->URL?></td>
                <?php
                if ($_SESSION['user_Role']==0) {
                ?>
                <td><input type="button" style="width:30%;" onclick="" class="btn-success" value="update"></input>
                    <input type="button" style="background:#ff4906; width:30%;" onclick="" class="btn-danger " value="delete"></input>
                    <input type="button" style="background:#FFFFFF; width:30%;" onclick=window.location="?navito=sinkronMng" class="btn-light" value="sinkron"></input></td>
                    <?php
                }
                ?>
            </tr>
            <?php
            }
            ?>
            </tbody>

        </table>

        </table>
    </div>
</div>