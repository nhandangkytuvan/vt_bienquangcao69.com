<?php $__env->startSection('menu'); ?>
    <?php echo $__env->make('menu.menuUser', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div style="margin-bottom: 10px;">
    <form class="form-inline">
        <div class="form-group">
            <select name="term_id" class="form-control">
                <option value="0">Chọn danh mục</option>
                <?php $__currentLoopData = $data['terms_search']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $term): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <?php if($term->term_id == 0): ?>
                        <option <?php echo e(Request::input('term_id')==$term->id ? 'selected' : ''); ?> value="<?php echo e($term->id); ?>"><?php echo e($term->term_name); ?></option>
                        <?php $__currentLoopData = $data['terms_search']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2=> $term2): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <?php if($term2->term_id == $term->id): ?>
                                <option <?php echo e(Request::input('term_id')==$term2->id ? 'selected' : ''); ?> value="<?php echo e($term2->id); ?>">--<?php echo e($term2->term_name); ?></option>
                                <?php $__currentLoopData = $data['terms_search']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key3=> $term3): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <?php if($term3->term_id == $term2->id): ?>
                                        <option <?php echo e(Request::input('term_id')==$term3->id ? 'selected' : ''); ?> value="<?php echo e($term2->id); ?>">----<?php echo e($term2->term_name); ?></option>
                                        <?php  unset($data['terms_search'][$key3])  ?>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                <?php  unset($data['terms_search'][$key2])  ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            </select>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Tên term" name="term_name" value="<?php echo e(Request::input('term_name')); ?>">
        </div>
        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i> Tìm kiếm</button>
    </form>
</div>
<div class="panel panel-default">
    <div class="panel-heading text-center">
        Danh sách term
    </div>
    <table class="table table-bordered">
        <tr class="active">
            <td>ID</td>
            <td>Ảnh</td>
            <td>Tên</td>
            <td>Số bài</td>
            <td>L.xem</td>
            <td>#</td>
        </tr>
        <?php $__currentLoopData = $data['terms']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $term): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <?php if($term->children()->exists()): ?>
        <tr <?php echo $term->children()->exists() ? 'class="success"' : ''; ?>>
            <td><?php echo e($term->id); ?></td>
            <td>
                <?php if($term->term_avatar): ?>
                <img src="<?php echo e(asset('public/img/'.$term->term_avatar)); ?>" class="img-responsive center-block" style="max-width: 50px;">
                <?php endif; ?>
            </td>
            <td><a href="<?php echo e(MyAPI::getUrlTermObj($term)); ?>"><?php echo e($term->term_name); ?></a></td>
            <td></td>
            <td></td>
            <td>
                <div class="clearfix">
                    <div class="pull-right">
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="javascript:;" data-toggle="dropdown">
                                <span class="glyphicon glyphicon-option-horizontal"></span>
                            </a>
                            <ul class="dropdown-menu" style="border-radius: 0;right: 0;left: auto;">
                                <li>
                                    <a href="<?php echo e(MyAPI::getUrlTermObj($term)); ?>">
                                        <span class="glyphicon glyphicon-eye-open"></span> Xem term
                                    </a> 
                                </li> 
                                <li>
                                    <a href="<?php echo e(url('user/term/edit/'.$term->id)); ?>">
                                        <span class="glyphicon glyphicon-pencil"></span> Sửa term
                                    </a> 
                                </li> 
                                <li>
                                    <a href="<?php echo e(url('user/term/delete/'.$term->id)); ?>">
                                        <span class="glyphicon glyphicon-trash"></span> Xóa term
                                    </a> 
                                </li>
                            </ul>  
                        </div>
                    </div>
                </div> 
            </td>
        </tr>
        <?php  $term_childrens = $term->children;  ?>
        <?php $__currentLoopData = $term_childrens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $term_child): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <td><?php echo e($term_child->id); ?></td>
            <td>
                <?php if($term_child->term_avatar): ?>
                <img src="<?php echo e(asset('public/img/'.$term_child->term_avatar)); ?>" class="img-responsive center-block" style="max-width: 50px;">
                <?php endif; ?>
            </td>
            <td><a href="<?php echo e(MyAPI::getUrlTermObj($term_child)); ?>"><?php echo e($term_child->term_name); ?></a></td>
            <td><?php echo e($term_child->post()->count()); ?></td>
            <td><?php echo e($term_child->visit ? $term_child->visit->visit_sum : ''); ?></td>
            <td>
                <div class="clearfix">
                    <div class="pull-right">
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="javascript:;" data-toggle="dropdown">
                                <span class="glyphicon glyphicon-option-horizontal"></span>
                            </a>
                            <ul class="dropdown-menu" style="border-radius: 0;right: 0;left: auto;">
                                <li>
                                    <a href="<?php echo e(MyAPI::getUrlTermObj($term_child)); ?>">
                                        <span class="glyphicon glyphicon-eye-open"></span> Xem term
                                    </a> 
                                </li> 
                                <li>
                                    <a href="<?php echo e(url('user/term/edit/'.$term_child->id)); ?>">
                                        <span class="glyphicon glyphicon-pencil"></span> Sửa term
                                    </a> 
                                </li> 
                                <li>
                                    <a href="<?php echo e(url('user/term/delete/'.$term_child->id)); ?>">
                                        <span class="glyphicon glyphicon-trash"></span> Xóa term
                                    </a> 
                                </li>
                            </ul>  
                        </div>
                    </div>
                </div> 
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        <?php  unset($data['terms'][$key]);  ?>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        <tr class="active">
            <td colspan="6"></td>
        </tr>
        <?php $__currentLoopData = $data['terms']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $term): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <?php if(!$term->children()->exists() && !$term->parent()->exists()): ?>
        <tr class="info">
            <td><?php echo e($term->id); ?></td>
            <td>
                <?php if($term->term_avatar): ?>
                <img src="<?php echo e(asset('public/img/'.$term->term_avatar)); ?>" class="img-responsive center-block" style="max-width: 50px;">
                <?php endif; ?>
            </td>
            <td><a href="<?php echo e(MyAPI::getUrlTermObj($term)); ?>"><?php echo e($term->term_name); ?></a></td>
            <td><?php echo e($term->post()->count()); ?></td>
            <td><?php echo e($term->visit ? $term->visit->visit_sum : ''); ?></td>
            <td>
                <div class="clearfix">
                    <div class="pull-right">
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="javascript:;" data-toggle="dropdown">
                                <span class="glyphicon glyphicon-option-horizontal"></span>
                            </a>
                            <ul class="dropdown-menu" style="border-radius: 0;right: 0;left: auto;">
                                <li>
                                    <a href="<?php echo e(MyAPI::getUrlTermObj($term)); ?>">
                                        <span class="glyphicon glyphicon-eye-open"></span> Xem term
                                    </a> 
                                </li> 
                                <li>
                                    <a href="<?php echo e(url('user/term/edit/'.$term->id)); ?>">
                                        <span class="glyphicon glyphicon-pencil"></span> Sửa term
                                    </a> 
                                </li> 
                                <li>
                                    <a href="<?php echo e(url('user/term/delete/'.$term->id)); ?>">
                                        <span class="glyphicon glyphicon-trash"></span> Xóa term
                                    </a> 
                                </li>
                            </ul>  
                        </div>
                    </div>
                </div> 
            </td>
        </tr>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </table>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>