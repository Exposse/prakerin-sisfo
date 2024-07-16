<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("surat_masuk/add");
$can_edit = ACL::is_allowed("surat_masuk/edit");
$can_view = ACL::is_allowed("surat_masuk/view");
$can_delete = ACL::is_allowed("surat_masuk/delete");
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
                                    <tr  class="td-id">
                                        <th class="title"> No/Surat </th>
                                        <td class="value"><?php echo $data['id']; ?></td>
                                    </tr>
                                    <tr  class="td-tanggal_masuk">
                                        <th class="title"> <div style="text-align: left;"><span style="font-size: 0.875rem;">Tanggal masuk</span></div>: </th>
                                        <td class="value">
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
                                    </tr>
                                    <tr  class="td-tanggal_surat">
                                        <th class="title"> <div style="text-align: left;"><span style="font-size: 0.875rem;">Tanggal surat</span></div>: </th>
                                        <td class="value">
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
                                    </tr>
                                    <tr  class="td-lampiran">
                                        <th class="title"> <div style="text-align: left;"><span style="font-size: 0.875rem;">Lampiran</span></div>: </th>
                                        <td class="value">
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
                                    </tr>
                                    <tr  class="td-sifat_surat">
                                        <th class="title"> <div style="text-align: left;"><span style="font-size: 0.875rem;">Sifat surat</span></div>: </th>
                                        <td class="value">
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
                                    </tr>
                                    <tr  class="td-nomor_surat">
                                        <th class="title"> <div style="text-align: left;"><span style="font-size: 0.875rem;">Nomor surat</span></div>: </th>
                                        <td class="value">
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
                                    </tr>
                                    <tr  class="td-surat_dari">
                                        <th class="title"> <div style="text-align: left;"><span style="font-size: 0.875rem;">Surat dari</span></div>: </th>
                                        <td class="value">
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
                                    </tr>
                                    <tr  class="td-perihal">
                                        <th class="title"> <div style="text-align: left;"><span style="font-size: 0.875rem;">Perihal</span></div>: </th>
                                        <td class="value">
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
                                    </tr>
                                    <tr  class="td-disampaikan_kpd">
                                        <th class="title"> <div style="text-align: left;"><span style="font-size: 0.875rem;">Disampaikan Kpd</span></div>: </th>
                                        <td class="value">
                                            <a size="sm" class="btn btn-sm btn-warning page-modal" href="<?php print_link("list_surat/list/disampaikan_kpd/" . urlencode($data['disampaikan_kpd'])) ?>">
                                                <?php echo $data['disampaikan_kpd'] ?>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr  class="td-disposisi">
                                        <th class="title"> <div style="text-align: left;"><span style="font-size: 0.875rem;">Disposisi</span></div>: </th>
                                        <td class="value">
                                            <a size="sm" class="btn btn-sm btn-success page-modal" href="<?php print_link("list_surat/list/disposisi/" . urlencode($data['disposisi'])) ?>">
                                                <?php echo $data['disposisi'] ?>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr  class="td-catatan">
                                        <th class="title"> <div style="text-align: left;"><span style="font-size: 0.875rem;">Catatan</span></div>: </th>
                                        <td class="value">
                                            <a size="sm" class="btn btn-sm btn-danger page-modal" href="<?php print_link("list_surat/list/catatan/" . urlencode($data['catatan'])) ?>">
                                                <?php echo $data['catatan'] ?>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr  class="td-upload_file">
                                        <th class="title"> <div style="text-align: left;"><span style="font-size: 0.875rem;">File surat</span></div>: </th>
                                        <td class="value"><?php Html :: page_link_file($data['upload_file']); ?></td>
                                    </tr>
                                </tbody>
                                <!-- Table Body End -->
                            </table>
                        </div>
                        <div class="p-3 d-flex">
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
                                    <?php if($can_edit){ ?>
                                    <a class="btn btn-sm btn-info"  href="<?php print_link("surat_masuk/edit/$rec_id"); ?>">
                                        <i class="fa fa-edit"></i> Edit
                                    </a>
                                    <?php } ?>
                                    <?php if($can_delete){ ?>
                                    <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("surat_masuk/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
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
