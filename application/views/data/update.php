<section class="content">
    <div class="row">
        <!-- right column -->
        <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Form Data</h3>
                </div>
                <div class="col-sm-12">
                    <!-- Failed Message -->
                    <?php $failedmsg = $this->session->flashdata('failedmsg') ?>
                    <?php if ($failedmsg != "" or !(is_null($failedmsg))) : ?>
                        <div class="alert alert-dismissable alert-danger">
                            <button class="close" data-dismiss="alert" type="button">×</button>
                            <span class="fa fa-exclamation"></span>
                            <?php echo $failedmsg ?>
                        </div>
                    <?php endif ?>
                    <!-- Success Message -->
                    <?php $msg = $this->session->flashdata('msg') ?>
                    <?php if ($msg != "" or !(is_null($msg))) : ?>
                        <div class="alert alert-dismissable alert-success">
                            <button class="close" data-dismiss="alert" type="button">×</button>
                            <span class="fa fa-check"></span>
                            <?php echo $msg ?>
                        </div>
                    <?php endif ?>
                    <!-- Validation Error -->
                    <?php if (!empty(validation_errors())) : ?>
                        <div class="alert alert-dismissable alert-danger">
                            <button class="close" data-dismiss="alert" type="button">×</button>
                            <?php echo validation_errors('<div><span class="fa fa-exclamation"></span> ', '</div>') ?>
                        </div>
                    <?php endif ?>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <?php
                $form_action = $class.'/'.$method; 
                if ($method == 'edit') {
                    $form_action .= '/'.$data[0]->id;
                }
                $attributes = array('class' => 'form-horizontal', 'role' => 'form', 'name' => 'my_form', 'id' => 'my_form'); 
                echo form_open_multipart($form_action, $attributes);
                ?>
                <div class="box-body">
                    <div class="form-group">
                        <label for="txtName" class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtName" name="txtName" value="<?php echo empty(set_value('txtName'))?$data[0]->nama:set_value('txtName'); ?>" maxlength="30" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtTlp" class="col-sm-2 control-label">Tlp</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtTlp" name="txtTlp" value="<?php echo empty(set_value('txtTlp'))?$data[0]->nomor:set_value('txtTlp'); ?>" maxlength="30" required>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer" style="text-align: center;">
                    <input type="hidden" id="txtId" name="txtId" value="<?php echo empty($data[0]->id)?'':$data[0]->id ?>">
                    <button type="submit" class="btn btn-info">Save</button>
                    <a class="btn btn-default" href='<?php echo base_url("$class"); ?>'>Cancel</a>
                </div>
                <!-- /.box-footer -->
                <?php echo form_close();?>
            </div>
            <!-- /.box -->
        </div>
        <!--/.col (right) -->
    </div>
    <!-- /.row -->
</section>
