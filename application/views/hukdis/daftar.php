<div class="content-wrapper">
    <!-- Content Header (Page header) -->
<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Hukuman Disiplin Kementerian Hukum dan Hak Asasi Manusia</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped table-hover dataTable">
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>Nip</th>
                  <th>Kanwil / Pusat</th>
                  <th>Satuan Kerja</th>
                  <th>Tanggal Putusan</th>
                  <th>Tanggal Berakhir</th>
                </tr>
                </thead>
                <tbody>
                
                  <?php foreach ($hukdis as $key => $hd):?>
                    <tr>
                      <td><a href="<?= base_url('profile/detail_profile_hukdis/'.$hd['no_ticket']);?>"><?= $hd['nama'];?></a></td>
                      <td><?= $hd['nip'];?></td>
                      <td><?= $hd['nama_wilayah'];?></td>
                      <td><?= $hd['satker_id'];?></td>
                      <td><?= $hd['tgl_putusan'];?></td>
                      <td><?= $hd['tgl_berakhir'];?></td>
                    </tr>
                    
                  <?php endforeach ?>
                  
                </tbody>
                <tfoot>
                <tr>
                  <th>Nama</th>
                  <th>Nip</th>
                  <th>Kanwil / Pusat</th>
                  <th>Satuan Kerja</th>
                  <th>Tanggal Putusan</th>
                  <th>Tanggal Berakhir</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>