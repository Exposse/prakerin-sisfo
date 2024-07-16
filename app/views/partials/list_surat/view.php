<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("list_surat/add");
$can_edit = ACL::is_allowed("list_surat/edit");
$can_view = ACL::is_allowed("list_surat/view");
$can_delete = ACL::is_allowed("list_surat/delete");
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
                                    <tr  class="td-lampiran">
                                        <th class="title"> Lampiran: </th>
                                        <td class="value">
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
                                    </tr>
                                    <tr  class="td-surat_dari">
                                        <th class="title"> Surat Dari: </th>
                                        <td class="value">
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
                                    </tr>
                                    <tr  class="td-disampaikan_kpd">
                                        <th class="title"> Disampaikan Kpd: </th>
                                        <td class="value">
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
                                    </tr>
                                    <tr  class="td-sifat_surat">
                                        <th class="title"> Sifat Surat: </th>
                                        <td class="value">
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
                                    </tr>
                                    <tr  class="td-disposisi">
                                        <th class="title"> Disposisi: </th>
                                        <td class="value">
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
                                    </tr>
                                    <tr  class="td-catatan">
                                        <th class="title"> Catatan: </th>
                                        <td class="value">
                                            <a size="sm" class="btn btn-sm btn-danger page-modal" href="<?php print_link("list_surat/list/catatan/" . urlencode($data['catatan'])) ?>">
                                                <?php echo $data['catatan'] ?>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                                <!-- Table Body End -->
                            </table>
                        </div>
                        <div class="p-3 d-flex">
                            <?php if($can_edit){ ?>
                            <a class="btn btn-sm btn-info"  href="<?php print_link("list_surat/edit/$rec_id"); ?>">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                            <?php } ?>
                            <?php if($can_delete){ ?>
                            <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("list_surat/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
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
