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
    <div  class="">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <?php $this :: display_page_errors(); ?>
                    <div  class="bg-light p-3 animated fadeIn page-content">
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-vertical needs-validation" action="<?php print_link("berita/edit/$page_id/?csrf_token=$csrf_token"); ?>" method="post">
                            <div>
                                <div class="form-group ">
                                    <label class="control-label" for="upload_gambar">Upload Gambar </label>
                                    <div id="ctrl-upload_gambar-holder" class=""> 
                                        <textarea placeholder="Enter Upload Gambar" id="ctrl-upload_gambar"  rows="5" name="upload_gambar" class="htmleditor form-control"><?php  echo $data['upload_gambar']; ?></textarea>
                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="tanggal">Tanggal </label>
                                    <div id="ctrl-tanggal-holder" class=""> 
                                        <input id="ctrl-tanggal"  value="<?php  echo $data['tanggal']; ?>" type="text" placeholder="Enter Tanggal"  name="tanggal"  class="form-control " />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-4">
                                            <label class="control-label" for="judul_informasi">Judul Informasi </label>
                                            <div id="ctrl-judul_informasi-holder" class=""> 
                                                <textarea placeholder="Enter Judul Informasi" id="ctrl-judul_informasi"  rows="5" name="judul_informasi" class="htmleditor form-control"><?php  echo $data['judul_informasi']; ?></textarea>
                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label class="control-label" for="ket_informasi">Ket Informasi </label>
                                            <div id="ctrl-ket_informasi-holder" class=""> 
                                                <textarea placeholder="Enter Ket Informasi" id="ctrl-ket_informasi"  rows="5" name="ket_informasi" class="htmleditor form-control"><?php  echo $data['ket_informasi']; ?></textarea>
                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label class="control-label" for="selengkapnya">Selengkapnya </label>
                                            <div id="ctrl-selengkapnya-holder" class=""> 
                                                <textarea placeholder="Enter Selengkapnya" id="ctrl-selengkapnya"  rows="5" name="selengkapnya" class="htmleditor form-control"><?php  echo $data['selengkapnya']; ?></textarea>
                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label" for="view">View </label>
                                        <div id="ctrl-view-holder" class=""> 
                                            <textarea placeholder="Enter View" id="ctrl-view"  rows="5" name="view" class="htmleditor form-control"><?php  echo $data['view']; ?></textarea>
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
