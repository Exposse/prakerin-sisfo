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
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col ">
                    <h4 class="record-title">Add New Login</h4>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
    <div  class="">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <?php $this :: display_page_errors(); ?>
                    <div  class="bg-light p-3 animated fadeIn page-content">
                        <form id="login-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-vertical needs-validation" action="<?php print_link("login/add?csrf_token=$csrf_token") ?>" method="post">
                            <div>
                                <div class="form-group ">
                                    <label class="control-label" for="upload_photo">Upload Photo <span class="text-danger">*</span></label>
                                    <div id="ctrl-upload_photo-holder" class=""> 
                                        <textarea placeholder="Enter Upload Photo" id="ctrl-upload_photo"  required="" rows="5" name="upload_photo" class="htmleditor form-control"><?php  echo $this->set_field_value('upload_photo',""); ?></textarea>
                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="nama">Nama <span class="text-danger">*</span></label>
                                    <div id="ctrl-nama-holder" class=""> 
                                        <input id="ctrl-nama"  value="<?php  echo $this->set_field_value('nama',""); ?>" type="text" placeholder="Enter Nama"  required="" name="nama"  class="form-control " />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label" for="user_name">User Name <span class="text-danger">*</span></label>
                                        <div id="ctrl-user_name-holder" class=""> 
                                            <input id="ctrl-user_name"  value="<?php  echo $this->set_field_value('user_name',""); ?>" type="text" placeholder="Enter User Name"  required="" name="user_name"  data-url="api/json/login_user_name_value_exist/" data-loading-msg="Checking availability ..." data-available-msg="Available" data-unavailable-msg="Not available" class="form-control  ctrl-check-duplicate" />
                                                <div class="check-status"></div> 
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="pasword">Pasword <span class="text-danger">*</span></label>
                                            <div id="ctrl-pasword-holder" class="input-group"> 
                                                <input id="ctrl-pasword"  value="<?php  echo $this->set_field_value('pasword',""); ?>" type="password" placeholder="Enter Pasword" maxlength="255"  required="" name="pasword"  class="form-control  password password-strength" />
                                                    <div class="input-group-append cursor-pointer btn-toggle-password">
                                                        <span class="input-group-text"><i class="fa fa-eye"></i></span>
                                                    </div>
                                                </div>
                                                <div class="password-strength-msg">
                                                    <small class="font-weight-bold">Should contain</small>
                                                    <small class="length chip">6 Characters minimum</small>
                                                    <small class="caps chip">Capital Letter</small>
                                                    <small class="number chip">Number</small>
                                                    <small class="special chip">Symbol</small>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label" for="confirm_password">Confirm Password <span class="text-danger">*</span></label>
                                                <div id="ctrl-confirm_password-holder" class="input-group"> 
                                                    <input id="ctrl-pasword-confirm" data-match="#ctrl-pasword"  class="form-control password-confirm " type="password" name="confirm_password" required placeholder="Confirm Password" />
                                                    <div class="input-group-append cursor-pointer btn-toggle-password">
                                                        <span class="input-group-text"><i class="fa fa-eye"></i></span>
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        Password does not match
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label" for="email">Email <span class="text-danger">*</span></label>
                                                <div id="ctrl-email-holder" class=""> 
                                                    <input id="ctrl-email"  value="<?php  echo $this->set_field_value('email',""); ?>" type="email" placeholder="Enter Email"  required="" name="email"  data-url="api/json/login_email_value_exist/" data-loading-msg="Checking availability ..." data-available-msg="Available" data-unavailable-msg="Not available" class="form-control  ctrl-check-duplicate" />
                                                        <div class="check-status"></div> 
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label" for="role">Role </label>
                                                    <div id="ctrl-role-holder" class=""> 
                                                        <select  id="ctrl-role" name="role"  placeholder="Pilihan ..."    class="custom-select" >
                                                            <option value="">Pilihan ...</option>
                                                            <?php 
                                                            $role_options = $comp_model -> login_role_option_list();
                                                            if(!empty($role_options)){
                                                            foreach($role_options as $option){
                                                            $value = (!empty($option['value']) ? $option['value'] : null);
                                                            $label = (!empty($option['label']) ? $option['label'] : $value);
                                                            $selected = $this->set_field_selected('role',$value, "");
                                                            ?>
                                                            <option <?php echo $selected; ?> value="<?php echo $value; ?>">
                                                                <?php echo $label; ?>
                                                            </option>
                                                            <?php
                                                            }
                                                            }
                                                            ?>
                                                        </select>
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
