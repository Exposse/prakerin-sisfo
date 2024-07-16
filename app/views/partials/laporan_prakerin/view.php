 <?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("laporan_prakerin/add");
$can_edit = ACL::is_allowed("laporan_prakerin/edit");
$can_view = ACL::is_allowed("laporan_prakerin/view");
$can_delete = ACL::is_allowed("laporan_prakerin/delete");
?>
<?php
$comp_model = new SharedController;
$page_element_id = "view-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
//Page Data Information from Controller
$data = $this->view_data;
//$rec_id = $data['__tableprimarykey'];
$page_id = $this->route->page_id; //Page id from url
$view_title = $this->view_title;
$show_header = $this->show_header;
$show_edit_btn = $this->show_edit_btn;
$show_delete_btn = $this->show_delete_btn;
$show_export_btn = $this->show_export_btn;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="view"  data-display-type="table" data-page-url="<?php print_link($current_page); ?>">
    <div  class="my-1">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <?php $this :: display_page_errors(); ?>
                    <div  class="card animated fadeIn page-content">
                        <?php
                        $counter = 0;
                        if(!empty($data)){
                        $rec_id = (!empty($data['id']) ? urlencode($data['id']) : null);
                        $counter++;
                        ?>
                        <div id="page-report-body" class="">
                            <table class="table table-hover table-borderless table-striped">
                                <!-- Table Body Start -->
                                <tbody class="page-data" id="page-data-<?php echo $page_element_id; ?>">
								<div class="single-blog-details sec-spacer">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="single-image">
						<?php echo $data['catatan_laporan3']; ?>
							<?php echo $data['catatan_laporan3']; ?>
							<?php echo $data['catatan_laporan3']; ?>
						</div><!-- .single-image End -->
						
						<div class="share-section">
							<div class="row">
								 
								 
							</div>
						</div><!-- .share-section End -->

						   
						
						 
				                                       
					</div>
                                     
                                </tbody>
                                <!-- Table Body End -->
                            </table>
                        </div>
                        <div class="p-3 d-flex">
                         <a class="btn btn-sm btn-success"  href="<?php print_link("laporan_prakerin"); ?>">
                                <i class="fa fa-edit"></i> Back
                            </a>
                            <a class="btn btn-sm btn-info"  href="<?php print_link("laporan_prakerin/edit/$rec_id"); ?>">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                           
							 
                            
                             
                            <?php if($can_delete){ ?>
                            <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("laporan_prakerin/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
                                <i class="fa fa-times"></i> Delete
                            </a>
                            <?php } ?>
                        </div>
                        <?php
                        }
                        else{
                        ?>
                        <!-- Empty Record Message -->
                        <div class="text-muted p-3">
                            <i class="fa fa-ban"></i> No Record Found
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
