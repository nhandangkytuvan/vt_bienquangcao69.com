<?php $__env->startSection('title'); ?>
	<title><?php echo e($setting->web_name); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('keyword'); ?>
<meta property="og:image" content="<?php echo e(asset('public/img/'.$setting->web_logo)); ?>">
<meta id="metaDescription" name="description" content="<?php echo e($setting->web_description); ?>">
<meta id="metaKeywords" name="keywords" content="<?php echo e($setting->web_keyword); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/css/global/hover/css/hover.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('public/css/desktop/desktop-pagination.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('public/css/desktop/desktop-product.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
	<main class="container product">
		<h3 class="text-uppercase text-center"><?php echo e($data['term']->term_name); ?></h3>
		<div class="post-sps">
			<div class="flex flex1 flex-wrap-wrap">
				<?php if($data['term']->children()->count()): ?>
					<?php 
						$term_childrens = $data['term']->children()->pluck('id')->toArray();
						$posts = App\Post::whereIn('term_id',$term_childrens)->latest()->paginate(8);
					 ?>
				<?php else: ?>
					<?php  $posts = $data['term']->post()->latest()->paginate(8);  ?>
				<?php endif; ?>
				<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
				<div class="flex1col1">
					<h3 class="text-uppercase post-name text-center"><a href="<?php echo e(MyAPI::getUrlPostObj($post)); ?>"><?php echo e($post->post_name); ?></a></h3>
					<h3 class="post-avatar">
						<a href="<?php echo e(MyAPI::getUrlPostObj($post)); ?>" class="hvr-float-shadow">
						<?php if($post->post_avatar): ?>
						<img src="<?php echo e(asset('public/img/'.$post->post_avatar)); ?>" class="center-block img-responsive">
						<?php endif; ?>
						</a>
					</h3>
					<h4 class="text-center text-uppercase post-price"><?php echo e($post->postSP ? number_format($post->postSP->post_price,0,',','.') : ''); ?> VNĐ</h4>
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
			</div>
		</div>
		<div class="my_pagination">
			<?php echo e($posts->links()); ?>

		</div>
	</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.desktop', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>