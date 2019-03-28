<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Detail Profile Hukdis
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">
          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?=base_url('assets/image/profile/'.$hukdis['image']);?>">
              <h3 class="profile-username text-center"><?= $hukdis['nama'];?></h3>
              <p class="text-muted text-center"><?= $hukdis['nip'];?></p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Detail Profile</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-get-pocket margin-r-5"></i> Jabatan / Golongan</strong>
              <p class="text-muted">
                 <?= $hukdis['golongan'];?>   || <?= $hukdis['jabatan_terakhir'];?>
              </p>
              <hr>
              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
              <p class="text-muted"><?= $hukdis['nama_wilayah'];?></p>
              <p class="text-muted"><?= $hukdis['satker_id'];?></p>
              <hr>
              <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>
              <p>
                <span class="label label-danger">UI Design</span>
                <span class="label label-success">Coding</span>
                <span class="label label-info">Javascript</span>
                <span class="label label-warning">PHP</span>
                <span class="label label-primary">Node.js</span>
              </p>
              <hr>
              <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#timeline" data-toggle="tab">Timeline</a></li>
              <li><a href="#detailKasus" data-toggle="tab">Detail Kasus</a></li>
              <li><a href="#daftarKasus" data-toggle="tab">Daftar Kasus</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="timeline">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                  <?php foreach ($detail as $key => $value) :?>
                  <?php if($value['kd_update']==1){?>

                  <li class="time-label">
                        <span class="bg-red">
                          <?=date('d M, Y', strtotime($value['tanggal']));?>
                        </span>
                  </li>
                  <li>
                    <i class="<?=$value['icon'];?>"></i>
                    <div class="timeline-item">
                      <!-- <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span> -->
                      <h3 class="timeline-header no-border"><a href="#"><?=$value['nama'];?></a> <?=$value['header']. ' ' . $hukdis['nama']. ' dengan Nomor Ticket ';?><a href="#"><?=$hukdis['no_ticket'];?></a> 
                      </h3>
                    </div>
                  </li>

                  <?php }else {?>

                  <li class="time-label">
                        <span class="bg-red">
                          <?=date('d M, Y', strtotime($value['tanggal']));?>
                        </span>
                  </li>
                  <li>
                    <i class="<?=$value['icon'];?>"></i>
                    <div class="timeline-item">
                     <!--  <span class="time"><i class="fa fa-clock-o"></i> 12:05</span> -->

                      <h3 class="timeline-header"><a href="#"><?=$value['nama'];?></a> <?=$value['header'];?> </h3>

                      <div class="timeline-body">
                        <?=$value['keterangan'];?>
                      </div>
                      <div class="timeline-footer">
                        <a href="<?= base_url('profile/detail_profile_hukdis/detail_timeline/'.$value['no_ticket']);?>" class="btn btn-primary btn-xs">Read more</a>
                      </div>
                    </div>
                  </li>
                  <?php } endforeach;?>
                  <!-- END timeline item -->
                  <li>
                    <i class="fa fa-clock-o bg-gray"></i>
                  </li>
                </ul>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="detailKasus">
                <!-- Post -->
                <div class="post">
                  <div class="box box-solid">
                    <div class="box-header with-border">
                      <i class="fa  fa-dot-circle-o"></i>

                      
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                      </blockquote>
                    </div>
                    <div class="box-body">
                      <div class="box-group" id="accordion">
                        <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                        <div class="panel box box-primary">
                          <div class="box-header with-border">
                            <h4 class="box-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                <h3 class="box-title "><strong>Latar Belakang Permasalahan</strong></h3>
                              </a>
                            </h4>
                          </div>
                          <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="box-body">
                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                              wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                              eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                              assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                              nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                              farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                              labore sustainable VHS.
                            </div>
                          </div>
                        </div>
                        <div class="panel box box-primary">
                          <div class="box-header with-border">
                            <h4 class="box-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                Collapsible Group Danger
                              </a>
                            </h4>
                          </div>
                          <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="box-body">
                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                              wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                              eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                              assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                              nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                              farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                              labore sustainable VHS.
                            </div>
                          </div>
                        </div>
                        <div class="panel box box-success">
                          <div class="box-header with-border">
                            <h4 class="box-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                Collapsible Group Success
                              </a>
                            </h4>
                          </div>
                          <div id="collapseThree" class="panel-collapse collapse">
                            <div class="box-body">
                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                              wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                              eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                              assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                              nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                              farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                              labore sustainable VHS.
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.box-body -->
                    </div>
                  <!-- /.user-block -->
                </div>
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->

               <div class="tab-pane" id="daftarKasus">
                <!-- Post -->
                <div class="post">
                  <div class="box box-solid">
                    <div class="box-header with-border">
                      <i class="fa  fa-dot-circle-o"></i>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                      </blockquote>
                    </div>
                    <div class="box-body">
                      <div class="box-group" id="accordion">
                        <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                        <div class="panel box box-primary">
                          <div class="box-header with-border">
                            <h4 class="box-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                Collapsible Group Danger
                              </a>
                            </h4>
                          </div>
                          <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="box-body">
                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                              wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                              eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                              assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                              nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                              farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                              labore sustainable VHS.
                            </div>
                          </div>
                        </div>
                        <div class="panel box box-success">
                          <div class="box-header with-border">
                            <h4 class="box-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                Collapsible Group Success
                              </a>
                            </h4>
                          </div>
                          <div id="collapseThree" class="panel-collapse collapse">
                            <div class="box-body">
                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                              wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                              eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                              assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                              nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                              farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                              labore sustainable VHS.
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.box-body -->
                    </div>
                  <!-- /.user-block -->
                </div>
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->


            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->