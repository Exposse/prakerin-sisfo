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
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <?php $this :: display_page_errors(); ?>
                    <div  class="bg-light p-3 animated fadeIn page-content">
                        <form id="ucapan_selamat-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-vertical needs-validation" action="<?php print_link("ucapan_selamat/add?csrf_token=$csrf_token") ?>" method="post">
                            <div>
                                <div class="row">
                                    <div class="form-group col-sm-3">
                                        <label class="control-label" for="photo1">Photo1 </label>
                                        <div id="ctrl-photo1-holder" class=""> 
                                            <textarea placeholder="Enter Photo1" id="ctrl-photo1"  rows="5" name="photo1" class="htmleditor form-control"><?php  echo $this->set_field_value('photo1',""); ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <label class="control-label" for="photo2">Photo2 </label>
                                        <div id="ctrl-photo2-holder" class=""> 
                                            <textarea placeholder="Enter Photo2" id="ctrl-photo2"  rows="5" name="photo2" class="htmleditor form-control"><?php  echo $this->set_field_value('photo2',""); ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <label class="control-label" for="photo3">Photo3 </label>
                                        <div id="ctrl-photo3-holder" class=""> 
                                            <textarea placeholder="Enter Photo3" id="ctrl-photo3"  rows="5" name="photo3" class="htmleditor form-control"><?php  echo $this->set_field_value('photo3',""); ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <label class="control-label" for="photo4">Photo4 </label>
                                        <div id="ctrl-photo4-holder" class=""> 
                                            <textarea placeholder="Enter Photo4" id="ctrl-photo4"  rows="5" name="photo4" class="htmleditor form-control"><?php  echo $this->set_field_value('photo4',""); ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <label class="control-label" for="photo5">Photo5 </label>
                                        <div id="ctrl-photo5-holder" class=""> 
                                            <textarea placeholder="Enter Photo5" id="ctrl-photo5"  rows="5" name="photo5" class="htmleditor form-control"><?php  echo $this->set_field_value('photo5',""); ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <label class="control-label" for="photo6">Photo6 </label>
                                        <div id="ctrl-photo6-holder" class=""> 
                                            <textarea placeholder="Enter Photo6" id="ctrl-photo6"  rows="5" name="photo6" class="htmleditor form-control"><?php  echo $this->set_field_value('photo6',""); ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <label class="control-label" for="photo7">Photo7 </label>
                                        <div id="ctrl-photo7-holder" class=""> 
                                            <textarea placeholder="Enter Photo7" id="ctrl-photo7"  rows="5" name="photo7" class="htmleditor form-control"><?php  echo $this->set_field_value('photo7',""); ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <label class="control-label" for="photo8">Photo8 </label>
                                        <div id="ctrl-photo8-holder" class=""> 
                                            <textarea placeholder="Enter Photo8" id="ctrl-photo8"  rows="5" name="photo8" class="htmleditor form-control"><?php  echo $this->set_field_value('photo8',""); ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <label class="control-label" for="nama1">Nama1 </label>
                                        <div id="ctrl-nama1-holder" class=""> 
                                            <input id="ctrl-nama1"  value="<?php  echo $this->set_field_value('nama1',""); ?>" type="text" placeholder="Enter Nama1"  name="nama1"  class="form-control " />
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-3">
                                            <label class="control-label" for="nama2">Nama2 </label>
                                            <div id="ctrl-nama2-holder" class=""> 
                                                <input id="ctrl-nama2"  value="<?php  echo $this->set_field_value('nama2',""); ?>" type="text" placeholder="Enter Nama2"  name="nama2"  class="form-control " />
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-3">
                                                <label class="control-label" for="nama3">Nama3 </label>
                                                <div id="ctrl-nama3-holder" class=""> 
                                                    <input id="ctrl-nama3"  value="<?php  echo $this->set_field_value('nama3',""); ?>" type="text" placeholder="Enter Nama3"  name="nama3"  class="form-control " />
                                                    </div>
                                                </div>
                                                <div class="form-group col-sm-3">
                                                    <label class="control-label" for="nama4">Nama4 </label>
                                                    <div id="ctrl-nama4-holder" class=""> 
                                                        <input id="ctrl-nama4"  value="<?php  echo $this->set_field_value('nama4',""); ?>" type="text" placeholder="Enter Nama4"  name="nama4"  class="form-control " />
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-sm-3">
                                                        <label class="control-label" for="nama5">Nama5 </label>
                                                        <div id="ctrl-nama5-holder" class=""> 
                                                            <input id="ctrl-nama5"  value="<?php  echo $this->set_field_value('nama5',""); ?>" type="text" placeholder="Enter Nama5"  name="nama5"  class="form-control " />
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-sm-3">
                                                            <label class="control-label" for="nama6">Nama6 </label>
                                                            <div id="ctrl-nama6-holder" class=""> 
                                                                <input id="ctrl-nama6"  value="<?php  echo $this->set_field_value('nama6',""); ?>" type="text" placeholder="Enter Nama6"  name="nama6"  class="form-control " />
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-sm-3">
                                                                <label class="control-label" for="nama7">Nama7 </label>
                                                                <div id="ctrl-nama7-holder" class=""> 
                                                                    <input id="ctrl-nama7"  value="<?php  echo $this->set_field_value('nama7',""); ?>" type="text" placeholder="Enter Nama7"  name="nama7"  class="form-control " />
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-sm-3">
                                                                    <label class="control-label" for="nama8">Nama8 </label>
                                                                    <div id="ctrl-nama8-holder" class=""> 
                                                                        <input id="ctrl-nama8"  value="<?php  echo $this->set_field_value('nama8',""); ?>" type="text" placeholder="Enter Nama8"  name="nama8"  class="form-control " />
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-sm-3">
                                                                        <label class="control-label" for="gelar1">Gelar1 </label>
                                                                        <div id="ctrl-gelar1-holder" class=""> 
                                                                            <input id="ctrl-gelar1"  value="<?php  echo $this->set_field_value('gelar1',""); ?>" type="text" placeholder="Enter Gelar1"  name="gelar1"  class="form-control " />
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group col-sm-3">
                                                                            <label class="control-label" for="gelar2">Gelar2 </label>
                                                                            <div id="ctrl-gelar2-holder" class=""> 
                                                                                <input id="ctrl-gelar2"  value="<?php  echo $this->set_field_value('gelar2',""); ?>" type="text" placeholder="Enter Gelar2"  name="gelar2"  class="form-control " />
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group col-sm-3">
                                                                                <label class="control-label" for="gelar3">Gelar3 </label>
                                                                                <div id="ctrl-gelar3-holder" class=""> 
                                                                                    <input id="ctrl-gelar3"  value="<?php  echo $this->set_field_value('gelar3',""); ?>" type="text" placeholder="Enter Gelar3"  name="gelar3"  class="form-control " />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group col-sm-3">
                                                                                    <label class="control-label" for="gelar4">Gelar4 </label>
                                                                                    <div id="ctrl-gelar4-holder" class=""> 
                                                                                        <input id="ctrl-gelar4"  value="<?php  echo $this->set_field_value('gelar4',""); ?>" type="text" placeholder="Enter Gelar4"  name="gelar4"  class="form-control " />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group col-sm-3">
                                                                                        <label class="control-label" for="gelar5">Gelar5 </label>
                                                                                        <div id="ctrl-gelar5-holder" class=""> 
                                                                                            <input id="ctrl-gelar5"  value="<?php  echo $this->set_field_value('gelar5',""); ?>" type="text" placeholder="Enter Gelar5"  name="gelar5"  class="form-control " />
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group col-sm-3">
                                                                                            <label class="control-label" for="gelar6">Gelar6 </label>
                                                                                            <div id="ctrl-gelar6-holder" class=""> 
                                                                                                <input id="ctrl-gelar6"  value="<?php  echo $this->set_field_value('gelar6',""); ?>" type="text" placeholder="Enter Gelar6"  name="gelar6"  class="form-control " />
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group col-sm-3">
                                                                                                <label class="control-label" for="gelar7">Gelar7 </label>
                                                                                                <div id="ctrl-gelar7-holder" class=""> 
                                                                                                    <input id="ctrl-gelar7"  value="<?php  echo $this->set_field_value('gelar7',""); ?>" type="text" placeholder="Enter Gelar7"  name="gelar7"  class="form-control " />
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group col-sm-3">
                                                                                                    <label class="control-label" for="gelar8">Gelar8 </label>
                                                                                                    <div id="ctrl-gelar8-holder" class=""> 
                                                                                                        <input id="ctrl-gelar8"  value="<?php  echo $this->set_field_value('gelar8',""); ?>" type="text" placeholder="Enter Gelar8"  name="gelar8"  class="form-control " />
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group col-sm-3">
                                                                                                        <label class="control-label" for="ucapan1">Ucapan1 </label>
                                                                                                        <div id="ctrl-ucapan1-holder" class=""> 
                                                                                                            <textarea placeholder="Enter Ucapan1" id="ctrl-ucapan1"  rows="5" name="ucapan1" class=" form-control"><?php  echo $this->set_field_value('ucapan1',""); ?></textarea>
                                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group col-sm-3">
                                                                                                        <label class="control-label" for="ucapan2">Ucapan2 </label>
                                                                                                        <div id="ctrl-ucapan2-holder" class=""> 
                                                                                                            <textarea placeholder="Enter Ucapan2" id="ctrl-ucapan2"  rows="5" name="ucapan2" class=" form-control"><?php  echo $this->set_field_value('ucapan2',""); ?></textarea>
                                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group col-sm-3">
                                                                                                        <label class="control-label" for="ucapan3">Ucapan3 </label>
                                                                                                        <div id="ctrl-ucapan3-holder" class=""> 
                                                                                                            <textarea placeholder="Enter Ucapan3" id="ctrl-ucapan3"  rows="5" name="ucapan3" class=" form-control"><?php  echo $this->set_field_value('ucapan3',""); ?></textarea>
                                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group col-sm-3">
                                                                                                        <label class="control-label" for="ucapan4">Ucapan4 </label>
                                                                                                        <div id="ctrl-ucapan4-holder" class=""> 
                                                                                                            <textarea placeholder="Enter Ucapan4" id="ctrl-ucapan4"  rows="5" name="ucapan4" class=" form-control"><?php  echo $this->set_field_value('ucapan4',""); ?></textarea>
                                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group col-sm-3">
                                                                                                        <label class="control-label" for="ucapan5">Ucapan5 </label>
                                                                                                        <div id="ctrl-ucapan5-holder" class=""> 
                                                                                                            <textarea placeholder="Enter Ucapan5" id="ctrl-ucapan5"  rows="5" name="ucapan5" class=" form-control"><?php  echo $this->set_field_value('ucapan5',""); ?></textarea>
                                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group col-sm-3">
                                                                                                        <label class="control-label" for="ucapan6">Ucapan6 </label>
                                                                                                        <div id="ctrl-ucapan6-holder" class=""> 
                                                                                                            <textarea placeholder="Enter Ucapan6" id="ctrl-ucapan6"  rows="5" name="ucapan6" class=" form-control"><?php  echo $this->set_field_value('ucapan6',""); ?></textarea>
                                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group col-sm-3">
                                                                                                        <label class="control-label" for="ucapan7">Ucapan7 </label>
                                                                                                        <div id="ctrl-ucapan7-holder" class=""> 
                                                                                                            <textarea placeholder="Enter Ucapan7" id="ctrl-ucapan7"  rows="5" name="ucapan7" class=" form-control"><?php  echo $this->set_field_value('ucapan7',""); ?></textarea>
                                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group col-sm-3">
                                                                                                        <label class="control-label" for="ucapan8">Ucapan8 </label>
                                                                                                        <div id="ctrl-ucapan8-holder" class=""> 
                                                                                                            <textarea placeholder="Enter Ucapan8" id="ctrl-ucapan8"  rows="5" name="ucapan8" class=" form-control"><?php  echo $this->set_field_value('ucapan8',""); ?></textarea>
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
