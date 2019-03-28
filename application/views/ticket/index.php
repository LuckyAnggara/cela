<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Open New Ticket
        <small>untuk pelaporan usulan hukdis tingkat berat</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
    
      <!-- /.row -->
  <form action="<?= base_url('ticket/add'); ?>" method="post" enctype="multipart/form-data" >
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Surat</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           
              <div class="box-body col-md-6">
                <div class="form-group">
                <label>Tanggal Diterima</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" name="tanggalDiterima" id="tanggalDiterima">
                </div>
                <?= form_error('tanggalDiterima','<small class="text-danger pl-3">','</small>');?>   
               </div>
                <div class="form-group">
                  <label for="no_surat">No Surat Masuk</label>
                  <?= form_error('no_surat','<small class="text-danger pl-3">','</small>');?>   
                  <input type="text" class="form-control" id="no_surat" name="no_surat">
                </div>
                    
              </div>
              <div class="box-body col-md-6">
                <div class="form-group">
                <label>Tanggal Surat</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right"  name="tanggalSurat" id="tanggalSurat">
                </div>
                <?= form_error('tanggalSurat','<small class="text-danger pl-3">','</small>');?>
              </div>

                <div class="form-group">
                <label>Asal Surat</label>
                <select class="form-control select2" id="asalSurat" name="asalSurat" style="width:100%">
                  <?php foreach ($wilayah as $key => $wil) :?>
                  <option value="<?= $wil['id'];?>" id="<?= $wil['id'];?>"><?= $wil['nama_wilayah'];?></option>
                  <?php endforeach; ?>
                </select>
                <?= form_error('asalSurat','<small class="text-danger pl-3">','</small>');?>
              </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="perihal">Perihal Surat</label>
                  <input type="text" class="form-control" id="perihal" name="perihal">
                  <?= form_error('perihal','<small class="text-danger pl-3">','</small>');?>
                </div>
              </div>
              <div class="box-footer">
                
              </div>
            
          </div>
          <!-- /.box -->    
        </div>
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Profile Terlapor</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

              <div class="box-body">
                <div class="form-group">
                  <label for="nip">NIP</label>
                  <input type="text" class="form-control" id="nip" name="nip">
                  <?= form_error('nip','<small class="text-danger pl-3">','</small>');?>
                </div>
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" >
                  <?= form_error('nama','<small class="text-danger pl-3">','</small>');?>
                </div>
                <div class="form-group">
                  <label for="golongan">Golongan</label>
                  <select class="form-control select2" id="golongan" name="golongan" style="width:100%">
                  <?php foreach ($golongan as $key => $gol) :?>
                  <option value="<?= $gol['id'];?>"><?= $gol['golongan'];?> - <?= $gol['keterangan'];?></option>
                  <?php endforeach; ?>

                  </select>
                  <?= form_error('golongan','<small class="text-danger pl-3">','</small>');?>
                  
                </div>
                <div class="form-group">
                  <label for="jabatan">Jabatan Terakhir</label>
                  <input type="text" class="form-control" id="jabatan" name="jabatan">
                  <?= form_error('jabatan','<small class="text-danger pl-3">','</small>');?>    
                </div>
                 <div class="form-group">
                  <label for="pelanggaran">Jenis Pelanggaran</label>
                  <select class="form-control select2" id="pelanggaran" name="pelanggaran" style="width:100%">
                  <?php foreach ($pelanggaran as $key => $pelanggaran) :?>
                  <option value="<?= $pelanggaran['id'];?>" id="<?= $pelanggaran['id'];?>"><?= $pelanggaran['nama'];?></option>
                  <?php endforeach; ?>
                  </select>
                  <?= form_error('pelanggaran','<small class="text-danger pl-3">','</small>');?>
                </div>
              
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
              </div>
          </div>

          <!-- /.box -->    
        </div>
        <!--/.col (right) -->
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Wilayah Kerja Terlapor</h3>
                </div>
            <div class="box-body">
              <div class="form-group">
                <label>Nama Wilayah</label>
                <select class="form-control select2" id="namaWilayah" name="namaWilayah" style="width:100%">
                  <?php foreach ($wilayah as $key => $wil) :?>
                  <option value="<?= $wil['id'];?>" id="<?= $wil['id'];?>"><?= $wil['nama_wilayah'];?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="form-group">
                <label>Nama Satker</label>
                <select class="form-control select2" id="namaSatker" name="namaSatker" style="width:100%">
                    <option value="0">-Pilih Wilayah Terlebih Dahulu-</option>
                </select>
              </div>  
            </div>
            <div class="box-footer">
                <button type="" class="btn btn-primary pull-right">Selanjutnya</button>
            </div>
          </div>
            <!-- /.col -->
          </div>
        
      </div>
      </form> 


    </section>
    <!-- /.content -->
  </div>