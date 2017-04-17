<?php $__env->startSection('title'); ?>
    <title>Tìm kiếm - <?php echo e($setting->web_name); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('keyword'); ?>
<meta property="og:image" content="<?php echo e($setting->web_logo); ?>">
<meta id="metaDescription" name="description" content="">
<meta id="metaKeywords" name="keywords" content="">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('public/css/mobile/mobile-pagination.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/css/mobile/mobile-new.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
	<main class="container new">
		<h3><?php echo e($data['term']->term_name); ?></h3>
		<div class="posts-new">
			<?php 
				$posts = $data['term']->post()->latest()->paginate(5);
			 ?>
			<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
			<div class="post-top">
				<div class="flex flex1 justify-content-between">
					<div class="flex1col1 flex justify-content-between align-items-center">
						<div>
							<h3 class="post-avatar">
								<a href="<?php echo e(MyAPI::getUrlPostObj($post)); ?>">
									<img src="<?php echo e(asset('public/img/'.$post->post_avatar)); ?>" class="center-block img-responsive">
								</a>
							</h3>
						</div>
					</div>
					<div class="flex1col2 flex justify-content-between align-items-center">
						<div>
							<h3 class="post-name"><a href="<?php echo e(MyAPI::getUrlPostObj($post)); ?>"><?php echo e($post->post_name); ?></a></h3>
							<p class="post-description">
								<?php echo e(MyAPI::getLimitWord($post->post_description,30)); ?>...
							</p>
						</div>
					</div>
				</div>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
			<div class="my_pagination">
				<?php echo e($posts->links()); ?>

			</div>
		</div>
	</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mobile', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>