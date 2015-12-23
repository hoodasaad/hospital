<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <?php
            if ($this->session->flashdata('error')) {
                ?>
                <div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <strong>Warning!</strong> <?= $this->session->flashdata('error') ?>
                </div>
            <?php } ?>
            <?php
            if ($this->session->flashdata('done')) {
                ?>
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <strong>Well done!</strong> <?= $this->session->flashdata('done') ?>
                </div>
            <?php } ?>
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-lock"></span> Update Role <a
                        class="btn btn-info btn-sm" href="<?= base_url() ?>index.php/Admin/Roles"><span
                            class="glyphicon glyphicon-eye-open"></span></a></div>
                <div class="block-content">
                    <form class="form" role="form" method="post"
                          action="<?= base_url() ?>index.php/Admin/UpdateRole/<?= $role->id ?>">
                        <div class="form-group">
                            <label for="Role">Role :</label>
                            <input type="text" name="Role" id="Role" class="form-control" autocomplete="off" required=""
                                   value="<?= $role->title ?>">
                        </div>
                        <div class="form-group">
                            <label for="Access">Access :</label>
                            <input type="text" name="Access" id="Access" class="form-control" autocomplete="off"
                                   required="" value="<?= $role->access ?>">
                        </div>
                        <input type="submit" class="btn btn-success" value="Update Section">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>