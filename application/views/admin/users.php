<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="block">
                <div class="block-title"> <span class="glyphicon glyphicon-user"></span> Users <i class="badge badge-inverse"> <?= $this->db->count_all('user')?></i><a class="btn btn-success btn-sm" href="<?=base_url()?>index.php/Admin/AddUser"><span class="glyphicon glyphicon-plus"></span></a> </div>
                <div class="block-content">
                    <table class="table table-responsive table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Section</th>
                            <th>Role</th>
                            <th>Name</th>
                            <th>Last Login</th>
                            <th style="text-align: center">Active</th>
                            <th colspan="2" style="text-align: center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($users as $row) { ?>
                            <tr id="remove<?= $row->id?>">
                                <td><?= $row->id ?></td>
                                <td><?= @$row->section?></td>
                                <td><?= @$row->role ?></td>

                                <td><?= $row->name ?></td>
                                <td><?= ($row->last_login !=0) ? date("Y-m-d H:i:s", $row->last_login) : 'Not Login Until Now' ?></td>

                                <td style="text-align: center"><a href="<?php echo base_url() ?>index.php/Admin/Active/?table=user&id=<?=$row->id?>&active=<?=$row->active?>"><?= ($row->active == 1) ? '<span class="glyphicon glyphicon-ok-circle"></span>' : '<span class="glyphicon glyphicon-warning-sign"></span>' ?></a></td>
                                <td style="text-align: center"><a href=" <?php echo base_url() ?>index.php/Admin/FindUser/<?php echo $row->id ?>"
                                                                  class="update"><span class="glyphicon glyphicon-edit"></span></a>
                                </td>
                                <td style="text-align: center">
                                    <a class="delete" data-remove="<?= $row->id ?>" data-block="#delete" href=" <?php echo base_url() ?>index.php/Admin/DeleteUser/<?php echo $row->id ?>"><span class="glyphicon glyphicon-remove-circle"></span></a>
                                </td>
                            </tr>
                        <?php }
                        ?>
                        </tbody>
                    </table>
                    <div class="pagination">
                        <?php echo $links; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="delete" class="block-model block">
            <div class="block-title"><i class="icon-user"></i> Do you want to delete ? <a class="close block-close"
                                                                                          data-model="#delete"
                                                                                          href="#"><span
                        class="glyphicon glyphicon-remove-circle"></span></a></div>
    <div class="block-content" style="min-height: 100px">
            <div class="delete-message"></div>
            <div class="delete-control">
                <a class="btn btn-primary block-close" data-model="#delete" href="#">No</a>
                <a class="btn btn-danger delete-yes" href="" data-remove="" data-block="#delete" data-message=".delete-message" data-target=".show-data tbody">Yes</a>
            </div>
    </div>
        </div><!-- end #delete -->
