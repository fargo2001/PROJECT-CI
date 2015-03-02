<?php echo $header; ?>

<div id="login-box">
    <div class="box-title">
        <h1><i class="fa fa-lock"></i> Please Login to Continue</h1>
    </div>

    <div class="box-content">
        <?php if (isset($warning)) echo $warning; ?>
        <?php echo validation_errors(); ?>
        <?php echo form_open('common/login'); ?>
            <div class="form-group">
                <label for="username">Username:</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-user"></i>
                    </span>
                    <input type="text" size="20" id="username" name="username" class="form-control" />
                </div>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-lock"></i>
                    </span>
                    <input type="password" size="20" id="password" name="password" class="form-control" />
                </div>
            </div>
            <input type="submit" value="Login" class="btn btn-default pull-right"/>
        </form>
    </div>
</div>

<?php echo $footer; ?>