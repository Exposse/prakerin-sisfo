<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("surat_masuk/add");
$can_edit = ACL::is_allowed("surat_masuk/edit");
$can_view = ACL::is_allowed("surat_masuk/view");
$can_delete = ACL::is_allowed("surat_masuk/delete");
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
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-4 ">
                </div>
                <div class="col-sm-4 ">
                </div>
                <div class="col-sm-4 ">
                    <form  class="search" action="<?php print_link('surat_masuk'); ?>" method="get">
                        <div class="input-group">
                            <input value="<?php echo get_value('search'); ?>" class="form-control" type="text" name="search"  placeholder="Search" />
                                <div class="input-group-append">
                                    <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
        <div  class="">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-md-12 comp-grid">
                        <?php if($can_add){ ?>
                        <a  class="btn btn btn-primary my-1" href="<?php print_link("surat_masuk/add") ?>">
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
                                        <a class="text-decoration-none" href="<?php print_link('surat_masuk'); ?>">
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
                                        <a class="text-decoration-none" href="<?php print_link('surat_masuk'); ?>">
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
                            <div id="surat_masuk-list-records">
                                <div id="page-report-body" class="table-responsive">
                                    <table class="table  table-striped table-sm text-left">
                                        <thead class="table-header bg-light">
                                            <tr>
                                                <th  class="td-id"> Id</th>
                                                <th  class="td-tanggal_masuk"> Tanggal Masuk</th>
                                                <th  class="td-tanggal_surat"> Tanggal Surat</th>
                                                <th  class="td-lampiran"> Lampiran</th>
                                                <th  class="td-sifat_surat"> Sifat Surat</th>
                                                <th  class="td-nomor_surat"> Nomor Surat</th>
                                                <th  class="td-surat_dari"> Surat Dari</th>
                                                <th  class="td-perihal"> Perihal</th>
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
                                                <td class="td-id"><a href="<?php print_link("surat_masuk/view/$data[id]") ?>"><?php echo $data['id']; ?></a></td>
                                                <td class="td-tanggal_masuk">
                                                    <span <?php if($can_edit){ ?> data-flatpickr="{ enableTime: false, minDate: '', maxDate: ''}" 
                                                        data-value="<?php echo $data['tanggal_masuk']; ?>" 
                                                        data-pk="<?php echo $data['id'] ?>" 
                                                        data-url="<?php print_link("surat_masuk/editfield/" . urlencode($data['id'])); ?>" 
                                                        data-name="tanggal_masuk" 
                                                        data-title="Enter Tanggal Masuk" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="flatdatetimepicker" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" <?php } ?>>
                                                        <?php echo $data['tanggal_masuk']; ?> 
                                                    </span>
                                                </td>
                                                <td class="td-tanggal_surat">
                                                    <span <?php if($can_edit){ ?> data-flatpickr="{ enableTime: false, minDate: '', maxDate: ''}" 
                                                        data-value="<?php echo $data['tanggal_surat']; ?>" 
                                                        data-pk="<?php echo $data['id'] ?>" 
                                                        data-url="<?php print_link("surat_masuk/editfield/" . urlencode($data['id'])); ?>" 
                                                        data-name="tanggal_surat" 
                                                        data-title="Enter Tanggal Surat" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="flatdatetimepicker" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" <?php } ?>>
                                                        <?php echo $data['tanggal_surat']; ?> 
                                                    </span>
                                                </td>
                                                <td class="td-lampiran">
                                                    <span <?php if($can_edit){ ?> data-source='<?php print_link('api/json/surat_masuk_lampiran_option_list'); ?>' 
                                                        data-value="<?php echo $data['lampiran']; ?>" 
                                                        data-pk="<?php echo $data['id'] ?>" 
                                                        data-url="<?php print_link("surat_masuk/editfield/" . urlencode($data['id'])); ?>" 
                                                        data-name="lampiran" 
                                                        data-title="PIlihan ..." 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="selectize" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable selectize" <?php } ?>>
                                                        <?php echo $data['lampiran']; ?> 
                                                    </span>
                                                </td>
                                                <td class="td-sifat_surat">
                                                    <span <?php if($can_edit){ ?> data-source='<?php print_link('api/json/surat_masuk_sifat_surat_option_list'); ?>' 
                                                        data-value="<?php echo $data['sifat_surat']; ?>" 
                                                        data-pk="<?php echo $data['id'] ?>" 
                                                        data-url="<?php print_link("surat_masuk/editfield/" . urlencode($data['id'])); ?>" 
                                                        data-name="sifat_surat" 
                                                        data-title="PIlihan ..." 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="selectize" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable selectize" <?php } ?>>
                                                        <?php echo $data['sifat_surat']; ?> 
                                                    </span>
                                                </td>
                                                <td class="td-nomor_surat">
                                                    <span <?php if($can_edit){ ?> data-value="<?php echo $data['nomor_surat']; ?>" 
                                                        data-pk="<?php echo $data['id'] ?>" 
                                                        data-url="<?php print_link("surat_masuk/editfield/" . urlencode($data['id'])); ?>" 
                                                        data-name="nomor_surat" 
                                                        data-title="Enter Nomor Surat" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="text" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" <?php } ?>>
                                                        <?php echo $data['nomor_surat']; ?> 
                                                    </span>
                                                </td>
                                                <td class="td-surat_dari">
                                                    <span <?php if($can_edit){ ?> data-source='<?php print_link('api/json/surat_masuk_surat_dari_option_list'); ?>' 
                                                        data-value="<?php echo $data['surat_dari']; ?>" 
                                                        data-pk="<?php echo $data['id'] ?>" 
                                                        data-url="<?php print_link("surat_masuk/editfield/" . urlencode($data['id'])); ?>" 
                                                        data-name="surat_dari" 
                                                        data-title="PIlihan ..." 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="selectize" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable selectize" <?php } ?>>
                                                        <?php echo $data['surat_dari']; ?> 
                                                    </span>
                                                </td>
                                                <td class="td-perihal">
                                                    <span <?php if($can_edit){ ?> data-pk="<?php echo $data['id'] ?>" 
                                                        data-url="<?php print_link("surat_masuk/editfield/" . urlencode($data['id'])); ?>" 
                                                        data-name="perihal" 
                                                        data-title="Enter Perihal" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="textarea" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" <?php } ?>>
                                                        <?php echo $data['perihal']; ?> 
                                                    </span>
                                                </td>
                                                <th class="td-btn">
                                                    <?php if($can_view){ ?>
                                                    <a class="btn btn-sm btn-success has-tooltip" title="View Record" href="<?php print_link("surat_masuk/view/$rec_id"); ?>">
                                                        <i class="fa fa-eye"></i> View
                                                    </a>
                                                    <?php } ?>
                                                    <?php if($can_edit){ ?>
                                                    <a class="btn btn-sm btn-info has-tooltip" title="Edit This Record" href="<?php print_link("surat_masuk/edit/$rec_id"); ?>">
                                                        <i class="fa fa-edit"></i> Disposisi
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
                                                <div class="dropup export-btn-holder mx-1">
                                                    <button class="btn btn-sm btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fa fa-save"></i> Export
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <?php $export_print_link = $this->set_current_page_link(array('format' => 'print')); ?>
                                                        <a class="dropdown-item export-link-btn" data-format="print" href="<?php print_link($export_print_link); ?>" target="_blank">
                                                            <img src="<?php print_link('assets/images/print.png') ?>" class="mr-2" /> PRINT
                                                            </a>
                                                            <?php $export_excel_link = $this->set_current_page_link(array('format' => 'excel')); ?>
                                                            <a class="dropdown-item export-link-btn" data-format="excel" href="<?php print_link($export_excel_link); ?>" target="_blank">
                                                                <img src="<?php print_link('assets/images/xsl.png') ?>" class="mr-2" /> EXCEL
                                                                </a>
                                                            </div>
                                                        </div>
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
