<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("alumni_sisfo/add");
$can_edit = ACL::is_allowed("alumni_sisfo/edit");
$can_view = ACL::is_allowed("alumni_sisfo/view");
$can_delete = ACL::is_allowed("alumni_sisfo/delete");
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
    <div  class="my-3">
        <div class="container">
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
								
								<div class="rs-team-single pt-100">
			<div class="container">
				<div class="row team">
				    <div class="col-lg-4 col-md-12">
				        <div class="team-photo mobile-mb-40">
				           <?php echo $data['photo']; ?> 
				          
				        </div>
				    </div>
				    <div class="col-lg-8 col-md-12">
				        <h3 class="team-name"> <?php echo $data['nam_lengkap']; ?> </h3>
				        <p class="team-title">
						<h3 class="team-name"> <?php echo $data['asal_sekolah']; ?> </h3>
				        	  
							<span>   </span>
				        </p>
				        <p class="team-contact">
							<h3 class="team-name"> <?php echo $data['jurusan']; ?> </h3>
				        
				        </p>
				        <p>
				        	<?php echo $data['catatan']; ?> 
				        </p>
				       
				    </div>
				</div>
			</div>
		</div>
								
                                     
                                       
                                    </tr>
                                </tbody>
                                <!-- Table Body End -->
                            </table>
                        </div>
                        <div class="p-3 d-flex">
                          <a class="btn btn-sm btn-success"  href="<?php print_link("alumni_sisfo"); ?>">
                                <i class="fa fa-hand-o-left "></i> back
                            </a>
                            <a class="btn btn-sm btn-info"  href="<?php print_link("alumni_sisfo/edit/$rec_id"); ?>">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                          
                            
                        
                            <?php if($can_delete){ ?>
                            <a class="btn btn-sm btn-success record-delete-btn mx-1"  href="<?php print_link("alumni_sisfo/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
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
