<div class="content-wrapper">
    <!-- Content Header (Page header) -->
<!-- Main content -->
    <section class="content">
<!-- Input addon -->
      <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Search</h3>
        </div>
        <div class="box-body">
            <h5>Input NIP yang akan di cari</h5>
            <?php echo validation_errors(); ?>
            <?php echo form_open('search/'); ?>
            <div class="input-group input-group-lg">
              <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" id="nip" name="nip" value="<?= set_value('nip');?>" class="form-control" placeholder="Input NIP, hanya angka">
              <span class="input-group-btn">
                <button type="submit" class="btn btn-info btn-flat">Search!</button>
              </span>
            </div>
            </form>
          </div>
      </div>
        

      <div>
          
    <?= $this->session->flashdata('message');?>
            
        </div>
    </section>
</div>  