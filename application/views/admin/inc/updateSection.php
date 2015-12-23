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
                <div class="block-title"><span class="glyphicon glyphicon-th"></span> Update Section <a
                        class="btn btn-info btn-sm" href="<?= base_url() ?>index.php/Admin/Sections"><span
                            class="glyphicon glyphicon-eye-open"></span></a></div>
                <div class="block-content">
                    <form class="form" role="form" method="post"
                          action="<?= base_url() ?>index.php/Admin/UpdateSection/<?= $section->id ?>">
                        <div class="form-group">
                            <label for="Section">Section :</label>
                            <input type="text" name="Section" id="Section" class="form-control" autocomplete="off"
                                   required="" value="<?= $section->title ?>">
                        </div>
                        <input type="submit" class="btn btn-success" value="Update Section">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>