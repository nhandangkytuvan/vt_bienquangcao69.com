<?php $__env->startSection('title'); ?>
	<title><?php echo e($data['term']->term_name); ?> - <?php echo e($setting->web_name); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('keyword'); ?>
<meta property="og:image" content="<?php echo e(asset('public/img/'.$setting->web_logo)); ?>">
<meta id="metaDescription" name="description" content="<?php echo e($data['term']->term_name); ?>">
<meta id="metaKeywords" name="keywords" content="<?php echo e($data['term']->term_keyword); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('public/css/desktop/desktop-pagination.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('public/css/desktop/desktop-slidebar.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('public/css/desktop/desktop-new.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<main class="container news">
	<div class="flex justify-content-between">
		<div class="flex1col1">
			<?php echo $__env->make('web.desktop.slidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</div>
		<div class="flex1col2">
			<h3 class="text-center text-uppercase"><?php echo e($data['term']->term_name); ?></h3>
			<div class="posts">
				<?php  $posts = $data['term']->post()->latest()->paginate(8);  ?>
				<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
				<div class="post">
					<div class="flex flex2 justify-content-between">
						<div class="flex2col1">
							<h3><a href="<?php echo e(MyAPI::getUrlPostObj($post)); ?>"><img src="<?php echo e(asset('public/img/'.$post->post_avatar)); ?>" class="center-block img-responsive"></a></h3>
						</div>
						<div class="flex2col2">
							<h3><a href="<?php echo e(MyAPI::getUrlPostObj($post)); ?>"><?php echo e($post->post_name); ?></a></h3>
							<p class="text-justify">
								<?php echo e($post->post_description); ?>

							</p>
						</div>
					</div>
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
			</div>
			<div class="my_pagination">
				<?php echo e($posts->links()); ?>

			</div>
		</div>
	</div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.desktop', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>