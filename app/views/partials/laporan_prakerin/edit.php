<?php
$comp_model = new SharedController;
$page_element_id = "edit-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
$data = $this->view_data;
//$rec_id = $data['__tableprimarykey'];
$page_id = $this->route->page_id;
$show_header = $this->show_header;
$view_title = $this->view_title;
$redirect_to = $this->redirect_to;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="edit"  data-display-type="" data-page-url="<?php print_link($current_page); ?>">
    <div  class="my-3">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <?php $this :: display_page_errors(); ?>
                    <div  class="bg-light p-3 animated fadeIn page-content">
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-vertical needs-validation" action="<?php print_link("laporan_prakerin/edit/$page_id/?csrf_token=$csrf_token"); ?>" method="post">
                            <div>
                                <div class="form-group ">
                                    <label class="control-label" for="upload_photo">Upload Photo </label>
                                    <div id="ctrl-upload_photo-holder" class=""> 
                                        <textarea placeholder="Enter Upload Photo" id="ctrl-upload_photo"  rows="5" name="upload_photo" class="htmleditor form-control"><?php  echo $data['upload_photo']; ?></textarea>
                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label class="control-label" for="tanggal_laporan">Tanggal Laporan </label>
                                        <div id="ctrl-tanggal_laporan-holder" class=""> 
                                            <input id="ctrl-tanggal_laporan"  value="<?php  echo $data['tanggal_laporan']; ?>" type="text" placeholder="Enter Tanggal Laporan"  name="tanggal_laporan"  class="form-control " />
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label class="control-label" for="laporan_dari">Laporan Dari </label>
                                            <div id="ctrl-laporan_dari-holder" class=""> 
                                                <input id="ctrl-laporan_dari"  value="<?php  echo $data['laporan_dari']; ?>" type="text" placeholder="Enter Laporan Dari"  name="laporan_dari"  class="form-control " />
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label class="control-label" for="nama_laporan">Nama Laporan </label>
                                                <div id="ctrl-nama_laporan-holder" class=""> 
                                                    <input id="ctrl-nama_laporan"  value="<?php  echo $data['nama_laporan']; ?>" type="text" placeholder="Enter Nama Laporan"  name="nama_laporan"  class="form-control " />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label" for="keterangan_laporan">Keterangan Laporan </label>
                                                <div id="ctrl-keterangan_laporan-holder" class=""> 
                                                    <textarea placeholder="Enter Keterangan Laporan" id="ctrl-keterangan_laporan"  rows="3" name="keterangan_laporan" class="htmleditor form-control"><?php  echo $data['keterangan_laporan']; ?></textarea>
                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label" for="catatan_laporan1">Catatan Laporan1 </label>
                                                <div id="ctrl-catatan_laporan1-holder" class=""> 
                                                    <textarea placeholder="Enter Catatan Laporan1" id="ctrl-catatan_laporan1"  rows="5" name="catatan_laporan1" class="htmleditor form-control"><?php  echo $data['catatan_laporan1']; ?></textarea>
                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label" for="catatn_laporan2">Catatn Laporan2 </label>
                                                <div id="ctrl-catatn_laporan2-holder" class=""> 
                                                    <textarea placeholder="Enter Catatn Laporan2" id="ctrl-catatn_laporan2"  rows="5" name="catatn_laporan2" class="htmleditor form-control"><?php  echo $data['catatn_laporan2']; ?></textarea>
                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label" for="catatan_laporan3">Catatan Laporan3 </label>
                                                <div id="ctrl-catatan_laporan3-holder" class=""> 
                                                    <textarea placeholder="Enter Catatan Laporan3" id="ctrl-catatan_laporan3"  rows="5" name="catatan_laporan3" class="htmleditor form-control"><?php  echo $data['catatan_laporan3']; ?></textarea>
                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-ajax-status"></div>
                                        <div class="form-group text-center">
                                            <button class="btn btn-primary" type="submit">
                                                Update
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
