<div class="panel panel-default">
	<div class="panel-body">
		<?php if(isset($setting->web_logo)): ?>
		<p><img src="<?php echo e(asset('public/img/'.$setting->web_logo)); ?>" class="img-responsive center-block"></p>
		<?php endif; ?>
	</div>
</div>