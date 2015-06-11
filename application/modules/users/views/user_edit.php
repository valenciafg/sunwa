<div class="row">
    <div class="col-md-12">
        <div id="edit_error" style="padding-left: 220px;color: red;display:none;">All Fields are Required*</div>
        <form name="newuser" method="post" onsubmit="return validateEditForm()" action="<?php echo base_url(); ?>users/edit_user" class="form-horizontal">
            <div class="form-body">

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label col-md-4"><?php echo $this->lang->line('name'); ?></label>
                            <div class="col-md-8">
                                <input type="hidden" class="form-control" value="<?php echo $user['id']; ?>" name="userid">

                                <input type="text" id="edit_username" class="form-control" value="<?php echo $user['username']; ?>" name="username">

                            </div>
                        </div>
                    </div>
                    <!--/span-->
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group ">
                            <label class="control-label col-md-4"><?php echo $this->lang->line('table_cargo'); ?></label>
                            <div class="col-md-8">
                                <input type="text" id="edit_cargo" name="cargo" value="<?php echo $user['cargo']; ?>" class="form-control">
                            </div>
                        </div>
                    </div>
                    <!--/span-->
                </div>
                <!--/row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label col-md-4"><?php echo $this->lang->line('table_email'); ?></label>
                            <div class="col-md-8">
                                <input type="text" id="edit_email" name="email" value="<?php echo $user['email']; ?>" class="form-control">

                            </div>
                        </div>
                    </div>
                    <!--/span-->
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group ">
                            <label class="control-label col-md-4"><?php echo $this->lang->line('password'); ?></label>
                            <div class="col-md-8">
                                <input type="password" id="edit_password" name="password" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <!--/span-->
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label col-md-4"><?php echo $this->lang->line('table_group'); ?></label>
                            <div class="col-md-8">
                                <select name="group" class="form-control">
                                    <?php
                                    foreach ($groups as $group) {
                                        echo '<option value="' . $group["id"] . '">' . $group["name"] . '</option>';
                                    }
                                    ?>

                                </select>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label col-md-4"><?php echo $this->lang->line("language"); ?> </label>
                            <div class="col-md-8">
                                <select name="language" class="form-control">
                                    <option value="english">English</option>
                                    <option value="spanish">Spanish</option>
                                </select>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-5"></div>
                        <div class="col-md-5">
                            <input type="submit" name="submit" value="<?php echo $this->lang->line("submit"); ?>" class="btn green btn-lg" style="margin-top:30px;">

                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>
</div>
<!-- END PAGE CONTENT-->
