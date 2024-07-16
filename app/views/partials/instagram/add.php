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
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <?php $this :: display_page_errors(); ?>
                    <div  class="bg-light p-3 animated fadeIn page-content">
                        <form id="instagram-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-vertical needs-validation" action="<?php print_link("instagram/add?csrf_token=$csrf_token") ?>" method="post">
                            <div>
                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label class="control-label" for="gambar1">Gambar1 </label>
                                        <div id="ctrl-gambar1-holder" class=""> 
                                            <textarea placeholder="Enter Gambar1" id="ctrl-gambar1"  rows="5" name="gambar1" class="htmleditor form-control"><?php  echo $this->set_field_value('gambar1',""); ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label class="control-label" for="gambar2">Gambar2 </label>
                                        <div id="ctrl-gambar2-holder" class=""> 
                                            <textarea placeholder="Enter Gambar2" id="ctrl-gambar2"  rows="5" name="gambar2" class="htmleditor form-control"><?php  echo $this->set_field_value('gambar2',""); ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label class="control-label" for="gambar3">Gambar3 </label>
                                        <div id="ctrl-gambar3-holder" class=""> 
                                            <textarea placeholder="Enter Gambar3" id="ctrl-gambar3"  rows="5" name="gambar3" class="htmleditor form-control"><?php  echo $this->set_field_value('gambar3',""); ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label class="control-label" for="gambar4">Gambar4 </label>
                                        <div id="ctrl-gambar4-holder" class=""> 
                                            <textarea placeholder="Enter Gambar4" id="ctrl-gambar4"  rows="5" name="gambar4" class="htmleditor form-control"><?php  echo $this->set_field_value('gambar4',""); ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label class="control-label" for="gambar5">Gambar5 </label>
                                        <div id="ctrl-gambar5-holder" class=""> 
                                            <textarea placeholder="Enter Gambar5" id="ctrl-gambar5"  rows="5" name="gambar5" class="htmleditor form-control"><?php  echo $this->set_field_value('gambar5',""); ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label class="control-label" for="gambar6">Gambar6 </label>
                                        <div id="ctrl-gambar6-holder" class=""> 
                                            <textarea placeholder="Enter Gambar6" id="ctrl-gambar6"  rows="5" name="gambar6" class="htmleditor form-control"><?php  echo $this->set_field_value('gambar6',""); ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label class="control-label" for="gambar7">Gambar7 </label>
                                        <div id="ctrl-gambar7-holder" class=""> 
                                            <textarea placeholder="Enter Gambar7" id="ctrl-gambar7"  rows="5" name="gambar7" class="htmleditor form-control"><?php  echo $this->set_field_value('gambar7',""); ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label class="control-label" for="gambar8">Gambar8 </label>
                                        <div id="ctrl-gambar8-holder" class=""> 
                                            <textarea placeholder="Enter Gambar8" id="ctrl-gambar8"  rows="5" name="gambar8" class="htmleditor form-control"><?php  echo $this->set_field_value('gambar8',""); ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label class="control-label" for="caption1">Caption1 </label>
                                        <div id="ctrl-caption1-holder" class=""> 
                                            <textarea placeholder="Enter Caption1" id="ctrl-caption1"  rows="5" name="caption1" class="htmleditor form-control"><?php  echo $this->set_field_value('caption1',""); ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label class="control-label" for="caption2">Caption2 </label>
                                        <div id="ctrl-caption2-holder" class=""> 
                                            <textarea placeholder="Enter Caption2" id="ctrl-caption2"  rows="5" name="caption2" class="htmleditor form-control"><?php  echo $this->set_field_value('caption2',""); ?></textarea>
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
