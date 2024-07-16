 <?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("ucapan_selamat/add");
$can_edit = ACL::is_allowed("ucapan_selamat/edit");
$can_view = ACL::is_allowed("ucapan_selamat/view");
$can_delete = ACL::is_allowed("ucapan_selamat/delete");
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
        <div class="row-container-fluid">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <?php if($can_add){ ?>
                    <a  class="btn btn btn-primary my-1" href="<?php print_link("ucapan_selamat/add") ?>">
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
                                    <a class="text-decoration-none" href="<?php print_link('ucapan_selamat'); ?>">
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
                                    <a class="text-decoration-none" href="<?php print_link('ucapan_selamat'); ?>">
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
                        <div id="ucapan_selamat-list-records">
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
                                        <div class="bg-light my-1">
										
										<div id="rs-testimonial-3" class="rs-testimonial-3 pt-5 pb-40 sec-color">
			<div class="container">

				<div class="row">
			        <div class="col-md-12">
						<div  class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="false" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="false" data-md-device="3" data-md-device-nav="true" data-md-device-dots="false">
                           
                            <!-- Testimonial style3 Start -->
                            <div class="testimonial-style3">
                                <div class="image"> 
                                    <div><?php echo $data['photo1']; ?></div> 
                                </div>
                                <h5 class="title"><?php echo $data['nama1']; ?> </h5>
								 <h3 class="name">  <?php echo $data['gelar1']; ?> </h3>
                                <p class="description">  <?php echo $data['ucapan1']; ?> </p>
                                <div class="testimonial-content">
                                    <div class="testimonial-profile">
                                       
                                        
                                    </div>
                                    <ul class="rating">
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star-half-empty"></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Testimonial style3 End -->
                            
                            <!-- Testimonial style3 Start -->
                            <div class="testimonial-style3">
                                <div class="image"> 
                                  <div><?php echo $data['photo2']; ?></div>
                                </div>
                                <h5 class="title"><?php echo $data['nama2']; ?></h5>
								 <h3 class="name">  <?php echo $data['gelar2']; ?> </h3>
                                <p class="description">  <?php echo $data['ucapan2']; ?> </p>
                                <div class="testimonial-content">
                                    <div class="testimonial-profile">
                                       
                                    </div>
                                    <ul class="rating">
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star-half-empty"></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Testimonial style3 End -->
                            
                            <!-- Testimonial style3 Start -->
                            <div class="testimonial-style3">
                                <div class="image"> 
                                 <div><?php echo $data['photo3']; ?></div>
                                </div>
                                <h5 class="title"><?php echo $data['nama3']; ?></h5>
								 <h3 class="name">  <?php echo $data['gelar3']; ?> </h3>
                                <p class="description">  <?php echo $data['ucapan3']; ?> </p>
                                <div class="testimonial-content">
                                    <div class="testimonial-profile">
                                        
                                    </div>
                                    <ul class="rating">
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star-half-empty"></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Testimonial style3 End -->
                            
                            <!-- Testimonial style3 Start -->
                            <div class="testimonial-style3">
                                <div class="image"> 
                                 <div><?php echo $data['photo4']; ?></div>
                                </div>
                                <h5 class="title"><?php echo $data['nama4']; ?></h5>
								 <h3 class="name">  <?php echo $data['gelar4']; ?> </h3>
                                <p class="description">  <?php echo $data['ucapan4']; ?> </p>
                                <div class="testimonial-content">
                                    <div class="testimonial-profile">
                                      
                                    </div>
                                    <ul class="rating">
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star-half-empty"></li>
                                    </ul>
                                </div>
                            </div>
							 <div class="testimonial-style3">
                                <div class="image"> 
                                    <div><?php echo $data['photo5']; ?></div>
                                </div>
                                <h5 class="title"><?php echo $data['nama5']; ?></h5>
								 <h3 class="name">  <?php echo $data['gelar5']; ?> </h3>
                                <p class="description">  <?php echo $data['ucapan5']; ?> </p>
                                <div class="testimonial-content">
                                    <div class="testimonial-profile">
                                       
                                    </div>
                                    <ul class="rating">
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star-half-empty"></li>
                                    </ul>
                                </div>
                            </div>
							 <div class="testimonial-style3">
                                <div class="image"> 
                                   <div><?php echo $data['photo6']; ?></div>
                                </div>
                                <h5 class="title"><?php echo $data['nama6']; ?></h5>
								 <h3 class="name">  <?php echo $data['gelar6']; ?> </h3>
                                <p class="description">  <?php echo $data['ucapan6']; ?> </p>
                                <div class="testimonial-content">
                                    <div class="testimonial-profile">
                                     
                                    </div>
                                    <ul class="rating">
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star-half-empty"></li>
                                    </ul>
                                </div>
                            </div>
							 <div class="testimonial-style3">
                                <div class="image"> 
                                     <div><?php echo $data['photo7']; ?></div>
                                </div>
                                <h5 class="title"><?php echo $data['nama7']; ?></h5>
								 <h3 class="name">  <?php echo $data['gelar7']; ?> </h3>
                                <p class="description">  <?php echo $data['ucapan7']; ?> </p>
                                <div class="testimonial-content">
                                    <div class="testimonial-profile">
                                        
                                    </div>
                                    <ul class="rating">
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star-half-empty"></li>
                                    </ul>
                                </div>
                            </div>
							 <div class="testimonial-style3">
                                <div class="image"> 
                                 <div><?php echo $data['photo8']; ?></div>
                                </div>
                                <h5 class="title"><?php echo $data['nama8']; ?></h5>
								 <h3 class="name">  <?php echo $data['gelar8']; ?> </h3>
                                <p class="description">  <?php echo $data['ucapan8']; ?> </p>
                                <div class="testimonial-content">
                                    <div class="testimonial-profile">
                                        
                                    </div>
                                    <ul class="rating">
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star-half-empty"></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Testimonial style3 End -->
                            
			            </div>
			        </div>
			    </div>
			</div>
        
										
										
										
                                            <div class="td-btn">
                                                <?php if($can_view){ ?>
                                                <a class="btn btn-sm btn-success has-tooltip" title="View Record" href="<?php print_link("ucapan_selamat/view/$rec_id"); ?>">
                                                    <i class="fa fa-eye"></i> View
                                                </a>
                                                <?php } ?>
                                                <?php if($can_edit){ ?>
                                                <a class="btn btn-sm btn-info has-tooltip" title="Edit This Record" href="<?php print_link("ucapan_selamat/edit/$rec_id"); ?>">
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
