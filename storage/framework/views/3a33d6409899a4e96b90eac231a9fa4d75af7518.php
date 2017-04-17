<?php $__env->startSection('menu'); ?>
    <?php echo $__env->make('menu.menuUser', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<form method="post"  enctype="multipart/form-data">
    <?php echo e(csrf_field()); ?>

    <div class="panel panel-default">
        <div class="panel-heading text-center">Tạo bài viết mới</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="control-label">Ảnh</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                            <input type="file" class="form-control" name="post_avatar" id="fileUpload">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6" id="image-holder">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label">Tên bài</label>
                <input type="text" class="form-control" name="post_name" placeholder="Tiêu đề bài viết" value="<?php echo e(old('post_name')); ?>">
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="form-group">
                        <label class="control-label">Danh mục</label>
                        <select name="term_id" class="form-control">
                            <option value="">Chọn danh mục</option>
                            <?php $__currentLoopData = $data['terms']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $term): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <?php if($term->term_id != 1 && $term->id != 1): ?>
                                    <option value="<?php echo e($term->id); ?>"><?php echo e($term->term_name); ?></option>
                                    <?php $__currentLoopData = $data['terms']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2=> $term2): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                        <?php if($term2->term_id == $term->id): ?>
                                            <option value="<?php echo e($term2->id); ?>">--<?php echo e($term2->term_name); ?></option>
                                            <?php $__currentLoopData = $data['terms']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key3=> $term3): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                                <?php if($term3->term_id == $term2->id): ?>
                                                    <option value="<?php echo e($term2->id); ?>">----<?php echo e($term2->term_name); ?></option>
                                                    <?php  unset($data['terms'][$key3])  ?>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                            <?php  unset($data['terms'][$key2])  ?>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <p style="margin-top: 5px;">
                            <label class="control-label label label-success" for="post_status">Đăng bài</label>
                        </p>
                        <div class="material-switch">
                            <input id="post_status" type="checkbox" name="post_status" value="1">
                            <label for="post_status" class="label-success"></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label">Tóm tắt</label>
                <textarea type="text" class="form-control autosize" name="post_description"><?php echo e(old('post_description')); ?></textarea>
            </div>
            <div class="form-group">
                <label class="control-label">Chi tiết 
                    <a href="#"  data-toggle="tooltip" data-placement="top" title="Tiêu đề bài viết không cần viết trong đây">
                        <span class="glyphicon glyphicon-info-sign"></span>
                    </a>
                </label>
                <textarea type="text" class="form-control" name="post_detail" id="post_detail"><?php echo e(old('post_detail')); ?></textarea>
                <script>
                    $(document).ready(function($) {
                        tinymce.init({
                            menubar: false,
                            statusbar: false,
                            selector: '#post_detail',
                            font_formats: 'Arial=arial,helvetica,sans-serif;',
                            height:600,
                            theme: 'modern',
                            fontsize_formats: "8px 9px 10px 11px 12px 13px 14px 15px 16px 18px 20px 22px",
                            plugins: [
                                'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                                'searchreplace wordcount visualblocks visualchars code fullscreen',
                                'insertdatetime media nonbreaking save table contextmenu directionality',
                                'paste textcolor colorpicker textpattern imagetools toc'
                            ],
                            toolbar1: 'undo redo insert styleselect bold italic alignleft aligncenter alignright alignjustify bullist numlist outdent indent',
                            toolbar2: 'print preview media forecolor backcolor fontsizeselect link image code',
                            image_advtab: true,
                            content_css: [
                                '<?php echo e(asset("public/font/codepen.min.css")); ?>'
                            ],
                        });
                    });
                </script>
            </div>
            <div class="form-group">
                <label class="control-label">Keyword</label>
                <textarea type="text" class="form-control autosize" name="post_keyword"><?php echo e(old('post_keyword')); ?></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-edit"></span>  Thêm bài viết</button>
            </div>
        </div>
    </div>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>