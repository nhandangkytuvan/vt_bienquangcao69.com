<?php $__env->startSection('menu'); ?>
    <?php echo $__env->make('menu.menuUser', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div style="margin-bottom: 10px;">
        <form action="<?php echo e(url('user/index')); ?>" class="form-inline">
            <div class="form-group">
                <select name="user_group" class="form-control">
                    <option value="">Chọn nhóm</option>
                    <option value="admin">Quản trị</option>
                    <option value="seo">Seo</option>
                    <option value="bien-tap">Biên tập</option>
                </select>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Tên username" name="username" value="<?php echo e($data['request']->input('username')); ?>">
            </div>
            <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i> Tìm kiếm</button>
        </form>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading text-center">
            Danh sách user
        </div>
        <table class="table table-bordered">
            <tr class="active">
                <td>ID</td>
                <td>Tên</td>
                <td>Nhóm</td>
                <td>Số bài</td>
                <td>#</td>
            </tr>
            <?php $__currentLoopData = $data['users']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <tr>
                <td><?php echo e($user->id); ?></td>
                <td><?php echo e($user->username); ?></td>
                <td><?php echo e($user->user_group); ?></td>
                <td><?php echo e(count($user->post)); ?></td>
                <td>
                    <div class="clearfix">
                        <div class="pull-right">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="javascript:;" data-toggle="dropdown">
                                    <span class="glyphicon glyphicon-option-horizontal"></span>
                                </a>
                                <ul class="dropdown-menu" style="border-radius: 0;left: auto;right: 0;">
                                    <li>
                                        <a href="<?php echo e(url('user/user/group/'.$user->id)); ?>">
                                            <span class="glyphicon glyphicon-pencil"></span> Sửa nhóm
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(url('user/user/block/'.$user->id)); ?>">
                                            <span class="glyphicon glyphicon-lock"></span> Khóa user
                                        </a> 
                                    </li>                                
                                    <li>
                                        <a href="<?php echo e(url('user/user/delete/'.$user->id)); ?>">
                                            <span class="glyphicon glyphicon-trash"></span> Xóa user
                                        </a> 
                                    </li> 
                                </ul>
                            </div>
                        </div>
                    </div> 
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>