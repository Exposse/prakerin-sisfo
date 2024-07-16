<?php
$comp_model = new SharedController;
$page_element_id = "add-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
$show_header = $this->show_header;
$view_title = $this->view_title;
$redirect_to = $this->redirect_to;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="add"  data-display-type="" data-page-url="<?php print_link($current_page); ?>">
    <div  class="">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <?php $this :: display_page_errors(); ?>
                    <div  class="bg-light p-3 animated fadeIn page-content">
                        <form id="laporan-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-vertical needs-validation" action="<?php print_link("laporan/add?csrf_token=$csrf_token") ?>" method="post">
                            <div>
                                <div class="form-group ">
                                    <label class="control-label" for="upload_photo">Upload Photo </label>
                                    <div id="ctrl-upload_photo-holder" class=""> 
                                        <textarea placeholder="Enter Upload Photo" id="ctrl-upload_photo"  rows="5" name="upload_photo" class="htmleditor form-control"><?php  echo $this->set_field_value('upload_photo',""); ?></textarea>
                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label class="control-label" for="tanggal_laporan">Tanggal Laporan </label>
                                        <div id="ctrl-tanggal_laporan-holder" class=""> 
                                            <input id="ctrl-tanggal_laporan"  value="<?php  echo $this->set_field_value('tanggal_laporan',""); ?>" type="text" placeholder="Enter Tanggal Laporan"  name="tanggal_laporan"  class="form-control " />
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label class="control-label" for="laporan_dari">Laporan Dari </label>
                                            <div id="ctrl-laporan_dari-holder" class=""> 
                                                <input id="ctrl-laporan_dari"  value="<?php  echo $this->set_field_value('laporan_dari',""); ?>" type="text" placeholder="Enter Laporan Dari"  name="laporan_dari"  class="form-control " />
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label class="control-label" for="nama_laporan">Nama Laporan </label>
                                                <div id="ctrl-nama_laporan-holder" class=""> 
                                                    <input id="ctrl-nama_laporan"  value="<?php  echo $this->set_field_value('nama_laporan',""); ?>" type="text" placeholder="Enter Nama Laporan"  name="nama_laporan"  class="form-control " />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label" for="keterangan_laporan">Keterangan Laporan </label>
                                                <div id="ctrl-keterangan_laporan-holder" class=""> 
                                                    <textarea placeholder="Enter Keterangan Laporan" id="ctrl-keterangan_laporan"  rows="5" name="keterangan_laporan" class="htmleditor form-control"><?php  echo $this->set_field_value('keterangan_laporan',""); ?></textarea>
                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group form-submit-btn-holder text-center mt-3">
                                            <div class="form-ajax-status"></div>
                                            <button class="btn btn-primary" type="submit">
                                                Submit
                                                <i class="fa fa-send"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
