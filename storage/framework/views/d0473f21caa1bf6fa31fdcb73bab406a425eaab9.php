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
	<link rel="stylesheet" href="<?php echo e(asset('public/css/desktop/desktop-home.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
	<main class="container home">
		<div class="post-sps">
			<div class="flex flex1 flex-wrap-wrap">
				<?php $__currentLoopData = $data['posts_sp']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
				<div class="flex1col1">
					<h3 class="text-uppercase post-name text-center"><a href="<?php echo e(MyAPI::getUrlPostObj($post)); ?>"><?php echo e($post->post_name); ?></a></h3>
					<h3 class="post-avatar">
						<a href="<?php echo e(MyAPI::getUrlPostObj($post)); ?>" class="hvr-float-shadow">
							<?php if($post->post_avatar): ?>
							<img src="<?php echo e(asset('public/img/'.$post->post_avatar)); ?>" class="center-block img-responsive">
							<?php endif; ?>
						</a>
					</h3>
					<h4 class="text-center text-uppercase post-price"><?php echo e($post->postSP ? number_format ($post->postSP->post_price,0,',','.') : ''); ?> VNĐ</h4>
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
			</div>
		</div>
		<div class="post-news">
			<h3 class="text-uppercase dis-inline-block">Tin tức - Sự kiện</h3>
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1">
					<?php if($data['posts_new'][0]): ?>
					<h3><a href="<?php echo e(MyAPI::getUrlPostObj($data['posts_new'][0])); ?>"><img src="<?php echo e(asset('public/img/'.$data['posts_new'][0]->post_avatar)); ?>" class="center-block img-responsive"></a></h3>
					<h3 class="text-uppercase"><a href="<?php echo e(MyAPI::getUrlPostObj($data['posts_new'][0])); ?>"><?php echo e($data['posts_new'][0]->post_name); ?></a></h3>
					<p class="text-justify">
						<?php echo e(MyAPI::getLimitWord($data['posts_new'][0]->post_description,40)); ?>...
					</p>
					<?php  unset($data['posts_new'][0]);  ?>
					<?php endif; ?>
				</div>
				<div class="flex1col2">
					<?php $__currentLoopData = $data['posts_new']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<div>
						<h3><i class="fa fa-angle-double-right"></i><a href="<?php echo e(MyAPI::getUrlPostObj($post)); ?>"><?php echo e($post->post_name); ?></a></h3>
						<p>
							<?php echo e(MyAPI::getLimitWord($post->post_description,20)); ?>...
						</p>
					</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
				</div>
				<div class="flex1col3">
					<video width="100%" height="275px" controls loop>
					  	<source src="<?php echo e(asset('public/video/videoled.mp4')); ?>" type="video/mp4">
					</video>
				</div>
			</div>
		</div>
	</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.desktop', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>