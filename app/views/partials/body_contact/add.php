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
                        <form id="body_contact-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-vertical needs-validation" action="<?php print_link("body_contact/add?csrf_token=$csrf_token") ?>" method="post">
                            <div>
                                <div class="form-group ">
                                    <label class="control-label" for="address">Address </label>
                                    <div id="ctrl-address-holder" class=""> 
                                        <textarea placeholder="Enter Address" id="ctrl-address"  rows="5" name="address" class=" form-control"><?php  echo $this->set_field_value('address',""); ?></textarea>
                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label class="control-label" for="phone_number">Phone Number </label>
                                        <div id="ctrl-phone_number-holder" class=""> 
                                            <textarea placeholder="Enter Phone Number" id="ctrl-phone_number"  rows="5" name="phone_number" class=" form-control"><?php  echo $this->set_field_value('phone_number',""); ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label class="control-label" for="email_address">Email Address </label>
                                        <div id="ctrl-email_address-holder" class=""> 
                                            <textarea placeholder="Enter Email Address" id="ctrl-email_address"  rows="5" name="email_address" class=" form-control"><?php  echo $this->set_field_value('email_address',""); ?></textarea>
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
