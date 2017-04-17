<?php $__env->startSection('title'); ?>
	<title><?php echo e($setting->web_name); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('keyword'); ?>
<meta property="og:image" content="<?php echo e(asset('public/img/'.$setting->web_logo)); ?>">
<meta id="metaDescription" name="description" content="<?php echo e($setting->web_description); ?>">
<meta id="metaKeywords" name="keywords" content="<?php echo e($setting->web_keyword); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('public/css/desktop/desktop-address.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
	<!-- <main class="container address">
		<div class="flex flex1 justify-content-between">
			<div class="flex1col1">
				<h1 class="text-center text-uppercase">Quảng cáo 69</h1>
				<h2><img src="<?php echo e(asset('public/images/global/logo.jpg')); ?>" class="center-block"></h2>
			</div>
			<div class="flex1col2">
				<h3>Chuyên</h3>
				<p>
					In phun khổ lớn - Biển ốp mặt ALu
					chữ đồng inox - mika - alu - đề can
				</p>
				<p>
					Biển led điện tử - Ma trận - Led Hắt Âm - Led Hắt mặt
				</p>
				<p>
					Nhận:Thiết kế catalog.web.car, in danh thiếp, thiếp cưới, phong bì, hoá đơn
					bằng khen, giấy khen, tờ rơi, card visit.
				</p>
			</div>
			<div class="flex1col3">
				<p>"Cơ sở 1": 336 đường bưởi - Hà Nội</p>
				<p>"Cơ sở 2": 938 đường láng - Hà Nội</p>
			</div>
			<div class="flex1col4">
				<p>Điện thoại: <br>09 232 99998 <br>09 112 88886</p>
				<p>Email. bienquangcao69@gmail.com</p>
			</div>
		</div>
		<h3>" Sự hài lòng của bạn là niềm hạnh phúc của chúng tôi "</h3>
	</main> -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.desktop', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>