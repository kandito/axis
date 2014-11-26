<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
	
	
	<?php /* if(isset($this->breadcrumbs)):?>
	<div class="grey-bg">
      <div class="container main-content">
        <div class="row"> 
          <div class="col-xs-12">     
             <ol class="breadcrumb">
					<?php $this->widget('zii.widgets.CBreadcrumbs', array(
						'links'=>$this->breadcrumbs,
					)); ?><!-- breadcrumbs -->
            </ol>   
          </div>
        </div>
      </div>
    </div>
	<?php endif */?>
	
	<?php echo $content; ?>
	<!-- content -->
<?php $this->endContent(); ?>