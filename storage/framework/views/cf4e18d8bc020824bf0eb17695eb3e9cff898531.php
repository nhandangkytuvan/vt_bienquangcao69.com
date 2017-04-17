<?php $__env->startSection('title'); ?>
    <title><?php echo e($setting->web_name); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('keyword'); ?>
	<?php echo $__env->make('seo.seo_home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('public/css/mobile/mobile-home.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
	<main class="container home">
		<h3>Sản phẩm gần đây</h3>
		<div class="posts-sp">
			<?php if($data['posts_sp'][0]): ?>
			<div class="post-top">
				<h3 class="post-avatar">
					<a href="<?php echo e(MyAPI::getUrlPostObj($data['posts_sp'][0])); ?>">
						<img src="<?php echo e(asset('public/img/'.$data['posts_sp'][0]->post_avatar)); ?>" class="img-responsive center-block">
					</a>
				</h3>
				<h3 class="post-name"><a href="<?php echo e(MyAPI::getUrlPostObj($data['posts_sp'][0])); ?>"><?php echo e($data['posts_sp'][0]->post_name); ?></a></h3>
				<p class="text-justify post-description">
					<?php echo e(MyAPI::getLimitWord($data['posts_sp'][0]->post_description,22)); ?>

				</p>
			</div>
			<?php  unset($data['posts_sp'][0]);  ?>
			<?php endif; ?>
			<div class="post-middle">
				<div class="flex flex1 flex-wrap-wrap">
					<?php $__currentLoopData = $data['posts_sp']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<div class="flex1col1">
						<h3>
							<a href="<?php echo e(MyAPI::getUrlPostObj($post)); ?>">
								<img src="<?php echo e(asset('public/img/'.$post->post_avatar)); ?>" class="center-block img-responsive">
							</a>
						</h3>
						<h4><a href=""><?php echo e($post->post_name); ?></a></h4>
					</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
				</div>
			</div>
		</div>
		<h3>Tin tức - Sự kiện</h3>
		<div class="posts-new">
			<?php if($data['posts_new'][0]): ?>
			<div class="post-top">
				<div class="flex flex1 justify-content-between">
					<div class="flex1col1">
						<h3 class="post-avatar">
							<a href="<?php echo e(MyAPI::getUrlPostObj($data['posts_new'][0])); ?>">
								<img src="<?php echo e(asset('public/img/'.$data['posts_new'][0]->post_avatar)); ?>" class="center-block img-responsive">
							</a>
						</h3>
					</div>
					<div class="flex1col2">
						<h3 class="post-name"><a href="<?php echo e(MyAPI::getUrlPostObj($data['posts_new'][0])); ?>"><?php echo e($data['posts_new'][0]->post_name); ?></a></h3>
						<p class="post-description"><?php echo e(MyAPI::getLimitWord($data['posts_new'][0]->post_description,30)); ?>...</p>
					</div>
				</div>
			</div>
			<?php  unset($data['posts_new'][0]);  ?>
			<?php endif; ?>
			<div class="post-middle">
				<ul>
					<?php $__currentLoopData = $data['posts_new']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<li>
						<h4>
							<i class="fa fa-angle-double-right"></i>
							<a href="<?php echo e(MyAPI::getUrlPostObj($post)); ?>"><?php echo e($post->post_name); ?></a>
						</h4>
					</li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
				</ul>
			</div>
		</div>
		<h3>Video nổi bật</h3>
		<div class="video">
			<div class="video-top">
				<video width="100%" height="275px" controls loop>
				  	<source src="<?php echo e($links[2]->link_url); ?>" type="video/mp4">
				</video>
			</div>
		</div>
	</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mobile', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>