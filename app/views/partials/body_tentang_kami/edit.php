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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-vertical needs-validation" action="<?php print_link("body_tentang_kami/edit/$page_id/?csrf_token=$csrf_token"); ?>" method="post">
                            <div>
                                <div class="form-group ">
                                    <label class="control-label" for="caption">Caption </label>
                                    <div id="ctrl-caption-holder" class=""> 
                                        <textarea placeholder="Enter Caption" id="ctrl-caption"  rows="5" name="caption" class="htmleditor form-control"><?php  echo $data['caption']; ?></textarea>
                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label class="control-label" for="photo">Photo </label>
                                        <div id="ctrl-photo-holder" class=""> 
                                            <textarea placeholder="Enter Photo" id="ctrl-photo"  rows="5" name="photo" class="htmleditor form-control"><?php  echo $data['photo']; ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label class="control-label" for="video">Video </label>
                                        <div id="ctrl-video-holder" class=""> 
                                            <textarea placeholder="Enter Video" id="ctrl-video"  rows="5" name="video" class="htmleditor form-control"><?php  echo $data['video']; ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="sejarah">Sejarah </label>
                                    <div id="ctrl-sejarah-holder" class=""> 
                                        <textarea placeholder="Enter Sejarah" id="ctrl-sejarah"  rows="5" name="sejarah" class="htmleditor form-control"><?php  echo $data['sejarah']; ?></textarea>
                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label class="control-label" for="visi">Visi </label>
                                        <div id="ctrl-visi-holder" class=""> 
                                            <textarea placeholder="Enter Visi" id="ctrl-visi"  rows="5" name="visi" class="htmleditor form-control"><?php  echo $data['visi']; ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label class="control-label" for="misi">Misi </label>
                                        <div id="ctrl-misi-holder" class=""> 
                                            <textarea placeholder="Enter Misi" id="ctrl-misi"  rows="5" name="misi" class="htmleditor form-control"><?php  echo $data['misi']; ?></textarea>
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
