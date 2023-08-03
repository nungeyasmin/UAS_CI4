<?php
echo $this->extend('template/index');
echo $this->section('content');
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><?php echo $title_card; ?></h3>
            </div>
            <!-- /.card-header -->
            <form action="<?php echo $action; ?>" method="post">
                <div class="card-body">
                    <?php if(validation_errors()){
                    ?>
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                        <?php echo validation_list_errors() ?>
                    </div>
                    <?php
                    }
                    ?>

                    <?php
                    if(session()->getFlashdata('error')){
                    ?>
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-warning"></i> Error</h5>
                        <?php echo session()->getFlashdata('error'); ?>
                    </div>
                    <?php
                    }
                    ?>

                    <?php echo csrf_field() ?>
                    <div class="from group">
                        <lebel for="santri">santri</lebel>
                        <input type="text" name="santri" id="santri" value="<?php echo set_value('santri'); ?>"
                            class="form-control">
                    </div>
                    <div class="from group">
                        <lebel for="santri">santri</lebel>
                        <input type="text" name="santri" id="santri " value="<?php echo set_value('santri'); ?>"
                            class="form-control">
                    </div>

                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-save"></i>Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
echo $this->endsection();