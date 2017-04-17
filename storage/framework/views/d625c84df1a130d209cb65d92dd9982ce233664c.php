<div class="slidebar">
	<?php if(count($posts_sidebar)): ?>
	<h3 class="arrow_box">Sản phẩm gần đây</h3>
	<?php $__currentLoopData = $posts_sidebar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
	<div class="post">
		<h3 class="text-center text-uppercase post-name"><?php echo e($post->post_name); ?></h3>
		<h3 class="post-avatar">
			<a href="<?php echo e(MyAPI::getUrlPostObj($post)); ?>"><img src="<?php echo e(asset('public/img/'.$post->post_avatar)); ?>" class="center-block img-responsive"></a>
		</h3>
		<h4 class="text-center post-price"><?php echo e($post->postSP ? number_format($post->postSP->post_price,0,',','.') : ''); ?> VNĐ</h4>
	</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	<?php endif; ?>
	<?php if(isset($data['post'])): ?>
		<?php   
			$term = $data['post']->term;
			$posts_lienquan = $term->post()->where('id','<>',$data['post']->id)->limit(4)->get();
		 ?>
		<?php if(count($posts_lienquan)): ?>
		<h3 class="arrow_box">Sản phẩm liên quan</h3>
		<?php $__currentLoopData = $posts_lienquan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<div class="post">
			<h3 class="text-center text-uppercase post-name"><?php echo e($post->post_name); ?></h3>
			<h3 class="post-avatar">
				<a href="<?php echo e(MyAPI::getUrlPostObj($post)); ?>"><img src="<?php echo e(asset('public/img/'.$post->post_avatar)); ?>" class="center-block img-responsive"></a>
			</h3>
			<h4 class="text-center post-price"><?php echo e($post->postSP ? number_format($post->postSP->post_price,0,',','.') : ''); ?> VNĐ</h4>
		</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
		<?php endif; ?>
	<?php endif; ?>
</div>