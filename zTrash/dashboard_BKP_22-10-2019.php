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
                    <!--mainprint prev-->
                    <div class="modal fade db-modal print-list-datamodal" id="print-list-datamodal" role="dialog">
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
                                                <input name="enlg[transp]" type="range" min="1" max="100" value="50" class="slider" id="myRange">
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
                                                <div id="colorSelector13" class="tggcolor_picker"> <div style="background-color: #0000ff"></div> <input type="hidden" value="#0000ff" name="ocolor"> </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="col-lg-6">
                                            <span>Border Color</span>
                                            </div>
                                            <div class="col-lg-6">
                                                <div id="colorSelector14" class="bdrrcolor_picker"> <div style="background-color: #0000ff"></div> <input type="hidden" value="#0000ff" name="ocolor"> </div>
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
                                    <div class="col-lg-7 contain-div">
                                        <div class="img-div ui-state-active">
                                            <img src="" class="img-responsive" />
                                        </div>
                                        <div class="data-area"></div>
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
                    <!--mainprint prev-->
                    <div class="col-lg-8 prev-col">
                        <div class="col-lg-12 prev-parent">
                            <div class="col-lg-11 col-md-11 col-sm-11 contain-div-prev">
                                <div class="img-div ui-state-active img-div-prev">
                                    <img src="" class="img-responsive" />
                                </div>
                                <div class="data-area"></div>
                            </div> 
                            <div class="col-lg-1 col-md-1 col-sm-1 prin-lis-ul">
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
                                <ul style="height: 200px;">
                                    <li style="position: absolute; bottom: 0; width: 150px;">
                                        <button class="btn btn-primary" data-toggle="tooltip" title="" type="button" data-original-title="Previous">
                                        <i class="fa fa-arrow-circle-left" style="font-size: 44px;"></i>
                                        </button>
                                        <button class="btn btn-primary" data-toggle="tooltip" title="" type="button" data-original-title="Next">
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
            
        $(document).ready(function() {
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
            
            $('.prev-ali-lft').click(function(event) {
                if($current_elem==""){
                    alert("Select Element");
                }else{
                   $current_elem.css('text-align','left'); 
                }
            });
            $('.prev-ali-cen').click(function(event) {
                if($current_elem==""){
                    alert("Select Element");
                }else{
                   $current_elem.css('text-align','center'); 
                }
            });
            $('.prev-ali-just').click(function(event) {
                if($current_elem==""){
                    alert("Select Element");
                }else{
                   $current_elem.css('text-align','justify'); 
                }
            });
            $('.prev-ali-rgt').click(function(event) {
                if($current_elem==""){
                    alert("Select Element");
                }else{
                   $current_elem.css('text-align','right'); 
                }
            }); 

            $(".print-prev-select").change(function () {
                if($current_elem==""){
                    alert("Select Element");
                }else{
                    var str = "";
                    $(".print-prev-select option:selected").each(function () {
                        str = $(this).text() + " ";
                    });
                    $current_elem.css('font-family', str);
                }
                
            });
                        
            $(".print-prev-incsiz").click(function () {
                if($current_elem==""){
                    alert("Select Element");
                }else{
                    var current = parseInt($current_elem.css('font-size'));
                    current+=1;
                    $current_elem.css('font-size',current+'px');
                }
            });

            $(".print-prev-decsiz").click(function () {
                if($current_elem==""){
                    alert("Select Element");
                }else{
                    var current = parseInt($current_elem.css('font-size'));
                    current-=1;
                    $current_elem.css('font-size',current+'px');
                }
            });
           
            $('.prin-color-one-div').ColorPicker({
                color: '#000000',
                onShow: function (colpkr) {
                    
                    if($current_elem==""){
                        alert("Select Element");
                        return false;
                    }else{
                        $(colpkr).fadeIn(500);
                    }
                    return false;
                },
                onHide: function (colpkr) {
                    $(colpkr).fadeOut(500);
                    return false;
                },
                onChange: function (hsb, hex, rgb) {
                    $('.prin-color-one-div').css('backgroundColor', '#' + hex);
                    $current_elem.css('color', '#' + hex);
                }
            });

            $('.prin-color-one-bkg').ColorPicker({
                color: '#0000ff',
                onShow: function (colpkr) {
                    if($current_elem==""){
                        alert("Select Element");
                        return false;
                    }else{
                        $(colpkr).fadeIn(500);
                    }
                    return false;
                },
                onHide: function (colpkr) {
                    $(colpkr).fadeOut(500);
                    return false;
                },
                onChange: function (hsb, hex, rgb) {
                    $('.prin-color-one-bkg div').css('backgroundColor', '#' + hex);
                    $current_elem.css('backgroundColor', '#' + hex);
                }
            });


            $('.bdrrcolor_picker').ColorPicker({
                color: '#0000ff',
                onShow: function (colpkr) {
                    // if($current_elem==""){
                    //     alert("Select Element");
                    //     return false;
                    // }else{
                    //     $(colpkr).fadeIn(500);
                    // }
                    return false;
                },
                onHide: function (colpkr) {
                    $(colpkr).fadeOut(500);
                    return false;
                },
                onChange: function (hsb, hex, rgb) {
                    // $('.prin-color-one-bkg div').css('backgroundColor', '#' + hex);
                    // $current_elem.css('backgroundColor', '#' + hex);
                }
            });

            $('.tggcolor_picker').ColorPicker({
                color: '#0000ff',
                onShow: function (colpkr) {
                    // if($current_elem==""){
                    //     alert("Select Element");
                    //     return false;
                    // }else{
                    //     $(colpkr).fadeIn(500);
                    // }
                    return false;
                },
                onHide: function (colpkr) {
                    $(colpkr).fadeOut(500);
                    return false;
                },
                onChange: function (hsb, hex, rgb) {
                    // $('.prin-color-one-bkg div').css('backgroundColor', '#' + hex);
                    // $current_elem.css('backgroundColor', '#' + hex);
                }
            });

            }); 

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
                $elem_prev=$(this).parents('.print-list-datamodal-preview').find('.img-div-prev > img');
                $elem_parent=$(this).parents('.print-list-datamodal-preview').prev().find('.img-div > img');
                $('#uploadimageModal').modal('show');
              });

              $('.crop_image').click(function(event){
                $image_crop.croppie('result', {
                  type: 'canvas',
                  size: 'viewport'
                }).then(function(response){
                  $.ajax({
                    url:"../tagapp/lib/upload.php",
                    type: "POST",
                    data:{"image": response},
                    success:function(data)
                    {
                      $('#uploadimageModal').modal('hide');
                      $elem_prev.attr('src', '../tagapp/upload_images/items/'+data);
                      $elem_parent.attr('src', '../tagapp/upload_images/items/'+data);           
                    }
                  });
                })
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
                "ajax": "../tagapp/lib/functions.php?action=getItmData",
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
        </script>
        
    </body>
</html>