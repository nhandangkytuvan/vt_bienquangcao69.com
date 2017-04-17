<?php $__env->startSection('title'); ?>
	<title><?php echo e($data['post']->post_name); ?> - <?php echo e($setting->web_name); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('keyword'); ?>
<?php if($data['post']->post_avatar): ?>
<meta property="og:image" content="<?php echo e(asset('public/img/'.$data['post']->post_avatar)); ?>">
<?php else: ?>
<meta property="og:image" content="<?php echo e(asset('public/img/'.$setting->web_logo)); ?>">
<?php endif; ?>
<meta id="metaDescription" name="description" content="<?php echo e($data['post']->post_description); ?>">
<meta id="metaKeywords" name="keywords" content="<?php echo e($data['post']->post_keyword); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('public/font/post-detail-css.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('public/css/mobile/mobile-post.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1739360023022366',
      xfbml      : true,
      version    : 'v2.8'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
	<?php  $term = $data['post']->term;  ?>
	<main class="container post">
		<div class="crub">
			<div class="flex">
				<div class="col1 flex justify-content-center align-items-center">
					<h5><a href="<?php echo e(url('/')); ?>">Trang chủ <i class="fa fa-angle-right"></i> </a> <a href="<?php echo e(MyAPI::getUrlTermObj($term)); ?>"><?php echo e($term->term_name); ?></a></h5>
				</div>
			</div>
		</div>
		<div class="post-view">
			<h1 class="post-name"><?php echo e($data['post']->post_name); ?></h1>
			<p class="post-description">
				<?php echo e($data['post']->post_description); ?>

			</p>
			<div class="post-detail">
				<?php echo $data['post']->post_detail; ?>

			</div>
			<div class="faceboo-toolbar">
				<div class="fb-like" data-href="<?php echo e(MyAPI::getUrlPostObj($data['post'])); ?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
				<div class="fb-share-button" data-href="<?php echo e(MyAPI::getUrlPostObj($data['post'])); ?>" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="<?php echo e(MyAPI::getUrlPostObj($data['post'])); ?>">Chia sẻ</a></div>
				<div class="fb-send" data-href="<?php echo e(MyAPI::getUrlPostObj($data['post'])); ?>"></div>
			</div>
			<?php  
				$posts = $term->post()->where('id','<>',$data['post']->id)->limit(6)->get();
			 ?>
			<?php if(count($posts)): ?>
			<div class="post-footer">
				<h3>Tin khác</h3>
				<ul>
					<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
						<li>
							<h4>
								<i class="fa fa-angle-double-right"></i>
								<a href="<?php echo e(MyAPI::getUrlPostObj($post)); ?>"><?php echo e($post->post_name); ?></a>
							</h4>
						</li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
				</ul>
			</div>
			<?php endif; ?>
			<div class="post-comments" id="post-comments">
				<div class="tabs-button-1">
					<div class="comment-web active"><h4><i class="fa fa-question-circle"></i> Hỏi - Đáp</h4></div>
					<div class="comment-facebook"><h4><i class="fa fa-facebook-official"></i> Facebook comment</h4></div>
				</div>
				<div class="tabs-content-1">
					<div class="active">
						<div class="send-question">
							<form action="<?php echo e(url('web/comment/create/'.$data['post']->id)); ?>">
								<div class="text-question">
									<textarea name="comment_detail" placeholder="Bạn cần hỏi gì..." required></textarea>
								</div>
								<div class="button-submit">
									<button type="submit">Gửi câu hỏi</button>
								</div>
							</form>
						</div>
						<?php  
							$comments = $data['post']->comment()->where('comment_status',1)->limit(6)->get();
						 ?>
						<?php if(count($comments)): ?>
						<div class="lists-comment">
							<ul>
								<?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
								<li>
									<div class="ask-question">
										<h5 class="comment-name">Khách</h5>
										<p class="comment-detail"><?php echo $comment->comment_detail; ?></p>
									</div>
									<?php  
										$comment_reply = $comment->children()->first();
									 ?>
									<?php if($comment_reply): ?>
									<div class="ans-question arrow_box">
										<h5 class="comment-name">quangcao69</h5>
										<p class="comment-detail"><?php echo e($comment_reply->comment_detail); ?></p>
									</div>
									<?php endif; ?>
								</li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
							</ul>
						</div>
						<?php endif; ?>
					</div>
					<div>
						<div class="lists-facebook">
							<div id="fb-root"></div>
							<script>(function(d, s, id) {
							  var js, fjs = d.getElementsByTagName(s)[0];
							  if (d.getElementById(id)) return;
							  js = d.createElement(s); js.id = id;
							  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=1739360023022366";
							  fjs.parentNode.insertBefore(js, fjs);
							}(document, 'script', 'facebook-jssdk'));</script>

							<!-- Your embedded comments code -->
							<div class="fb-comments" data-href="<?php echo e(MyAPI::getUrlPostObj($data['post'])); ?>" data-numposts="5" data-width="auto"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mobile', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>