<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.js"></script>

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">

     <!-- Custom styles for this template -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/general.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/plugins/bootstrap-datetimepicker.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">AXIS</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">           
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i><?php echo Yii::app()->user->name ?></a>
                        </li>
                        <li class="divider"></li>
                        <li><?php echo CHtml::link('<i class="fa fa-sign-out fa-fw"></i> Logout', array('site/logout')); ?>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <?php $this->widget('zii.widgets.CMenu',array(
                        'items'=>array(
                                array('label'=>'<i class="fa fa-home fa-fw"></i> Dashboard', 'url'=>array('/systems/index')),
                                array('label'=>'<i class="fa fa-table fa-fw"></i> Standard', 'url'=>array('/standards/index')),
                                array('label'=>'<i class="fa fa-user fa-fw"></i> Users', 'url'=>array('/users/index', 'view' => 'about')),
                                array('label'=>'<i class="fa fa-phone fa-fw"></i> Contact', 'url'=>array('/site/contact')),
                            ),
                            'encodeLabel' => false,
                            'htmlOptions' => array(
                                'class'=>'nav',
                                'id' => 'side-menu',
                                ),
                        )); ?>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <?php echo $content; ?>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/moment.js"></script>

    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-datetimepicker.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/sb-admin-2.js"></script>

    <script>
    $('#myModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var url = button.data('url') // Extract info from data-* attributes
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this)

      modal.find('#modal_delete_url').on('click', function(event) {jQuery.yii.submitForm(this,url,{});return false;})
    })
    </script>

</body>

</html>
