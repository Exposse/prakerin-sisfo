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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-vertical needs-validation" action="<?php print_link("kerja_sama/edit/$page_id/?csrf_token=$csrf_token"); ?>" method="post">
                            <div>
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label class="control-label" for="logo1">Logo1 </label>
                                        <div id="ctrl-logo1-holder" class=""> 
                                            <textarea placeholder="Enter Logo1" id="ctrl-logo1"  rows="5" name="logo1" class="htmleditor form-control"><?php  echo $data['logo1']; ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label class="control-label" for="logo2">Logo2 </label>
                                        <div id="ctrl-logo2-holder" class=""> 
                                            <textarea placeholder="Enter Logo2" id="ctrl-logo2"  rows="5" name="logo2" class="htmleditor form-control"><?php  echo $data['logo2']; ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label class="control-label" for="logo3">Logo3 </label>
                                        <div id="ctrl-logo3-holder" class=""> 
                                            <textarea placeholder="Enter Logo3" id="ctrl-logo3"  rows="5" name="logo3" class="htmleditor form-control"><?php  echo $data['logo3']; ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label class="control-label" for="logo4">Logo4 </label>
                                        <div id="ctrl-logo4-holder" class=""> 
                                            <textarea placeholder="Enter Logo4" id="ctrl-logo4"  rows="5" name="logo4" class="htmleditor form-control"><?php  echo $data['logo4']; ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="logo5">Logo5 </label>
                                    <div id="ctrl-logo5-holder" class=""> 
                                        <textarea placeholder="Enter Logo5" id="ctrl-logo5"  rows="5" name="logo5" class="htmleditor form-control"><?php  echo $data['logo5']; ?></textarea>
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
