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
            <div class="card-body">
                <?php
                if(session()->getFlashdata('success')){
                ?>
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-check"></i> Success</h5>
                    <?php echo session()->getFlashdata('success'); ?>
                </div>
                <?php
                }
                ?>

                <?php
                if(session()->getFlashdata('error')){
                ?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-check"></i> Error</h5>
                    <?php echo session()->getFlashdata('error'); ?>
                </div>
                <?php
                }
                ?>
                <a class="btn btn-sm btn-primary" href="<?php echo base_url(); ?>/santri/tambah"><i
                        class="fa-solid fa-plus"></i>
                    Tambah
                    santri</a>
                <table class=" table">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>nis</th>
                            <th>nama</th>
                            <th>asrama</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no=1;
                        foreach ($data_santri as $r){
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $r['nis']; ?></td>
                            <td><?php echo $r['nama']; ?></td>
                            <td><?php echo $r['asrama']; ?></td>
                            <td>
                                <a class="btn btn-xs btn-info" href=""><i class="fa-solid fa-edit"></i></a>
                                <a class=" btn btn-xs btn-danger" href=""
                                    onclick="return hapusConfig(<?php echo $r['santri']; ?>)"><i
                                        class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php
                        $no++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>

<script>
function hapusConfig(id) {

    Swal.fire({
        title: 'Anda yakin akan menghapus data ini?',
        Text: " Data akan dihapus secara permanen",
        icon: 'warning',
        showCancelButtton: true,
        confireButtonColor: '#3005d6',
        cancelButtonColor: '#d33',
        confireButtontext: 'Ya, Hapus'
    }).then((resuls) => {
        if (resuls.isConfireed) {
            window.location.href = '<?php echo base_url();?>/santri/hapus' + id;

        }
    })
}
</script>
<?php
echo $this->endsection();