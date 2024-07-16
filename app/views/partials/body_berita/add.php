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
                        <form id="body_berita-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-vertical needs-validation" action="<?php print_link("body_berita/add?csrf_token=$csrf_token") ?>" method="post">
                            <div>
                                <div class="form-group ">
                                    <label class="control-label" for="upload_gambar">Upload Gambar </label>
                                    <div id="ctrl-upload_gambar-holder" class=""> 
                                        <textarea placeholder="Enter Upload Gambar" id="ctrl-upload_gambar"  rows="5" name="upload_gambar" class="htmleditor form-control"><?php  echo $this->set_field_value('upload_gambar',""); ?></textarea>
                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label class="control-label" for="judul_berita">Judul Berita </label>
                                        <div id="ctrl-judul_berita-holder" class=""> 
                                            <textarea placeholder="Enter Judul Berita" id="ctrl-judul_berita"  rows="2" name="judul_berita" class="htmleditor form-control"><?php  echo $this->set_field_value('judul_berita',""); ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label class="control-label" for="isi_berita">Isi Berita </label>
                                        <div id="ctrl-isi_berita-holder" class=""> 
                                            <textarea placeholder="Enter Isi Berita" id="ctrl-isi_berita"  rows="2" name="isi_berita" class="htmleditor form-control"><?php  echo $this->set_field_value('isi_berita',""); ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label class="control-label" for="selengkapnya">Selengkapnya </label>
                                        <div id="ctrl-selengkapnya-holder" class=""> 
                                            <textarea placeholder="Enter Selengkapnya" id="ctrl-selengkapnya"  rows="2" name="selengkapnya" class="htmleditor form-control"><?php  echo $this->set_field_value('selengkapnya',"Selengkapnya"); ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="tanggal">Tanggal </label>
                                    <div id="ctrl-tanggal-holder" class=""> 
                                        <input id="ctrl-tanggal"  value="<?php  echo $this->set_field_value('tanggal',""); ?>" type="text" placeholder="Enter Tanggal"  name="tanggal"  class="form-control " />
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
