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
                        <form id="header-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-vertical needs-validation" action="<?php print_link("header/add?csrf_token=$csrf_token") ?>" method="post">
                            <div>
                                <div class="form-group ">
                                    <label class="control-label" for="logo">Logo </label>
                                    <div id="ctrl-logo-holder" class=""> 
                                        <textarea placeholder="Enter Logo" id="ctrl-logo"  rows="5" name="logo" class="htmleditor form-control"><?php  echo $this->set_field_value('logo',""); ?></textarea>
                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="tlpn">Tlpn </label>
                                    <div id="ctrl-tlpn-holder" class=""> 
                                        <input id="ctrl-tlpn"  value="<?php  echo $this->set_field_value('tlpn',""); ?>" type="number" placeholder="Enter Tlpn" step="1"  name="tlpn"  class="form-control " />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label" for="mail">Mail </label>
                                        <div id="ctrl-mail-holder" class=""> 
                                            <input id="ctrl-mail"  value="<?php  echo $this->set_field_value('mail',""); ?>" type="email" placeholder="Enter Mail"  name="mail"  class="form-control " />
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="lokasi">Lokasi </label>
                                            <div id="ctrl-lokasi-holder" class=""> 
                                                <textarea placeholder="Enter Lokasi" id="ctrl-lokasi"  rows="5" name="lokasi" class="htmleditor form-control"><?php  echo $this->set_field_value('lokasi',""); ?></textarea>
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
