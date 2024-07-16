<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("header/add");
$can_edit = ACL::is_allowed("header/edit");
$can_view = ACL::is_allowed("header/view");
$can_delete = ACL::is_allowed("header/delete");
?>
<?php
$comp_model = new SharedController;
$page_element_id = "list-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
//Page Data From Controller
$view_data = $this->view_data;
$records = $view_data->records;
$record_count = $view_data->record_count;
$total_records = $view_data->total_records;
$field_name = $this->route->field_name;
$field_value = $this->route->field_value;
$view_title = $this->view_title;
$show_header = $this->show_header;
$show_footer = $this->show_footer;
$show_pagination = $this->show_pagination;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="list"  data-display-type="grid" data-page-url="<?php print_link($current_page); ?>">
    <div  class="">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <?php if($can_add){ ?>
                    <a  class="btn btn btn-primary my-1" href="<?php print_link("header/add") ?>">
                        <i class="fa fa-plus"></i>                              
                        Add New Header 
                    </a>
                    <?php } ?>
                    <div class="">
                        <!-- Page bread crumbs components-->
                        <?php
                        if(!empty($field_name) || !empty($_GET['search'])){
                        ?>
                        <hr class="sm d-block d-sm-none" />
                        <nav class="page-header-breadcrumbs mt-2" aria-label="breadcrumb">
                            <ul class="breadcrumb m-0 p-1">
                                <?php
                                if(!empty($field_name)){
                                ?>
                                <li class="breadcrumb-item">
                                    <a class="text-decoration-none" href="<?php print_link('header'); ?>">
                                        <i class="fa fa-angle-left"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <?php echo (get_value("tag") ? get_value("tag")  :  make_readable($field_name)); ?>
                                </li>
                                <li  class="breadcrumb-item active text-capitalize font-weight-bold">
                                    <?php echo (get_value("label") ? get_value("label")  :  make_readable(urldecode($field_value))); ?>
                                </li>
                                <?php 
                                }   
                                ?>
                                <?php
                                if(get_value("search")){
                                ?>
                                <li class="breadcrumb-item">
                                    <a class="text-decoration-none" href="<?php print_link('header'); ?>">
                                        <i class="fa fa-angle-left"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item text-capitalize">
                                    Search
                                </li>
                                <li  class="breadcrumb-item active text-capitalize font-weight-bold"><?php echo get_value("search"); ?></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </nav>
                        <!--End of Page bread crumbs components-->
                        <?php
                        }
                        ?>
                    </div>
                    <?php $this :: display_page_errors(); ?>
                    <div  class=" animated fadeIn page-content">
                        <div id="header-list-records">
                            <?php
                            if(!empty($records)){
                            ?>
                            <div id="page-report-body">
                                <div class="row sm-gutters page-data" id="page-data-<?php echo $page_element_id; ?>">
                                    <!--record-->
                                    <?php
                                    $counter = 0;
                                    foreach($records as $data){
                                    $rec_id = (!empty($data['id']) ? urlencode($data['id']) : null);
                                    $counter++;
                                    ?>
                                    <div class="col-sm-12">
                                        <div class="bg-light my-1 ">
											<header id="rs-header" class="rs-header">
				<!-- Header Top Start -->
				<div class="rs-header-top">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-4 col-md-12">
								<div class="logo-area">
									<div><?php echo $data['logo']; ?></div>
								</div>
							</div>
							<div class="col-lg-8 col-md-12">
								<div class="row">
								    <div class="col-sm-4">
								        <div class="header-contact">
                                            <div id="phone-details" class="widget-text">
								                <i class="glyph-icon flaticon-phone-call"></i>
								                <div class="info-text">
								                    <a href="tel:4155551234">
								                    	<span>Call Us</span>
														 <?php echo $data['tlpn']; ?> 
													</a>
								                </div>
								            </div>
								        </div>
								    </div>
								    <div class="col-sm-4">
								        <div class="header-contact">
								            <div id="info-details" class="widget-text">
								                <i class="glyph-icon flaticon-email"></i>
								                <div class="info-text">
								                    <a href="mailto:info@domain.com">
								                    	<span>Mail Us</span>
														 <?php echo $data['mail']; ?> 
													</a>
								                </div>
								            </div>
								        </div>
								    </div>
								    <div class="col-sm-4">
								        <div class="header-contact">
                                            <div id="address-details" class="widget-text">
								                <i class="glyph-icon flaticon-placeholder"></i>
								                <div class="info-text">
								                    <span>Location</span>
								                    <div><?php echo $data['lokasi']; ?></div>
								                </div>
								            </div>
								        </div>
								    </div>
								</div>
							</div>
						</div>				
					</div>
				</div>
                                            
                                            
                                           
                                            <div class="td-btn">
                                                <?php if($can_edit){ ?>
                                                <a class="btn btn-sm btn-info has-tooltip" title="Edit This Record" href="<?php print_link("header/edit/$rec_id"); ?>">
                                                    <i class="fa fa-edit"></i> Edit
                                                </a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php 
                                    }
                                    ?>
                                    <!--endrecord-->
                                </div>
                                <div class="row sm-gutters search-data" id="search-data-<?php echo $page_element_id; ?>"></div>
                                <div>
                                </div>
                            </div>
                            <?php
                            if($show_footer == true){
                            ?>
                            <div class="">
                                <div class="">    
                                    <div class="col-md-auto">   
                                    </div>
                                    <div class="col">   
                                        <?php
                                        if($show_pagination == true){
                                        $pager = new Pagination($total_records, $record_count);
                                        $pager->route = $this->route;
                                        $pager->show_page_count = false;
                                        $pager->show_record_count = false;
                                        $pager->show_page_limit =false;
                                        $pager->limit_count = $this->limit_count;
                                        $pager->show_page_number_list = true;
                                        $pager->pager_link_range=5;
                                        $pager->render();
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                            }
                            else{
                            ?>
                            <div class="text-muted  animated bounce p-3">
                                <h4><i class="fa fa-ban"></i> No record found</h4>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
