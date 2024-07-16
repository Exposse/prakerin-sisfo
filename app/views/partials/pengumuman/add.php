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
                        <form id="pengumuman-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-vertical needs-validation" action="<?php print_link("pengumuman/add?csrf_token=$csrf_token") ?>" method="post">
                            <div>
                                <div class="form-group ">
                                    <label class="control-label" for="nama_pengumuman">Nama Pengumuman </label>
                                    <div id="ctrl-nama_pengumuman-holder" class=""> 
                                        <textarea placeholder="Enter Nama Pengumuman" id="ctrl-nama_pengumuman"  rows="5" name="nama_pengumuman" class="htmleditor form-control"><?php  echo $this->set_field_value('nama_pengumuman',""); ?></textarea>
                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="link">Link </label>
                                    <div id="ctrl-link-holder" class=""> 
                                        <textarea placeholder="Enter Link" id="ctrl-link"  rows="5" name="link" class="htmleditor form-control"><?php  echo $this->set_field_value('link',"Download"); ?></textarea>
                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="upload_file">Upload File </label>
                                    <div id="ctrl-upload_file-holder" class=""> 
                                        <div class="dropzone " input="#ctrl-upload_file" fieldname="upload_file"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                            <input name="upload_file" id="ctrl-upload_file" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_file',""); ?>" type="text"  />
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
