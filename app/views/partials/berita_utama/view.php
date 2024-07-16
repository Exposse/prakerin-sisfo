<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("berita_utama/add");
$can_edit = ACL::is_allowed("berita_utama/edit");
$can_view = ACL::is_allowed("berita_utama/view");
$can_delete = ACL::is_allowed("berita_utama/delete");
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
    <div  class="my-1">
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
                                    <div><?php echo $data['upload1']; ?></div>
                                    <tr  class="td-tanggal1">
                                        <th class="title"> Tanggal1: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['tanggal1']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("berita_utama/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="tanggal1" 
                                                data-title="Enter Tanggal1" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['tanggal1']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-judul1">
                                        <th class="title"> Judul1: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['judul1']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("berita_utama/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="judul1" 
                                                data-title="Enter Judul1" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['judul1']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <div><?php echo $data['caption1']; ?></div>
                                    <div><?php echo $data['upload2']; ?></div>
                                    <tr  class="td-tanggal2">
                                        <th class="title"> Tanggal2: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['tanggal2']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("berita_utama/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="tanggal2" 
                                                data-title="Enter Tanggal2" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['tanggal2']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-judul2">
                                        <th class="title"> Judul2: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['judul2']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("berita_utama/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="judul2" 
                                                data-title="Enter Judul2" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['judul2']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <div><?php echo $data['caption2']; ?></div>
                                    <div><?php echo $data['upload3']; ?></div>
                                    <tr  class="td-tanggal3">
                                        <th class="title"> Tanggal3: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['tanggal3']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("berita_utama/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="tanggal3" 
                                                data-title="Enter Tanggal3" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['tanggal3']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-judul3">
                                        <th class="title"> Judul3: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['judul3']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("berita_utama/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="judul3" 
                                                data-title="Enter Judul3" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['judul3']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <div><?php echo $data['caption3']; ?></div>
                                    <div><?php echo $data['upload4']; ?></div>
                                    <tr  class="td-tanggal4">
                                        <th class="title"> Tanggal4: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['tanggal4']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("berita_utama/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="tanggal4" 
                                                data-title="Enter Tanggal4" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['tanggal4']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-judul4">
                                        <th class="title"> Judul4: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['judul4']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("berita_utama/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="judul4" 
                                                data-title="Enter Judul4" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['judul4']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <div><?php echo $data['caption4']; ?></div>
                                    <div><?php echo $data['lihat_selengkapnya']; ?></div>
                                </tbody>
                                <!-- Table Body End -->
                            </table>
                        </div>
                        <div class="p-3 d-flex">
                            <?php if($can_edit){ ?>
                            <a class="btn btn-sm btn-info"  href="<?php print_link("berita_utama/edit/$rec_id"); ?>">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                            <?php } ?>
                            <?php if($can_delete){ ?>
                            <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("berita_utama/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
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
