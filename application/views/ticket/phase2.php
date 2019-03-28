<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

    </section>

    <!-- Main content -->
    <section class="content">

      <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4><i class="icon fa fa-check"></i> Success</h4>
          No Ticket <a href="#"><strong> <?php echo $no_ticket; ?> </strong></a>sudah terbit, lengkapi langkah berikutnya
      </div>

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
    </section>
    <!-- /.content -->
  </div>