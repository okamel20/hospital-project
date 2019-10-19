<?php echo $__env->make('admin.layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('admin.layouts.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="main-panel">
	<?php echo $__env->make('admin.layouts.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	
	<div class="content">
		
		<?php echo $__env->make('admin.layouts.msg', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    	<?php echo $__env->yieldContent('content'); ?>
	</div>
    
        
 
<?php echo $__env->make('admin.layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
