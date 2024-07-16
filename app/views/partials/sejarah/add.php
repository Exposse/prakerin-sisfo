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
                        <form id="sejarah-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-vertical needs-validation" action="<?php print_link("sejarah/add?csrf_token=$csrf_token") ?>" method="post">
                            <div>
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label class="control-label" for="upload">Upload </label>
                                        <div id="ctrl-upload-holder" class=""> 
                                            <textarea placeholder="Enter Upload" id="ctrl-upload"  rows="5" name="upload" class="htmleditor form-control"><?php  echo $this->set_field_value('upload',""); ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label class="control-label" for="upload2">Upload2 </label>
                                        <div id="ctrl-upload2-holder" class=""> 
                                            <textarea placeholder="Enter Upload2" id="ctrl-upload2"  rows="5" name="upload2" class="htmleditor form-control"><?php  echo $this->set_field_value('upload2',""); ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="sejarah">Sejarah </label>
                                    <div id="ctrl-sejarah-holder" class=""> 
                                        <textarea placeholder="Enter Sejarah" id="ctrl-sejarah"  rows="5" name="sejarah" class="htmleditor form-control"><?php  echo $this->set_field_value('sejarah',""); ?></textarea>
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
