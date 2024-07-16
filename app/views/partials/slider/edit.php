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
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <?php $this :: display_page_errors(); ?>
                    <div  class="bg-light p-3 animated fadeIn page-content">
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-vertical needs-validation" action="<?php print_link("slider/edit/$page_id/?csrf_token=$csrf_token"); ?>" method="post">
                            <div>
                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label class="control-label" for="upload_gambar1">Upload Gambar1 </label>
                                        <div id="ctrl-upload_gambar1-holder" class=""> 
                                            <textarea placeholder="Enter Upload Gambar1" id="ctrl-upload_gambar1"  rows="3" name="upload_gambar1" class="htmleditor form-control"><?php  echo $data['upload_gambar1']; ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label class="control-label" for="upload_gambar2">Upload Gambar2 </label>
                                        <div id="ctrl-upload_gambar2-holder" class=""> 
                                            <textarea placeholder="Enter Upload Gambar2" id="ctrl-upload_gambar2"  rows="3" name="upload_gambar2" class="htmleditor form-control"><?php  echo $data['upload_gambar2']; ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label class="control-label" for="upload_gambar3">Upload Gambar3 </label>
                                        <div id="ctrl-upload_gambar3-holder" class=""> 
                                            <textarea placeholder="Enter Upload Gambar3" id="ctrl-upload_gambar3"  rows="3" name="upload_gambar3" class="htmleditor form-control"><?php  echo $data['upload_gambar3']; ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label class="control-label" for="caption1">Caption1 </label>
                                        <div id="ctrl-caption1-holder" class=""> 
                                            <textarea placeholder="Enter Caption1" id="ctrl-caption1"  rows="3" name="caption1" class="htmleditor form-control"><?php  echo $data['caption1']; ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label class="control-label" for="caption2">Caption2 </label>
                                        <div id="ctrl-caption2-holder" class=""> 
                                            <textarea placeholder="Enter Caption2" id="ctrl-caption2"  rows="3" name="caption2" class="htmleditor form-control"><?php  echo $data['caption2']; ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label class="control-label" for="caption3">Caption3 </label>
                                        <div id="ctrl-caption3-holder" class=""> 
                                            <textarea placeholder="Enter Caption3" id="ctrl-caption3"  rows="3" name="caption3" class="htmleditor form-control"><?php  echo $data['caption3']; ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label class="control-label" for="caption4">Caption4 </label>
                                        <div id="ctrl-caption4-holder" class=""> 
                                            <textarea placeholder="Enter Caption4" id="ctrl-caption4"  rows="3" name="caption4" class="htmleditor form-control"><?php  echo $data['caption4']; ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label class="control-label" for="caption5">Caption5 </label>
                                        <div id="ctrl-caption5-holder" class=""> 
                                            <textarea placeholder="Enter Caption5" id="ctrl-caption5"  rows="3" name="caption5" class="htmleditor form-control"><?php  echo $data['caption5']; ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label class="control-label" for="caption6">Caption6 </label>
                                        <div id="ctrl-caption6-holder" class=""> 
                                            <textarea placeholder="Enter Caption6" id="ctrl-caption6"  rows="3" name="caption6" class="htmleditor form-control"><?php  echo $data['caption6']; ?></textarea>
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
