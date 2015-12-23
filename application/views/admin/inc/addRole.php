<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <?php
            if($this->session->flashdata('error')){
                ?>
                <div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Warning!</strong> <?= $this->session->flashdata('error')?>
                </div>
            <?php } ?>
            <?php
            if($this->session->flashdata('done')){
                ?>
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Well done!</strong> <?= $this->session->flashdata('done')?>
                </div>
            <?php } ?>
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-lock"></span> Add New Role <a
                        class="btn btn-info btn-sm" href="<?= base_url() ?>index.php/Admin/Roles"><span
                            class="glyphicon glyphicon-eye-open"></span></a></div>
                <div class="block-content">
                    <form class="form" role="form" method="post" action="<?= base_url()?>index.php/Admin/CreateRole">
                        <div class="form-group">
                            <label for="Role">Role :</label>
                            <input type="text" name="Role" id="Role" class="form-control" autocomplete="off" required="">
                        </div>
                        <div class="form-group">
                            <label for="Access">Access :</label>
                            <input type="text" name="Access" id="Access" class="form-control" autocomplete="off" required="">
                        </div>
                        <input type="submit" class="btn btn-success" value="Add Role">
                        <input type="reset" class="btn btn-danger" value="Reset">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>