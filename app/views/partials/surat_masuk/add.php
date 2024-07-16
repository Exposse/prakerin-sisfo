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
                        <form id="surat_masuk-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-vertical needs-validation" action="<?php print_link("surat_masuk/add?csrf_token=$csrf_token") ?>" method="post">
                            <div>
                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label class="control-label" for="tanggal_masuk">Tanggal Masuk </label>
                                        <div id="ctrl-tanggal_masuk-holder" class="input-group"> 
                                            <input id="ctrl-tanggal_masuk" class="form-control datepicker  datepicker"  value="<?php  echo $this->set_field_value('tanggal_masuk',""); ?>" type="datetime" name="tanggal_masuk" placeholder="Enter Tanggal Masuk" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label class="control-label" for="tanggal_surat">Tanggal Surat </label>
                                            <div id="ctrl-tanggal_surat-holder" class="input-group"> 
                                                <input id="ctrl-tanggal_surat" class="form-control datepicker  datepicker"  value="<?php  echo $this->set_field_value('tanggal_surat',""); ?>" type="datetime" name="tanggal_surat" placeholder="Enter Tanggal Surat" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label class="control-label" for="lampiran">Lampiran </label>
                                                <div id="ctrl-lampiran-holder" class=""> 
                                                    <select  id="ctrl-lampiran" name="lampiran"  placeholder="PIlihan ..."    class="selectize" >
                                                        <option value="">PIlihan ...</option>
                                                        <?php 
                                                        $lampiran_options = $comp_model -> surat_masuk_lampiran_option_list();
                                                        if(!empty($lampiran_options)){
                                                        foreach($lampiran_options as $option){
                                                        $value = (!empty($option['value']) ? $option['value'] : null);
                                                        $label = (!empty($option['label']) ? $option['label'] : $value);
                                                        $selected = $this->set_field_selected('lampiran',$value, "");
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
                                            <div class="form-group col-sm-4">
                                                <label class="control-label" for="sifat_surat">Sifat Surat </label>
                                                <div id="ctrl-sifat_surat-holder" class=""> 
                                                    <select  id="ctrl-sifat_surat" name="sifat_surat"  placeholder="PIlihan ..."    class="selectize" >
                                                        <option value="">PIlihan ...</option>
                                                        <?php 
                                                        $sifat_surat_options = $comp_model -> surat_masuk_sifat_surat_option_list();
                                                        if(!empty($sifat_surat_options)){
                                                        foreach($sifat_surat_options as $option){
                                                        $value = (!empty($option['value']) ? $option['value'] : null);
                                                        $label = (!empty($option['label']) ? $option['label'] : $value);
                                                        $selected = $this->set_field_selected('sifat_surat',$value, "");
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
                                            <div class="form-group col-sm-4">
                                                <label class="control-label" for="nomor_surat">Nomor Surat </label>
                                                <div id="ctrl-nomor_surat-holder" class=""> 
                                                    <input id="ctrl-nomor_surat"  value="<?php  echo $this->set_field_value('nomor_surat',""); ?>" type="text" placeholder="Enter Nomor Surat"  name="nomor_surat"  class="form-control " />
                                                    </div>
                                                </div>
                                                <div class="form-group col-sm-4">
                                                    <label class="control-label" for="surat_dari">Surat Dari </label>
                                                    <div id="ctrl-surat_dari-holder" class=""> 
                                                        <select  id="ctrl-surat_dari" name="surat_dari"  placeholder="PIlihan ..."    class="selectize" >
                                                            <option value="">PIlihan ...</option>
                                                            <?php 
                                                            $surat_dari_options = $comp_model -> surat_masuk_surat_dari_option_list();
                                                            if(!empty($surat_dari_options)){
                                                            foreach($surat_dari_options as $option){
                                                            $value = (!empty($option['value']) ? $option['value'] : null);
                                                            $label = (!empty($option['label']) ? $option['label'] : $value);
                                                            $selected = $this->set_field_selected('surat_dari',$value, "");
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
                                            <div class="form-group ">
                                                <label class="control-label" for="perihal">Perihal </label>
                                                <div id="ctrl-perihal-holder" class=""> 
                                                    <textarea placeholder="Enter Perihal" id="ctrl-perihal"  rows="5" name="perihal" class=" form-control"><?php  echo $this->set_field_value('perihal',""); ?></textarea>
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
