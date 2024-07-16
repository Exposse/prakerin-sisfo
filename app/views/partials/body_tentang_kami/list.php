 <?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("body_tentang_kami/add");
$can_edit = ACL::is_allowed("body_tentang_kami/edit");
$can_view = ACL::is_allowed("body_tentang_kami/view");
$can_delete = ACL::is_allowed("body_tentang_kami/delete");
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
                    <a  class="btn btn btn-primary my-1" href="<?php print_link("body_tentang_kami/add") ?>">
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
                                    <a class="text-decoration-none" href="<?php print_link('body_tentang_kami'); ?>">
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
                                    <a class="text-decoration-none" href="<?php print_link('body_tentang_kami'); ?>">
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
                        <div id="body_tentang_kami-list-records">
                            <?php
                            if(!empty($records)){
                            ?>
                            <div id="page-report-body">
                                <div class="row justify-content-center page-data" id="page-data-<?php echo $page_element_id; ?>">
                                    <!--record-->
                                    <?php
                                    $counter = 0;
                                    foreach($records as $data){
                                    $rec_id = (!empty($data['id']) ? urlencode($data['id']) : null);
                                    $counter++;
                                    ?>
                                    <div class="col-sm-12">
                                        <div class="bg-light p-2 mb-3 ">
										<div class="container">
                <div class="sec-title mb-80 text-center">
                 
              
                </div>
				    <div><?php echo $data['caption']; ?></div>    
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-img rs-animation-hover">
						 <div><?php echo $data['photo']; ?></div>
							<a class="popup-youtube rs-animation-fade" href="<?php echo $data['video']; ?>
							</a> 
							<div class="overly-border"></div>
						</div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                  
						<div id="accordion" class="rs-accordion-style1">
						    <div class="card">
						        <div class="card-header" id="headingOne">
						            <h3 class="acdn-title" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						          		Sejarah
						            </h3>
						        </div>
						        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
						            <div class="card-body">
						                 <div><?php echo $data['sejarah']; ?></div>
						            </div>
						        </div>
						    </div>
						    <div class="card">
						        <div class="card-header" id="headingTwo">
						            <h3 class="acdn-title collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						          		Visi
						            </h3>
						        </div>
						        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordion">
						            <div class="card-body">
						                  <?php echo $data['visi']; ?> 
						            </div>
						        </div>
						    </div>
						    <div class="card">
						        <div class="card-header mb-0" id="headingThree">
						            <h3 class="acdn-title collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						          		Misi
						            </h3>
						        </div>
						        <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-bs-parent="#accordion">
						            <div class="card-body">
						                <?php echo $data['misi']; ?>
						            </div>
						        </div>
						    </div>
						</div>
                    </div>
                </div>
            
        </div>
								
                                            <div class="td-btn">
                                                <?php if($can_edit){ ?>
                                                <a class="btn btn-sm btn-info has-tooltip" title="Edit This Record" href="<?php print_link("body_tentang_kami/edit/$rec_id"); ?>">
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
                            <div class=" ">
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
</section>
