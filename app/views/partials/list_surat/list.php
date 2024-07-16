<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("list_surat/add");
$can_edit = ACL::is_allowed("list_surat/edit");
$can_view = ACL::is_allowed("list_surat/view");
$can_delete = ACL::is_allowed("list_surat/delete");
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
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="list"  data-display-type="table" data-page-url="<?php print_link($current_page); ?>">
    <div  class="my-3">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <?php if($can_add){ ?>
                    <a  class="btn btn btn-primary my-1" href="<?php print_link("list_surat/add") ?>">
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
                                    <a class="text-decoration-none" href="<?php print_link('list_surat'); ?>">
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
                                    <a class="text-decoration-none" href="<?php print_link('list_surat'); ?>">
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
                        <div id="list_surat-list-records">
                            <div id="page-report-body" class="table-responsive">
                                <table class="table  table-striped table-sm text-left">
                                    <thead class="table-header bg-light">
                                        <tr>
                                            <th  class="td-lampiran"> Lampiran</th>
                                            <th  class="td-surat_dari"> Surat Dari</th>
                                            <th  class="td-disampaikan_kpd"> Disampaikan Kpd</th>
                                            <th  class="td-sifat_surat"> Sifat Surat</th>
                                            <th  class="td-disposisi"> Disposisi</th>
                                            <th  class="td-catatan"> Catatan</th>
                                            <th class="td-btn"></th>
                                        </tr>
                                    </thead>
                                    <?php
                                    if(!empty($records)){
                                    ?>
                                    <tbody class="page-data" id="page-data-<?php echo $page_element_id; ?>">
                                        <!--record-->
                                        <?php
                                        $counter = 0;
                                        foreach($records as $data){
                                        $rec_id = (!empty($data['id']) ? urlencode($data['id']) : null);
                                        $counter++;
                                        ?>
                                        <tr>
                                            <td class="td-lampiran">
                                                <span <?php if($can_edit){ ?> data-value="<?php echo $data['lampiran']; ?>" 
                                                    data-pk="<?php echo $data['id'] ?>" 
                                                    data-url="<?php print_link("list_surat/editfield/" . urlencode($data['id'])); ?>" 
                                                    data-name="lampiran" 
                                                    data-title="Enter Lampiran" 
                                                    data-placement="left" 
                                                    data-toggle="click" 
                                                    data-type="text" 
                                                    data-mode="popover" 
                                                    data-showbuttons="left" 
                                                    class="is-editable" <?php } ?>>
                                                    <?php echo $data['lampiran']; ?> 
                                                </span>
                                            </td>
                                            <td class="td-surat_dari">
                                                <span <?php if($can_edit){ ?> data-value="<?php echo $data['surat_dari']; ?>" 
                                                    data-pk="<?php echo $data['id'] ?>" 
                                                    data-url="<?php print_link("list_surat/editfield/" . urlencode($data['id'])); ?>" 
                                                    data-name="surat_dari" 
                                                    data-title="Enter Surat Dari" 
                                                    data-placement="left" 
                                                    data-toggle="click" 
                                                    data-type="text" 
                                                    data-mode="popover" 
                                                    data-showbuttons="left" 
                                                    class="is-editable" <?php } ?>>
                                                    <?php echo $data['surat_dari']; ?> 
                                                </span>
                                            </td>
                                            <td class="td-disampaikan_kpd">
                                                <span <?php if($can_edit){ ?> data-value="<?php echo $data['disampaikan_kpd']; ?>" 
                                                    data-pk="<?php echo $data['id'] ?>" 
                                                    data-url="<?php print_link("list_surat/editfield/" . urlencode($data['id'])); ?>" 
                                                    data-name="disampaikan_kpd" 
                                                    data-title="Enter Disampaikan Kpd" 
                                                    data-placement="left" 
                                                    data-toggle="click" 
                                                    data-type="text" 
                                                    data-mode="popover" 
                                                    data-showbuttons="left" 
                                                    class="is-editable" <?php } ?>>
                                                    <?php echo $data['disampaikan_kpd']; ?> 
                                                </span>
                                            </td>
                                            <td class="td-sifat_surat">
                                                <span <?php if($can_edit){ ?> data-value="<?php echo $data['sifat_surat']; ?>" 
                                                    data-pk="<?php echo $data['id'] ?>" 
                                                    data-url="<?php print_link("list_surat/editfield/" . urlencode($data['id'])); ?>" 
                                                    data-name="sifat_surat" 
                                                    data-title="Enter Sifat Surat" 
                                                    data-placement="left" 
                                                    data-toggle="click" 
                                                    data-type="text" 
                                                    data-mode="popover" 
                                                    data-showbuttons="left" 
                                                    class="is-editable" <?php } ?>>
                                                    <?php echo $data['sifat_surat']; ?> 
                                                </span>
                                            </td>
                                            <td class="td-disposisi">
                                                <span <?php if($can_edit){ ?> data-value="<?php echo $data['disposisi']; ?>" 
                                                    data-pk="<?php echo $data['id'] ?>" 
                                                    data-url="<?php print_link("list_surat/editfield/" . urlencode($data['id'])); ?>" 
                                                    data-name="disposisi" 
                                                    data-title="Enter Disposisi" 
                                                    data-placement="left" 
                                                    data-toggle="click" 
                                                    data-type="text" 
                                                    data-mode="popover" 
                                                    data-showbuttons="left" 
                                                    class="is-editable" <?php } ?>>
                                                    <?php echo $data['disposisi']; ?> 
                                                </span>
                                            </td>
                                            <td class="td-catatan">
                                                <span <?php if($can_edit){ ?> data-value="<?php echo $data['catatan']; ?>" 
                                                    data-pk="<?php echo $data['id'] ?>" 
                                                    data-url="<?php print_link("list_surat/editfield/" . urlencode($data['id'])); ?>" 
                                                    data-name="catatan" 
                                                    data-title="Enter Catatan" 
                                                    data-placement="left" 
                                                    data-toggle="click" 
                                                    data-type="text" 
                                                    data-mode="popover" 
                                                    data-showbuttons="left" 
                                                    class="is-editable" <?php } ?>>
                                                    <?php echo $data['catatan']; ?> 
                                                </span>
                                            </td>
                                            <th class="td-btn">
                                                <?php if($can_view){ ?>
                                                <a class="btn btn-sm btn-success has-tooltip" title="View Record" href="<?php print_link("list_surat/view/$rec_id"); ?>">
                                                    <i class="fa fa-eye"></i> View
                                                </a>
                                                <?php } ?>
                                                <?php if($can_edit){ ?>
                                                <a class="btn btn-sm btn-info has-tooltip" title="Edit This Record" href="<?php print_link("list_surat/edit/$rec_id"); ?>">
                                                    <i class="fa fa-edit"></i> Edit
                                                </a>
                                                <?php } ?>
                                            </th>
                                        </tr>
                                        <?php 
                                        }
                                        ?>
                                        <!--endrecord-->
                                    </tbody>
                                    <tbody class="search-data" id="search-data-<?php echo $page_element_id; ?>"></tbody>
                                    <?php
                                    }
                                    ?>
                                </table>
                                <?php 
                                if(empty($records)){
                                ?>
                                <h4 class="bg-light text-center border-top text-muted animated bounce  p-3">
                                    <i class="fa fa-ban"></i> No record found
                                </h4>
                                <?php
                                }
                                ?>
                            </div>
                            <?php
                            if( $show_footer && !empty($records)){
                            ?>
                            <div class=" border-top mt-2">
                                <div class="row justify-content-center">    
                                    <div class="col-md-auto justify-content-center">    
                                        <div class="p-3 d-flex justify-content-between">    
                                        </div>
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
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
