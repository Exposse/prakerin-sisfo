<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("parallax_counter_number/add");
$can_edit = ACL::is_allowed("parallax_counter_number/edit");
$can_view = ACL::is_allowed("parallax_counter_number/view");
$can_delete = ACL::is_allowed("parallax_counter_number/delete");
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
    <div  class="my-1">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <?php if($can_add){ ?>
                    <a  class="btn btn btn-primary my-1" href="<?php print_link("parallax_counter_number/add") ?>">
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
                                    <a class="text-decoration-none" href="<?php print_link('parallax_counter_number'); ?>">
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
                                    <a class="text-decoration-none" href="<?php print_link('parallax_counter_number'); ?>">
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
                        <div id="parallax_counter_number-list-records">
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
									
													 <div class="rs-counter pt-100 pb-70 bg3">
            <div class="container">
                <div class="sec-title white-text mb-50 text-center">
                    <h2><div><?php echo $data['judul']; ?></div></h2>      
                    <p><?php echo $data['caption']; ?></p>
                </div>
        		<div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="rs-counter-list">
                            <h2 class="counter-number plus"><?php echo $data['counter_number1']; ?> </h2>                  
                            <h4 class="counter-desc"><?php echo $data['cubter_name1']; ?> </h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="rs-counter-list">
                            <h2 class="counter-number plus"> <?php echo $data['counter_number2']; ?> </h2>
                            <h4 class="counter-desc"><?php echo $data['counter_name2']; ?> </h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="rs-counter-list">
                            <h2 class="counter-number plus"><?php echo $data['counter_number3']; ?> </h2>                  
                            <h4 class="counter-desc"><?php echo $data['counter_name3']; ?></h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="rs-counter-list">
                            <h2 class="counter-number plus"> <?php echo $data['counter_number4']; ?> </h2>
                            <h4 class="counter-desc"><?php echo $data['counter_name4']; ?></h4>
                        </div>
                    </div>
        		</div>
				<div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="rs-counter-list">
                            <h2 class="counter-number plus">  <?php echo $data['counter_number5']; ?> </h2>                  
                            <h4 class="counter-desc"><?php echo $data['counter_name5']; ?></h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="rs-counter-list">
                            <h2 class="counter-number plus">   <?php echo $data['counter_number6']; ?> </h2>
                            <h4 class="counter-desc"><?php echo $data['counter_name6']; ?></h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="rs-counter-list">
                            <h2 class="counter-number plus"> <?php echo $data['counter_number7']; ?> </h2>                  
                            <h4 class="counter-desc"><?php echo $data['counter_name6']; ?></h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="rs-counter-list">
                            <h2 class="counter-number plus"><?php echo $data['counter_number8']; ?> </h2>
                            <h4 class="counter-desc"><?php echo $data['counter_name7']; ?></h4>
                        </div>
                    </div>
        		</div>
            </div>
        </div>					
									
									
									
									
									
									
									
									
									
									
									
									
                                            </div>
                                            <div class="td-btn">
                                                <?php if($can_view){ ?>
                                                <a class="btn btn-sm btn-success has-tooltip" title="View Record" href="<?php print_link("parallax_counter_number/view/$rec_id"); ?>">
                                                    <i class="fa fa-eye"></i> View
                                                </a>
                                                <?php } ?>
                                                <?php if($can_delete){ ?>
                                                <a class="btn btn-sm btn-danger has-tooltip record-delete-btn" title="Delete this record" href="<?php print_link("parallax_counter_number/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
                                                    <i class="fa fa-times"></i>
                                                    Delete
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
</section>
