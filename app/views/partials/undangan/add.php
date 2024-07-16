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
                        <form id="undangan-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-vertical needs-validation" action="<?php print_link("undangan/add?csrf_token=$csrf_token") ?>" method="post">
                            <div>
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label class="control-label" for="tanggal">Tanggal </label>
                                        <div id="ctrl-tanggal-holder" class="input-group"> 
                                            <input id="ctrl-tanggal" class="form-control datepicker  datepicker"  value="<?php  echo $this->set_field_value('tanggal',""); ?>" type="datetime" name="tanggal" placeholder="Enter Tanggal" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label class="control-label" for="tempat">Tempat </label>
                                            <div id="ctrl-tempat-holder" class=""> 
                                                <input id="ctrl-tempat"  value="<?php  echo $this->set_field_value('tempat',""); ?>" type="text" placeholder="Enter Tempat"  name="tempat"  class="form-control " />
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label class="control-label" for="acara">Acara </label>
                                                <div id="ctrl-acara-holder" class=""> 
                                                    <textarea placeholder="Enter Acara" id="ctrl-acara"  rows="5" name="acara" class="htmleditor form-control"><?php  echo $this->set_field_value('acara',""); ?></textarea>
                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label class="control-label" for="lihat_undangan">Lihat Undangan </label>
                                                <div id="ctrl-lihat_undangan-holder" class=""> 
                                                    <textarea placeholder="Enter Lihat Undangan" id="ctrl-lihat_undangan"  rows="5" name="lihat_undangan" class="htmleditor form-control"><?php  echo $this->set_field_value('lihat_undangan',"Lihat Undangan"); ?></textarea>
                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="file_surat">File Surat </label>
                                            <div id="ctrl-file_surat-holder" class=""> 
                                                <div class="dropzone " input="#ctrl-file_surat" fieldname="file_surat"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                    <input name="file_surat" id="ctrl-file_surat" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('file_surat',""); ?>" type="text"  />
                                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                        <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                    </div>
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
