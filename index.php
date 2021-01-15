<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="Tag Web Application">

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

        <title>Tag Web Application</title>
        
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/core.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/components.css" rel="stylesheet" type="text/css">
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css">
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css">
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css">
        <script src="assets/js/modernizr.min.js"></script>
    </head>
    <body>

        <div class="wrapper-page">
            <div class="panel panel-color panel-primary panel-pages">
                <div class="panel-heading bg-img"> 
                    <div class="bg-overlay"></div>
                    <h3 class="text-center m-t-10 text-white"> Login </h3>
                </div> 


                <div class="panel-body">
                <form class="form-horizontal m-t-20" name="frm-login">
                    
                    <div class="form-group">
                        <div class="col-xs-12">
                            <label>Email</label>
                            <input class="form-control input-lg lgn" name="log-email" type="text">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <label>Password</label>
                            <input class="form-control input-lg lgn" name="log-pass" type="password">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="checkbox checkbox-primary">
                                    <input id="checkbox2" type="checkbox">
                                    <label for="checkbox2">
                                        Remember me
                                    </label>
                                </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-xs-12">
                            <button name="btn-submit" class="btn btn-primary btn-lg w-lg waves-effect waves-light" type="submit">Sign In</button>
                            <button class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 btn btn-primary btn-lg w-lg waves-effect waves-light" type="submit">Register</button>
                        </div>
                    </div>    
                    <div class="form-group alrt-dv" style="display: none;">
                        <div class="col-sm-12">
                            <div class="alert alert-danger">
                                <a href="#" class="alert-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <a href="recoverpw.html"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                        </div>
                    </div>
                </form> 
                </div>                                 
                
            </div>
        </div>

        
        <script>
            var resizefunc = [];
        </script>

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>        
        <script src="assets/js/jquery.app.js"></script>
        <script src="assets/plugins/moment/moment.js"></script>
        <script src="assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
        <script src="assets/plugins/counterup/jquery.counterup.min.js"></script>
        <script src="assets/plugins/sweetalert/dist/sweetalert.min.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.time.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.resize.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.pie.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.selection.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.stack.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.crosshair.js"></script>
        <script src="assets/pages/jquery.todo.js"></script>
        
        <script type="text/javascript">
            $(document).ready(function() {
                                    
                $('form[name="frm-login"]').submit(function(event) {
                    var user_name=$("input[name='log-email']").val();
                    var password=$("input[name='log-pass']").val();

                    $.post('lib/control.php', {user_name: user_name,password: password}, function(data, textStatus, xhr)
                    {
                        $(".alrt-dv").css('display','block')
                        $(".alert-link").html(data);
                    });    
                    return false;
                });
                
            });
        </script>     
    </body>
</html>