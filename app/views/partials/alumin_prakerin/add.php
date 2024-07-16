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
                        <form id="alumin_prakerin-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-vertical needs-validation" action="<?php print_link("alumin_prakerin/add?csrf_token=$csrf_token") ?>" method="post">
                            <div>
                                <div class="form-group ">
                                    <label class="control-label" for="photo">Photo </label>
                                    <div id="ctrl-photo-holder" class=""> 
                                        <textarea placeholder="Enter Photo" id="ctrl-photo"  rows="5" name="photo" class="htmleditor form-control"><?php  echo $this->set_field_value('photo',""); ?></textarea>
                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label class="control-label" for="nam_lengkap">Nam Lengkap </label>
                                        <div id="ctrl-nam_lengkap-holder" class=""> 
                                            <input id="ctrl-nam_lengkap"  value="<?php  echo $this->set_field_value('nam_lengkap',""); ?>" type="text" placeholder="Enter Nam Lengkap"  name="nam_lengkap"  class="form-control " />
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label class="control-label" for="asal_sekolah">Asal Sekolah </label>
                                            <div id="ctrl-asal_sekolah-holder" class=""> 
                                                <input id="ctrl-asal_sekolah"  value="<?php  echo $this->set_field_value('asal_sekolah',""); ?>" type="text" placeholder="Enter Asal Sekolah"  name="asal_sekolah"  class="form-control " />
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label class="control-label" for="jurusan">Jurusan </label>
                                                <div id="ctrl-jurusan-holder" class=""> 
                                                    <input id="ctrl-jurusan"  value="<?php  echo $this->set_field_value('jurusan',""); ?>" type="text" placeholder="Enter Jurusan"  name="jurusan"  class="form-control " />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label" for="catatan">Catatan </label>
                                                <div id="ctrl-catatan-holder" class=""> 
                                                    <textarea placeholder="Enter Catatan" id="ctrl-catatan"  rows="5" name="catatan" class=" form-control"><?php  echo $this->set_field_value('catatan',""); ?></textarea>
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
