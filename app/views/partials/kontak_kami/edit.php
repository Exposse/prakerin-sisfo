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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-vertical needs-validation" action="<?php print_link("kontak_kami/edit/$page_id/?csrf_token=$csrf_token"); ?>" method="post">
                            <div>
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label class="control-label" for="first_name">First Name </label>
                                        <div id="ctrl-first_name-holder" class=""> 
                                            <input id="ctrl-first_name"  value="<?php  echo $data['first_name']; ?>" type="text" placeholder="Enter First Name"  name="first_name"  class="form-control " />
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label class="control-label" for="last_name">Last Name </label>
                                            <div id="ctrl-last_name-holder" class=""> 
                                                <input id="ctrl-last_name"  value="<?php  echo $data['last_name']; ?>" type="text" placeholder="Enter Last Name"  name="last_name"  class="form-control " />
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label class="control-label" for="email">Email </label>
                                                <div id="ctrl-email-holder" class=""> 
                                                    <input id="ctrl-email"  value="<?php  echo $data['email']; ?>" type="email" placeholder="Enter Email"  name="email"  class="form-control " />
                                                    </div>
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label class="control-label" for="phone">Phone </label>
                                                    <div id="ctrl-phone-holder" class=""> 
                                                        <input id="ctrl-phone"  value="<?php  echo $data['phone']; ?>" type="number" placeholder="Enter Phone" step="1"  name="phone"  class="form-control " />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label" for="pesan">Pesan </label>
                                                    <div id="ctrl-pesan-holder" class=""> 
                                                        <textarea placeholder="Enter Pesan" id="ctrl-pesan"  rows="5" name="pesan" class=" form-control"><?php  echo $data['pesan']; ?></textarea>
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
