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
                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Add New User <a
                        class="btn btn-info btn-sm" href="<?= base_url() ?>index.php/Admin/Users"><span
                            class="glyphicon glyphicon-eye-open"></span></a></div>
                <div class="block-content">
                    <form class="form" role="form" method="post" action="<?= base_url() ?>index.php/Admin/CreateUser">
                        <div class="form-group">
                            <label for="Section">Section :</label>
                            <select name="Section" id="Section" class="form-control">
                                <option>-- Select Section --</option>
                                <?php
                                foreach ($sections as $section) {
                                    echo '<option value="' . $section->id . '">' . $section->title . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Role">Role :</label>
                            <select name="Role" id="Role" class="form-control">
                                <option>-- Select Role --</option>
                                <?php
                                foreach ($roles as $role) {
                                    echo '<option value="' . $role->id . '">' . $role->title . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Name">Name :</label>
                            <input type="text" name="Name" id="Name" class="form-control" autocomplete="off"
                                   required="">
                        </div>
                        <div class="form-group">
                            <label for="Phone">Phone :</label>
                            <input type="text" name="Phone" id="Phone" class="form-control" autocomplete="off"
                                   required="">
                        </div>
                        <div class="form-group">
                            <label for="UserName">User Name :</label>
                            <input type="text" name="UserName" id="UserName" class="form-control" autocomplete="off"
                                   required="">
                        </div>
                        <div class="form-group">
                            <label for="Password">Password :</label>
                            <input type="password" name="Password" id="Password" class="form-control" autocomplete="off"
                                   required="">
                        </div>
                        <input type="submit" class="btn btn-success" value="Add User">
                        <input type="reset" class="btn btn-danger" value="Reset">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>