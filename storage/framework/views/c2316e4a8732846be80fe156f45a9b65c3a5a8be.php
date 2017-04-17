<?php $__env->startSection('title'); ?>
    <title><?php echo e($data['term']->term_name); ?> - <?php echo e($setting->web_name); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('keyword'); ?>
<meta property="og:image" content="<?php echo e($setting->web_logo); ?>">
<meta id="metaDescription" name="description" content="<?php echo e($data['term']->term_name); ?>">
<meta id="metaKeywords" name="keywords" content="<?php echo e($data['term']->term_keyword); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('public/css/mobile/mobile-pagination.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/css/mobile/mobile-product.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
	<main class="container product">
		<h3><?php echo e($data['term']->term_name); ?></h3>
		<?php 
			$posts = $data['term']->post()->latest()->paginate(9);
		 ?>
		<div class="posts-sp">
			<?php if($posts[0]): ?>
			<div class="post-top">
				<h3 class="post-avatar">
					<a href="<?php echo e(MyAPI::getUrlPostObj($posts[0])); ?>">
						<img src="<?php echo e(asset('public/img/'.$posts[0]->post_avatar)); ?>" class="img-responsive center-block">
					</a>
				</h3>
				<h3 class="post-name"><a href="<?php echo e(MyAPI::getUrlPostObj($posts[0])); ?>"><?php echo e($posts[0]->post_name); ?></a></h3>
				<p class="text-justify post-description">
					<?php echo e(MyAPI::getLimitWord($posts[0]->post_description,30)); ?>...
				</p>
			</div>
			<?php  unset($posts[0])  ?>
			<?php endif; ?>
			<div class="post-middle">
				<div class="flex flex1 flex-wrap-wrap justify-content-around">
					<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<div class="flex1col1">
						<h3>
							<a href="<?php echo e(MyAPI::getUrlPostObj($post)); ?>">
								<img src="<?php echo e(asset('public/img/'.$post->id)); ?>" class="center-block img-responsive">
							</a>
						</h3>
						<h4>
							<a href="<?php echo e(MyAPI::getUrlPostObj($post)); ?>"><?php echo e($post->post_name); ?></a>
						</h4>
					</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
				</div>
			</div>
			<div class="my_pagination">
				<?php echo e($posts->links()); ?>

			</div>
		</div>
	</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mobile', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>