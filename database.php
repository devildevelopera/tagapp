<?php 
require_once('inc/head.php');
require_once('lib/connection.php'); ?> 

        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container">

                    <!-- LOGO -->
                    <div class="topbar-left">
                        <a href="dashboard.php" class="logo"><i class="md md-terrain"></i> <span> Tagprinting </span></a>
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
                                <a href="dashboard.php"><span> Home </span> </a>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><span> Database </span> </a>
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
            <!-- <div class="navbar-custom">
                <div class="container">
                    
                </div>
            </div> -->
        </header>
        <!-- End Navigation Bar-->
        <div class="wrapper">
            <div class="container-fluid">
                <div class="col-lg-12" style="padding-top: 10px;">
                    <ul class="nav nav-tabs tabs" style="width: 100%;">
                        <li class="tab active" style="width: 20%;">
                            <a href="#items-2" data-toggle="tab" aria-expanded="true" class="active">
                                <span class="visible-xs"><i class="fa fa-home"></i></span>
                                <span class="hidden-xs"><span class="chknewprop">Items</span></span>
                            </a>
                        </li>
                        <li class="tab" style="width: 20%;">
                            <a href="#catagories-2" data-toggle="tab" aria-expanded="false" class="">
                                <span class="visible-xs"><i class="fa fa-user"></i></span>
                                <span class="hidden-xs">Catagories</span>
                            </a>
                        </li>
                        <li class="tab" style="width: 20%;">
                            <a href="#collections-2" data-toggle="tab" aria-expanded="false" class="">
                                <span class="visible-xs"><i class="fa fa-envelope-o"></i></span>
                                <span class="hidden-xs">Collections</span>
                            </a>
                        </li>
                        <li class="tab" style="width: 20%;">
                            <a href="#templates-2" data-toggle="tab" aria-expanded="false" class="">
                                <span class="visible-xs"><i class="fa fa-cog"></i></span>
                                <span class="hidden-xs">Templates</span>
                            </a>
                        </li>
                        <li class="tab" style="width: 20%;">
                            <a href="#papertemplate-2" data-toggle="tab" aria-expanded="false" class="">
                                <span class="visible-xs"><i class="fa fa-cog"></i></span>
                                <span class="hidden-xs">Paper Template</span>
                            </a>
                        </li>
                        <div class="indicator" style="right: 0px; left: 0px;"></div>
                    </ul>
                    <div class="tab-content">
                        <!--Items Tab section-->
                        <div class="tab-pane active" id="items-2">
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
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="col-lg-6" style="padding: 0;">
                                        <ul class="db-secti-itmul">
                                            <li>
                                                <div class="past-search-itm">
                                            </li>
                                            <li>
                                                <div class="lbl-paren" style="margin: 0 17vw; width: 17vw;">
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
                                                            INNER JOIN collections ON collections.id = categories.collection_id AND collections.user_id=".$_SESSION['main']['id']." ORDER BY categoriesproperties.id ASC;";
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
                                                        <button class="btn btn-primary" data-toggle="tooltip" title="Add" type="button" style="margin-right: 0.7%;">
                                                            <i class="fa fa-plus"></i>
                                                        </button>
                                                    </span>
                                                    <span data-toggle="modal" data-target="#dbitemsdeleteallmodel">
                                                        <button class="btn btn-primary itm-del-sele" data-toggle="tooltip" title="Delete Selected" type="button" style="margin-right: 0.7%;">
                                                            <i class="fa fa-times-circle-o"></i>
                                                        </button>
                                                    </span>
                                                    <button class="btn btn-primary" data-toggle="tooltip" title="Export" type="button" style="margin-right: 0.7%;">
                                                        <i class="fa fa-crop"></i>
                                                    </button>
                                                </div>
                                            </li>
                                        </ul>
                                        <!--  -->
                                    </div>
                                    <div class="col-lg-6">
                                            <select class="form-control heading-select item-filter-cata" style="float: right; width: 30%;">
                                                <option value="-1">Select Catagories</option>
                                            </select>
                                            <h5 style="float: right; margin: 1% 2%;">Category</h5>

                                            <select class="form-control heading-select item-filter-curcol" style="float: right; width: 30%;">
                                            </select>
                                            <h5 style="float: right; margin: 1% 2%;">Current Collection</h5>
                                    </div>
                                </div>
                                <div class="col-lg-12 db-itm" style="padding: 1% 0 0 0;">
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
    INNER JOIN collections ON collections.id = categories.collection_id AND collections.user_id=".$_SESSION['main']['id']." ORDER BY categoriesproperties.id ASC;";
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
                                <div class="modal fade db-modal" id="itemsdbmodel_edit">
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
                                                                <button name="edit_itm_upldimg" class="btn btn-primary itemsmodal-lbl-btn add-itm-imgbtn" data-toggle="tooltip" title="Save" type="button">
                                                                <i class="fa fa-camera"></i>
                                                                <input type="file" name="edit_itm_img" id="edit_itm_img">
                                                                </button>
                                                                <a class="img-lnk" data-img='' data-toggle="modal" data-target="#myModal">
                                                                    <button name="edit_tmp_view" class="btn btn-primary itemsmodal-lbl-btn add-itm-imgbtn" data-toggle="tooltip" title="View Current Image" type="button" >
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
                            </div>
                        </div>
                        <!--Catagories Tab section-->
                        <div class="tab-pane" id="catagories-2">
                            <div class="row">
                                <!--Properties Label Model-->
                                <div class="modal fade db-modal" id="prop-chlddbmodel-edit-icochk" role="dialog" data-backdrop="static" data-keyboard="false">
                                    <div class="modal-dialog modal-sm">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="prop-chlddbmodel-edit-close-icochk close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Editing Property : (Label Name)</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form name="frm-chld-modprop-edit">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="col-lg-4">Label</div>
                                                        <div class="col-lg-8">
                                                            <input class="form-control input-lg pcatmodal-lbl-input-edit-add-icochk" name="pcatmodal-lbl-input-edit-add-icochk" type="text" required="">
                                                            <input type="hidden" name="prop-chlddbmodel-icochk-hid" value="" class="prop-chlddbmodel-icochk-hid">
                                                            <input type="hidden" name="prop-type-hid-icochk" class="prop-type-hid-icochk" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="col-lg-4">Type</div>
                                                        <div class="col-lg-8">
                                                            <select class="form-control drp-clddb-add-edit-icochk" disabled="disabled">
                                                                <option value="text" selected="selected">Text Input</option>
                                                                <option value="img">Image Upload</option>
                                                                <option value="number">Number Input</option>
                                                                <option value="bool">Check Box</option>
                                                                <option value="imgbool">Icon Check Box</option>
                                                                <option value="imglist">Icon Dropdown List</option>
                                                                <option value="list">Dropdown List</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="col-lg-4">Default Value</div>
                                                        <div class="col-lg-8">
                                                            <ul class="def-boul">
                                                                <li>
                                                                    <button class="btn btn-primary del-icoImgEd" data-toggle="tooltip" title="" type="button" data-original-title="Delete"><i class="fa fa-times-circle-o"></i></button>
                                                                </li>
                                                                <li>
                                                                    <a class="img-lnk-icochkEd" data-img-temps="default.png" data-toggle="modal" data-target="#myModal-imgprev">
                                                                        <button class="btn btn-primary chldmodal-lbl-btn-edit" data-toggle="tooltip" title="" type="button" data-original-title="Preview"><i class="fa fa-image"></i></button>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-primary chldmodal-lbl-btn-edit" data-toggle="tooltip" title="" type="button" style="float: right; margin: 2% 0.7% 0 3%;" data-original-title="Save">
                                                                    <i class="fa fa-camera"></i>
                                                                    <input type="file" name="chk-file" class="chk-file sty-chk" id="chk-file" />
                                                                    </button>
                                                                </li>
                                                            </ul>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="col-lg-11"></div>
                                                        <div class="col-lg-1" style="padding: 8px 4px;">
                                                            <div class="pretty p-image p-plain">
                                                                <input type="checkbox" />
                                                                <div class="state">
                                                                    <img class="image grab-chkimg" src="upload_images/icon_chk_box/default.png">
                                                                    <label></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="col-lg-4"></div>
                                                        <div class="col-lg-8">
                                                            <button class="btn btn-primary chldmodal-lbl-btn-edit" data-toggle="tooltip" title="" type="submit" style="float: right; margin: 2% 0.7% 0 3%;" data-original-title="Save">
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
                                <!--Image prev Modal-->
                                <div class="modal fade" id="myModal-imgprev" style="z-index: 10000;" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Current Image</h4>
                                        </div>
                                        <div class="modal-body">
                                          <img src="" class="img-responsive itm-img-temps">
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <!--Image prev modal-->
                                <div class="modal fade db-modal" id="prop-chlddbmodel-edit-icodrp" role="dialog" data-backdrop="static" data-keyboard="false">
                                    <div class="modal-dialog modal-sm">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="prop-chlddbmodel-edit-close-icodrp close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Editing Property : (Label Name)</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form name="frm-drpico-lst" class="frm-drpico-lst" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="col-lg-4">Label</div>
                                                        <div class="col-lg-8">
                                                            <input name="pcatmodal-lbl-input-edit-add-icodrp" class="form-control input-lg pcatmodal-lbl-input-edit-add-icodrp" type="text" required>
                                                        </div>
                                                        <input type="hidden" value="" class="prop-chlddbmodel-icodrp-hid" name="prop-chlddbmodel-icodrp-hid"/>
                                                        <input type="hidden" value="" class="prop-type-hid-icodrp" name="prop-type-hid-icodrp"/>
                                                        
                                                        <!-- <div class="col-lg-5"></div> -->
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="col-lg-4">Type</div>
                                                        <div class="col-lg-8">
                                                            <select class="form-control drp-clddb-add-edit-icodrp" disabled="disabled">
                                                                <option value="text">Text Input</option>
                                                                <option value="img">Image Upload</option>
                                                                <option value="number">Number Input</option>
                                                                <option value="bool">Check Box</option>
                                                                <option value="imgbool">Icon Check Box</option>
                                                                <option value="imglist">Icon Dropdown List</option>
                                                                <option value="list">Dropdown List</option>
                                                            </select>
                                                        </div>
                                                        <!-- <div class="col-lg-5"></div> -->
                                                    </div>
                                                    <div class="col-lg-12 def_val-edit set-drpmar">
                                                        <div class="col-lg-4">Default Value</div>
                                                        <div class="col-lg-8">
                                                            <div class="col-lg-11 send-full" style="padding: 0;">
                                                                <select name="chldmodal-lbl-input-edit-icodrp-select" class="form-control chldmodal-lbl-input-edit-icodrp-select past-def" style="width: 96% !important;"></select>
                                                            </div>
                                                            <div class="col-lg-1" style="padding: 0;">
                                                                <button class="btn btn-primary chldmodal-lbl-btn-additm-icodrp" data-toggle="tooltip" title="" type="button" style="float: right;" data-original-title="Add More">
                                                            <i class="fa fa-plus"></i>
                                                            </button>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="col-lg-5"></div> -->
                                                    </div>
                                                    <div class="app-lst-are-drp">
                                                        <!-- <div class="def_val-edit-drp"></div> -->
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="col-lg-11"></div>
                                                        <div class="col-lg-1">
                                                            <button class="btn btn-primary chldmodal-lbl-btn-edit-submi" data-toggle="tooltip" title="" type="submit" style="float: left; margin: 2% 0.7% 0 3%;" data-original-title="Save">
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
                                <div class="modal fade db-modal" id="prop-chlddbmodel-edit-listitm" role="dialog" data-backdrop="static" data-keyboard="false">
                                    <div class="modal-dialog modal-sm">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="prop-chlddbmodel-edit-close-listitm close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Editing Property : (Label Name)</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form name="frm-listsumi" class="frm-listsumi">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="col-lg-4">Label</div>
                                                        <div class="col-lg-8">
                                                            <input class="form-control input-lg pcatmodal-lbl-input-edit-add-listitm" name="pcatmodal-lbl-input-edit-add-listitm" type="text" required="">
                                                        </div>
                                                        <input type="hidden" value="" class="prop-chlddbmodel-listitm-hid" name="prop-chlddbmodel-listitm-hid">
                                                        <input type="hidden" value="" name="prop-type-hid-listitm" class="prop-type-hid-listitm">
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="col-lg-4">Type</div>
                                                        <div class="col-lg-8">
                                                            <select class="form-control drp-clddb-add-edit-listitm" disabled="disabled" id="prop-chlddbmodel-edit-listitmid">
                                                                    <option value="text">Text Input</option>
                                                                    <option value="img">Image Upload</option>
                                                                    <option value="number">Number Input</option>
                                                                    <option value="bool">Check Box</option>
                                                                    <option value="imgbool">Icon Check Box</option>
                                                                    <option value="imglist">Icon Dropdown List</option>
                                                                    <option value="list">Dropdown List</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 default-append-list edilst-par" id="edilst-par">
                                                        <div class="col-lg-12 rem-pad set-drplstset">
                                                            <div class="col-lg-4">Default Value</div>
                                                            <div class="col-lg-7">
                                                                <select name="opt-edit-lst" class="form-control opt-edit-lst"></select>
                                                            </div>
                                                            <div class="col-lg-1">
                                                                <span id="btn-imglst-pls" class="btn-imglst-pls">
                                                                    <button class="btn btn-primary" data-toggle="tooltip" title="" type="button" style="    float: right; margin-right: 0.7%;" data-original-title="Properties">
                                                                        <i class="fa fa-plus"></i>
                                                                    </button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="col-lg-4"></div>
                                                            <div class="col-lg-7"></div>
                                                            <div class="col-lg-1"></div>
                                                        </div>
                                                    </div>
                                                    <div class="app-lst-are">
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="col-lg-10"></div>
                                                        <div class="col-lg-2">
                                                            <button class="btn btn-primary chldmodal-lbl-btn-additm-listitmsave" data-toggle="tooltip" title="" type="button" style="float: right; margin: 2% 0.7% 0 3%;" data-original-title="Save">
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
                                <div class="modal fade db-modal" id="prop-chlddbmodel-edit" role="dialog" data-backdrop="static" data-keyboard="false">
                                    <div class="modal-dialog modal-sm">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="prop-chlddbmodel-edit-close close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Editing Property : (Label Name)</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <form name="frm-editItm" class="frm-editItm" enctype="multipart/form-data">
                                                    <div class="col-lg-12">
                                                        <div class="col-lg-4">Label</div>
                                                        <div class="col-lg-8">
                                                            <input class="form-control input-lg pcatmodal-lbl-input-edit-add" type="text" required="required">
                                                            <input type="hidden" value="" class="prop-chlddbmodel-edit-hid"><input type="hidden" class="prop-type-hid" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="col-lg-4">Type</div>
                                                        <div class="col-lg-8">
                                                            <select class="form-control drp-clddb-add-edit" disabled="disabled">
                                                                    <option value="text">Text Input</option>
                                                                    <option value="img">Image Upload</option>
                                                                    <option value="number">Number Input</option>
                                                                    <option value="bool">Check Box</option>
                                                                    <option value="imgbool">Icon Check Box</option>
                                                                    <option value="imglist">Icon Dropdown List</option>
                                                                    <option value="list">Dropdown List</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 def_val-edit">
                                                        <div class="col-lg-4">Default Value</div>
                                                        <div class="col-lg-8">
                                                            <div class="col-lg-10 send-full" style="padding: 0;">
                                                                <input class="form-control input-lg chldmodal-lbl-input-edit" type="text" required="">
                                                            </div>
                                                            <div class="col-lg-2 rem-full" style="padding: 0;">
                                                                <button class="btn btn-primary chldmodal-lbl-btn-additm" data-toggle="tooltip" title="" type="button" style="float: right;" data-original-title="Add More">
                                                            <i class="fa fa-plus"></i>
                                                            </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 opts-p" id="def-img-p" style="display: none;">
                                                        <div class="col-lg-4">Default Value</div>
                                                        <div class="col-lg-8">
                                                            <ul class="ul-imgModED">
                                                                <li>
                                                                   <button class="btn btn-primary" data-toggle="tooltip" title="" type="button" style="float: left;">
                                                                        <i class="fa fa-camera"></i>
                                                                        <input type="file" name="file-opt" id="file-opt">
                                                                    </button> 
                                                                </li>
                                                                <li>
                                                                    <a class="img-lnk-icochkImpreEd" data-img-temps="" data-toggle="modal" data-target="#myModal-imgprev">
                                                                        <button class="btn btn-primary chldmodal-lbl-btn-imgprevED" data-toggle="tooltip" title="" type="button" data-original-title="Preview"><i class="fa fa-image"></i>
                                                                        </button>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 opts-ch" id="def-bool-ch">
                                                        <div class="col-lg-4">Default Value</div>
                                                        <div class="col-lg-8">
                                                            <div class="checkbox checkbox-primary">
                                                                <input id="prop-chkid" type="checkbox" name="bool-chk" class="prop-chkid" value="1">
                                                                <label for="prop-chkid"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="col-lg-10"></div>
                                                        <div class="col-lg-2">
                                                            <button class="btn btn-primary chldmodal-lbl-btn-edit" data-toggle="tooltip" title="" type="button" style="float: right; margin: 2% 0.7% 0 3%;" data-original-title="Save">
                                                            <i class="fa fa-save"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>                               
                                <div class="modal fade db-modal" id="prop-chlddbmodel" role="dialog" data-backdrop="static" data-keyboard="false">
                                    <div class="modal-dialog modal-sm">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="prop-chlddbmodel-close close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Adding new property</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <form name="add-prop" class="add-prop" id="add-prop" enctype="multipart/form-data">
                                                    <div class="col-lg-12">
                                                        <div class="col-lg-4"><span>Label</span></div>
                                                        <div class="col-lg-8"><input type="text" name="lbl-txt" class="form-control input-lg lbl-txt"></div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="col-lg-4"><span>Type</span></div>
                                                        <div class="col-lg-8">
                                                            <select name="drp-opt" id="drp-opt" class="form-control drp-opt">
                                                                <option value="text">Text Input</option>
                                                                <option value="img">Image Upload</option>
                                                                <option value="number">Number Input</option>
                                                                <option value="bool">Check Box</option>
                                                                <option value="imgbool">Icon Check Box</option>
                                                                <option value="imglist">Icon Dropdown List</option>
                                                                <option value="list">Dropdown List</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!--Default Values-->
                                                    <div id="past-area" class="past-area">
                                                        <div class="col-lg-12">
                                                            <div class="col-lg-4" style="margin-bottom: 3px;">Default Value</div>
                                                            <div class="col-lg-8">
                                                                <input required class="form-control input-lg" type="text" value="Text" name="txt" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Default Values-->
                                                    <div class="col-lg-12">
                                                        <div class="col-lg-4"></div>
                                                        <div class="col-lg-8"><button class="btn btn-primary" type="submit" name="inpsub" value="Submit"><i class="fa fa-save"></i></button></div>
                                                    </div>
                                                </form>

                                                <!--Orig Div-->
                                                <div class="col-lg-12 opts" id="def-text">
                                                    <div class="col-lg-4">Default Value</div>
                                                    <div class="col-lg-8">
                                                        <input required class="form-control input-lg" type="text" value="Text" name="txt" />
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 opts" id="def-img">
                                                    <div class="col-lg-4">Default Value</div>
                                                    <div class="col-lg-8">
                                                        <ul class="ul-imgMod">
                                                            <li>
                                                                <button class="btn btn-primary" data-toggle="tooltip" title="" type="button" style="float: left;">
                                                                    <i class="fa fa-camera"></i>
                                                                    <input type="file" name="file-optadd" id="file-optadd" required="required">
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <a class="img-lnk-icochkImpre" data-img-temps="" data-toggle="modal" data-target="#myModal-imgprev">
                                                                    <button class="btn btn-primary chldmodal-lbl-btn-imgprev" data-toggle="tooltip" title="" type="button" data-original-title="Preview"><i class="fa fa-image"></i>
                                                                    </button>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 opts" id="def-number">
                                                    <div class="col-lg-4">Default Value</div>
                                                    <div class="col-lg-8">
                                                        <input class="form-control input-lg" type="number" value="0" name="num" />
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 opts" id="def-bool">
                                                    <div class="col-lg-4">Default Value</div>
                                                    <div class="col-lg-8">
                                                        <div class="checkbox checkbox-primary">
                                                            <input id="prop-chkid" type="checkbox" name="bool-chk" class="prop-chkid" value="1">
                                                            <label for="prop-chkid"></label>
                                                        </div>
                                                    </div>
                                                </div> 

                                                <div class="col-lg-12 opts" id="def-imgbool">
                                                    <div class="col-lg-4">Default Value</div>
                                                    <div class="col-lg-8">
                                                        <div class="col-lg-12">
                                                            <ul class="def-boul">
                                                                <li>
                                                                    <button class="btn btn-primary del-icoImg" data-toggle="tooltip" title="" type="button" data-original-title="Delete"><i class="fa fa-times-circle-o"></i></button>
                                                                </li>
                                                                <li>
                                                                    <a class="img-lnk-icochk" data-img-temps="default.png" data-toggle="modal" data-target="#myModal-imgprev">
                                                                        <button class="btn btn-primary chldmodal-lbl-btn-edit" data-toggle="tooltip" title="" type="button" data-original-title="Preview"><i class="fa fa-image"></i></button>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <button class="btn btn-primary" data-toggle="tooltip" title="" type="button" style="float: right;" data-original-title="Save">
                                                                        <i class="fa fa-camera"></i>
                                                                    <input type="file" class="chk-file-icochk" name="chk-file-icochk" required>
                                                                    </button>
                                                                </li>
                                                            </ul>
                                                            
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="pretty p-image p-plain" style="margin: 8px 7px; float: right;">
                                                                <input id="prop-chkidimg" type="checkbox" name="bool-imgchk" class="prop-chkidimg" value="1">
                                                                <div class="state">
                                                                    <img class="image grab-chkimg" src="upload_images/icon_chk_box/default.png">
                                                                    <label></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 opts" id="def-imglist">
                                                    <div class="col-lg-12 rem-pad set-drplstsetImg">
                                                        <div class="col-lg-4">Default Value</div>
                                                        <div class="col-lg-7">
                                                            <select class="form-control" name="img-lst"></select>
                                                        </div>
                                                        <div class="col-lg-1">
                                                            <span id="btn-imglst-pls-drp" class="btn-imglst-pls-drp">
                                                                <button class="btn btn-primary" data-toggle="tooltip" title="" type="button" style="margin-right: 0.7%;" data-original-title="Properties">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 opts" id="def-list">
                                                    <div class="col-lg-12 rem-pad set-drplstset">
                                                        <div class="col-lg-4">Default Value</div>
                                                        <div class="col-lg-7">
                                                            <select class="form-control" name="lst">    
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-1">
                                                            <span id="btn-imglst-pls" class="btn-imglst-pls">
                                                                <button class="btn btn-primary" data-toggle="tooltip" title="" type="button" style="margin-right: 0.7%;" data-original-title="Properties">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="col-lg-4"></div>
                                                        <div class="col-lg-7"></div>
                                                        <div class="col-lg-1"></div>
                                                    </div>
                                                </div>
                                                <!--Orig div-->
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="modal fade db-modal prop-paredbmodel" id="prop-paredbmodel" role="dialog" data-backdrop="static" data-keyboard="false">
                                    <div class="modal-dialog modal-sm">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Properties of [Property Name]</h4>
                                        </div>
                                        <div class="modal-body appe-mod-body">
                                            <div class="row">
                                                <div class="col-lg-11"></div>
                                                <div class="col-lg-1">
                                                    <span data-toggle="modal" id="prop-chlddbmodel-btn" data-target="#prop-chlddbmodel">
                                                        <button class="btn btn-primary" data-toggle="tooltip" title="Properties" type="button" style="margin-right: 0.7%;">
                                                        <i class="fa fa-plus"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="row rw-lst">
                                                <div class="col-lg-12">
                                                    <div class="col-lg-4">Label</div>
                                                    <div class="col-lg-6">
                                                        <select disabled="disabled" class="form-control drp-clddb-add">
                                                            <option value="text">Text Input</option>
                                                            <option value="img">Image Upload</option>
                                                            <option value="number">Number Input</option>
                                                            <option value="bool">Check Box</option>
                                                            <option value="imgbool">Icon Check Box</option>
                                                            <option value="imglist">Icon Dropdown List</option>
                                                            <option value="list">Dropdown List</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-2"></div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="col-lg-4">Description</div>
                                                    <div class="col-lg-6">
                                                        <select disabled="disabled" class="form-control drp-clddb-add">
                                                            <option value="text">Text Input</option>
                                                            <option value="img">Image Upload</option>
                                                            <option value="number">Number Input</option>
                                                            <option value="bool">Check Box</option>
                                                            <option value="imgbool">Icon Check Box</option>
                                                            <option value="imglist">Icon Dropdown List</option>
                                                            <option value="list">Dropdown List</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-2"></div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="col-lg-4">Price</div>
                                                    <div class="col-lg-6">
                                                        <select disabled="disabled" class="form-control drp-clddb-add">
                                                            <option value="text">Text Input</option>
                                                            <option value="img">Image Upload</option>
                                                            <option value="number">Number Input</option>
                                                            <option value="bool">Check Box</option>
                                                            <option value="imgbool">Icon Check Box</option>
                                                            <option value="imglist">Icon Dropdown List</option>
                                                            <option value="list">Dropdown List</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-2"></div>
                                                </div>
                                                <div class="col-lg-12 append-data">
                                                    <div class="col-lg-4">Tags</div>
                                                    <div class="col-lg-6">
                                                        <select disabled="disabled" class="form-control drp-clddb-add">
                                                            <option value="text">Text Input</option>
                                                            <option value="img">Image Upload</option>
                                                            <option value="number">Number Input</option>
                                                            <option value="bool">Check Box</option>
                                                            <option value="imgbool">Icon Check Box</option>
                                                            <option value="imglist">Icon Dropdown List</option>
                                                            <option value="list">Dropdown List</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-2"></div>
                                                </div>
                                                <div class="append-are-optssd">
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <!--Add Label Model-->
                                <div class="modal fade db-modal" id="catdbmodel" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Add</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form name="frm-add-catag">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="col-lg-12">
                                                            <h3 class="catmodal-lbl-h3">Label</h3>
                                                        </div>
                                                        <div class="col-lg-10">
                                                            <input name="catmodal-lbl-input" class="form-control input-lg catmodal-lbl-input" type="text" required="" style="width: 84% !important;">
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <button class="btn btn-primary catmodal-lbl-btn" data-toggle="tooltip" title="Save" type="submit" style="margin: 0% 0% 0 3%;">
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

                                <!--Edit Label Model-->
                                <div class="modal fade db-modal" id="dbcatEditmodel" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Edit</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <form name="frm-edit-catag" class="frm-edit-catag">
                                                    <input type="hidden" value="" name="hid_val_edit_lblcat" /> 
                                                    <div class="col-lg-12">
                                                        <div class="col-lg-12">
                                                            <h3 class="catmodal-lbl-h3">Label</h3>
                                                        </div>
                                                        <div class="col-lg-10">
                                                            <input class="form-control input-lg catEdmodal-lbl-input" type="text" required="" name="catEdmodal-lbl-input" style="width: 84% !important;">
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <button class="btn btn-primary catmodal-lbl-btn" data-toggle="tooltip" title="Save" type="submit" style="margin: 0% 0% 0 3%;">
                                                                <i class="fa fa-save"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>

                                <!--Delete Model-->
                                <div class="modal fade db-modal" id="dbcatdeletemodel" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Deleting</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <form name="frm-del-catag">
                                                    <input type="hidden" value="" name="delete_catag_hidid">
                                                    <div class="col-lg-12">
                                                        <h5>Continue with Delete?</h5>
                                                    </div>
                                                    <div class="col-lg-12 db-delbtns">
                                                        <button class="btn btn-danger waves-effect waves-light" type="submit">Yes</button>
                                                        <button class="btn btn-danger waves-effect waves-light" type="button">No</button>
                                                    </div>
                                                </form>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>

                                <!--DeleteAll Model-->
                                <div class="modal fade db-modal" id="dbcatdeleteallmodel" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Deleting Selected</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <h5>Continue with Delete?</h5>
                                                </div>
                                                <div class="col-lg-12 db-delbtns">
                                                    <button class="btn btn-danger waves-effect waves-light" type="submit">Yes</button>
                                                    <button class="btn btn-danger waves-effect waves-light" type="submit">No</button>
                                                </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                               
                                <div class="col-lg-12">
                                    <div class="col-lg-6" style="margin-bottom: 1%;">
                                        <span data-toggle="modal" data-target="#catdbmodel">
                                            <button class="btn btn-primary" data-toggle="tooltip" title="Add" type="button" style="margin-right: 0.7%;">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </span>
                                        <span data-toggle="modal" data-target="#dbcatdeleteallmodel">
                                            <button class="btn btn-primary" data-toggle="tooltip" title="Delete Selected" type="button" style="margin-right: 0.7%;">
                                                <i class="fa fa-times-circle-o"></i>
                                            </button>
                                        </span>
                                        <span class="prop-paredbmodel set-prop-data" data-target="#prop-paredbmodel">
                                            <button class="btn btn-primary" data-toggle="tooltip" title="Properties" type="button" style="margin-right: 0.7%;">
                                            <i class="ion-ios7-glasses"></i>
                                            </button>
                                        </span>
                                        <button class="btn btn-primary" data-toggle="tooltip" title="Export" type="button" style="margin-right: 0.7%;">
                                            <i class="fa fa-dedent"></i>
                                        </button>
                                        <button class="btn btn-primary" data-toggle="tooltip" title="Import" type="button" style="margin-right: 0.7%;">
                                            <i class="fa fa-indent"></i>
                                        </button>
                                    </div>
                                    <div class="col-lg-6">
                                            <select id="catag-drp" name="catag-drp" class="form-control catag-drp" style="float: right; width: 60%;">
                                            </select>
                                            <h5 style="float: right; margin-right: 2%;">Current Collection</h5>
                                    </div>
                                </div>    
                                <div class="col-lg-12">
                                    <table id="tbl-dbcatcoll" class="display compact nowrap tbl-dbcatcoll" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th style="text-align: left;">
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="checkbox222" type="checkbox" class="dbcat-chk-all">
                                                        <label for="checkbox222"></label>
                                                    </div>
                                                </th>
                                                <th>Label</th>
                                                <th>#Items</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--Collection Tab section-->
                        <div class="tab-pane" id="collections-2">
                            <div class="row">
                                <!--Add Label Model-->
                                <div class="modal fade db-modal" id="dbmodel" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Add Collection</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form name="frm-add-col-lbl" id="frm-add-col-lbl">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="col-lg-12">
                                                            <h3 class="modal-lbl-h3">Label</h3>
                                                        </div>
                                                        <div class="col-lg-10">
                                                            <input name="add-col-lblnm" class="form-control input-lg modal-lbl-input" type="text" required="" style="width: 84% !important;">
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <button name="add-col-lblbtn" class="btn btn-primary modal-lbl-btn" data-toggle="tooltip" title="Save" type="submit" style="margin: 0% 0% 0 3%;">
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
                                <div class="modal fade db-modal" id="dbEditmodel" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Collection, Edit Label : </h4>
                                        </div>
                                        <div class="modal-body">
                                            <form class="frm-edit-coll-lbl">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <h3 class="modal-lbl-h3">Label</h3>
                                                        <input name="modal-coll-input-edit" class="form-control input-lg modal-lbl-input" type="text" value="" style="width: 84% !important;">
                                                        <input type="hidden" name="hid_val_edit_lbl" value=""/>
                                                        <button class="btn btn-primary modal-lbl-btn" data-toggle="tooltip" title="Save" type="submit" style="margin: 0% 0% 0% 3%;">
                                                            <i class="fa fa-save"></i>
                                                        </button>
                                                     </div>
                                                </div>
                                            </form>
                                            
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <!--Delete Model-->
                                <div class="modal fade db-modal" id="dbdeletemodel" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Deleting</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <form class="delete-collection">
                                                    <input type="hidden" value="" name="del-hidden-hid" class="del-hidden-hid">
                                                    <div class="col-lg-12">
                                                        <h5>Are you about to delete Shop, Continue with Delete?</h5>
                                                    </div>
                                                    <div class="col-lg-12 db-delbtns">
                                                        <button class="btn btn-danger waves-effect waves-light" type="submit">Yes</button>
                                                        <button class="btn btn-danger waves-effect waves-light no-conf-del" type="button">No</button>
                                                    </div>
                                                </form>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>

                                <!--DeleteAll Model-->
                                <div class="modal fade db-modal" id="dbdeleteallmodel" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Deleting Selected</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <h5>Continue with Delete Selected items?</h5>
                                                </div>
                                                <div class="col-lg-12 db-delbtns">
                                                    <button class="btn btn-danger waves-effect waves-light del-all-coll" type="submit">Yes</button>
                                                    <button class="btn btn-danger waves-effect waves-light no-coll-delall" type="submit">No</button>
                                                </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                               
                                <div class="col-lg-12">
                                    <div class="col-lg-6" style="margin-bottom: 1%;">
                                        <span data-toggle="modal" data-target="#dbmodel">
                                            <button class="btn btn-primary" data-toggle="tooltip" title="Add" type="button" style="margin-right: 0.7%;">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </span>
                                        <span data-toggle="modal" data-target="#dbdeleteallmodel">
                                            <button class="btn btn-primary" data-toggle="tooltip" title="Delete Selected" type="button" style="margin-right: 0.7%;">
                                                <i class="fa fa-times-circle-o"></i>
                                            </button>
                                        </span>
                                        <button class="btn btn-primary" data-toggle="tooltip" title="Find" type="button" style="margin-right: 0.7%;">
                                            <i class="ion-ios7-glasses"></i>
                                        </button>
                                    </div>                                    
                                    <div class="col-lg-6">
                                        
                                    </div>
                                </div>    
                                <div class="col-lg-12">
                                    <table id="tbl-dbcoll" class="display compact nowrap tbl-dbcoll" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th style="text-align: left;">
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="checkbox22" type="checkbox" class="db-chk-all">
                                                        <label for="checkbox22"></label>
                                                    </div>
                                                </th>
                                                <th>Label</th>
                                                <th>#Catagories</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>    
                        </div>
                        <!--Templates Tab section-->
                        <div class="tab-pane" id="templates-2">
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
                                                        <input value="" class="form-control input-lg" name="tmplabel" type="text" />
                                                        <input type="hidden" name="eid" value="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="col-lg-5">Description</div>
                                                    <div class="col-lg-7">
                                                        <textarea class="add-itm-area add-itm-area" name="tmpdescription"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="col-lg-5">Width[Inches]</div>
                                                    <div class="col-lg-7">
                                                        <input value="" class="form-control input-lg" name="tmpwidth" type="text" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="col-lg-5">Height[Inches]</div>
                                                    <div class="col-lg-7">
                                                        <input value="" class="form-control input-lg" name="tmpheiht" type="text" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="col-lg-5">Background Color</div>
                                                    <div class="col-lg-7">
                                                        <div id="colorSelector" class="bgcolor_picker1">
                                                            <div style="background-color: "></div>
                                                            <input type="hidden" value="" name="tmpbclor">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="col-lg-5">Outline Color</div>
                                                    <div class="col-lg-7">
                                                        <div id="colorSelector2" class="otcolor_picker1">
                                                            <div style="background-color: "></div>
                                                            <input type="hidden" value="" name="tmpocolor">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="col-lg-5">Outline Size</div>
                                                    <div class="col-lg-7">
                                                        <input class="form-control input-lg" type="number" name="tmposize" value="" min="1" max="1000" style="width: 100%;">
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
                            <div class="row">
                                <div class="col-lg-12" style="margin-bottom: 1%;">                                    
                                    <span data-toggle="modal" data-target="#dbEditmodel-template">
                                        <button class="btn btn-primary" data-toggle="tooltip" title="Add" type="button" style="margin-right: 0.7%;">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </span>
                                </div>    
                                <div class="col-lg-12">                                    
                                    <table id="tbl-tpmlet-db" class="display compact nowrap tbl-tpmlet" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th>Label</th>
                                                <th>Description</th>
                                                <th>Size[Inches]</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--Paper Template Tab section-->
                        <div class="tab-pane" id="papertemplate-2">
                            <div class="modal fade db-modal" id="dbmodel-template-pepr" role="dialog">
                                <div class="modal-dialog modal-sm">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h4 class="modal-title">Edit Paper Template</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" id="tmpeditFrom-pepr" enctype="multipart/form-data">
                                            <div class="row add-itm-row-templ">
                                                <div class="col-lg-12">
                                                    <div class="col-lg-5">label</div>
                                                    <div class="col-lg-7">
                                                        <input value="" class="form-control input-lg" name="tmplabel-pepr" type="text" />
                                                        <input type="hidden" name="eid-pepr" value="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="col-lg-5">Description</div>
                                                    <div class="col-lg-7">
                                                        <textarea class="add-itm-area add-itm-area" name="tmpdescription-pepr"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="col-lg-5">Width[Inches]</div>
                                                    <div class="col-lg-7">
                                                        <input value="" class="form-control input-lg" name="tmpwidth-pepr" type="text" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="col-lg-5">Height[Inches]</div>
                                                    <div class="col-lg-7">
                                                        <input value="" class="form-control input-lg" name="tmpheiht-pepr" type="text" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="col-lg-5">Background Color</div>
                                                    <div class="col-lg-7">
                                                        <div id="colorSelector" class="bgcolor_picker1-pepr">
                                                            <div style="background-color: "></div>
                                                            <input type="hidden" value="" name="tmpbclor-pepr">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="col-lg-5">Outline Color</div>
                                                    <div class="col-lg-7">
                                                        <div id="colorSelector2" class="otcolor_picker1-pepr">
                                                            <div style="background-color: "></div>
                                                            <input type="hidden" value="" name="tmpocolor-pepr">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="col-lg-5">Outline Size</div>
                                                    <div class="col-lg-7">
                                                        <input class="form-control input-lg" type="number" name="tmposize-pepr" value="" min="1" max="1000" style="width: 100%;">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="col-lg-5">Image Background</div>
                                                    <div class="col-lg-7">
                                                        <button class="btn btn-primary itemsmodal-lbl-btn" data-toggle="tooltip" title="upload Template Image" type="button">
                                                        <i class="fa fa-camera"></i>
                                                        <input type="file" name="tmptmpImage-pepr" id="tmptmpImage-pepr">
                                                        </button>

                                                        <a class="img-lnk-temp-pepr" data-img-temp='' data-toggle="modal" data-target="#myModal-tem-pepr">
                                                            <button name="edit_tmp_view" class="btn btn-primary itemsmodal-lbl-btn add-itm-imgbtn" data-toggle="tooltip" title="View Current Image" type="button" >
                                                                <i class="fa fa-image"></i>
                                                            </button>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="col-lg-5"></div>
                                                    <div class="col-lg-7">
                                                        <button class="btn btn-primary itemsmodal-lbl-btn-pepr" data-toggle="tooltip" title="Save" type="submit" style="float: right;">
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
                            <div class="modal fade" id="myModal-tem-pepr" role="dialog">
                                <div class="modal-dialog modal-sm">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h4 class="modal-title">Current Image</h4>
                                    </div>
                                    <div class="modal-body">
                                      <img src="" class="img-responsive itm-img-temp-pepr">
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="modal fade db-modal" id="dbEditmodel-template-pepr" role="dialog">
                                <div class="modal-dialog modal-sm">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h4 class="modal-title">Add Paper Template</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" id="tmpaddFrom-pepr" enctype="multipart/form-data">
                                            <div class="row add-itm-row-templ">
                                                <div class="col-lg-12">
                                                    <div class="col-lg-5">label</div>
                                                    <div class="col-lg-7">
                                                        <input class="form-control input-lg" name="tlabel-pepr" type="text" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="col-lg-5">Description</div>
                                                    <div class="col-lg-7">
                                                        <textarea class="add-itm-area add-itm-area" name="tdescription-pepr">
                                                            
                                                        </textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="col-lg-5">Width[Inches]</div>
                                                    <div class="col-lg-7">
                                                        <input class="form-control input-lg" name="twidth-pepr" type="text" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="col-lg-5">Height[Inches]</div>
                                                    <div class="col-lg-7">
                                                        <input class="form-control input-lg" name="theiht-pepr" type="text" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="col-lg-5">Background Color</div>
                                                    <div class="col-lg-7">
                                                        <div id="colorSelector" class="bgcolor_picker-pepr">
                                                            <div style="background-color: #0000ff"></div>
                                                            <input type="hidden" value="#0000ff" name="bclor-pepr">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="col-lg-5">Outline Color</div>
                                                    <div class="col-lg-7">
                                                        <div id="colorSelector2" class="otcolor_picker-pepr">
                                                            <div style="background-color: #0000ff"></div>
                                                            <input type="hidden" value="#0000ff" name="ocolor-pepr">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="col-lg-5">Outline Size</div>
                                                    <div class="col-lg-7">
                                                        <input class="form-control input-lg" type="number" name="osize-pepr" min="1" max="1000" style="width: 100%;">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="col-lg-5">Image Background</div>
                                                    <div class="col-lg-7">
                                                        <button class="btn btn-primary itemsmodal-lbl-btn" data-toggle="tooltip" title="upload Template Image" type="button">
                                                        <i class="fa fa-camera"></i>
                                                        <input type="file" name="tmpImage-pepr" id="tmpImage-pepr">
                                                        </button>
                                                        <button class="btn btn-primary" data-toggle="tooltip" title="" type="button" style="margin-right: 0.7%;" data-original-title="Export">
                                                            <i class="fa fa-crop"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="col-lg-5"></div>
                                                    <div class="col-lg-7">
                                                        <button class="btn btn-primary itemsmodal-lbl-btn-pepr" data-toggle="tooltip" title="Save" type="submit" style="float: right;">
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
                            <div class="row">
                                <div class="col-lg-12" style="margin-bottom: 1%;">                                    
                                    <span data-toggle="modal" data-target="#dbEditmodel-template-pepr">
                                        <button class="btn btn-primary" data-toggle="tooltip" title="Add" type="button" style="margin-right: 0.7%;">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </span>
                                </div>    
                                <div class="col-lg-12">                                    
                                    <table id="tbl-tpmlet-db-pepr" class="display compact nowrap tbl-tpmlet-db-pepr" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th>Label</th>
                                                <th>Description</th>
                                                <th>Size[Inches]</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                    </table>
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
            jQuery(document).ready(function($) {
                $('#tbl-label-db_filter').insertAfter('.past-search-itm');                

                var table =$('#tbl-dbitemscoll').DataTable( {
                    "scrollY": "500px",
                    paging: false,
                    "columnDefs": [
                        
                        {
                            "targets": [ 5 ],
                            "visible": false
                        }
                        ,
                        {
                            "targets": [ 6 ],
                            "visible": false
                        }
                        ,
                        {
                            "targets": [ 7 ],
                            "visible": false
                        }
                        ,
                        {
                            "targets": [ 8 ],
                            "visible": false
                        }
                        ,
                        {
                            "targets": [ 9 ],
                            "visible": false
                        }
                        ,
                        {
                            "targets": [ 10 ],
                            "visible": false
                        }
                        ,
                        {
                            "targets": [ 11 ],
                            "visible": false
                        },
                        {
                            "targets": [ 12 ],
                            "visible": false
                        },
                        {
                            "targets": [ 13 ],
                            "visible": false
                        }
                        ,
                        {
                            "targets": [ 14 ],
                            "visible": false
                        }
                    ]
                } );

                $('#templ-tbl-dbcoll').DataTable( {
                    "scrollY": "500px"
                } );

                $('a[data-toggle="tab"]').on( 'shown.bs.tab', function (e) {
                    $.fn.dataTable.tables( {visible: true, api: true} ).columns.adjust();
                } );

                $(".db-chk-all").click(function () {
                    $("input[class='db-chk']").not(this).prop('checked', this.checked);
                });

                $(".dbcat-chk-all").click(function () {
                    $("input[class='dbcat-chk']").not(this).prop('checked', this.checked);
                });

                $(".dbitems-chk-all").click(function () {
                    $("input[class='dbitems-chk']").not(this).prop('checked', this.checked);
                });   

                $( "input[class='toggle-vis']" ).change(function() {
                    var column = table.column( $(this).attr('data-column') );
                    column.visible( ! column.visible() );
                });
                
                $('[data-toggle="tooltip"]').tooltip();

                $('#colorSelector').ColorPicker({
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
                        $('#colorSelector div').css('backgroundColor', '#' + hex);
                    }
                });

                $('#colorSelector2').ColorPicker({
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
                        $('#colorSelector2 div').css('backgroundColor', '#' + hex);
                    }
                });

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

                $('.bgcolor_picker-pepr').ColorPicker({
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
                        $('.bgcolor_picker-pepr div').css('backgroundColor', '#' + hex);
                        $('input[name="bclor-pepr"]').val('#'+hex);
                    }
                });
                $('.otcolor_picker-pepr').ColorPicker({
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
                        $('.otcolor_picker-pepr div').css('backgroundColor', '#' + hex);
                        $('input[name="ocolor-pepr"]').val('#'+hex);
                    }
                });

                $('.bgcolor_picker1-pepr').ColorPicker({
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
                        $('.bgcolor_picker1-pepr div').css('backgroundColor', '#' + hex);
                        $('input[name="tmpbclor-pepr"]').val('#'+hex);
                    }
                });
                $('.otcolor_picker1-pepr').ColorPicker({
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
                        $('.otcolor_picker1-pepr div').css('backgroundColor', '#' + hex);
                        $('input[name="tmpocolor-pepr"]').val('#'+hex);
                    }
                });

            } );
        </script>
        <script type="text/javascript" src="assets/js/main.js"></script>

        <script type="text/javascript">
            <?php 
            $cons= new Mysql();
            $getRes= $cons-> dbConnect();
            
            $rowArr="";
            $sql="SELECT categoriesproperties.label FROM categoriesproperties INNER JOIN categories ON categories.id=categoriesproperties.category_id             
            INNER JOIN collections ON collections.id = categories.collection_id AND collections.user_id=".$_SESSION['main']['id']." ORDER BY categoriesproperties.id ASC;";
            $qry=mysqli_query($getRes,$sql);
            while($row = mysqli_fetch_assoc($qry)) { 

                $rowArr.='
                    { "data": "'.$row['label'].'" },'
                ;

            }

            $origArr=rtrim($rowArr, ",");

        ?> 
            
            var table =$('#tbl-label').DataTable({
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
        </script>

<!--?php
    $cons= new Mysql();
    $getRes= $cons-> dbConnect();

    $records=$cons->selectAll('collections');
    foreach ($records as $rec) {   
?-->
<!-- <script type="text/javascript">
    $('form[class="frm-edit-col-lbl_< ?php echo $rec['id']; ?>"]').submit(function(event) {
        var modal_lbl_input = $('input[name="modal-col-input-edit"]').val();
        var hid_val = $('input[name="hid_val_edit_lbl"]').val();
        if(modal_lbl_input==''){
            errorAlert('Label is Required !');
            $('input[name="modal-lbl-input_< ?php echo $rec['id']; ?>"]"]').focus();
            return false;               
        }else{
             $.ajax({
                url: "lib/functions.php?action=coll_input_edit", // Url to which the request is send
                type: "POST",             // Type of request to be send, called as method
                data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
                contentType: false,       // The content type used when sending data to the server.
                cache: false,             // To unable request pages to be cached
                processData:false,        // To send DOMDocument or non processed data file it is set to false
                    success: function(data)   // A function to be called if request succeeds
                    {
                        if(data==1){
                            successAlert('Item updated successfuly !');
                            setTimeout("document.location.reload();", 4000);
                        }
                        else if(data==3){
                            errorAlert('Invalid File Type !');
                            return false;
                        }                      
                    }
             });
            
        }
        return false;  
    });
</script> -->
<!--?php } ?-->
        
    </body>
</html>