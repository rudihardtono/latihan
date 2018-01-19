<section class="content">
    <div class="row">
        <!-- right column -->
        <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">View Data</h3>
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
                </div>        
                <div class="col-sm-12 text-right" style="margin-bottom: 10px; margin-top: 10px">
                    <a href="<?php echo base_url("data/add") ?>"><button class="btn btn-primary btn-sm"> <i class="fa fa-plus"></i> <span>Add Data</span> </button></a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered table-hover dataTable" id="datatable">
                        <thead>
                            <tr>
                                <th width="1%">No</th>
                                <th width="60%">Nama</th>
                                <th width="30%">Nomor</th>
                                <th width="9%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.box -->
        </div>
        <!--/.col (right) -->
    </div>
    <!-- /.row -->
</section>