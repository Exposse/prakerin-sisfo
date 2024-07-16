<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("ucapan_selamat/add");
$can_edit = ACL::is_allowed("ucapan_selamat/edit");
$can_view = ACL::is_allowed("ucapan_selamat/view");
$can_delete = ACL::is_allowed("ucapan_selamat/delete");
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
                                    <div><?php echo $data['photo1']; ?></div>
                                    <div><?php echo $data['photo2']; ?></div>
                                    <div><?php echo $data['photo3']; ?></div>
                                    <div><?php echo $data['photo4']; ?></div>
                                    <div><?php echo $data['photo5']; ?></div>
                                    <div><?php echo $data['photo6']; ?></div>
                                    <div><?php echo $data['photo7']; ?></div>
                                    <div><?php echo $data['photo8']; ?></div>
                                    <tr  class="td-nama1">
                                        <th class="title"> Nama1: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['nama1']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("ucapan_selamat/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="nama1" 
                                                data-title="Enter Nama1" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['nama1']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-nama2">
                                        <th class="title"> Nama2: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['nama2']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("ucapan_selamat/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="nama2" 
                                                data-title="Enter Nama2" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['nama2']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-nama3">
                                        <th class="title"> Nama3: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['nama3']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("ucapan_selamat/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="nama3" 
                                                data-title="Enter Nama3" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['nama3']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-nama4">
                                        <th class="title"> Nama4: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['nama4']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("ucapan_selamat/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="nama4" 
                                                data-title="Enter Nama4" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['nama4']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-nama5">
                                        <th class="title"> Nama5: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['nama5']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("ucapan_selamat/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="nama5" 
                                                data-title="Enter Nama5" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['nama5']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-nama6">
                                        <th class="title"> Nama6: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['nama6']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("ucapan_selamat/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="nama6" 
                                                data-title="Enter Nama6" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['nama6']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-nama7">
                                        <th class="title"> Nama7: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['nama7']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("ucapan_selamat/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="nama7" 
                                                data-title="Enter Nama7" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['nama7']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-nama8">
                                        <th class="title"> Nama8: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['nama8']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("ucapan_selamat/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="nama8" 
                                                data-title="Enter Nama8" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['nama8']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-gelar1">
                                        <th class="title"> Gelar1: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['gelar1']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("ucapan_selamat/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="gelar1" 
                                                data-title="Enter Gelar1" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['gelar1']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-gelar2">
                                        <th class="title"> Gelar2: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['gelar2']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("ucapan_selamat/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="gelar2" 
                                                data-title="Enter Gelar2" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['gelar2']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-gelar3">
                                        <th class="title"> Gelar3: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['gelar3']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("ucapan_selamat/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="gelar3" 
                                                data-title="Enter Gelar3" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['gelar3']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-gelar4">
                                        <th class="title"> Gelar4: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['gelar4']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("ucapan_selamat/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="gelar4" 
                                                data-title="Enter Gelar4" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['gelar4']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-gelar5">
                                        <th class="title"> Gelar5: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['gelar5']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("ucapan_selamat/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="gelar5" 
                                                data-title="Enter Gelar5" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['gelar5']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-gelar6">
                                        <th class="title"> Gelar6: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['gelar6']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("ucapan_selamat/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="gelar6" 
                                                data-title="Enter Gelar6" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['gelar6']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-gelar7">
                                        <th class="title"> Gelar7: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['gelar7']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("ucapan_selamat/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="gelar7" 
                                                data-title="Enter Gelar7" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['gelar7']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-gelar8">
                                        <th class="title"> Gelar8: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['gelar8']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("ucapan_selamat/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="gelar8" 
                                                data-title="Enter Gelar8" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['gelar8']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-ucapan1">
                                        <th class="title"> Ucapan1: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("ucapan_selamat/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="ucapan1" 
                                                data-title="Enter Ucapan1" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="textarea" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['ucapan1']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-ucapan2">
                                        <th class="title"> Ucapan2: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("ucapan_selamat/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="ucapan2" 
                                                data-title="Enter Ucapan2" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="textarea" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['ucapan2']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-ucapan3">
                                        <th class="title"> Ucapan3: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("ucapan_selamat/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="ucapan3" 
                                                data-title="Enter Ucapan3" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="textarea" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['ucapan3']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-ucapan4">
                                        <th class="title"> Ucapan4: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("ucapan_selamat/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="ucapan4" 
                                                data-title="Enter Ucapan4" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="textarea" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['ucapan4']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-ucapan5">
                                        <th class="title"> Ucapan5: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("ucapan_selamat/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="ucapan5" 
                                                data-title="Enter Ucapan5" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="textarea" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['ucapan5']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-ucapan6">
                                        <th class="title"> Ucapan6: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("ucapan_selamat/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="ucapan6" 
                                                data-title="Enter Ucapan6" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="textarea" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['ucapan6']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-ucapan7">
                                        <th class="title"> Ucapan7: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("ucapan_selamat/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="ucapan7" 
                                                data-title="Enter Ucapan7" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="textarea" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['ucapan7']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-ucapan8">
                                        <th class="title"> Ucapan8: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("ucapan_selamat/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="ucapan8" 
                                                data-title="Enter Ucapan8" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="textarea" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['ucapan8']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                                <!-- Table Body End -->
                            </table>
                        </div>
                        <div class="p-3 d-flex">
                            <?php if($can_edit){ ?>
                            <a class="btn btn-sm btn-info"  href="<?php print_link("ucapan_selamat/edit/$rec_id"); ?>">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                            <?php } ?>
                            <?php if($can_delete){ ?>
                            <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("ucapan_selamat/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
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
