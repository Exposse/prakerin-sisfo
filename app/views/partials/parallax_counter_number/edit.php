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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-vertical needs-validation" action="<?php print_link("parallax_counter_number/edit/$page_id/?csrf_token=$csrf_token"); ?>" method="post">
                            <div>
                                <div class="form-group ">
                                    <label class="control-label" for="judul">Judul </label>
                                    <div id="ctrl-judul-holder" class=""> 
                                        <textarea placeholder="Enter Judul" id="ctrl-judul"  rows="2" name="judul" class="htmleditor form-control"><?php  echo $data['judul']; ?></textarea>
                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="caption">Caption </label>
                                    <div id="ctrl-caption-holder" class=""> 
                                        <textarea placeholder="Enter Caption" id="ctrl-caption"  rows="3" name="caption" class=" form-control"><?php  echo $data['caption']; ?></textarea>
                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-3">
                                        <label class="control-label" for="counter_number1">Counter Number1 </label>
                                        <div id="ctrl-counter_number1-holder" class=""> 
                                            <input id="ctrl-counter_number1"  value="<?php  echo $data['counter_number1']; ?>" type="text" placeholder="Enter Counter Number1"  name="counter_number1"  class="form-control " />
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-3">
                                            <label class="control-label" for="counter_number2">Counter Number3 </label>
                                            <div id="ctrl-counter_number2-holder" class=""> 
                                                <input id="ctrl-counter_number2"  value="<?php  echo $data['counter_number2']; ?>" type="text" placeholder="Enter Counter Number3"  name="counter_number2"  class="form-control " />
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-3">
                                                <label class="control-label" for="counter_number3">Counter Number3 </label>
                                                <div id="ctrl-counter_number3-holder" class=""> 
                                                    <input id="ctrl-counter_number3"  value="<?php  echo $data['counter_number3']; ?>" type="text" placeholder="Enter Counter Number3"  name="counter_number3"  class="form-control " />
                                                    </div>
                                                </div>
                                                <div class="form-group col-sm-3">
                                                    <label class="control-label" for="counter_number4">Counter Number4 </label>
                                                    <div id="ctrl-counter_number4-holder" class=""> 
                                                        <input id="ctrl-counter_number4"  value="<?php  echo $data['counter_number4']; ?>" type="text" placeholder="Enter Counter Number4"  name="counter_number4"  class="form-control " />
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-sm-3">
                                                        <label class="control-label" for="cubter_name1">Cubter Name1 </label>
                                                        <div id="ctrl-cubter_name1-holder" class=""> 
                                                            <input id="ctrl-cubter_name1"  value="<?php  echo $data['cubter_name1']; ?>" type="text" placeholder="Enter Cubter Name1"  name="cubter_name1"  class="form-control " />
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-sm-3">
                                                            <label class="control-label" for="counter_name2">Counter Name2 </label>
                                                            <div id="ctrl-counter_name2-holder" class=""> 
                                                                <input id="ctrl-counter_name2"  value="<?php  echo $data['counter_name2']; ?>" type="text" placeholder="Enter Counter Name2"  name="counter_name2"  class="form-control " />
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-sm-3">
                                                                <label class="control-label" for="counter_name3">Counter Name3 </label>
                                                                <div id="ctrl-counter_name3-holder" class=""> 
                                                                    <input id="ctrl-counter_name3"  value="<?php  echo $data['counter_name3']; ?>" type="text" placeholder="Enter Counter Name3"  name="counter_name3"  class="form-control " />
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-sm-3">
                                                                    <label class="control-label" for="counter_name4">Counter Name4 </label>
                                                                    <div id="ctrl-counter_name4-holder" class=""> 
                                                                        <input id="ctrl-counter_name4"  value="<?php  echo $data['counter_name4']; ?>" type="text" placeholder="Enter Counter Name4"  name="counter_name4"  class="form-control " />
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-sm-3">
                                                                        <label class="control-label" for="counter_number5">Counter Number5 </label>
                                                                        <div id="ctrl-counter_number5-holder" class=""> 
                                                                            <input id="ctrl-counter_number5"  value="<?php  echo $data['counter_number5']; ?>" type="text" placeholder="Enter Counter Number5"  name="counter_number5"  class="form-control " />
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group col-sm-3">
                                                                            <label class="control-label" for="counter_number6">Counter Number6 </label>
                                                                            <div id="ctrl-counter_number6-holder" class=""> 
                                                                                <input id="ctrl-counter_number6"  value="<?php  echo $data['counter_number6']; ?>" type="text" placeholder="Enter Counter Number6"  name="counter_number6"  class="form-control " />
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group col-sm-3">
                                                                                <label class="control-label" for="counter_number7">Counter Number7 </label>
                                                                                <div id="ctrl-counter_number7-holder" class=""> 
                                                                                    <input id="ctrl-counter_number7"  value="<?php  echo $data['counter_number7']; ?>" type="text" placeholder="Enter Counter Number7"  name="counter_number7"  class="form-control " />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group col-sm-3">
                                                                                    <label class="control-label" for="counter_number8">Counter Number8 </label>
                                                                                    <div id="ctrl-counter_number8-holder" class=""> 
                                                                                        <input id="ctrl-counter_number8"  value="<?php  echo $data['counter_number8']; ?>" type="text" placeholder="Enter Counter Number8"  name="counter_number8"  class="form-control " />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group col-sm-3">
                                                                                        <label class="control-label" for="counter_name5">Counter Name5 </label>
                                                                                        <div id="ctrl-counter_name5-holder" class=""> 
                                                                                            <input id="ctrl-counter_name5"  value="<?php  echo $data['counter_name5']; ?>" type="text" placeholder="Enter Counter Name5"  name="counter_name5"  class="form-control " />
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group col-sm-3">
                                                                                            <label class="control-label" for="counter_name6">Counter Name6 </label>
                                                                                            <div id="ctrl-counter_name6-holder" class=""> 
                                                                                                <input id="ctrl-counter_name6"  value="<?php  echo $data['counter_name6']; ?>" type="text" placeholder="Enter Counter Name6"  name="counter_name6"  class="form-control " />
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group col-sm-3">
                                                                                                <label class="control-label" for="counter_name7">Counter Name7 </label>
                                                                                                <div id="ctrl-counter_name7-holder" class=""> 
                                                                                                    <input id="ctrl-counter_name7"  value="<?php  echo $data['counter_name7']; ?>" type="text" placeholder="Enter Counter Name7"  name="counter_name7"  class="form-control " />
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group col-sm-3">
                                                                                                    <label class="control-label" for="counter_name8">Counter Name8 </label>
                                                                                                    <div id="ctrl-counter_name8-holder" class=""> 
                                                                                                        <input id="ctrl-counter_name8"  value="<?php  echo $data['counter_name8']; ?>" type="text" placeholder="Enter Counter Name8"  name="counter_name8"  class="form-control " />
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
