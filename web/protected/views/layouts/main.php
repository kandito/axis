<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/favicon.ico">

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/general.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>
    <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">AXIS</a>
        </div>
        <div class="collapse navbar-collapse">
          	<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
					array('label'=>'Home', 'url'=>array('/site/index')),
					array('label'=>'About', 'url'=>array('/site/about')),
					array('label'=>'Contact', 'url'=>array('/site/contact')),
				),
				'encodeLabel' => false,
                'htmlOptions' => array(
                    'class'=>'nav navbar-nav',
                	),
			)); ?>

          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo Yii::app()->user->name ?> <b class="caret"></b></a>

              <?php $this->widget('zii.widgets.CMenu',array(
				'items'=>array(
					array('label'=>'Settings', 'url'=>array('/site/settings'), 'visible'=>!Yii::app()->user->isGuest),
					array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
					array('label'=>'Logout ('.Yii::app()->user->name.') ', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
				),
				'encodeLabel' => false,
                'htmlOptions' => array(
                    'class'=>'dropdown-menu',
                	),
			)); ?>
            </li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div><!-- /.navbar -->


    <?php echo $content; ?>

<!-- Modal for Delete-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Apakah anda yakin akan menghapus data ini?</h4>
      </div>
      <div class="modal-body">
       Sistem yang sudah dihapus tidak dapat dikembalikan lagi.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>

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
