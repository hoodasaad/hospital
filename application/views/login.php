<div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12 login">
        <div class="logo">JCI Implementation</div>
        <?php echo form_open('welcome/login'); ?>
        <div class="form-group">
            <label for="UserName">User Name:</label>
                <input type="text" id="UserName" name="UserName" class="form-control" placeholder="username" required="" autocomplete="off">
        </div>
        <div class="form-group">
            <label for="Password">Password:</label>
                <input type="password" id="Password" name="Password" class="form-control" placeholder="password" required="" autocomplete="off">
        </div>

        <div class="form-group">
            <input type="submit" value="Login" class="btn btn-success btn-block">
        </div>
        <?= form_close();?>
    </div>
</div>