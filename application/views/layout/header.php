<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
                <div class="head-logo">JCI Implementation</div>
            </div>
            <div class="col-sm-4">
                <form id="form-search" class="form-inline" action="<?= base_url() ?>index.php/dr_control/search" method="get">
                    <div class="form-group">
                        <input type="search" name="search" id="input-search" class="form-control" placeholder="Search By MRN Or Name" required="">
                    </div>
                        <button type="submit" class="btn btn-sm btn-default">Search</button>
                </form>
            </div>
            <div class="col-sm-4">
                <div class="user-info">
                    Welcome <b> <?=$UserInfo->name?> </b>
                    <a href="<?= base_url() ?>index.php/Logout"><span class="glyphicon glyphicon-off"></span></a>
                </div>
                <div class="note">
                    <a href=""><span class="glyphicon glyphicon-envelope"></span></a>
                    <a href=""><span class="glyphicon glyphicon-earphone"></span></a>
                </div>
            </div>
        </div>
    </div>
</header>