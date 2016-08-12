<?php
// Includes
include("../../serv/utils.php");

// Show error message if need
if (isset($_SESSION['erreur'])) {
    showError($_SESSION['erreur']);
}
?>

<div class="row">
    <div class="col-sm-8 col-md-offset-2">
        <br/>
        <form class="form-horizontal" method="post" action="../../serv/buildingForm_serv.php" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-sm-3 control-label" for="fieldName">Nom du bâtiment</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="fieldName" placeholder="Nom" name="name">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="fieldAddress">Adresse du bâtiment</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="fieldAddress" placeholder="Adresse" name="address">
                </div>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>
