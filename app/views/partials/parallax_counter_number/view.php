<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("parallax_counter_number/add");
$can_edit = ACL::is_allowed("parallax_counter_number/edit");
$can_view = ACL::is_allowed("parallax_counter_number/view");
$can_delete = ACL::is_allowed("parallax_counter_number/delete");
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
                                    <tr  class="td-judul">
                                        <th class="title"> Judul: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("parallax_counter_number/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="judul" 
                                                data-title="Enter Judul" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="textarea" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['judul']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-caption">
                                        <th class="title"> Caption: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("parallax_counter_number/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="caption" 
                                                data-title="Enter Caption" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="textarea" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['caption']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-counter_number1">
                                        <th class="title"> Counter Number1: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['counter_number1']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("parallax_counter_number/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="counter_number1" 
                                                data-title="Enter Counter Number1" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['counter_number1']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-counter_number2">
                                        <th class="title"> Counter Number2: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['counter_number2']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("parallax_counter_number/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="counter_number2" 
                                                data-title="Enter Counter Number3" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['counter_number2']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-counter_number3">
                                        <th class="title"> Counter Number3: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['counter_number3']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("parallax_counter_number/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="counter_number3" 
                                                data-title="Enter Counter Number3" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['counter_number3']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-counter_number4">
                                        <th class="title"> Counter Number4: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['counter_number4']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("parallax_counter_number/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="counter_number4" 
                                                data-title="Enter Counter Number4" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['counter_number4']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-cubter_name1">
                                        <th class="title"> Cubter Name1: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['cubter_name1']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("parallax_counter_number/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="cubter_name1" 
                                                data-title="Enter Cubter Name1" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['cubter_name1']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-counter_name2">
                                        <th class="title"> Counter Name2: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['counter_name2']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("parallax_counter_number/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="counter_name2" 
                                                data-title="Enter Counter Name2" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['counter_name2']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-counter_name3">
                                        <th class="title"> Counter Name3: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['counter_name3']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("parallax_counter_number/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="counter_name3" 
                                                data-title="Enter Counter Name3" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['counter_name3']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-counter_name4">
                                        <th class="title"> Counter Name4: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['counter_name4']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("parallax_counter_number/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="counter_name4" 
                                                data-title="Enter Counter Name4" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['counter_name4']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-counter_number5">
                                        <th class="title"> Counter Number5: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['counter_number5']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("parallax_counter_number/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="counter_number5" 
                                                data-title="Enter Counter Number5" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['counter_number5']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-counter_number6">
                                        <th class="title"> Counter Number6: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['counter_number6']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("parallax_counter_number/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="counter_number6" 
                                                data-title="Enter Counter Number6" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['counter_number6']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-counter_number7">
                                        <th class="title"> Counter Number7: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['counter_number7']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("parallax_counter_number/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="counter_number7" 
                                                data-title="Enter Counter Number7" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['counter_number7']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-counter_number8">
                                        <th class="title"> Counter Number8: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['counter_number8']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("parallax_counter_number/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="counter_number8" 
                                                data-title="Enter Counter Number8" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['counter_number8']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-counter_name5">
                                        <th class="title"> Counter Name5: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['counter_name5']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("parallax_counter_number/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="counter_name5" 
                                                data-title="Enter Counter Name5" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['counter_name5']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-counter_name6">
                                        <th class="title"> Counter Name6: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['counter_name6']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("parallax_counter_number/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="counter_name6" 
                                                data-title="Enter Counter Name6" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['counter_name6']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-counter_name7">
                                        <th class="title"> Counter Name7: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['counter_name7']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("parallax_counter_number/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="counter_name7" 
                                                data-title="Enter Counter Name7" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['counter_name7']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-counter_name8">
                                        <th class="title"> Counter Name8: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['counter_name8']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("parallax_counter_number/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="counter_name8" 
                                                data-title="Enter Counter Name8" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['counter_name8']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                                <!-- Table Body End -->
                            </table>
                        </div>
                        <div class="p-3 d-flex">
                            <?php if($can_edit){ ?>
                            <a class="btn btn-sm btn-info"  href="<?php print_link("parallax_counter_number/edit/$rec_id"); ?>">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                            <?php } ?>
                            <?php if($can_delete){ ?>
                            <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("parallax_counter_number/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
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
