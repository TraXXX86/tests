<div class="row">
    <div class="col-sm-4 col-md-offset-4">
        <br/>
        <form method="post" action="../../serv/form/authForm_serv.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="fieldMail">Email address</label>
                <input type="email" class="form-control" id="fieldMail" placeholder="Email" name="mail">
            </div>
            <div class="form-group">
                <label for="fieldPassword">Password</label>
                <input type="password" class="form-control" id="fieldPassword" placeholder="Password" name="password">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
        <?php
        // Includes
        include_once ("../../serv/utils.php");
        // Show error message if need
        if (isset($_SESSION['erreur'])) {
            showError($_SESSION['erreur']);
        }
        ?>
    </div>
</div>



