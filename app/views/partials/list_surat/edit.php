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
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col ">
                    <h4 class="record-title">Edit  List Surat</h4>
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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-vertical needs-validation" action="<?php print_link("list_surat/edit/$page_id/?csrf_token=$csrf_token"); ?>" method="post">
                            <div>
                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label class="control-label" for="lampiran">Lampiran </label>
                                        <div id="ctrl-lampiran-holder" class=""> 
                                            <input id="ctrl-lampiran"  value="<?php  echo $data['lampiran']; ?>" type="text" placeholder="Enter Lampiran"  name="lampiran"  class="form-control " />
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label class="control-label" for="surat_dari">Surat Dari </label>
                                            <div id="ctrl-surat_dari-holder" class=""> 
                                                <input id="ctrl-surat_dari"  value="<?php  echo $data['surat_dari']; ?>" type="text" placeholder="Enter Surat Dari"  name="surat_dari"  class="form-control " />
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label class="control-label" for="disampaikan_kpd">Disampaikan Kpd </label>
                                                <div id="ctrl-disampaikan_kpd-holder" class=""> 
                                                    <input id="ctrl-disampaikan_kpd"  value="<?php  echo $data['disampaikan_kpd']; ?>" type="text" placeholder="Enter Disampaikan Kpd"  name="disampaikan_kpd"  class="form-control " />
                                                    </div>
                                                </div>
                                                <div class="form-group col-sm-4">
                                                    <label class="control-label" for="sifat_surat">Sifat Surat </label>
                                                    <div id="ctrl-sifat_surat-holder" class=""> 
                                                        <input id="ctrl-sifat_surat"  value="<?php  echo $data['sifat_surat']; ?>" type="text" placeholder="Enter Sifat Surat"  name="sifat_surat"  class="form-control " />
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-sm-4">
                                                        <label class="control-label" for="disposisi">Disposisi </label>
                                                        <div id="ctrl-disposisi-holder" class=""> 
                                                            <input id="ctrl-disposisi"  value="<?php  echo $data['disposisi']; ?>" type="text" placeholder="Enter Disposisi"  name="disposisi"  class="form-control " />
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label class="control-label" for="catatan">Catatan </label>
                                                            <div id="ctrl-catatan-holder" class=""> 
                                                                <input id="ctrl-catatan"  value="<?php  echo $data['catatan']; ?>" type="text" placeholder="Enter Catatan"  name="catatan"  class="form-control " />
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
