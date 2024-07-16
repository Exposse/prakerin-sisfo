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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-vertical needs-validation" action="<?php print_link("pesan/edit/$page_id/?csrf_token=$csrf_token"); ?>" method="post">
                            <div>
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label class="control-label" for="nama">Nama </label>
                                        <div id="ctrl-nama-holder" class=""> 
                                            <input id="ctrl-nama"  value="<?php  echo $data['nama']; ?>" type="text" placeholder="Enter Nama"  name="nama"  class="form-control " />
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label class="control-label" for="no_telpn">No Telpn </label>
                                            <div id="ctrl-no_telpn-holder" class=""> 
                                                <input id="ctrl-no_telpn"  value="<?php  echo $data['no_telpn']; ?>" type="text" placeholder="Enter No Telpn"  name="no_telpn"  class="form-control " />
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
