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
                        <form id="info_center-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-vertical needs-validation" action="<?php print_link("info_center/add?csrf_token=$csrf_token") ?>" method="post">
                            <div>
                                <div class="form-group ">
                                    <label class="control-label" for="upload_logo">Upload Logo </label>
                                    <div id="ctrl-upload_logo-holder" class=""> 
                                        <textarea placeholder="Enter Upload Logo" id="ctrl-upload_logo"  rows="5" name="upload_logo" class="htmleditor form-control"><?php  echo $this->set_field_value('upload_logo',""); ?></textarea>
                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="caption1">Caption1 </label>
                                    <div id="ctrl-caption1-holder" class=""> 
                                        <textarea placeholder="Enter Caption1" id="ctrl-caption1"  rows="5" name="caption1" class="htmleditor form-control"><?php  echo $this->set_field_value('caption1',""); ?></textarea>
                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                    </div>
                                </div>
                                <div class="form-group ">
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
