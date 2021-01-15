<?php
require_once('inc/head.php');

require_once('lib/connection.php'); ?>
 <!-- loader -->
 <div class="loader-img-container">
        <img src="assets/images/loader-red.gif">
</div>
    <!-- loader -->
        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container">

                    <!-- LOGO -->
                    <div class="topbar-left">
                        <a href="#" class="logo"><i class="md md-terrain"></i> <span> Tagprinting </span></a>
                    </div>
                    <!-- End Logo container-->
                    <div class="menu-extras">
                        <div class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </div>
                        <div id="navigation" class="nav navbar-nav navbar-right pull-right">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">
                            <li class="active">
                                <a href="#"><span> Home </span> </a>
                            </li>

                            <li class="has-submenu">
                                <a href="database.php"><span> Database </span> </a>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><span> Help </span> </a>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><span> Myplan </span> </a>
                            </li>

                            <li class="has-submenu">
                                <a href="lib/logout.php"><span> Logout </span> </a>
                            </li>

                        </ul>
                        <!-- End navigation menu  -->
                    </div>
                    </div>

                </div>
            </div>

            <div class="navbar-custom">
                <div class="container">

                </div>
            </div>
        </header>
        <!-- End Navigation Bar-->

        <div class="wrapper">
            <div class="container-fluid">
                <!--itm add-->
                <div class="modal fade db-modal" id="itemsdbmodel-index" role="dialog">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Add Item</h4>
                        </div>
                        <div class="modal-body">
                            <form name="dash-add-itm" id="add_item_dash" enctype="multipart/form-data">
                                <input type="hidden" name="add_itm[default][itm_hid]" value="newitem"/>
                                <input type="hidden" name="add_itm[default][itm_editid]" value=""/>
                                <div class="row add-itm-row">
                                    <div class="col-lg-12">
                                        <div class="col-lg-5">Choose Collection</div>
                                        <div class="col-lg-7">
                                            <select name="add_itm[default][colldrp]" class="form-control"></select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="col-lg-5">Choose Catagory</div>
                                        <div class="col-lg-7">
                                            <select name="add_itm[default][catagdrp]" class="form-control">
                                                <option value="-1">Select Categories</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="col-lg-5">label</div>
                                        <div class="col-lg-7">
                                            <input name="add_itm[default][lbl]" class="form-control input-lg" type="text" />
                                        </div>
                                    </div>
                                     <div class="col-lg-12">
                                        <div class="col-lg-5">Description</div>
                                        <div class="col-lg-7">
                                            <textarea name="add_itm[default][desc]" class="add-itm-area add-itm-area"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="col-lg-5">Price</div>
                                        <div class="col-lg-7">
                                            <input name="add_itm[default][pric]" class="form-control input-lg" type="text" />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="col-lg-5">Tags</div>
                                        <div class="col-lg-7">
                                            <input name="add_itm[default][tags]" class="form-control input-lg" type="text" />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="col-lg-5">Image</div>
                                        <div class="col-lg-7">
                                            <ul class="ul-imgModED">
                                                <li>
                                                    <button name="add_itm[default][upldimg]" class="btn btn-primary itemsmodal-lbl-btn add-itm-imgbtn" data-toggle="tooltip" title="" type="button" data-original-title="Save">
                                                    <i class="fa fa-camera"></i>
                                                    <input type="file" name="add_itm_defimg" id="add_itm_img">
                                                    </button>
                                                </li>
                                                <li>
                                                    <a class="add-itm-imglnkk" data-img-additm="" data-toggle="modal" data-target="#myModal-tem">
                                                    <button class="btn btn-primary upldimg-additm" data-toggle="tooltip" title="" type="button" data-original-title="Preview"><i class="fa fa-image"></i></button>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="col-lg-5">Default Template</div>
                                        <div class="col-lg-7">
                                            <select name="add_itm[default][deftemp]" class="form-control add_itm_deftemp"></select>
                                        </div>
                                    </div>
                                    <div class="past-addItm-dash">
                                    </div>
                                    <div class="col-lg-12"></div>
                                    <div class="col-lg-12">
                                        <div class="col-lg-5"></div>
                                        <div class="col-lg-7">
                                            <button class="btn btn-primary itemsmodal-lbl-btn" type="submit" data-toggle="tooltip" title="Save" style="float: right;">
                                                <i class="fa fa-save"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                      </div>
                    </div>
                </div>
                <!--itm add-->
                <div class="row">
                    <div class="col-lg-8">
                        <div class="col-lg-12" style="padding: 10px;">
                            <ul class="itm-head-ul">
                                <li>
                                    <div class="itm-heading-fr">
                                        <h4>ITEMS</h4>
                                    </div>
                                </li>
                                <li style="margin: 0.3vh 1vw;">
                                    <div class="past-search-itm"></div>
                                </li>
                                <li style="width: 20vw;">
                                    <div class="lbl-paren">
                                        <div class="tbl-label-drpdwn" title="Column Settings">
                                            <button class="btn btn-primary btn-dispcatchkp" type="button">
                                                <i class="fa fa-cogs"></i>
                                                <span class="caret"></span>
                                            </button>
                                            <div class="chkall-pbox">
                                                      <ul class="itmchkul">
                                                            <li>
                                                                <div class="checkbox checkbox-primary">
                                                                    <input class="toggle-vis-dash" id="checkbox1" type="checkbox" checked="checked" data-column="1">
                                                                    <label for="checkbox1">
                                                                        Label
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox checkbox-primary">
                                                                    <input class="toggle-vis-dash" id="checkbox2" type="checkbox" checked="checked" data-column="2">
                                                                    <label for="checkbox2">
                                                                        Description
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox checkbox-primary">
                                                                    <input class="toggle-vis-dash" id="checkbox3" type="checkbox" checked="checked" data-column="3">
                                                                    <label for="checkbox3">
                                                                        Price
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox checkbox-primary">
                                                                    <input class="toggle-vis-dash" id="checkbox4" type="checkbox" checked="checked" data-column="4">
                                                                    <label for="checkbox4">
                                                                        Catagory
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox checkbox-primary">
                                                                    <input class="toggle-vis-dash" id="checkbox5" type="checkbox" checked="checked" data-column="5">
                                                                    <label for="checkbox5">
                                                                        Action
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox checkbox-primary">
                                                                    <input class="toggle-vis-dash" id="checkbox6" type="checkbox" data-column="6">
                                                                    <label for="checkbox6">
                                                                        Default Template
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox checkbox-primary">
                                                                    <input class="toggle-vis-dash" id="checkbox7" type="checkbox" data-column="7">
                                                                    <label for="checkbox7">
                                                                        Default Image
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>

                                                        <!-- <ul class="itmchkul"> -->
                                                            <?php
                                                            $cons= new Mysql();
                                                            $getRes= $cons-> dbConnect();

                                                            $sql="SELECT categoriesproperties.label FROM categoriesproperties INNER JOIN categories ON categories.id=categoriesproperties.category_id
                                                            INNER JOIN collections ON collections.id = categories.collection_id AND collections.user_id=".$_SESSION['main']['id']." ORDER BY categoriesproperties.id ASC LIMIT 10;";
                                                            $qry=mysqli_query($getRes,$sql);
                                                            $ids=8;
                                                            $rowCount = mysqli_num_rows($qry);
                                                            $brk=0;
                                                            while($row = mysqli_fetch_assoc($qry)) {
                                                                if($brk==0 && $brk <= $rowCount){echo '<ul class="itmchkul">';}
                                                            ?>
                                                                    <li>
                                                                        <div class="checkbox checkbox-primary">
                                                                            <input class="toggle-vis-dash" id="checkbox<?php echo $ids; ?>" type="checkbox" data-column="<?php echo $ids; ?>">
                                                                            <label for="checkbox<?php echo $ids; ?>">
                                                                                <?php echo $row['label']; ?>
                                                                            </label>
                                                                        </div>
                                                                    </li>
                                                            <?php
                                                                $ids+=1;
                                                                if($brk==20){echo '</ul><ul class="itmchkul">';$brk=0;}
                                                                $brk+=1;
                                                                }
                                                                if($brk < $rowCount%20){echo '</ul>';}
                                                            ?>
                                                        <!-- </ul>      -->

                                            </div>
                                        </div>
                                        <span data-toggle="modal" data-target="#itemsdbmodel-index" class="trig-additm">
                                            <button class="btn btn-primary" data-toggle="tooltip" title="Add" type="button" style="margin:0 1.7%;">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </span>
                                        <button class="btn btn-primary" id="multiItemprint" data-toggle="tooltip" title="Add to Print List" type="button">
                                            <i class="fa fa-print"></i>
                                        </button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-12">
                            <table id="tbl-label" class="display compact nowrap tbl-label" style="width:100%;">
                               <thead>
                                    <tr>
                                        <td></td>
                                        <th>Label</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Catagory</th>
                                        <th>Action</th>
                                        <th>Default Template</th>
                                        <th>Default Image</th>
<?php
    $cons= new Mysql();
    $getRes= $cons-> dbConnect();

    $sql="SELECT categoriesproperties.label FROM categoriesproperties INNER JOIN categories ON categories.id=categoriesproperties.category_id
    INNER JOIN collections ON collections.id = categories.collection_id AND collections.user_id=".$_SESSION['main']['id']." ORDER BY categoriesproperties.id ASC LIMIT 10;";
    $qry=mysqli_query($getRes,$sql);
    while($row = mysqli_fetch_assoc($qry)) {
?>
                                        <th><?php echo $row['label']; ?></th>
<?php
    }
?>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>

                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-sm">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Current Image</h4>
                            </div>
                            <div class="modal-body">
                              <img src="" class="img-responsive itm-img">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="modal fade db-modal" id="dbEditmodel-template" role="dialog">
                            <div class="modal-dialog modal-sm">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">Add Template</h4>
                                </div>
                                <div class="modal-body">
                                    <form method="post" id="tmpaddFrom" enctype="multipart/form-data">
                                        <div class="row add-itm-row-templ">
                                            <div class="col-lg-12">
                                                <div class="col-lg-5">label</div>
                                                <div class="col-lg-7">
                                                    <input class="form-control input-lg" name="tlabel" type="text" />
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-5">Description</div>
                                                <div class="col-lg-7">
                                                    <textarea class="add-itm-area add-itm-area" name="tdescription">

                                                    </textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-5">Width[Inches]</div>
                                                <div class="col-lg-7">
                                                    <input class="form-control input-lg" name="twidth" type="text" />
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-5">Height[Inches]</div>
                                                <div class="col-lg-7">
                                                    <input class="form-control input-lg" name="theiht" type="text" />
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-5">Background Color</div>
                                                <div class="col-lg-7">
                                                    <div id="colorSelector" class="bgcolor_picker">
                                                        <div style="background-color: #0000ff"></div>
                                                        <input type="hidden" value="#0000ff" name="bclor">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-5">Outline Color</div>
                                                <div class="col-lg-7">
                                                    <div id="colorSelector2" class="otcolor_picker">
                                                        <div style="background-color: #0000ff"></div>
                                                        <input type="hidden" value="#0000ff" name="ocolor">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-5">Outline Size</div>
                                                <div class="col-lg-7">
                                                    <input class="form-control input-lg" type="number" name="osize" min="1" max="1000" style="width: 100%;">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-5">Image Background</div>
                                                <div class="col-lg-7">
                                                    <button class="btn btn-primary itemsmodal-lbl-btn" data-toggle="tooltip" title="upload Template Image" type="button">
                                                    <i class="fa fa-camera"></i>
                                                    <input type="file" name="tmpImage" id="tmpImage">
                                                    </button>
                                                    <button class="btn btn-primary" data-toggle="tooltip" title="" type="button" style="margin-right: 0.7%;" data-original-title="Export">
                                                        <i class="fa fa-crop"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-5"></div>
                                                <div class="col-lg-7">
                                                    <button class="btn btn-primary itemsmodal-lbl-btn" data-toggle="tooltip" title="Save" type="submit" style="float: right;">
                                                        <i class="fa fa-save"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                              </div>
                            </div>
                        </div>

                        <div class="col-lg-12 index-hd-div" style="padding: 10px 0;">
                            <ul class="temp-head-ul">
                                <li>
                                    <div class="">
                                        <h4>TEMPLATES</h4>
                                    </div>
                                </li>
                                <li style="margin: 0 1vw;">
                                    <span data-toggle="modal" data-target="#dbEditmodel-template">
                                    <button class="btn btn-primary" data-toggle="tooltip" title="Add" type="button" style="margin-right: 0.7%;">
                                    <i class="fa fa-plus"></i>
                                    </button>
                                </span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-12" style="padding: 0;">
                            <table id="tbl-tpmlet" class="display compact nowrap tbl-tpmlet" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>Label</th>
                                        <th>Size</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            </table>
                            <div class="modal fade db-modal" id="dbmodel-template" role="dialog">
                                <div class="modal-dialog modal-sm">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h4 class="modal-title">Edit Template</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" id="tmpeditFrom" enctype="multipart/form-data">
                                            <div class="row add-itm-row-templ">
                                                <div class="col-lg-12">
                                                    <div class="col-lg-5">label</div>
                                                    <div class="col-lg-7">
                                                        <input value="<?php //echo $recs['label']; ?>" class="form-control input-lg" name="tmplabel" type="text" />
                                                        <input type="hidden" name="eid" value="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="col-lg-5">Description</div>
                                                    <div class="col-lg-7">
                                                        <textarea class="add-itm-area add-itm-area" name="tmpdescription"><?php //echo $recs['description']; ?></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="col-lg-5">Width[Inches]</div>
                                                    <div class="col-lg-7">
                                                        <input value="<?php //echo $recs['width']; ?>" class="form-control input-lg" name="tmpwidth" type="text" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="col-lg-5">Height[Inches]</div>
                                                    <div class="col-lg-7">
                                                        <input value="<?php //echo $recs['height']; ?>" class="form-control input-lg" name="tmpheiht" type="text" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="col-lg-5">Background Color</div>
                                                    <div class="col-lg-7">
                                                        <div id="colorSelector" class="bgcolor_picker1">
                                                            <div style="background-color: <?php //echo $recs['bkgColor']; ?>"></div>
                                                            <input type="hidden" value="<?php //echo $recs['bkgColor']; ?>" name="tmpbclor">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="col-lg-5">Outline Color</div>
                                                    <div class="col-lg-7">
                                                        <div id="colorSelector2" class="otcolor_picker1">
                                                            <div style="background-color: <?php //echo $recs['strokeColor']; ?>"></div>
                                                            <input type="hidden" value="<?php //echo $recs['strokeColor']; ?>" name="tmpocolor">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="col-lg-5">Outline Size</div>
                                                    <div class="col-lg-7">
                                                        <input class="form-control input-lg" type="number" name="tmposize" value="<?php //echo $recs['stroke']; ?>" min="1" max="1000" style="width: 100%;">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="col-lg-5">Image Background</div>
                                                    <div class="col-lg-7">
                                                        <button class="btn btn-primary itemsmodal-lbl-btn" data-toggle="tooltip" title="upload Template Image" type="button">
                                                        <i class="fa fa-camera"></i>
                                                        <input type="file" name="tmptmpImage" id="tmptmpImage">
                                                        </button>

                                                        <a class="img-lnk-temp" data-img-temp='' data-toggle="modal" data-target="#myModal-tem">
                                                            <button name="edit_tmp_view" class="btn btn-primary itemsmodal-lbl-btn add-itm-imgbtn" data-toggle="tooltip" title="View Current Image" type="button" >
                                                                <i class="fa fa-image"></i>
                                                            </button>
                                                        </a>
                                                        <button name="edit_tmp_view" class="btn btn-primary itemsmodal-lbl-btn add-itm-imgbtn" data-toggle="tooltip" title="Crop Image" type="button" >
                                                            <i class="fa fa fa-crop"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="col-lg-5"></div>
                                                    <div class="col-lg-7">
                                                        <button class="btn btn-primary itemsmodal-lbl-btn" data-toggle="tooltip" title="Save" type="submit" style="float: right;">
                                                            <i class="fa fa-save"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="modal fade" id="myModal-tem" role="dialog">
                                <div class="modal-dialog modal-sm">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h4 class="modal-title">Current Image</h4>
                                    </div>
                                    <div class="modal-body">
                                      <img src="" class="img-responsive itm-img-temp">
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End row -->

                <div class="row">
                    <!--enlarge mainprint prev large-->
                    <div class="modal fade db-modal print-list-datamodal" id="print-list-datamodal" role="dialog">
                        <div class="modal-dialog modal-sm">
                          <div class="modal-content">
                            <div class="modal-body row">
                                <div class="col-lg-12" style="text-align: center;">
                                    <ul class="hor-ul">
                                        <li>
											<button name="add_itm_upldimg" class="btn btn-primary add_background_image" data-toggle="tooltip" title="Set New Background" type="">
                                                <i class="fa fa-camera"></i>
												<input type="file" class="background_image" name="upload_image" id="">
                                            </button>
                                        </li>
                                        <li>
                                <span data-toggle="modal" data-target="#manageBgImageModal" id="spanManageBgImageModal2">
                                    <button class="btn btn-primary" data-toggle="tooltip" title="Crop Image" type="button">
                                                <i class="fa fa-crop"></i>
                                            </button>
                                </span>
                                        </li>
                                        <li>
                                            <button class="btn btn-primary prev-label" data-toggle="tooltip" title="Visibility of labels" type="button" style="margin-right: 0.7%;">
                                                <i class="ion-ios7-glasses"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <div id="colorSelector" class="prin-color-one-div">
                                                <div style="background-color: #ffffff"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <input class="form-control input-lg print-prev-inc" type="number" name="quantity" min="1" max="1000" style="width: 100%;">
                                        </li>
                                        <li>
                                            <button class="btn btn-primary prev-ali-lft test" data-toggle="tooltip" title="Text Align Left" type="button" style="margin-right: 0.7%;">
                                                <i class="fa fa-align-left"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="btn btn-primary prev-ali-cen" data-toggle="tooltip" title="Text Align Center" type="button" style="margin-right: 0.7%;">
                                                <i class="fa fa-align-center"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="btn btn-primary prev-ali-just" data-toggle="tooltip" title="Text Align Justify" type="button" style="margin-right: 0.7%;">
                                                <i class="fa fa-align-justify"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="btn btn-primary prev-ali-rgt" data-toggle="tooltip" title="Text Align Right" type="button" style="margin-right: 0.7%;">
                                                <i class="fa fa-align-right"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <select id="efonts" name="print-prev" class="form-control print-prev-select">
                                                <option value="">Select Font</option>
                                                <option value="Arial">Arial</option>
                                                <option value="Comic Sans MS">Comic Sans MS</option>
                                                <option value="Trebuchet MS">Trebuchet MS</option>
                                                <option value="Verdana">Verdana</option>
                                                <option value="Averia Sans Libre">Averia Sans Libre</option>
                                                <option value="Righteous">Righteous</option>
                                                <option value="Sancreek">Sancreek</option>
                                                <option value="Alegreya SC">Alegreya SC</option>
                                                <option value="Merienda One">Merienda One</option>
                                                <option value="Aldrich">Aldrich</option>
                                                <option value="Nothing You Could Do">Nothing You Could Do</option>
                                            </select>
                                        </li>
                                        <li>
                                            <button class="btn btn-primary print-prev-incsiz" data-toggle="tooltip" title="Increase Font Size" type="button" style="margin-right: 0.7%;">
                                                <i class="fa fa-font"></i><i class="fa fa-angle-double-up"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="btn btn-primary print-prev-decsiz" data-toggle="tooltip" title="Decrease Font Size" type="button" style="margin-right: 0.7%;">
                                                <i class="fa fa-font"></i><i class="fa fa-angle-double-down"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="btn btn-primary print-prev-min" data-toggle="tooltip" title="Compress Screen" type="button" style="margin-right: 0.7%;">
                                                <i class="fa fa-compress"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-12">
                                    <div class="col-lg-4" style="padding-top: 3%;">
                                        <div class="col-lg-12" style="padding-bottom: 4%;">Bubble</div>
                                        <div class="col-lg-12">
                                            <div class="col-lg-6">
                                            <span>Background Color</span>
                                            </div>
                                            <div class="col-lg-6">
                                                <div id="colorSelector" class="prin-color-one-bkg">
                                                    <div style="background-color: #ffffff"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="col-lg-6">
                                            <span>Transparancy</span>
                                            </div>
                                            <div class="col-lg-6">
                                                <input name="enlg[transp]" type="range" min="0" max="1" step="any" value="0" class="slider" id="myRange">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="col-lg-6">
                                                <span>X-Position</span>
                                            </div>
                                            <div class="col-lg-6">
                                                <input name="enlg[xpos]" class="form-control input-lg prin-inputbx" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="col-lg-6">
                                                <span>Y-Position</span>
                                            </div>
                                            <div class="col-lg-6">
                                                <input name="enlg[ypos]" class="form-control input-lg prin-inputbx" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="col-lg-6">
                                                <span>Width</span>
                                            </div>
                                            <div class="col-lg-6">
                                                <input name="enlg[width]" class="form-control input-lg prin-inputbx" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="col-lg-6">
                                            <span>Height</span>
                                            </div>
                                            <div class="col-lg-6">
                                                <input name="enlg[hei]" class="form-control input-lg prin-inputbx" type="text">
                                            </div>
                                        </div>

                                        <div class="col-lg-12" style="padding: 4% 0;">Background</div>
                                        <div class="col-lg-12">
                                            <div class="col-lg-6">
                                            <span>Tag Color</span>
                                            </div>
                                            <div class="col-lg-6">
                                                <div id="colorSelector13" class="tggcolor_picker"> <div style="background-color: #ffffff"></div> <input type="hidden" value="#ffffff" name="ocolor"> </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="col-lg-6">
                                            <span>Border Color</span>
                                            </div>
                                            <div class="col-lg-6">
                                                <div id="colorSelector14" class="bdrrcolor_picker"> <div style="background-color: #ffffff"></div> <input type="hidden" value="#ffffff" name="ocolor"> </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="col-lg-6">
                                            <span>Border Size</span>
                                            </div>
                                            <div class="col-lg-6">
                                                <input class="form-control input-lg print-prev-bordersi" type="number" name="quantity" min="1" max="1000" style="width: 100% !important;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 contain-div" id="printDivPopup">
									    <div class="img-div ui-state-active">
                                            <img src="" class="img-responsive" id="cropbox" />
                                        </div>
                                        <div class="data-area"></div>									
                                    </div>
                                   <div class="col-lg-2 contain-right-div">
										<a href="javascript:void(0)" class="save-style">Save Item Style</a>
										<div class="reset-item-save-btn">
											<a href="javascript:void(0)" class="reset-item-save">Reset to default Style</a>
										</div>
										<div class="default-item-save-btn">
											<a href="javascript:void(0)" class="default-item-save">Save as default changes</a>
										</div>
									</div>
                                </div>
                                <div class="col-lg-12" style="text-align: center; padding: 1% 0;">
                                    <div class="col-lg-12" style="display: inline-block;">
                                        <button id="preve" class="btn btn-primary print-list-prev" data-toggle="tooltip" title="" type="button" data-original-title="Previous">
                                                <i class="fa fa-arrow-circle-left" style="font-size: 50px;"></i>
                                        </button>
                                        <button id="nexte" class="btn btn-primary print-list-next" data-toggle="tooltip" title="" type="button" data-original-title="Next">
                                                <i class="fa fa-arrow-circle-right" style="font-size: 50px;"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <!--mainprint prev-->
                    <div class="col-lg-8 prev-col">
                    <h4>Item Print Preview</h4>
                        <div class="col-lg-12 prev-parent">
                            <div class="col-lg-11 col-md-11 col-sm-11 contain-div-prev" id="divToImg">
                                <div class="img-div ui-state-active img-div-prev">
                                    <img src="" class="img-responsive" id="prev_cropbox" />
                                </div>
                                <div class="data-area"></div>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 prin-lis-ul">
                                <ul>
                                    <li>
                                        <button class="btn btn-primary go-enlarge" data-toggle="tooltip" title="" type="button" data-original-title="Go Enlarge View">
                                            <i class="fa fa-expand"></i>
                                            <!--i class="fa fa-external-link-square"></i-->
                                        </button>
                                    </li>
                                    <li>
                                        <button name="add_itm_upldimg" class="btn btn-primary add_prev_image" data-toggle="tooltip" title="" type="button" data-original-title="Set New Background">
                                            <i class="fa fa-camera"></i>
											<input type="file" class="upload_image" name="upload_image" id="">
                                        </button>
                                    </li>
                                    <li>
                                        <button class="btn btn-primary add_prev_lable_list" data-toggle="tooltip" title="" type="button" data-original-title="Visibility of labels">
                                            <i class="ion-ios7-glasses"></i>
                                        </button>
                                    </li>
                                    <li>
                        <span data-toggle="modal" data-target="#manageBgImageModal" id="spanManageBgImageModal">
                                        <button class="btn btn-primary" data-toggle="tooltip" title="" type="button" data-original-title="Crop Image">
                                            <i class="fa fa-crop"></i>
                                        </button>
                        </span>
                                    </li>
                                </ul>
                                <ul style="height: 200px;">
                                    <li style="position: absolute; bottom: 0; width: 150px;">
                                        <button id="prevm" class="btn btn-primary prev-parent-prev" data-toggle="tooltip" title="" type="button" data-original-title="Previous">
                                        <i class="fa fa-arrow-circle-left" style="font-size: 44px;"></i>
                                        </button>
                                        <button id="nextm" class="btn btn-primary prev-parent-next" data-toggle="tooltip" title="" type="button" data-original-title="Next">
                                                <i class="fa fa-arrow-circle-right" style="font-size: 44px;"></i>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="col-lg-12 index-hd-div" style="padding: 10px 0;">
                            <ul class="print-ul">
                                <li>
                                    <h4>Print List</h4>
                                </li>
                                <li style="width: 8vw; margin: 0 1vw;">
                                    <button class="btn btn-primary" data-toggle="tooltip" title="Remove Selected Items" type="button" style="margin-right: 0.7%;" id="multiPrintdelete">
                                    <i class="fa fa-fax"></i>
                                    </button>
                                    <button class="btn btn-primary" data-toggle="tooltip" title="Print Preview" type="button" style="margin-right: 0.7%;" id="printAllBtn">
                                        <i class="fa fa-print"></i>
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-12" style="padding: 0;">                            
                            <table id="tbl-prnlst" class="display compact nowrap tbl-prnlst" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th style="text-align: left;">
                                            <div class="checkbox checkbox-primary">
                                                <input id="checkbox22" type="checkbox" class="prin-chk-all">
                                                <label for="checkbox22"></label>
                                            </div>
                                        </th>
                                        <th>Item</th>
                                        <th>Template</th>
                                        <th>Copy</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            </table>
            <!-- manageBgImageModal Modal -->
            <div id="manageBgImageModal" class="modal db-modal" role="dialog">
                <div class="modal-dialog" style="width: 90%; min-height: 90vh;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Crop Image</h4>
                        </div>
                        <div class="modal-body">
                            <div class="container jcm-cropper">
                                <div class="row">
                                    <div class="img-container img-tc">
                                        <img id="image" src="assets/images/picture.jpg" alt="Picture">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="docs-buttons">
                                        <!-- <h3>Toolbar:</h3> -->
                                        <!-- <div class="btn-group">
                                            <button type="button" class="btn btn-primary" data-method="setDragMode" data-option="move" title="Move">
                                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="&quot;setDragMode&quot;, &quot;move&quot;)">
                                                    <span class="fa fa-arrows-alt"></span>
                                                </span>
                                            </button>
                                            <button type="button" class="btn btn-primary" data-method="setDragMode" data-option="crop" title="Crop">
                                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="&quot;setDragMode&quot;, &quot;crop&quot;)">
                                                    <span class="fa fa-crop"></span>
                                                </span>
                                            </button>
                                        </div> -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary" data-method="zoom" data-option="0.1" title="Zoom In">
                                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="&quot;zoom&quot;, 0.1">
                                                    <span class="fa fa-search-plus"></span>
                                                </span>
                                            </button>
                                            <button type="button" class="btn btn-primary" data-method="zoom" data-option="-0.1" title="Zoom Out">
                                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="&quot;zoom&quot;, -0.1">
                                                    <span class="fa fa-search-minus"></span>
                                                </span>
                                            </button>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary" data-method="move" data-option="-10" data-second-option="0" title="Move Left">
                                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="&quot;move&quot;, -10, 0">
                                                    <span class="fa fa-arrow-left"></span>
                                                </span>
                                            </button>
                                            <button type="button" class="btn btn-primary" data-method="move" data-option="10" data-second-option="0" title="Move Right">
                                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="&quot;move&quot;, 10, 0">
                                                    <span class="fa fa-arrow-right"></span>
                                                </span>
                                            </button>
                                            <button type="button" class="btn btn-primary" data-method="move" data-option="0" data-second-option="-10" title="Move Up">
                                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="&quot;move&quot;, 0, -10">
                                                    <span class="fa fa-arrow-up"></span>
                                                </span>
                                            </button>
                                            <button type="button" class="btn btn-primary" data-method="move" data-option="0" data-second-option="10" title="Move Down">
                                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="&quot;move&quot;, 0, 10">
                                                    <span class="fa fa-arrow-down"></span>
                                                </span>
                                            </button>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary" data-method="rotate" data-option="-45" title="Rotate Left">
                                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="&quot;rotate&quot;, -45">
                                                    <span class="fa fa-undo"></span>
                                                </span>
                                            </button>
                                            <button type="button" class="btn btn-primary" data-method="rotate" data-option="45" title="Rotate Right">
                                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="&quot;rotate&quot;, 45">
                                                    <span class="fa fa-repeat"></span>
                                                </span>
                                            </button>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary" data-method="scaleX" data-option="-1" title="Flip Horizontal">
                                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="&quot;scaleX&quot;, -1">
                                                    <span class="fa fa-arrows-h"></span>
                                                </span>
                                            </button>
                                            <button type="button" class="btn btn-primary" data-method="scaleY" data-option="-1" title="Flip Vertical">
                                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="&quot;scaleY&quot;, -1">
                                                    <span class="fa fa-arrows-v"></span>
                                                </span>
                                            </button>
                                        </div>
                                        <!-- <div class="btn-group">
                                            <button type="button" class="btn btn-primary" data-method="crop" title="Crop">
                                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="&quot;crop&quot;">
                                                    <span class="fa fa-check"></span>
                                                </span>
                                            </button>
                                            <button type="button" class="btn btn-primary" data-method="clear" title="Clear">
                                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="&quot;clear&quot;">
                                                    <span class="fa fa-times"></span>
                                                </span>
                                            </button>
                                        </div> -->
                                        <!-- <div class="btn-group">
                                            <button type="button" class="btn btn-primary" data-method="disable" title="Disable">
                                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="&quot;disable&quot;">
                                                    <span class="fa fa-lock"></span>
                                                </span>
                                            </button>
                                            <button type="button" class="btn btn-primary" data-method="enable" title="Enable">
                                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="&quot;enable&quot;">
                                                    <span class="fa fa-unlock"></span>
                                                </span>
                                            </button>
                                        </div> -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary" data-method="reset" title="Reset">
                                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="&quot;reset&quot;">
                                                    <span class="fa fa-refresh"></span>
                                                </span>
                                            </button>
                                            <label class="btn btn-primary btn-upload" for="inputImage" title="Upload image file">
                                                <input type="file" class="sr-only" id="inputImage" name="file" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">
                                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="Import image with Blob URLs">
                                                    <span class="fa fa-upload"></span>
                                                </span>
                                            </label>
                                            <button type="button" class="btn btn-primary" data-method="destroy" title="Destroy">
                                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="&quot;destroy&quot;">
                                                    <span class="fa fa-power-off"></span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- /.docs-buttons -->
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <a class="btn btn-primary hide" id="download" href="javascript:void(0);" download="cropped.jpg">Download</a>
                            <button id="updateBgBtn" class="btn btn-primary">Update Background</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- manageBgImageModal Modal Ends-->

            <!-- uploadImageModal Modal -->
            <div id="uploadimageModal" class="modal db-modal" role="dialog">
                <div class="modal-dialog" style="width: 90%; min-height: 90vh;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Upload & Crop Image</h4>
                        </div>
                        <div class="modal-body">
                            <div class="container jcm-cropper">
                                <div class="row">
                                    <div class="img-container">
                                        <img id="imageNew" src="assets/images/picture.jpg" alt="Picture">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="docs-buttons">
                                        <!-- <h3>Toolbar:</h3> -->
                                        <!-- <div class="btn-group">
                                            <button type="button" class="btn btn-primary" data-method="setDragMode" data-option="move" title="Move">
                                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="&quot;setDragMode&quot;, &quot;move&quot;)">
                                                    <span class="fa fa-arrows-alt"></span>
                                                </span>
                                            </button>
                                            <button type="button" class="btn btn-primary" data-method="setDragMode" data-option="crop" title="Crop">
                                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="&quot;setDragMode&quot;, &quot;crop&quot;)">
                                                    <span class="fa fa-crop"></span>
                                                </span>
                                            </button>
                                        </div> -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary" data-method="zoom" data-option="0.1" title="Zoom In">
                                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="&quot;zoom&quot;, 0.1">
                                                    <span class="fa fa-search-plus"></span>
                                                </span>
                                            </button>
                                            <button type="button" class="btn btn-primary" data-method="zoom" data-option="-0.1" title="Zoom Out">
                                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="&quot;zoom&quot;, -0.1">
                                                    <span class="fa fa-search-minus"></span>
                                                </span>
                                            </button>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary" data-method="move" data-option="-10" data-second-option="0" title="Move Left">
                                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="&quot;move&quot;, -10, 0">
                                                    <span class="fa fa-arrow-left"></span>
                                                </span>
                                            </button>
                                            <button type="button" class="btn btn-primary" data-method="move" data-option="10" data-second-option="0" title="Move Right">
                                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="&quot;move&quot;, 10, 0">
                                                    <span class="fa fa-arrow-right"></span>
                                                </span>
                                            </button>
                                            <button type="button" class="btn btn-primary" data-method="move" data-option="0" data-second-option="-10" title="Move Up">
                                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="&quot;move&quot;, 0, -10">
                                                    <span class="fa fa-arrow-up"></span>
                                                </span>
                                            </button>
                                            <button type="button" class="btn btn-primary" data-method="move" data-option="0" data-second-option="10" title="Move Down">
                                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="&quot;move&quot;, 0, 10">
                                                    <span class="fa fa-arrow-down"></span>
                                                </span>
                                            </button>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary" data-method="rotate" data-option="-45" title="Rotate Left">
                                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="&quot;rotate&quot;, -45">
                                                    <span class="fa fa-undo"></span>
                                                </span>
                                            </button>
                                            <button type="button" class="btn btn-primary" data-method="rotate" data-option="45" title="Rotate Right">
                                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="&quot;rotate&quot;, 45">
                                                    <span class="fa fa-repeat"></span>
                                                </span>
                                            </button>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary" data-method="scaleX" data-option="-1" title="Flip Horizontal">
                                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="&quot;scaleX&quot;, -1">
                                                    <span class="fa fa-arrows-h"></span>
                                                </span>
                                            </button>
                                            <button type="button" class="btn btn-primary" data-method="scaleY" data-option="-1" title="Flip Vertical">
                                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="&quot;scaleY&quot;, -1">
                                                    <span class="fa fa-arrows-v"></span>
                                                </span>
                                            </button>
                                        </div>
                                        <!-- <div class="btn-group">
                                            <button type="button" class="btn btn-primary" data-method="crop" title="Crop">
                                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="&quot;crop&quot;">
                                                    <span class="fa fa-check"></span>
                                                </span>
                                            </button>
                                            <button type="button" class="btn btn-primary" data-method="clear" title="Clear">
                                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="&quot;clear&quot;">
                                                    <span class="fa fa-times"></span>
                                                </span>
                                            </button>
                                        </div> -->
                                        <!-- <div class="btn-group">
                                            <button type="button" class="btn btn-primary" data-method="disable" title="Disable">
                                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="&quot;disable&quot;">
                                                    <span class="fa fa-lock"></span>
                                                </span>
                                            </button>
                                            <button type="button" class="btn btn-primary" data-method="enable" title="Enable">
                                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="&quot;enable&quot;">
                                                    <span class="fa fa-unlock"></span>
                                                </span>
                                            </button>
                                        </div> -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary" data-method="reset" title="Reset">
                                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="&quot;reset&quot;">
                                                    <span class="fa fa-refresh"></span>
                                                </span>
                                            </button>
                                            <label class="btn btn-primary btn-upload" for="inputImage" title="Upload image file">
                                                <input type="file" class="sr-only" id="inputImage" name="file" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">
                                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="Import image with Blob URLs">
                                                    <span class="fa fa-upload"></span>
                                                </span>
                                            </label>
                                            <button type="button" class="btn btn-primary" data-method="destroy" title="Destroy">
                                                <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="&quot;destroy&quot;">
                                                    <span class="fa fa-power-off"></span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- /.docs-buttons -->
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <a class="btn btn-primary hide" id="download" href="javascript:void(0);" download="cropped.jpg">Download</a>
                            <button id="uploadNewBgBtn" class="btn btn-primary">Crop & Upload Image</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- uploadImageModal Modal Ends -->

            <!-- <div id="uploadimageModal" class="modal db-modal" role="dialog">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Upload & Crop Image</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div id="image_demo"></div>
                                </div>
                                <div class="col-md-12" style="text-align: center;">
                                    <button style="display: inline-block;" class="btn btn-success crop_image">Crop & Upload Image</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div id="cropimageModal" class="modal db-modal" role="dialog">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Crop Image</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div id="image_demo"></div>
                                </div>
                                <div class="col-md-12" style="text-align: center;">
                                    <button style="display: inline-block;" class="btn btn-success crop_image">Crop & Upload Image</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Popup label list -->
            <div id="labellist" class="modal db-modal" role="dialog">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Select which labels to be visible</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="label-list-wrap">
                                                    <!--Ashok: Added table 09-12-2019-->
                                                    <table id="tblenvlabel" cellspacing="30px" style="width: 100%;">
                                                    <tr>
                                                        <th>Show Prefix:</th>
                                                        <th>Show Bubble:</th>
                                                    </tr>
                                                    <tr>
                                                        <td style="width:50%"><input type="checkbox" name="lbllist" value="labels"> label<br></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="checkbox" name="lbllist" value="description"> description<br></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="checkbox" name="lbllist" value="prices"> price<br></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="checkbox" name="lbllist" value="tags"> tags<br></td>
                                                        <td></td>
                                                    </tr>
                                                    </table>														
                                    </div>
                                </div>
                                <div class="col-md-12" style="text-align: center;">
                                    <button style="display: inline-block;" class="btn btn-success list-display">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
							<!--Dashboard Prev label list -->
            <div id="prevlabellist" class="modal db-modal" role="dialog">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Select which labels to be visible</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="label-list-wrap">
														<!--Ashok: Added table 09-12-2019-->
                                                    <table id="tbldashlabel" cellspacing="30px" style="width: 100%;">
                                                        <tr>
                                                            <th>Show Prefix:</th>
                                                            <th>Show Bubble:</th>
                                                        </tr>
                                                        <tr>
                                                            <td style="width:50%"><input type="checkbox" name="lbllist" value="labels"> label<br></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="checkbox" name="lbllist" value="description"> description<br></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="checkbox" name="lbllist" value="prices"> price<br></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="checkbox" name="lbllist" value="tags"> tags<br></td>
                                                            <td></td>
                                                        </tr>
                                                    </table>
                                    </div>
                                </div>
                                <div class="col-md-12" style="text-align: center;">
                                    <button style="display: inline-block;" class="btn btn-success prev-list-display">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer -->
<footer class="footer text-right">
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <?php echo date('Y'); ?> © TAGPRINTING.
            </div>
            <div class="col-xs-6">
                <ul class="pull-right list-inline m-b-0">
                    <li>
                        <a href="index.html#">About</a>
                    </li>
                    <li>
                        <a href="index.html#">Help</a>
                    </li>
                    <li>
                        <a href="index.html#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->
</div>
<!-- end container -->
</div>
<?php require_once('inc/footer.php'); ?>

 <script type="text/javascript">
$(document).ready(function() {

	$(".prin-chk-all").click(function () {
		$("input[class='prin-chk']").not(this).prop('checked', this.checked);
	});
	$('[data-toggle="tooltip"]').tooltip();

	$('.bgcolor_picker').ColorPicker({
		color: '#0000ff',
		onShow: function (colpkr) {
			$(colpkr).fadeIn(500);
			return false;
		},
		onHide: function (colpkr) {
			$(colpkr).fadeOut(500);
			return false;
		},
		onChange: function (hsb, hex, rgb) {
			$('.bgcolor_picker div').css('backgroundColor', '#' + hex);
			$('input[name="bclor"]').val('#'+hex);
		}
	});

	$('.bgcolor_picker1').ColorPicker({
		color: '#0000ff',
		onShow: function (colpkr) {
			$(colpkr).fadeIn(500);
			return false;
		},
		onHide: function (colpkr) {
			$(colpkr).fadeOut(500);
			return false;
		},
		onChange: function (hsb, hex, rgb) {
			$('.bgcolor_picker1 div').css('backgroundColor', '#' + hex);
			$('input[name="tmpbclor"]').val('#'+hex);
		}
	});

	$('.otcolor_picker').ColorPicker({
		color: '#0000ff',
		onShow: function (colpkr) {
			$(colpkr).fadeIn(500);
			return false;
		},
		onHide: function (colpkr) {
			$(colpkr).fadeOut(500);
			return false;
		},
		onChange: function (hsb, hex, rgb) {
			$('.otcolor_picker div').css('backgroundColor', '#' + hex);
			$('input[name="ocolor"]').val('#'+hex);
		}
	});

	$('.otcolor_picker1').ColorPicker({
		color: '#0000ff',
		onShow: function (colpkr) {
			$(colpkr).fadeIn(500);
			return false;
		},
		onHide: function (colpkr) {
			$(colpkr).fadeOut(500);
			return false;
		},
		onChange: function (hsb, hex, rgb) {
			$('.otcolor_picker1 div').css('backgroundColor', '#' + hex);
			$('input[name="tmpocolor"]').val('#'+hex);
		}
	});


});
/* Style Element*/
$(document).ready(function() {
	
	/*Popu text element select */
	$( '.print-list-datamodal .modal-body .contain-div .data-area' ).on( 'click', 'div', function () {
        //console.log('here');
		$(this).parent().find('div').removeClass('selected');
		if ( $(this).hasClass('selected') ) {
			$(this).removeClass('selected');
        }
        else {
			$(this).addClass('selected');
        }
        var label_style = $(this).attr( 'style' );
        label_style=label_style+'; fontId: '+$(this).attr( 'fontId' )
		var arraylabels = label_style.split(";");
		
		$.each( arraylabels, function( index, value ) {  	
			//Key :value.split(": ")[0] , Value:value.split(": ")[1] 
			var font_color 		 = $.trim( value.split(": ")[0] );
			var font_size 		 = $.trim( value.split(": ")[0] );
			var font_family 	 = $.trim( value.split(": ")[0] );
			var opacity			 = $.trim( value.split(": ")[0] );
			var x_position		 = $.trim( value.split(": ")[0] );
			var y_position		 = $.trim( value.split(": ")[0] );
			var width		 	 = $.trim( value.split(": ")[0] );
			var height		 	 = $.trim( value.split(": ")[0] );
			var background_color = $.trim( value.split(": ")[0] );
			var font_Id          = $.trim( value.split(": ")[0] );
			//  Teg text Color
			if( font_color == 'color' ){
				var font_color_value = value.split(": ")[1];
				$( '.print-list-datamodal .modal-body .hor-ul .prin-color-one-div div' ).css( {'background-color': ''} );
				$( '.print-list-datamodal .modal-body .hor-ul .prin-color-one-div div' ).css( {'background-color': font_color_value} );
			}
			// Tag Font size
			if( font_size == 'font-size' ){
				var font_value = value.split(": ")[1].replace('px', '');
				$( '.print-list-datamodal .modal-body .hor-ul .print-prev-inc' ).val( font_value );
			}
			
			// Tag Font family
			if( font_family == 'font-family' ){                
                var font_family_value = value.split(": ")[1];                
				//$( '.print-list-datamodal .modal-body .hor-ul .print-prev-select' ).val( font_value );
				$( '.print-list-datamodal .modal-body .hor-ul select.print-prev-select' ).val( font_family_value );
			}
            
            if( font_Id == 'fontId' ){                
                var fontVal = value.split(": ")[1];
                //$('#efonts option[value="' + fontVal +'"]').prop("selected", true);
                //$( '.print-list-datamodal .modal-body .hor-ul select.print-prev-select' ).val( fontVal );
                $('#efonts').val(fontVal);
            }
            
			//Tah Transparancy myRange
			if( opacity == 'opacity' ){
				var opacity_value = value.split(": ")[1];
				$( '.print-list-datamodal .modal-body #myRange' ).val( opacity_value );
			}
			
			//x position left
			if( x_position == 'left' ){
				var x_position_value = value.split(": ")[1].replace('px', '');
				$( '.print-list-datamodal .modal-body input[name="enlg[xpos]"]' ).val( x_position_value );				
			}
			
			//y position top
			if( y_position == 'top' ){
				var y_position_value = value.split(": ")[1].replace('px', '');
				$( '.print-list-datamodal .modal-body input[name="enlg[ypos]"]' ).val( y_position_value );				
			}
			
			//width
			if( width == 'width' ){
				var width_value = value.split(": ")[1].replace('px', '');
				$( '.print-list-datamodal .modal-body input[name="enlg[width]"]' ).val( width_value );				
			}
			
			//height
			if( height == 'height' ){
				var height_value = value.split(": ")[1].replace('px', '');
				$( '.print-list-datamodal .modal-body input[name="enlg[hei]"]' ).val( height_value );				
			}
			
			// Tag Background color
			if( background_color == 'background-color' ){
				var background_value = value.split(": ")[1].replace('px', '');
				$( '.print-list-datamodal .modal-body .tggcolor_picker div' ).css( {'background-color': ''} );
				$( '.print-list-datamodal .modal-body .tggcolor_picker div' ).css( {'background-color': background_value} );
			}
		});					
	});
		
	$('#tbl-label_filter').insertAfter('.past-search-itm');

	$current_elem="";

	var __dx;
	var __dy;
	var __scale=0.5;
	var __recoupLeft, __recoupTop;
	
	$(".resizable").resizable({
		containment: '.contain-div-prev'
	}).draggable({
		containment: '.contain-div-prev',
		zIndex: 100,
		drag: function (event, ui) {

			__dx = ui.position.left - ui.originalPosition.left;
			__dy = ui.position.top - ui.originalPosition.top;
			ui.position.left = ui.originalPosition.left + (__dx);
			ui.position.top = ui.originalPosition.top + (__dy);

			ui.position.left += __recoupLeft;
			ui.position.top += __recoupTop;
		},
		start: function (event, ui) {
			$(this).css('cursor', 'pointer');

			var left = parseInt($(this).css('left'), 10);
			left = isNaN(left) ? 0 : left;
			var top = parseInt($(this).css('top'), 10);
			top = isNaN(top) ? 0 : top;
			__recoupLeft = left - ui.position.left;
			__recoupTop = top - ui.position.top;

			$(this).addClass('add-bdr').siblings().removeClass('add-bdr');
			$current_elem=$(this);
		},
		stop: function() {
			$(this).removeClass('add-bdr').siblings().removeClass('add-bdr');
			$current_elem=$(this);
		}
	});

	// $( ".resizable" ).resizable({
	//   containment: "parent"
	// }).draggable({
	//     containment: "parent",
	//     start: function() {
	//         $(this).addClass('add-bdr').siblings().removeClass('add-bdr');
	//         $current_elem=$(this);
	//     },
	//     stop: function() {
	//         $(this).removeClass('add-bdr').siblings().removeClass('add-bdr');
	//         $current_elem=$(this);
	//     }
	// });

	// $('.chld').click(function(event) {
	//    $(this).addClass('resizable ui-state-active');
	//    $current_elem=$(this);
	// });
	
	$( '.print-prev-inc:input[type=number]' ).bind( 'keyup mouseup', function () {
		if ( $( '.print-list-datamodal .modal-body .contain-div .data-area div' ).hasClass( 'selected' ) ) {
			$( '.print-list-datamodal .modal-body .contain-div .data-area div.selected' ).css( {'font-size': ''} );
			$( '.print-list-datamodal .modal-body .contain-div .data-area div.selected' ).css( {'font-size': $( this ).val() + 'px'} );
		}else{
			alert( 'Select Element' );
		}        
	});
	
	/*prev-label*/
	$( '.prev-label' ).click( function( event ) {
		$( '#labellist' ).modal( 'show' );		
	});
	
	/* dasbord prev label list*/
	$( '.add_prev_lable_list' ).click( function( event ) {
		$( '#prevlabellist' ).modal( 'show' );		
	});
	
	
	$( '.prev-list-display' ).click( function( event ) {		
		var label_array = [];
		var unchk_label_array = [];
		
		$( '#prevlabellist .label-list-wrap input:checkbox[name=lbllist]:checked' ).each( function(){
			label_array.push( $( this ).val() );
		});
		var label_value = label_array.join( ',' );		
		var labelArr = label_value.split(',');
		
		$.each( labelArr, function( index, value ) { 					
			$( '.contain-div-prev .data-area .'+value.split(", ")[0] ).css( {'display': 'block'} );
        });
        //console.log(label_value);
		//console.log(labelArr);
		/*Unselected check box*/		
		$( '#prevlabellist .label-list-wrap input:checkbox[name=lbllist]:not(:checked)' ).each( function(){
			unchk_label_array.push( $( this ).val() );
		});
		var unchk_label_value = unchk_label_array.join( ',' );		
		var unchk_labelArr = unchk_label_value.split(',');
		
		$.each( unchk_labelArr, function( index, value ) { 		
        //Ashok: Added Trycatch to handle error 10/12/2019
        try {
            $( '.contain-div-prev .data-area .'+value.split(", ")[0] ).css( {'display': 'none'} );
        } catch (error) {
            //console.log(error);
        }	
		});
		
		setData( labelArr , 'check');
		//setData( unchk_labelArr, 'uncheck' );
		
		$( '#prevlabellist' ).modal( 'hide' );
		
	});
	
	$( '.list-display' ).click( function( event ) {
		
		var label_array = [];
		var unchk_label_array = [];
		
		//labellist
		$( '#labellist .label-list-wrap input:checkbox[name=lbllist]:checked' ).each( function(){
			label_array.push( $( this ).val() );
		});
		var label_value = label_array.join( ',' );		
		var labelArr = label_value.split(',');
		
		$.each( labelArr, function( index, value ) { 			
			$( '.print-list-datamodal .modal-body .contain-div .data-area .'+value.split(", ")[0] ).css( {'display': 'block'} );
		});
		
		/*Unselected check box*/		
		$( '#labellist .label-list-wrap input:checkbox[name=lbllist]:not(:checked)' ).each( function(){
			unchk_label_array.push( $( this ).val() );
		});
		var unchk_label_value = unchk_label_array.join( ',' );
		var unchk_labelArr = unchk_label_value.split(',');
		
		$.each( unchk_labelArr, function( index, value ) { 				
			$( '.print-list-datamodal .modal-body .contain-div .data-area .'+value.split(", ")[0] ).css( {'display': 'none'} );
		});
		
		$( '#labellist' ).modal( 'hide' );
	});
	
	
	$( '.prev-ali-lft' ).click( function( event ) {
		if ( $( '.print-list-datamodal .modal-body .contain-div .data-area div' ).hasClass( 'selected' ) ) {
			$( '.print-list-datamodal .modal-body .contain-div .data-area div.selected' ).css( {'text-align': ''} );
			$( '.print-list-datamodal .modal-body .contain-div .data-area div.selected' ).css( {'text-align': 'left'} );
		}else{
			alert( 'Select Element' );
		}
	});
	$( '.prev-ali-cen' ).click( function( event ) {
		if ( $( '.print-list-datamodal .modal-body .contain-div .data-area div' ).hasClass( 'selected' ) ) {
			$( '.print-list-datamodal .modal-body .contain-div .data-area div.selected' ).css( {'text-align': ''} );
			$( '.print-list-datamodal .modal-body .contain-div .data-area div.selected' ).css( {'text-align': 'center'} );
		}else{
			alert( 'Select Element' );
		}
	});
	$( '.prev-ali-just' ).click(function( event ) {
	   if ( $( '.print-list-datamodal .modal-body .contain-div .data-area div' ).hasClass( 'selected' ) ) {
			$( '.print-list-datamodal .modal-body .contain-div .data-area div.selected' ).css( {'text-align': ''} );
			$( '.print-list-datamodal .modal-body .contain-div .data-area div.selected' ).css( {'text-align': 'justify'} );
		}else{
			alert( 'Select Element' );
		}
	});
	$( '.prev-ali-rgt' ).click( function( event ) {
		if ( $( '.print-list-datamodal .modal-body .contain-div .data-area div' ).hasClass( 'selected' ) ) {
			$( '.print-list-datamodal .modal-body .contain-div .data-area div.selected' ).css( {'text-align': ''} );
			$( '.print-list-datamodal .modal-body .contain-div .data-area div.selected' ).css( {'text-align': 'right'} );
		}else{
			alert( 'Select Element' );
		}
	});
	
	/*Select Font Family*/
	$( '.print-prev-select' ).change( function () {
		if ( $( '.print-list-datamodal .modal-body .contain-div .data-area div' ).hasClass( 'selected' ) ) {
			$( '.print-list-datamodal .modal-body .contain-div .data-area div.selected' ).css( {'font-family': '','fontId':0} );
            var font_name = "";
            var fontId=0;
			$( '.print-prev-select option:selected' ).each( function () {
                font_name = $(this).text();
                fontId=$(this).val();
                //console.log(fontId);
				if ( font_name != 'Select Font' ){
                    $( '.print-list-datamodal .modal-body .contain-div .data-area div.selected' ).css( {'font-family': font_name,'fontId': fontId} );
                    $( '.print-list-datamodal .modal-body .contain-div .data-area div.selected' ).attr("fontId",fontId)
				}
			});
		}else{
			alert( "Select Element" );
		}
	});

	$( '.print-prev-incsiz' ).click( function () {
		if ( $( '.print-list-datamodal .modal-body .contain-div .data-area div' ).hasClass( 'selected' ) ) {
			var font_size = parseInt( $( '.print-list-datamodal .modal-body .contain-div .data-area div.selected' ).css('font-size'));
			font_size+=1;
			$( '.print-list-datamodal .modal-body .contain-div .data-area div.selected' ).css( {'font-size': font_size} );
		}else{
			alert( "Select Element" );
		}               
	});

	$( '.print-prev-decsiz' ).click( function () {
		if ( $( '.print-list-datamodal .modal-body .contain-div .data-area div' ).hasClass( 'selected' ) ) {
			var font_size = parseInt( $( '.print-list-datamodal .modal-body .contain-div .data-area div.selected' ).css('font-size'));
			font_size-=1;
			$( '.print-list-datamodal .modal-body .contain-div .data-area div.selected' ).css( {'font-size': font_size} );
		}else{
			alert( "Select Element" );
		}               
	});

	$( '.prin-color-one-div' ).ColorPicker({
		color: '#000000',
		onShow: function (colpkr) {
			
			if ( $( '.print-list-datamodal .modal-body .contain-div .data-area div' ).hasClass( 'selected' ) ) {
				$(colpkr).fadeIn(500);
			}else{
				alert( "Select Element" );
				return false;
			}
			return false;
		},
		onHide: function (colpkr) {
			$(colpkr).fadeOut(500);
			return false;
		},
		onChange: function (hsb, hex, rgb) {
			$( '.prin-color-one-div div' ).css( 'backgroundColor', '#' + hex );
			$( '.print-list-datamodal .modal-body .contain-div .data-area div.selected' ).css( {'color': '#' + hex} );
		}
	});
	
	$( '.prin-color-one-bkg' ).ColorPicker({
		color: '#ffffff',
		onShow: function (colpkr) {
			if ( $( '.print-list-datamodal .modal-body .contain-div .img-div img' ).attr('src') == '') {			
				$('#colorSelector.prin-color-one-bkg').show();
				$(colpkr).fadeIn(500);
			}else{
				var fileName, fileExtension;
                fileName = $( '.print-list-datamodal .modal-body .contain-div .img-div img' ).attr('src');
                try {
                    fileExtension = fileName.replace(/^.*\./, '');
                } catch (error) {
                    
                }
				
				
				$('#colorSelector.prin-color-one-bkg').show();
				$(colpkr).fadeIn(500);
				
				/*if( fileExtension == 'upload_images/items/' ){
					$('#colorSelector.prin-color-one-bkg').show();
					$(colpkr).fadeIn(500);
				}else{
					alert("Image Are Present!!!");
				}*/
				return false;
			}
			return false;
		},
		onHide: function ( colpkr ) {
			$( colpkr ).fadeOut(500);
			return false;
		},
		onChange: function ( hsb, hex, rgb ) {
			$( '.prin-color-one-bkg div' ).css( 'backgroundColor', '#' + hex );
			$( '.print-list-datamodal .modal-body .contain-div' ).css( {'background-color': '#' + hex} );
		}
	});
	
	/*Tag color picker*/
	$( '.tggcolor_picker' ).ColorPicker({
		color: '#0000ff',
		onShow: function (colpkr) {
			if ( $( '.print-list-datamodal .modal-body .contain-div .data-area div' ).hasClass( 'selected' ) ) {
				$(colpkr).fadeIn(500);
				
			}else{
					alert( "Select Element" );
					return false;
				}
		},
		onHide: function (colpkr) {
			$(colpkr).fadeOut(500);
			return false;
		},
		onChange: function (hsb, hex, rgb) {
			$( '.tggcolor_picker div' ).css( 'backgroundColor', '#' + hex );
			$( '.print-list-datamodal .modal-body .contain-div .data-area div.selected' ).css( {'background-color': '#' + hex + '!important'} );					
		}
	});
			
	/*Element transparancy*/
	$("[type=range]").change(function(){
		if ( $( '.print-list-datamodal .modal-body .contain-div .data-area div' ).hasClass( 'selected' ) ) {
			$( '.print-list-datamodal .modal-body .contain-div .data-area div.selected' ).css( {'opacity': ''} );
			$( '.print-list-datamodal .modal-body .contain-div .data-area div.selected' ).css( {'opacity': $(this).val()} );
		}else{
			alert( "Select Element" );
			$(this).val(0);
		}				
	});
	
	/*Image Div background-color and border*/
	$('.bdrrcolor_picker').ColorPicker({
		color: '#ffffff',
		onShow: function ( colpkr ) {					
			$(colpkr).fadeIn(500);					
			return false;
		},
		onHide: function (colpkr) {
			$(colpkr).fadeOut(500);
			return false;
		},
		onChange: function (hsb, hex, rgb) {
			$( '.bdrrcolor_picker div' ).css( 'backgroundColor', '#' + hex );
			
			$( '.print-list-datamodal .modal-body .contain-div' ).css( {'border-color': ''} );			
			$( '.print-list-datamodal .modal-body .contain-div' ).css( {'border-color': '#' + hex} );
			$( '.print-list-datamodal .modal-body .contain-div' ).attr ('data-color', '#' + hex );			
		}
	});
	
	$(".print-prev-bordersi:input[type=number]").bind('keyup mouseup', function () {
		var bordercolor = $( '.print-list-datamodal .modal-body .contain-div' ).attr ('data-color');		
		//$( '.print-list-datamodal .modal-body .contain-div' ).css( {'border': ''} );
		$( '.print-list-datamodal .modal-body .contain-div' ).css( {'border-width': $( this ).val() + 'px' } );
		//$( '.print-list-datamodal .modal-body .contain-div' ).css( {'border-width': $( this ).val() + 'px solid' + bordercolor} );
	});	
	
	$('.save-style').click(async function(){
		var tblitem_id =  $('.print-list-datamodal .modal-content .modal-body').attr('data-item-id');
		var tbltemp_id =  $('.print-list-datamodal .modal-content .modal-body').attr('data-templ-id');
		
		var tblprint_id =  $('.print-list-datamodal .modal-content .modal-body').attr('data-tblprint-id');
		
		var labels_text 	 = $( '.print-list-datamodal .modal-body .contain-div .data-area div.labels' ).text();
		var description_text = $( '.print-list-datamodal .modal-body .contain-div .data-area div.description' ).text();
		var prices_text		 = $( '.print-list-datamodal .modal-body .contain-div .data-area div.prices ' ).text();
		var tags_text		 = $( '.print-list-datamodal .modal-body .contain-div .data-area div.tags ' ).text();
		
		var labels_value      = $( '.print-list-datamodal .modal-body .contain-div .data-area div.labels' ).attr( 'style' );
		var description_value = $( '.print-list-datamodal .modal-body .contain-div .data-area div.description' ).attr( 'style' );
		var prices_value      = $( '.print-list-datamodal .modal-body .contain-div .data-area div.prices' ).attr( 'style' );
		var tags_value        = $( '.print-list-datamodal .modal-body .contain-div .data-area div.tags' ).attr( 'style' );
		
		var imgdiv  		  = $( '.print-list-datamodal .modal-body .contain-div' ).attr( 'style' );
        var lbl_fontId ='fontId: '+$( '.print-list-datamodal .modal-body .contain-div .data-area div.labels' ).attr('fontId');
        labels_value =labels_value+'; '+lbl_fontId;
        //alert($('#efonts').find('option[text="ABeeZee"]').val());
        
		/* Get Background Image name*/
		//var backgroung_img_upload = $( '.print-list-datamodal .modal-body .contain-div .img-div' ).attr('src');
		var img_res = JSON.parse( localStorage.getItem( 'Premium' ) );		
		if(img_res != null){
			var img_background_name = img_res.image_name;
		}else {
			img_background_name = $( '.print-list-datamodal .modal-body .contain-div .img-div img').attr('data-img-name');
			//img_background_name = '';
		}		
		/* Label select */
		var label_array = [];
		var label_list = '';
		$( '#labellist .label-list-wrap input:checkbox[name=lbllist]:checked' ).each( function(){
			label_array.push( $( this ).val() );
		});
		label_list = label_array.join( ',' );
	//Hitesh	
        let node = document.getElementById('printDivPopup');
        // let node = document.getElementById('divToImg');
// Hitesh save cropeed image
        // await domtoimage.toJpeg(node, { quality: 1 })
        // await domtoimage.toPng(node)
        await html2canvas(node)
            .then(function (canvas) {
                let dataUrl = canvas.toDataURL();
                let imgData = {
                    dataUrl,
                    currId
                }
                // $('#imgPreview').attr('src', dataUrl);
                $.ajax({
                    url: "dataurl2png.php",
                    type: "POST",
                    data: imgData,
                    success: function(dataResponse) {
                    }
                });
            })
            .catch(function (error) {
                console.error('oops, something went wrong!', error);
            });
        // Hitesh save cropeed image ends
//Get Font ID
        //console.log(labels_value);
        
        // await domtoimage.toBlob(document.getElementById('printDivPopup'))
        //     .then(function (blob) {
        //         let imgData = {
        //             blob,
        //             currId
        //         }
        //         blobToDataURL(blob, function(dataurl){
        //             $('#imgPreview').attr('src', dataurl);
        //         });
        //         // $.ajax({
        //         //     url: "blob2png.php",
        //         //     type: "POST",
        //         //     data: imgData,
        //         //     contentType: false,
        //         //     processData: false,
        //         //     success: function(dataResponse) {
        //         //     }
        //         // });
        //         // window.saveAs(blob, 'my-node.png');
        //     });
        /*AShok: 15-12-2019 No validation required in save style
		if( labels_text == '' ){
			errorAlert('Label is Required !');
            return false;
        }else if( description_text == '' ){
			errorAlert('Description is Required !');
			return false;
        }else if( prices_text == '' ){
			errorAlert('Price is Required !');
			return false;
        }else if( tags_text == '' ){
			errorAlert('Tag is Required !');
			return false;
        }else*/
        {
			
			$.ajax({
                url: "lib/functions.php?action=editstyleitem",
                type: "POST",            
                data:$(this).serialize()+'&tblprint-id='+tblprint_id+'&tblitem-id='+tblitem_id+'&tbltemp-id='+tbltemp_id+'&labels-text='+labels_text+'&labels-value='+labels_value+'&description-text='+description_text+'&description-value='+description_value+'&prices-text='+prices_text+'&prices-value='+prices_value+'&tags-text='+tags_text+'&tags-value='+tags_value+'&imgdiv='+imgdiv+'&label-list='+label_list+'&img-name='+img_background_name,
				success: function(data)   
				{
					if( data == 1){
						//alert('Save Style successfully...');
						$( '#print-list-datamodal' ).modal( 'hide' );
						//location.reload();
					}
				}
            });
			
			$.ajax({
                url: "lib/functions.php?action=edittblprintqueue",
                type: "POST",            
                data:$(this).serialize()+'&tblprint-id='+tblprint_id+'&labels-text='+labels_text+'&labels-value='+labels_value+'&description-text='+description_text+'&description-value='+description_value+'&prices-text='+prices_text+'&prices-value='+prices_value+'&tags-text='+tags_text+'&tags-value='+tags_value+'&imgdiv='+imgdiv+'&label-list='+label_list+'&img-name='+img_background_name,
				success: function(data)   
				{
					if( data == 1){
						//alert('Save Style successfully...');
						$( '#print-list-datamodal' ).modal( 'hide' );
						//location.reload();
					}
				}
            });
			return false;
		}
		//console.log( "ID => "+tblprint_id +"labels" +labels_value + 'description => '+description_value +'prices => '+prices_value+'tags => '+tags_value);
	});
	//Ashok: TODO 
	$('.default-item-save').click(function(){
		var tblprint_id =  $('.print-list-datamodal .modal-content .modal-body').attr('data-tblprint-id');
		
		var labels_text 	 = $( '.print-list-datamodal .modal-body .contain-div .data-area div.labels' ).text();
		var description_text = $( '.print-list-datamodal .modal-body .contain-div .data-area div.description' ).text();
		var prices_text		 = $( '.print-list-datamodal .modal-body .contain-div .data-area div.prices ' ).text();
		var tags_text		 = $( '.print-list-datamodal .modal-body .contain-div .data-area div.tags ' ).text();
		
		var labels_value      = $( '.print-list-datamodal .modal-body .contain-div .data-area div.labels' ).attr( 'style' );
		var description_value = $( '.print-list-datamodal .modal-body .contain-div .data-area div.description' ).attr( 'style' );
		var prices_value      = $( '.print-list-datamodal .modal-body .contain-div .data-area div.prices' ).attr( 'style' );
		var tags_value        = $( '.print-list-datamodal .modal-body .contain-div .data-area div.tags' ).attr( 'style' );
		
		var imgdiv  		  = $( '.print-list-datamodal .modal-body .contain-div' ).attr( 'style' );
		
		$.ajax({
			url: "lib/functions.php?action=defaulttblprintqueue",
			type: "POST",            
			data:$(this).serialize()+'&tblprint-id='+tblprint_id+'&labels-text='+labels_text+'&labels-value='+labels_value+'&description-text='+description_text+'&description-value='+description_value+'&prices-text='+prices_text+'&prices-value='+prices_value+'&tags-text='+tags_text+'&tags-value='+tags_value+'&imgdiv='+imgdiv,
			success: function(data) {
				//console.log(data);
				if( data == 1){
					alert('Save as default Style successfully...');
				}
			}
		});
		return false;
	});	
});
//Hitesh var
var newUploadedImg, $imageNew;

/*Image Croop*/
$(document).ready(function(){
	$elem_prev="";
	$elem_parent="";

	$image_crop = $('#image_demo').croppie({
		enableExif: true,
		viewport: {
			width:543,
			height:357,
			type:'square'
		},
		boundary:{
			width:543,
			height:357
		}
	});

    $('.upload_image').on('change', function() {
        var reader = new FileReader();
        reader.onload = function(event) {
            // Hitesh manage img src
            newUploadedImg = event.target.result;
            $('#uploadimageModal').modal('show');
            // Hitesh manage img src ends
        }
        reader.readAsDataURL(this.files[0]);
        //$elem_prev=$(this).parents('.print-list-datamodal-preview').find('.img-div-prev > img');
        //$elem_parent=$(this).parents('.print-list-datamodal-preview').prev().find('.img-div > img');

		$elem_prev=$(this).parents('.prev-col .prev-parent .contain-div-prev').find('.img-div-prev > img');
		$elem_parent=$(this).parents('.prev-col .prev-parent .contain-div-prev').prev().find('.img-div > img');

//Hitesh commented
        // $('#uploadimageModal').modal('show');
    });

	$('.crop_image').click(function(event){
		$image_crop.croppie('result', {
			type: 'canvas',
			size: 'viewport'
		}).then(function(response){
			$.ajax({
				url:"../lib/upload.php",
				type: "POST",
				data:{"image": response},
				success:function(data){
					$( '#uploadimageModal' ).modal( 'hide' );
					$('.prev-col .prev-parent .contain-div-prev .img-div-prev > img').attr( 'src', '../upload_images/items/'+data );
					$('.prev-col .prev-parent .contain-div-prev .img-div > img').attr( 'src', '../upload_images/items/'+data);
					setData( data, 'image' );
				}
			});
		})
	});

    /*Popup Image upload */
    $('.background_image').on('change', function() {
        var reader = new FileReader();
        reader.onload = function(event) {
            // var url_path = event.target.result;
            // Hitesh manage img src
            newUploadedImg = event.target.result;
            $('#print-list-datamodal').modal('hide');
            isShowEnlarge = 1;
            $('#uploadimageModal').modal('show');
            // $.ajax({
            //     type: 'POST',
            //     url: '../lib/upload.php',
            //     data: { "image": url_path },
            //     success: function(response) {
            //         $('.print-list-datamodal .modal-dialog .modal-body .contain-div .img-div > img').attr('src', '../upload_images/items/' + response);
            //         setData(response, 'image');
            //     }
            // });
        };
        reader.readAsDataURL(this.files[0]);

        /*var reader = new FileReader();
        reader.onload = function ( event ) {
            $image_crop.croppie( 'bind', {
                url_data: event.target.result,
            }).then( function(){
                var url_path = event.target.result;
                $.ajax({
                    url:"../lib/upload.php",
                    type: "POST",
                    data:{"image": url_path},
                    success:function( data ){
                        $( '.print-list-datamodal .modal-dialog .modal-body .contain-div .img-div > img' ).attr( 'src', '../upload_images/items/' + data );
                        setData( data );
                    }
                });
            });
        }
        reader.readAsDataURL(this.files[0]);*/

	});

    /*Popup background crop image*/
    //Hitesh commented
    // $('.crop_btn').click(function(event) {
    //     $('#cropbox').Jcrop({
    //         // aspectRatio: 1,
    //         onSelect: function(c) {
    //             size = { x: c.x, y: c.y, w: c.w, h: c.h };
    //             var img = $("#cropbox").attr('src');

    //             $("#cropbox").show();
    //             $("#cropbox").css({
    //                 'visibility': 'visible',
    //                 'width': '100%',
    //                 'height': 'auto'
    //             });
    //             $("#cropbox").attr('src', 'image-crop.php?x=' + size.x + '&y=' + size.y + '&w=' + size.w + '&h=' + size.h + '&img=' + img);

    //             setTimeout(function() {
    //                 $("#cropbox").attr('src', '');
    //                 $("#cropbox").attr('src', 'upload_images/items/cropimage.jpg');
    //                 setData('cropimage.jpg', 'image');
    //             }, 100);

    //             $('.jcrop-holder').remove();
    //         }
    //     });
    // });

    /*Dashboard background crop image/
    $('.prev_crop_btn').click(function(event) {
        $('#prev_cropbox').Jcrop({
            // aspectRatio: 1,
            onSelect: function(c) {
                size = { x: c.x, y: c.y, w: c.w, h: c.h };
                var img = $("#prev_cropbox").attr('src');

                $("#prev_cropbox").show();
                $("#prev_cropbox").css({
                    'visibility': 'visible',
                    'width': '100%',
                    'height': 'auto'
                });
                $("#prev_cropbox").attr('src', 'image-crop.php?x=' + size.x + '&y=' + size.y + '&w=' + size.w + '&h=' + size.h + '&img=' + img);

                setTimeout(function() {
                    $("#prev_cropbox").attr('src', '');
                    $("#prev_cropbox").attr('src', 'upload_images/items/cropimage.jpg');
                    setData('cropimage.jpg', 'image');
                }, 100);
                $('.jcrop-holder').remove();
            }
        });
    });*/

    /*Minimize button click */
    $('.print-prev-min').click(function() {
        $('.save-style').trigger('click');
        $('#print-list-datamodal').modal('hide');
    });

    /* Tag close to hide tag*/
    $(document).on("click", ".tag-closed", function(e) {
        var tag_hide = $(this).attr('data-label');
        $('.print-list-datamodal .contain-div .data-area div.' + tag_hide).css({ 'display': 'none' });
        $('#labellist .label-list-wrap input:checkbox[value=' + tag_hide + ']').prop('checked', '');
    });

});

</script>

<script type="text/javascript">
	<?php
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$rowArr="";
	$sql="SELECT categoriesproperties.label FROM categoriesproperties INNER JOIN categories ON categories.id=categoriesproperties.category_id
    INNER JOIN collections ON collections.id = categories.collection_id AND collections.user_id=".$_SESSION['main']['id']." ORDER BY categoriesproperties.id ASC LIMIT 10;";
	$qry=mysqli_query($getRes,$sql);
	while($row = mysqli_fetch_assoc($qry)) {

		$rowArr.='
			{ "data": "'.$row['label'].'" },'
		;

	}

	$origArr=rtrim($rowArr, ",");

?>

	var table =$('#tbl-label').DataTable({
		"scrollY": "35vh",
		"columnDefs": [
			{ "targets": [0, 1, 2, 3, 4, 5], visible: true},
			{ "targets": '_all', visible: false }
		],
		paging: false,
		"ajax": "../lib/functions.php?action=getItmData",
		"columns": [
			{ "data": "id","width": "2%" },
			{ "data": "label" },
			{ "data": "description" },
			{ "data": "price" },
			{ "data": "catagory" },
			{ "data": "action" },
			{ "data": "default_temp" },
			{ "data": "default_image" },<?php echo $origArr; ?>
        ]       
	});

	/*Custome Store value*/
	function setData( data, type ) {
		//debugger
		$this = jQuery( data );
		
		if( type == 'image' ){
			var img_name = data;
		}
		if( type == 'check' ){ 
			var checked_label = data;			
		}
		var premiumObj = {
			text: $this.next().text(),			
			image_name: img_name,
			checked_label: checked_label,			
		}		
		
		if(localStorage.getItem( "Premium") == null) {
			localStorage.setItem( "Premium", JSON.stringify( premiumObj ) );
		}else{
			var premiumLocalObj  = JSON.parse(localStorage.getItem( "Premium"));
			if( type == 'image' ){
				premiumLocalObj.img_name = data;
			}		
			else if( type == 'check' ){ 
				premiumLocalObj.checked_label = data;
			}
			localStorage.setItem( "Premium", JSON.stringify( premiumLocalObj ) );
		}		
	}
// Hitesh manage new image upload
$("#uploadimageModal").on("shown.bs.modal", function() {
    // let new_image = $('#prev_cropbox').attr('src');

    // let cropWidthPX = cropWidth * 96;
    // let cropHeightPX = cropHeight * 96;
    $imageNew = $('#imageNew');
    $imageNew.cropper('destroy').cropper({
        viewMode: 1,
        dragMode: 'move',
        toggleDragModeOnDblclick: false,
        autoCropArea: 0,
        highlight: true,
        cropBoxResizable: false,
        ready: function() {
            checkImageNew();
            /* if(getCropedDataUpdate) {
                $imageNew.cropper("setData", getCropedDataUpdate);
            } else {
                $imageNew.cropper("setCropBoxData", { width: cropWidth, height: cropHeight });
            } */
            // $imageNew.cropper("setCropBoxData", { width: cropWidthPX, height: cropHeightPX });
        }
    }).cropper('replace', newUploadedImg);
});
function checkImageNew() {
    if(getCropedDataUpdate) {
        $imageNew.cropper('setData', getCropedDataUpdate);
        $imageNew.cropper("setCropBoxData", { width: cropWidth, height: cropHeight });
    } else {
        $imageNew.cropper("setCropBoxData", { width: cropWidth, height: cropHeight });
    }
}
$("#uploadimageModal").on("hide.bs.modal", function() {
    if(isShowEnlarge) {
        $('.go-enlarge').trigger('click');
        isShowEnlarge = 0;
    }
});
$('#uploadNewBgBtn').on('click', function() {

    let crpoedImage = $imageNew.cropper('getCroppedCanvas').toDataURL();

    $('#prev_cropbox').attr('src', crpoedImage);

    getCropedDataUpdate = $imageNew.cropper("getData");

    $.ajax({
        type: 'POST',
        url: 'lib/upload-new.php',
        data: { "image": newUploadedImg },
        success: function(response) {
            let reqObj = {
                img_path: response,
                item_id: itemIdUpload,
                prev_id: prevIdUpload,
                img_rect: JSON.stringify(getCropedDataUpdate)
            }
            $.ajax({
                type: 'POST',
                url: 'lib/upload-new-crop.php',
                data: { "image": crpoedImage,"prevId":prevIdUpload },
                success: function(response2) {
                    reqObj['img_crop'] = response2;
                    $.post("lib/functions.php?action=imageCropUpdate", reqObj, function(data){
                        $('#uploadimageModal').modal('hide');
                        if(isShowEnlarge) {
                            $('.go-enlarge').trigger('click');
                            isShowEnlarge = 0;
                        }
                    });
                }
            });
            $.post("lib/functions.php?action=imageUpdate", reqObj, function(data){

            });
            currImg = 'upload_images/items/'+response;
        }
    });
});
// Hitesh manage new image upload ends
// Hitesh manage current image crop
$("#manageBgImageModal").on("shown.bs.modal", function() {
    //console.log("currImg", currImg);
    $('#print-list-datamodal').modal('hide');
    // let cropWidthPX = cropWidth * 96;
    // let cropHeightPX = cropHeight * 96;
    //Ashok: Added
    var crimg=$('#prev_cropbox').attr('src');
    $("#image").attr("src", crimg);

    $image.cropper('destroy').cropper({
        viewMode: 0,
        dragMode: 'move',
        toggleDragModeOnDblclick: false,
        autoCrop: true,
        // autoCropArea: 0,
        highlight: true,
        cropBoxResizable: false,
        minContainerWidth: cropWidth + 100,
        minContainerHeight: cropHeight + 100,
        minCanvasWidth: cropWidth,
        minCanvasHeight: cropHeight,
        ready: function() {
            // if(getCropedDataUpdate) {
            //     $image.cropper("setData", getCropedDataUpdate);
            // } else {
            //     $image.cropper("setCropBoxData", { width: cropWidthPX, height: cropHeightPX });
            // }
            checkImage();
        }
    }).cropper('replace', currImg);
    // $image;
    // setTimeout(checkImage, 1000);
});

function checkImage() {
    // $image.cropper("setCropBoxData", { left: 50, top: 100, width: 400, height: 800 });
    // $image.cropper("setCropBoxData", 50, 100, 400, 800);
    if(getCropedDataUpdate) {
        //console.log("ifff");
        // getCropedDataUpdate.width = cropWidth;
        // getCropedDataUpdate.height = cropHeight;
        //console.log("221111getCropedDataUpdate", getCropedDataUpdate);
        $image.cropper('setData', getCropedDataUpdate);
        $image.cropper("setCropBoxData", { width: cropWidth, height: cropHeight });
        // $image.move(getCropedDataUpdate.x, getCropedDataUpdate.y);
        // $image.cropper("setData", getCropedDataUpdate);
    } else {
        console.log("elseeee");        
        $image.cropper("setCropBoxData", { width: cropWidth, height: cropHeight });
    }
}

$("#manageBgImageModal").on("hide.bs.modal", function() {
    if(isShowEnlarge) {
        $('.go-enlarge').trigger('click');
        isShowEnlarge = 0;
    }
});

$('#updateBgBtn').on('click', function() {

    let crpoedImage = $image.cropper('getCroppedCanvas').toDataURL();
    getCropedDataUpdate = $image.cropper("getData");
    
    $.ajax({
        type: 'POST',
        url: 'lib/upload-new-crop.php',
        data: { "image": crpoedImage,"prevId":prevIdUpload },
        success: function(response) {
            let reqObj = {
                img_crop: response,
                prev_id: prevIdUpload,
                img_rect: JSON.stringify(getCropedDataUpdate)
            }
            $.post("lib/functions.php?action=imageCropUpdate", reqObj, function(data){
                $('#manageBgImageModal').modal('hide');
                if(isShowEnlarge) {
                    $('.go-enlarge').trigger('click');
                    isShowEnlarge = 0;
                }
            });
            // currImg = 'upload_images/items/'+response;
        }
    });

    $('#prev_cropbox').attr('src', crpoedImage);
});

$('#spanManageBgImageModal2').on('click', function() {
    isShowEnlarge = 1;
});
// Hitesh manage current image crop ends

// Hitesh manage printall button
$('#printAllBtn').on('click', function() {
    let allCheckedBoxes = $('input[type="checkbox"][name="printcheck"]:checked');
    let allCheckedBoxesValues = [];
    $.each(allCheckedBoxes, function(i, ele){
        let trId = $(ele).val();
        //Ashok:Changed 27-01-2020
        let copyNo = $("table#tbl-prnlst").find(`[data-prev-id=${trId}]`).find("td:eq(3)").html();
        copyNo=$(copyNo).attr("value");        
        let trData = {
            trId,
            copyNo
        }
        allCheckedBoxesValues.push(trData);
    });
    localStorage.setItem("allCheckedBoxesValues", JSON.stringify(allCheckedBoxesValues));
    // window.location('printpreview/index.html');
    // window.location.href = "printpreview/index.html";
    window.open(
      "printall.html",
      '_blank' // <- This is what makes it open in a new window.
    );
});
// Hitesh manage printall button ends

//<!-- <img src="" id="imgPreview" style="border: 3px solid green"> -->	
//Ashok: Testing
/*
 $(document).ready(function() {
	jQuery.ajax({
    type: "GET",
    url: 'output.php',    
    data: {action: 'get', method: 'data',user_id:1},

    success: function (data) {
            //console.log(data);                  
            localStorage.setItem("XMLDB",JSON.stringify(xmlToJson(data)));
            //console.log(xmlToJson(data));
            }
});
}); */
/**
 * Changes XML to JSON
 * Modified version from here: http://davidwalsh.name/convert-xml-json
 * @param {string} xml XML DOM tree
 */
function xmlToJson(xml) {
  // Create the return object
  var obj = {};

  if (xml.nodeType == 1) {
    // element
    // do attributes
    if (xml.attributes.length > 0) {
      obj["@attributes"] = {};
      for (var j = 0; j < xml.attributes.length; j++) {
        var attribute = xml.attributes.item(j);
        obj["@attributes"][attribute.nodeName] = attribute.nodeValue;
      }
    }
  } else if (xml.nodeType == 3) {
    // text
    obj = xml.nodeValue;
  }

  // do children
  // If all text nodes inside, get concatenated text from them.
  var textNodes = [].slice.call(xml.childNodes).filter(function(node) {
    return node.nodeType === 3;
  });
  if (xml.hasChildNodes() && xml.childNodes.length === textNodes.length) {
    obj = [].slice.call(xml.childNodes).reduce(function(text, node) {
      return text + node.nodeValue;
    }, "");
  } else if (xml.hasChildNodes()) {
    for (var i = 0; i < xml.childNodes.length; i++) {
      var item = xml.childNodes.item(i);
      var nodeName = item.nodeName;
      if (typeof obj[nodeName] == "undefined") {
        obj[nodeName] = xmlToJson(item);
      } else {
        if (typeof obj[nodeName].push == "undefined") {
          var old = obj[nodeName];
          obj[nodeName] = [];
          obj[nodeName].push(old);
        }
        obj[nodeName].push(xmlToJson(item));
      }
    }
  }
  return obj;
}

/*
Usage:
1. If you have an XML file URL:
const response = await fetch('file_url');
const xmlString = await response.text();
var XmlNode = new DOMParser().parseFromString(xmlString, 'text/xml');
xmlToJson(XmlNode);
2. If you have an XML as string:
var XmlNode = new DOMParser().parseFromString(yourXmlString, 'text/xml');
xmlToJson(XmlNode);
3. If you have the XML as a DOM Node:
xmlToJson(YourXmlNode);
*/

/*sumitra font selected jquery */
$('body').on('click', '.labels,.description,.prices,.tags', function() {
    var fontsselected = $(this).css('font-family'); 
	$('.print-prev-select option').each(function() {
		font_name = $(this).text(); 
		var res = font_name.replace(font_name,'"'+font_name+'"'); 
		var res1 = $.trim(fontsselected);
		//var res1 = fontsselected.replace(fontsselected,'"'+fontsselected+'"'); 
		var trimStr = res.replace(/\s+/g, '');
		var trimStr1 = res1.replace(/\s+/g, '');
		
		if (trimStr1 == trimStr) { 
		font_url = $(this).val();
			$(".print-prev-select option[value='"+font_url+"']").prop("selected","selected");
		}
	});
});

</script>
<style>
/*sumitra font selected jquery */
	<?php 
	$sql="SELECT * FROM fonts ORDER BY id ASC";						
	$qry=mysqli_query($getRes,$sql);
	while($row = mysqli_fetch_assoc($qry)) { ?>
	@font-face {
		   font-family: <?php echo $row['label'];?>;
		   src: url(<?php echo 'assets/'.$row['url'] ?>);
		}	
	<?php }?>		
</style>
    </body>
</html>