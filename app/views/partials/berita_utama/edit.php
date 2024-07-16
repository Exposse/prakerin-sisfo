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
    <div  class="my-1">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <?php $this :: display_page_errors(); ?>
                    <div  class="bg-light p-3 animated fadeIn page-content">
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-vertical needs-validation" action="<?php print_link("berita_utama/edit/$page_id/?csrf_token=$csrf_token"); ?>" method="post">
                            <div>
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label class="control-label" for="tanggal1">Tanggal1 </label>
                                        <div id="ctrl-tanggal1-holder" class=""> 
                                            <input id="ctrl-tanggal1"  value="<?php  echo $data['tanggal1']; ?>" type="text" placeholder="Enter Tanggal1"  name="tanggal1"  class="form-control " />
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label class="control-label" for="judul1">Judul1 </label>
                                            <div id="ctrl-judul1-holder" class=""> 
                                                <input id="ctrl-judul1"  value="<?php  echo $data['judul1']; ?>" type="text" placeholder="Enter Judul1"  name="judul1"  class="form-control " />
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label class="control-label" for="upload1">Upload1 </label>
                                                <div id="ctrl-upload1-holder" class=""> 
                                                    <textarea placeholder="Enter Upload1" id="ctrl-upload1"  rows="5" name="upload1" class="htmleditor form-control"><?php  echo $data['upload1']; ?></textarea>
                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label class="control-label" for="caption1">Caption1 </label>
                                                <div id="ctrl-caption1-holder" class=""> 
                                                    <textarea placeholder="Enter Caption1" id="ctrl-caption1"  rows="5" name="caption1" class="htmleditor form-control"><?php  echo $data['caption1']; ?></textarea>
                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label class="control-label" for="tanggal2">Tanggal2 </label>
                                                <div id="ctrl-tanggal2-holder" class=""> 
                                                    <input id="ctrl-tanggal2"  value="<?php  echo $data['tanggal2']; ?>" type="text" placeholder="Enter Tanggal2"  name="tanggal2"  class="form-control " />
                                                    </div>
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label class="control-label" for="judul2">Judul2 </label>
                                                    <div id="ctrl-judul2-holder" class=""> 
                                                        <input id="ctrl-judul2"  value="<?php  echo $data['judul2']; ?>" type="text" placeholder="Enter Judul2"  name="judul2"  class="form-control " />
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label class="control-label" for="upload2">Upload2 </label>
                                                        <div id="ctrl-upload2-holder" class=""> 
                                                            <textarea placeholder="Enter Upload2" id="ctrl-upload2"  rows="5" name="upload2" class="htmleditor form-control"><?php  echo $data['upload2']; ?></textarea>
                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label class="control-label" for="caption2">Caption2 </label>
                                                        <div id="ctrl-caption2-holder" class=""> 
                                                            <textarea placeholder="Enter Caption2" id="ctrl-caption2"  rows="5" name="caption2" class="htmleditor form-control"><?php  echo $data['caption2']; ?></textarea>
                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label class="control-label" for="tanggal3">Tanggal3 </label>
                                                        <div id="ctrl-tanggal3-holder" class=""> 
                                                            <input id="ctrl-tanggal3"  value="<?php  echo $data['tanggal3']; ?>" type="text" placeholder="Enter Tanggal3"  name="tanggal3"  class="form-control " />
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label class="control-label" for="judul3">Judul3 </label>
                                                            <div id="ctrl-judul3-holder" class=""> 
                                                                <input id="ctrl-judul3"  value="<?php  echo $data['judul3']; ?>" type="text" placeholder="Enter Judul3"  name="judul3"  class="form-control " />
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-sm-6">
                                                                <label class="control-label" for="upload3">Upload3 </label>
                                                                <div id="ctrl-upload3-holder" class=""> 
                                                                    <textarea placeholder="Enter Upload3" id="ctrl-upload3"  rows="5" name="upload3" class="htmleditor form-control"><?php  echo $data['upload3']; ?></textarea>
                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-sm-6">
                                                                <label class="control-label" for="caption3">Caption3 </label>
                                                                <div id="ctrl-caption3-holder" class=""> 
                                                                    <textarea placeholder="Enter Caption3" id="ctrl-caption3"  rows="5" name="caption3" class="htmleditor form-control"><?php  echo $data['caption3']; ?></textarea>
                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-sm-6">
                                                                <label class="control-label" for="tanggal4">Tanggal4 </label>
                                                                <div id="ctrl-tanggal4-holder" class=""> 
                                                                    <input id="ctrl-tanggal4"  value="<?php  echo $data['tanggal4']; ?>" type="text" placeholder="Enter Tanggal4"  name="tanggal4"  class="form-control " />
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-sm-6">
                                                                    <label class="control-label" for="judul4">Judul4 </label>
                                                                    <div id="ctrl-judul4-holder" class=""> 
                                                                        <input id="ctrl-judul4"  value="<?php  echo $data['judul4']; ?>" type="text" placeholder="Enter Judul4"  name="judul4"  class="form-control " />
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-sm-6">
                                                                        <label class="control-label" for="upload4">Upload4 </label>
                                                                        <div id="ctrl-upload4-holder" class=""> 
                                                                            <textarea placeholder="Enter Upload4" id="ctrl-upload4"  rows="5" name="upload4" class="htmleditor form-control"><?php  echo $data['upload4']; ?></textarea>
                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-sm-6">
                                                                        <label class="control-label" for="caption4">Caption4 </label>
                                                                        <div id="ctrl-caption4-holder" class=""> 
                                                                            <textarea placeholder="Enter Caption4" id="ctrl-caption4"  rows="5" name="caption4" class="htmleditor form-control"><?php  echo $data['caption4']; ?></textarea>
                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group ">
                                                                    <label class="control-label" for="lihat_selengkapnya">Lihat Selengkapnya </label>
                                                                    <div id="ctrl-lihat_selengkapnya-holder" class=""> 
                                                                        <textarea placeholder="Enter Lihat Selengkapnya" id="ctrl-lihat_selengkapnya"  rows="5" name="lihat_selengkapnya" class="htmleditor form-control"><?php  echo $data['lihat_selengkapnya']; ?></textarea>
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
