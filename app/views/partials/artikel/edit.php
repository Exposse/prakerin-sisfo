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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-vertical needs-validation" action="<?php print_link("artikel/edit/$page_id/?csrf_token=$csrf_token"); ?>" method="post">
                            <div>
                                <div class="form-group ">
                                    <label class="control-label" for="tanggal">Tanggal </label>
                                    <div id="ctrl-tanggal-holder" class=""> 
                                        <input id="ctrl-tanggal"  value="<?php  echo $data['tanggal']; ?>" type="text" placeholder="Enter Tanggal"  name="tanggal"  class="form-control " />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label" for="judul_artikel">Judul Artikel </label>
                                        <div id="ctrl-judul_artikel-holder" class=""> 
                                            <textarea placeholder="Enter Judul Artikel" id="ctrl-judul_artikel"  rows="2" name="judul_artikel" class="htmleditor form-control"><?php  echo $data['judul_artikel']; ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label" for="isi_artikel">Isi Artikel </label>
                                        <div id="ctrl-isi_artikel-holder" class=""> 
                                            <textarea placeholder="Enter Isi Artikel" id="ctrl-isi_artikel"  rows="5" name="isi_artikel" class="htmleditor form-control"><?php  echo $data['isi_artikel']; ?></textarea>
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
