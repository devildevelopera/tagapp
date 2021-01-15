<?php
require_once('inc/head.php');
require_once('lib/connection.php'); ?>

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
                                                    <button name="add_itm[default][upldimg]" class="btn btn-primary itemsmodal-lbl-btn add-itm-imgbtn" id="" data-toggle="tooltip" title="" type="button" data-original-title="Save">
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

                                                            $sql="SELECT categoriesproperties.label FROM categoriesproperties ORDER BY categoriesproperties.id ASC;";
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
                                        <button class="btn btn-primary" id="multiItemprint" data-toggle="tooltip" title="Print" type="button">
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

    $sql="SELECT categoriesproperties.label FROM categoriesproperties ORDER BY categoriesproperties.id ASC;";
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

                    <!-- <div class="modal fade db-modal" id="itemsdbmodel_edit">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">Edit Item</h4>
                                </div>
                                <div class="modal-body">
                                    <form name="dash-edit-itm" id="edit_item_dash" enctype="multipart/form-data">
                                        <div class="row add-itm-row">
                                            <div class="col-lg-12">
                                                <div class="col-lg-5">label</div>
                                                <div class="col-lg-7">
                                                    <input name="edit_itm_lbl" value="" class="form-control input-lg" type="text" />
                                                    <input class="dash-add-itm-hid" type="hidden" name="id" value="">
                                                </div>
                                            </div>
                                             <div class="col-lg-12">
                                                <div class="col-lg-5">Description</div>
                                                <div class="col-lg-7">
                                                    <textarea name="edit_itm_desc" class="add-itm-area add-itm-area"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-5">Price</div>
                                                <div class="col-lg-7">
                                                    <input name="edit_itm_pric" value="" class="form-control input-lg" type="text" />
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-5">Tags</div>
                                                <div class="col-lg-7">
                                                    <input name="edit_itm_tags" value="" class="form-control input-lg" type="text" />
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-5">Image</div>
                                                <div class="col-lg-7">
                                                    <button name="edit_itm_upldimg" class="btn btn-primary itemsmodal-lbl-btn add-itm-imgbtn" id="" data-toggle="tooltip" title="Save" type="button">
                                                    <i class="fa fa-camera"></i>
                                                    <input type="file" name="edit_itm_img" id="edit_itm_img">
                                                    </button>
                                                    <a class="img-lnk" data-img='' data-toggle="modal" data-target="#myModal">
                                                        <button name="edit_tmp_view" class="btn btn-primary itemsmodal-lbl-btn add-itm-imgbtn" id="" data-toggle="tooltip" title="View Current Image" type="button" >
                                                                <i class="fa fa-image"></i>
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-5">Default Template</div>
                                                <div class="col-lg-7">
                                                    <select name="edit_itm_deftemp" class="form-control edit_itm_deftemp">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-5">Scientific Name</div>
                                                <div class="col-lg-7">
                                                    <input name="edit_itm_scinm" class="form-control input-lg" type="text" value="" />
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-5">Care Level</div>
                                                <div class="col-lg-7">
                                                    <select name="edit_itm_carelvl" class="form-control edit_itm_carelvl">
                                                        <option value="0">Select</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-5">Size</div>
                                                <div class="col-lg-7">
                                                    <select name="edit_itm_siz" class="form-control edit_itm_siz">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-5">Origin</div>
                                                <div class="col-lg-7">
                                                    <input name="edit_itm_orig" value="" class="form-control input-lg" type="text" />
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-5">Setup Price</div>
                                                <div class="col-lg-7">
                                                    <input name="edit_itm_stppri" value="" class="form-control input-lg" type="text" />
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-5">Flowers</div>
                                                <div class="col-lg-7">
                                                    <select name="edit_itm_flw" class="form-control edit_itm_flw">
                                                        <option value="0">Select</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-5">Light</div>
                                                <div class="col-lg-7">
                                                    <select name="edit_itm_lght" class="form-control edit_itm_lght">
                                                        <option value="0">Select</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
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
                    </div> -->

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
                                                            <button name="edit_tmp_view" class="btn btn-primary itemsmodal-lbl-btn add-itm-imgbtn" id="" data-toggle="tooltip" title="View Current Image" type="button" >
                                                                <i class="fa fa-image"></i>
                                                            </button>
                                                        </a>
                                                        <button name="edit_tmp_view" class="btn btn-primary itemsmodal-lbl-btn add-itm-imgbtn" id="" data-toggle="tooltip" title="Crop Image" type="button" >
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
                    <!--mainprint prev large-->
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
                                            <button class="btn btn-primary crop_btn" data-toggle="tooltip" title="Crop Image" type="button">
                                                <i class="fa fa-crop"></i>
                                            </button>
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
                                            <select name="print-prev" class="form-control print-prev-select">
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
                                    <div class="col-lg-6 contain-div">
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
                                        <button class="btn btn-primary print-list-prev" data-toggle="tooltip" title="" type="button" data-original-title="Previous">
                                                <i class="fa fa-arrow-circle-left" style="font-size: 50px;"></i>
                                        </button>
                                        <button class="btn btn-primary print-list-next" data-toggle="tooltip" title="" type="button" data-original-title="Next">
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
                        <div class="col-lg-12 prev-parent">
                            <div class="col-lg-11 col-md-11 col-sm-11 contain-div-prev">
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
                                        <button class="btn btn-primary prev_crop_btn" data-toggle="tooltip" title="" type="button" data-original-title="Crop Image">
                                            <i class="fa fa-crop"></i>
                                        </button>
                                    </li>
                                </ul>
                                <ul style="height: 200px;">
                                    <li style="position: absolute; bottom: 0; width: 150px;">
                                        <button class="btn btn-primary prev-parent-prev" data-toggle="tooltip" title="" type="button" data-original-title="Previous">
                                        <i class="fa fa-arrow-circle-left" style="font-size: 44px;"></i>
                                        </button>
                                        <button class="btn btn-primary prev-parent-next" data-toggle="tooltip" title="" type="button" data-original-title="Next">
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
                                    <h4>PRINT LIST</h4>
                                </li>
                                <li style="width: 8vw; margin: 0 1vw;">
                                    <button class="btn btn-primary" data-toggle="tooltip" title="Remove Selected Items" type="button" style="margin-right: 0.7%;" id="multiPrintdelete">
                                    <i class="fa fa-fax"></i>
                                    </button>
                                    <button class="btn btn-primary" data-toggle="tooltip" title="Print All" type="button" style="margin-right: 0.7%;">
                                        <i class="fa fa-print"></i>
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-12" style="padding: 0;">

                            <!-- <table id="tbl-prnlst" class="display compact nowrap tbl-prnlst" style="width:100%;">
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
                                <tbody>
                                    <?php
                                        $cons= new Mysql();
                                        $getRes= $cons-> dbConnect();

                                        $print=$cons->selectAll('tblprintqueue');
                                        //var_dump($records);
                                        foreach ($print as $pr) {
                                    ?>
                                    <tr>
                                        <td>
                                            <div class="checkbox checkbox-primary">
                                                <input id="checkbox<?php echo $pr['ID']; ?>" value="<?php echo $pr['ID']; ?>" name="printcheck" type="checkbox" class="prin-chk">
                                                <label for="checkbox<?php echo $pr['ID']; ?>"></label>
                                            </div>
                                        </td>
                                        <td data-toggle="modal" data-target="#print-list-datamodal-preview<?php echo $pr['ID']; ?>">
                                            <a class="prin-lis-lnk"><?php echo $pr['label']; ?></a>
                                        </td>
                                        <td data-toggle="modal" data-target="#print-list-datamodal-preview<?php echo $pr['ID']; ?>">
                                            <a class="prin-lis-temp"><?php echo $pr['default_template']; ?></a>
                                        </td>
                                        <td data-toggle="modal" data-target="#print-list-datamodal-preview<?php echo $pr['ID']; ?>">
                                            <a class="prin-lis-copy"><?php echo $pr['NoOfCopy']; ?></a>
                                        </td>
                                        <td>
                                            <i class="fa fa-edit edit" data-placement="bottom" data-toggle="tooltip" title="Edit"></i>
                                            <a onclick="deletePrintList(<?php echo $pr['ID']; ?>); return false;"><i class="fa fa-times-circle-o delete" data-placement="bottom" data-toggle="tooltip" title="Delete"></i></a>
                                        </td>
                                    </tr>

                                    <div class="modal fade db-modal print-list-datamodal" id="print-list-datamodal<?php echo $pr['ID']; ?>" role="dialog">
                                        <div class="modal-dialog modal-sm">
                                          <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="col-lg-12" style="text-align: center;">
                                                    <ul class="hor-ul">
                                                        <li>
                                                            <button class="btn btn-primary" data-toggle="tooltip" title="Print All" type="button">
                                                                <i class="fa fa-camera"></i>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="btn btn-primary" data-toggle="tooltip" title="Print All" type="button">
                                                                <i class="fa fa-crop"></i>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="btn btn-primary" data-toggle="tooltip" title="Print All" type="button" style="margin-right: 0.7%;">
                                                                <i class="ion-ios7-glasses"></i>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <div id="colorSelector" class="prin-color-one-div">
                                                                <div style="background-color: #0000ff"></div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <input class="form-control input-lg print-prev-inc" type="number" name="quantity" min="1" max="1000" style="width: 100%;">
                                                        </li>
                                                        <li>
                                                            <button class="btn btn-primary prev-ali-lft" data-toggle="tooltip" title="Text Align Left" type="button" style="margin-right: 0.7%;">
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
                                                            <select name="print-prev" class="form-control print-prev-select">
                                                                <option>Select Font</option>
                                                                <option>Arial</option>
                                                                <option>Comic Sans MS</option>
                                                                <option>Trebuchet MS</option>
                                                                <option>Verdana</option>
                                                                <option>Averia Sans Libre</option>
                                                                <option>Righteous</option>
                                                                <option>Sancreek</option>
                                                                <option>Alegreya SC </option>
                                                                <option>Merienda One</option>
                                                                <option>Aldrich</option>
                                                                <option>Nothing You Could Do</option>
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
                                                            <button class="btn btn-primary" data-toggle="tooltip" title="Full Screen" type="button" style="margin-right: 0.7%;">
                                                                <i class="fa fa-square-o"></i>
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
                                                                <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="col-lg-6">
                                                                <span>X-Position</span>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <input name="add-itm-lbl" class="form-control input-lg prin-inputbx" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="col-lg-6">
                                                                <span>Y-Position</span>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <input name="add-itm-lbl" class="form-control input-lg prin-inputbx" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="col-lg-6">
                                                                <span>Width</span>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <input name="add-itm-lbl" class="form-control input-lg prin-inputbx" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="col-lg-6">
                                                            <span>Height</span>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <input name="add-itm-lbl" class="form-control input-lg prin-inputbx" type="text">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12" style="padding: 4% 0;">Background</div>
                                                        <div class="col-lg-12">
                                                            <div class="col-lg-6">
                                                            <span>Tag Color</span>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <input name="add-itm-lbl" class="form-control input-lg prin-inputbx" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="col-lg-6">
                                                            <span>Border Color</span>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <input name="add-itm-lbl" class="form-control input-lg prin-inputbx" type="text">
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
                                                    <div class="col-lg-7 contain-div ui-widget-content">
                                                        <?php
                                                        $cons= new Mysql();
                                                        $getRes= $cons-> dbConnect();
                                                        $getuserId=$cons->selectWhere('tblprintqueue','id','=',$pr['ID'],'char');
                                                        ?>
                                                        <div class="img-div ui-state-active">
                                                            <img src="items/<?php echo $getuserId['image_path']; ?>" class="img-responsive" />
                                                        </div>

                                                        <div style="word-break: break-all; width: 252px; height: 161px; left: 274px; top: 189px; position: absolute; color: rgb(255, 255, 255); background-color: transparent; font-size: 18px;" class="color chld resizable ui-state-active">
                                                            <?php echo $getuserId['description']; ?>
                                                        </div>

                                                        <div style="word-break: break-all; width: 234px; height: auto; left: 16px; top: 6px; position: absolute; color: rgb(255, 255, 255); background-color: transparent; font-size: 32px;" class="chld resizable ui-state-active">
                                                            <?php echo $getuserId['label']; ?>
                                                        </div>

                                                        <div style="word-break: break-all; width: 155px; height: 28px; left: 18px; top: 127px; position: absolute; background-color: transparent; font-size: 18px; color: rgb(255, 255, 255);" class="chld resizable ui-state-active">
                                                            <?php echo $getuserId['scientific_name']; ?>
                                                        </div>

                                                        <div style="word-break: break-all; width: 247px; height: 32px; left: 280px; top: 7px; position: absolute; background-color: transparent; font-size: 22px; color: rgb(255, 255, 255);" class="chld resizable ui-state-active">
                                                            <?php echo $getuserId['price']; ?>
                                                        </div>

                                                        <div style="word-break: break-all; width: 136px; height: 29px; left: 19px; top: 164px; position: absolute; background-color: transparent; font-size: 19px; color: rgb(255, 255, 255);" class="chld resizable ui-state-active">
                                                            Care Level :<?php echo $getuserId['care_level']; ?>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-1"></div>
                                                </div>
                                                <div class="col-lg-12" style="text-align: center; padding: 1% 0;">
                                                    <div class="col-lg-12" style="display: inline-block;">
                                                        <button class="btn btn-primary" data-toggle="tooltip" title="" type="button" data-original-title="Previous">
                                                                <i class="fa fa-arrow-circle-left" style="font-size: 50px;"></i>
                                                        </button>
                                                        <button class="btn btn-primary" data-toggle="tooltip" title="" type="button" data-original-title="Next">
                                                                <i class="fa fa-arrow-circle-right" style="font-size: 50px;"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>

                                    <div class="modal fade db-modal print-list-datamodal-preview" id="print-list-datamodal-preview<?php echo $pr['ID']; ?>" role="dialog">
                                        <div class="modal-dialog modal-sm">
                                          <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="col-lg-12">
                                                    <div class="col-lg-11 contain-div-prev ui-widget-content">
                                                        <?php
                                                        $cons= new Mysql();
                                                        $getRes= $cons-> dbConnect();
                                                        $getuserId=$cons->selectWhere('tblprintqueue','id','=',$pr['ID'],'char');
                                                        ?>
                                                        <div class="img-div ui-state-active img-div-prev">
                                                            <img src="items/<?php echo $getuserId['image_path']; ?>" class="img-responsive" />
                                                        </div>

                                                        <div style="word-break: break-all; width: 252px; height: 161px; left: 274px; top: 189px; position: absolute; color: rgb(255, 255, 255); background-color: transparent; font-size: 18px;" class="color chld resizable ui-state-active">
                                                            <?php echo $getuserId['description']; ?>
                                                        </div>

                                                        <div style="word-break: break-all; width: 234px; height: auto; left: 16px; top: 6px; position: absolute; color: rgb(255, 255, 255); background-color: transparent; font-size: 32px;" class="chld resizable ui-state-active">
                                                            <?php echo $getuserId['label']; ?>
                                                        </div>

                                                        <div style="word-break: break-all; width: 155px; height: 28px; left: 18px; top: 127px; position: absolute; background-color: transparent; font-size: 18px; color: rgb(255, 255, 255);" class="chld resizable ui-state-active">
                                                            <?php echo $getuserId['scientific_name']; ?>
                                                        </div>

                                                        <div style="word-break: break-all; width: 247px; height: 32px; left: 280px; top: 7px; position: absolute; background-color: transparent; font-size: 22px; color: rgb(255, 255, 255);" class="chld resizable ui-state-active">
                                                            <?php echo $getuserId['price']; ?>
                                                        </div>

                                                        <div style="word-break: break-all; width: 136px; height: 29px; left: 19px; top: 164px; position: absolute; background-color: transparent; font-size: 19px; color: rgb(255, 255, 255);" class="chld resizable ui-state-active">
                                                            Care Level :<?php echo $getuserId['care_level']; ?>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-1 prin-lis-ul">
                                                        <ul>
                                                            <li>
                                                                <button class="btn btn-primary go-enlarge" data-toggle="tooltip" title="" type="button" data-original-title="Go Enlarge View">
                                                                    <i class="fa fa-external-link-square"></i>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button name="add_itm_upldimg" class="btn btn-primary add_prev_image" data-toggle="tooltip" title="" type="button" data-original-title="Set New Background">
                                                                    <i class="fa fa-camera"></i>
                                                                    <input type="file" class="upload_image" name="upload_image" id="">
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button class="btn btn-primary" data-toggle="tooltip" title="" type="button" data-original-title="Visibility of labels">
                                                                    <i class="ion-ios7-glasses"></i>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button class="btn btn-primary" data-toggle="tooltip" title="" type="button" data-original-title="Crop Image">
                                                                    <i class="fa fa-crop"></i>
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12" style="text-align: center; padding: 1% 0;">
                                                    <div class="col-lg-12" style="display: inline-block;">
                                                        <button class="btn btn-primary" data-toggle="tooltip" title="" type="button" data-original-title="Previous">
                                                                <i class="fa fa-arrow-circle-left" style="font-size: 50px;"></i>
                                                        </button>
                                                        <button class="btn btn-primary" data-toggle="tooltip" title="" type="button" data-original-title="Next">
                                                                <i class="fa fa-arrow-circle-right" style="font-size: 50px;"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>



                                    <?php
                                        }
                                    ?>

                                </tbody>
                            </table> -->
                            <!-- <div class="modal fade db-modal print-list-datamodal" id="print-list-datamodal" role="dialog">
                                <div class="modal-dialog modal-sm">
                                  <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="col-lg-12" style="text-align: center;">
                                            <ul class="hor-ul">
                                                <li>
                                                    <button class="btn btn-primary" data-toggle="tooltip" title="Print All" type="button">
                                                        <i class="fa fa-camera"></i>
                                                    </button>
                                                </li>
                                                <li>
                                                    <button class="btn btn-primary" data-toggle="tooltip" title="Print All" type="button">
                                                        <i class="fa fa-crop"></i>
                                                    </button>
                                                </li>
                                                <li>
                                                    <button class="btn btn-primary" data-toggle="tooltip" title="Print All" type="button" style="margin-right: 0.7%;">
                                                        <i class="ion-ios7-glasses"></i>
                                                    </button>
                                                </li>
                                                <li>
                                                    <div id="colorSelector" class="prin-color-one-div">
                                                        <div style="background-color: #0000ff"></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <input class="form-control input-lg print-prev-inc" type="number" name="quantity" min="1" max="1000" style="width: 100%;">
                                                </li>
                                                <li>
                                                    <button class="btn btn-primary prev-ali-lft" data-toggle="tooltip" title="Text Align Left" type="button" style="margin-right: 0.7%;">
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
                                                    <select name="print-prev" class="form-control print-prev-select">
                                                        <option>Select Font</option>
                                                        <option>Arial</option>
                                                        <option>Comic Sans MS</option>
                                                        <option>Trebuchet MS</option>
                                                        <option>Verdana</option>
                                                        <option>Averia Sans Libre</option>
                                                        <option>Righteous</option>
                                                        <option>Sancreek</option>
                                                        <option>Alegreya SC </option>
                                                        <option>Merienda One</option>
                                                        <option>Aldrich</option>
                                                        <option>Nothing You Could Do</option>
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
                                                    <button class="btn btn-primary" data-toggle="tooltip" title="Full Screen" type="button" style="margin-right: 0.7%;">
                                                        <i class="fa fa-square-o"></i>
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
                                                        <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="col-lg-6">
                                                        <span>X-Position</span>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input name="add-itm-lbl" class="form-control input-lg prin-inputbx" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="col-lg-6">
                                                        <span>Y-Position</span>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input name="add-itm-lbl" class="form-control input-lg prin-inputbx" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="col-lg-6">
                                                        <span>Width</span>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input name="add-itm-lbl" class="form-control input-lg prin-inputbx" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="col-lg-6">
                                                    <span>Height</span>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input name="add-itm-lbl" class="form-control input-lg prin-inputbx" type="text">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12" style="padding: 4% 0;">Background</div>
                                                <div class="col-lg-12">
                                                    <div class="col-lg-6">
                                                    <span>Tag Color</span>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input name="add-itm-lbl" class="form-control input-lg prin-inputbx" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="col-lg-6">
                                                    <span>Border Color</span>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input name="add-itm-lbl" class="form-control input-lg prin-inputbx" type="text">
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
                                            <div class="col-lg-7 contain-div ui-widget-content">
                                                <?php
                                                $cons= new Mysql();
                                                $getRes= $cons-> dbConnect();
                                                $getuserId=$cons->selectWhere('tblprintqueue','id','=',$pr['ID'],'char');
                                                ?>
                                                <div class="img-div ui-state-active">
                                                    <img src="items/<?php echo $getuserId['image_path']; ?>" class="img-responsive" />
                                                </div>

                                                <div style="word-break: break-all; width: 252px; height: 161px; left: 274px; top: 189px; position: absolute; color: rgb(255, 255, 255); background-color: transparent; font-size: 18px;" class="color chld resizable ui-state-active">
                                                    <?php echo $getuserId['description']; ?>
                                                </div>

                                                <div style="word-break: break-all; width: 234px; height: auto; left: 16px; top: 6px; position: absolute; color: rgb(255, 255, 255); background-color: transparent; font-size: 32px;" class="chld resizable ui-state-active">
                                                    <?php echo $getuserId['label']; ?>
                                                </div>

                                                <div style="word-break: break-all; width: 155px; height: 28px; left: 18px; top: 127px; position: absolute; background-color: transparent; font-size: 18px; color: rgb(255, 255, 255);" class="chld resizable ui-state-active">
                                                    <?php echo $getuserId['scientific_name']; ?>
                                                </div>

                                                <div style="word-break: break-all; width: 247px; height: 32px; left: 280px; top: 7px; position: absolute; background-color: transparent; font-size: 22px; color: rgb(255, 255, 255);" class="chld resizable ui-state-active">
                                                    <?php echo $getuserId['price']; ?>
                                                </div>

                                                <div style="word-break: break-all; width: 136px; height: 29px; left: 19px; top: 164px; position: absolute; background-color: transparent; font-size: 19px; color: rgb(255, 255, 255);" class="chld resizable ui-state-active">
                                                    Care Level :<?php echo $getuserId['care_level']; ?>
                                                </div>

                                            </div>
                                            <div class="col-lg-1"></div>
                                        </div>
                                        <div class="col-lg-12" style="text-align: center; padding: 1% 0;">
                                            <div class="col-lg-12" style="display: inline-block;">
                                                <button class="btn btn-primary" data-toggle="tooltip" title="" type="button" data-original-title="Previous">
                                                        <i class="fa fa-arrow-circle-left" style="font-size: 50px;"></i>
                                                </button>
                                                <button class="btn btn-primary" data-toggle="tooltip" title="" type="button" data-original-title="Next">
                                                        <i class="fa fa-arrow-circle-right" style="font-size: 50px;"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                            </div> -->

                            <!-- <div class="modal fade db-modal print-list-datamodal-preview" id="print-list-datamodal-preview" role="dialog">
                                <div class="modal-dialog modal-sm">
                                  <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="col-lg-12">
                                            <div class="col-lg-11 contain-div-prev ui-widget-content">
                                                <?php
                                                //$cons= new Mysql();
                                                //$getRes= $cons-> dbConnect();
                                                //$getuserId=$cons->selectWhere('tblprintqueue','id','=',$pr['ID'],'char');
                                                ?>
                                                <div class="img-div ui-state-active img-div-prev">
                                                    <img src="" class="img-responsive" />
                                                </div>
                                                <div class="data-area"></div>

                                                 <div style="word-break: break-all; width: 252px; height: 161px; left: 274px; top: 189px; position: absolute; color: rgb(255, 255, 255); background-color: transparent; font-size: 18px;" class="color chld resizable ui-state-active">
                                                    <?php echo $getuserId['description']; ?>
                                                </div>

                                                <div style="word-break: break-all; width: 234px; height: auto; left: 16px; top: 6px; position: absolute; color: rgb(255, 255, 255); background-color: transparent; font-size: 32px;" class="chld resizable ui-state-active">
                                                    <?php echo $getuserId['label']; ?>
                                                </div>

                                                <div style="word-break: break-all; width: 155px; height: 28px; left: 18px; top: 127px; position: absolute; background-color: transparent; font-size: 18px; color: rgb(255, 255, 255);" class="chld resizable ui-state-active">
                                                    <?php echo $getuserId['scientific_name']; ?>
                                                </div>

                                                <div style="word-break: break-all; width: 247px; height: 32px; left: 280px; top: 7px; position: absolute; background-color: transparent; font-size: 22px; color: rgb(255, 255, 255);" class="chld resizable ui-state-active">
                                                    <?php echo $getuserId['price']; ?>
                                                </div>

                                                <div style="word-break: break-all; width: 136px; height: 29px; left: 19px; top: 164px; position: absolute; background-color: transparent; font-size: 19px; color: rgb(255, 255, 255);" class="chld resizable ui-state-active">
                                                    Care Level :<?php echo $getuserId['care_level']; ?>
                                                </div>

                                            </div>
                                            <div class="col-lg-1 prin-lis-ul">
                                                <ul>
                                                    <li>
                                                        <button class="btn btn-primary go-enlarge" data-toggle="tooltip" title="" type="button" data-original-title="Go Enlarge View">
                                                            <i class="fa fa-external-link-square"></i>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button name="add_itm_upldimg" class="btn btn-primary add_prev_image" data-toggle="tooltip" title="" type="button" data-original-title="Set New Background">
                                                            <i class="fa fa-camera"></i>
                                                            <input type="file" class="upload_image" name="upload_image" id="">
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button class="btn btn-primary" data-toggle="tooltip" title="" type="button" data-original-title="Visibility of labels">
                                                            <i class="ion-ios7-glasses"></i>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button class="btn btn-primary" data-toggle="tooltip" title="" type="button" data-original-title="Crop Image">
                                                            <i class="fa fa-crop"></i>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-12" style="text-align: center; padding: 1% 0;">
                                            <div class="col-lg-12" style="display: inline-block;">
                                                <button class="btn btn-primary" data-toggle="tooltip" title="" type="button" data-original-title="Previous">
                                                        <i class="fa fa-arrow-circle-left" style="font-size: 50px;"></i>
                                                </button>
                                                <button class="btn btn-primary" data-toggle="tooltip" title="" type="button" data-original-title="Next">
                                                        <i class="fa fa-arrow-circle-right" style="font-size: 50px;"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                            </div> -->
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


                            <div id="uploadimageModal" class="modal db-modal" role="dialog">
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
                            </div>
							
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
														<input type="checkbox" name="lbllist" value="labels"> label<br>
														<input type="checkbox" name="lbllist" value="description"> description<br>
														<input type="checkbox" name="lbllist" value="prices"> price<br>
														<input type="checkbox" name="lbllist" value="tags"> tags<br>
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
							
							<!-- Prev label list -->
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
														<input type="checkbox" name="lbllist" value="labels"> label<br>
														<input type="checkbox" name="lbllist" value="description"> description<br>
														<input type="checkbox" name="lbllist" value="prices"> price<br>
														<input type="checkbox" name="lbllist" value="tags"> tags<br>
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
	
	/*Popu text element setect */
	$( '.print-list-datamodal .modal-body .contain-div .data-area' ).on( 'click', 'div', function () {
		$(this).parent().find('div').removeClass('selected');
		if ( $(this).hasClass('selected') ) {
			$(this).removeClass('selected');
        }
        else {
			$(this).addClass('selected');
        }
		var label_style = $(this).attr( 'style' );		
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
		
		/*Unselected check box*/		
		$( '#prevlabellist .label-list-wrap input:checkbox[name=lbllist]:not(:checked)' ).each( function(){
			unchk_label_array.push( $( this ).val() );
		});
		var unchk_label_value = unchk_label_array.join( ',' );		
		var unchk_labelArr = unchk_label_value.split(',');
		
		$.each( unchk_labelArr, function( index, value ) { 				
			$( '.contain-div-prev .data-area .'+value.split(", ")[0] ).css( {'display': 'none'} );
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
			$( '.print-list-datamodal .modal-body .contain-div .data-area div.selected' ).css( {'font-family': ''} );
			var font_name = "";
			$( '.print-prev-select option:selected' ).each( function () {
				font_name = $(this).text();
				if ( font_name != 'Select Font' ){
					$( '.print-list-datamodal .modal-body .contain-div .data-area div.selected' ).css( {'font-family': font_name} );
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
				fileExtension = fileName.replace(/^.*\./, '');
				
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
	
	$('.save-style').click(function(){
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
		}else{
			
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

	$('.upload_image').on('change', function(){
		var reader = new FileReader();
		reader.onload = function (event) {
			$image_crop.croppie('bind', {
				url: event.target.result
			}).then(function(){
				console.log('jQuery bind complete');
			});
		}
		reader.readAsDataURL(this.files[0]);
		//$elem_prev=$(this).parents('.print-list-datamodal-preview').find('.img-div-prev > img');
		//$elem_parent=$(this).parents('.print-list-datamodal-preview').prev().find('.img-div > img');

		$elem_prev=$(this).parents('.prev-col .prev-parent .contain-div-prev').find('.img-div-prev > img');
		$elem_parent=$(this).parents('.prev-col .prev-parent .contain-div-prev').prev().find('.img-div > img');

		$('#uploadimageModal').modal('show');
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
	$( '.background_image' ).on( 'change', function(){
		var reader = new FileReader();
		reader.onload = function( event ){
			var url_path = event.target.result;				
			$.ajax({
				type: 'POST',
				url: '../lib/upload.php',
				data:{"image": url_path},
				success: function( response ) {
					$( '.print-list-datamodal .modal-dialog .modal-body .contain-div .img-div > img' ).attr( 'src', '../upload_images/items/' + response );
					setData( response, 'image' );
				}
			});
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
				console.log('jQuery bind complete');
			});
		}
		reader.readAsDataURL(this.files[0]);*/

	});

	/*Popup background crop image*/
	$('.crop_btn').click(function(event){		
		$('#cropbox').Jcrop({			
		 // aspectRatio: 1,
			onSelect: function(c){
				size = {x:c.x,y:c.y,w:c.w,h:c.h};
				var img = $("#cropbox").attr('src');
				
				$("#cropbox").show();
				$("#cropbox").css({
					'visibility':'visible',
					'width':'100%',
					'height':'auto'
				});
				$("#cropbox").attr('src','image-crop.php?x='+size.x+'&y='+size.y+'&w='+size.w+'&h='+size.h+'&img='+img);
				
				setTimeout(function(){ 
					$("#cropbox").attr('src','');
					$("#cropbox").attr('src','upload_images/items/cropimage.jpg');
					setData( 'cropimage.jpg', 'image' );
				}, 100);
				
				$('.jcrop-holder').remove();				
			}
		});		
	});
	
	/*Dashboard background crop image*/
	$('.prev_crop_btn').click(function(event){
		$('#prev_cropbox').Jcrop({			
		 // aspectRatio: 1,
			onSelect: function(c){
				size = {x:c.x,y:c.y,w:c.w,h:c.h};
				var img = $("#prev_cropbox").attr('src');
				
				$("#prev_cropbox").show();
				$("#prev_cropbox").css({
					'visibility':'visible',
					'width':'100%',
					'height':'auto'
				});
				$("#prev_cropbox").attr('src','image-crop.php?x='+size.x+'&y='+size.y+'&w='+size.w+'&h='+size.h+'&img='+img);
				
				setTimeout(function(){ 
					$("#prev_cropbox").attr('src','');
					$("#prev_cropbox").attr('src','upload_images/items/cropimage.jpg');
					setData( 'cropimage.jpg', 'image' );
				}, 100);				
				$('.jcrop-holder').remove();				
			}
		});
	});
	
	/*Minimize button click */
	$( '.print-prev-min' ).click(function(){
		$( '.save-style' ).trigger( 'click' );
		$( '#print-list-datamodal' ).modal( 'hide' );
	});
	
	/* Tag close to hide tag*/
	$(document).on("click", ".tag-closed", function(e) {
		var tag_hide = $( this ).attr('data-label');
		$( '.print-list-datamodal .contain-div .data-area div.'+tag_hide ).css( {'display': 'none'} );		
		$( '#labellist .label-list-wrap input:checkbox[value='+tag_hide+']' ).prop('checked','');		
	});

});

</script>

<script type="text/javascript">
	<?php
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$rowArr="";
	$sql="SELECT categoriesproperties.label FROM categoriesproperties ORDER BY categoriesproperties.id ASC;";
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
</script>

    </body>
</html>