<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("berita/add");
$can_edit = ACL::is_allowed("berita/edit");
$can_view = ACL::is_allowed("berita/view");
$can_delete = ACL::is_allowed("berita/delete");
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
    <div  class="my-5">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <?php if($can_add){ ?>
                    <a  class="btn btn btn-primary my-1" href="<?php print_link("berita/add") ?>">
                        <i class="fa fa-plus"></i>                              
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
                                    <a class="text-decoration-none" href="<?php print_link('berita'); ?>">
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
                                    <a class="text-decoration-none" href="<?php print_link('berita'); ?>">
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
                        <div id="berita-list-records">
                            <?php
                            if(!empty($records)){
                            ?>
                            <div id="page-report-body">
							<div class="row justify-content-center page-data" id="page-data-<?php echo $page_element_id; ?>">
                                    <!--record-->
									<div class="sec-title mb-50 text-center">
                    <h2>Berita terkini</h2>      
                	<p>I feel the presence of the Almighty, who formed us in his own image, and the breath.</p>
                </div>
                                <div class="row justify-content-center page-data" id="page-data-<?php echo $page_element_id; ?>">
                                    <!--record-->
                                    <?php
                                    $counter = 0;
                                    foreach($records as $data){
                                    $rec_id = (!empty($data['id']) ? urlencode($data['id']) : null);
                                    $counter++;
                                    ?>
                                    <div class="col-sm-4">
                                        <div class="bg-light p-2 mb-3  ">
										
										  <div class="container">
										
										<div class="row">
											<div class="col-md-12">
												<div class="" data-loop="true" data-items="1" data-margin="30" data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="true" data-ipad-device="1" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="1" data-md-device-nav="true" data-md-device-dots="true">
													<div class="event-item">
														<div class="event-img">
															  <div><?php echo $data['upload_gambar']; ?></div>
														
														</div>
														<div class="events-details white-bg">
															<div class="event-date">
																<i class="fa fa-calendar"></i>
																<span>28 June 2017</span>
															</div>
															<h4 class="event-title"><a href="events-details.html"><?php echo $data['judul_informasi']; ?></a></h4>
															<div class="event-meta">
																<div class="event-time">
																	<i class="fa fa-clock-o"></i>
																	<span> <?php echo $data['tanggal']; ?> </span>
																</div>
																<div class="event-location">
																	<i class="fa fa-map-marker"></i>
																	<span><?php echo $data['ket_informasi']; ?></span>
																</div>
															</div>
															<div class="event-btn">
																<a href="#"><?php echo $data['selengkapnya']; ?><i class="fa fa-angle-double-right"></i></a>
															</div>
														</div>
													</div>
												  
												</div>
											</div>
										</div>
									</div>
										
										
										
										
										
										
										
										
										
                                            <div class="td-btn">
                                                <?php if($can_view){ ?>
                                                <a class="btn btn-sm btn-success has-tooltip" title="View Record" href="<?php print_link("berita/view/$rec_id"); ?>">
                                                    <i class="fa fa-eye"></i> View
                                                </a>
                                                <?php } ?>
                                                <?php if($can_edit){ ?>
                                                <a class="btn btn-sm btn-info has-tooltip" title="Edit This Record" href="<?php print_link("berita/edit/$rec_id"); ?>">
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
                                <div class="row justify-content-center search-data" id="search-data-<?php echo $page_element_id; ?>"></div>
                                <div>
                                </div>
                            </div>
                            <?php
                            if($show_footer == true){
                            ?>
                            <div class=" border-top mt-2">
                                <div class="row justify-content-center">    
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
	 <div class="row-container-fluid">
            <div class="row ">
                <div class="card bg-dark col-md-12 comp-grid">
                    <div class=" ">
                        <?php  
                        $this->render_page("footer/list?limit_count=20"); 
                        ?>
                    </div>
                </div>
            </div>
        </div>
</section>
