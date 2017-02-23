<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-5 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">Ubah Kategori Lembur</div>

                <div class="panel-body">
                    <a href="<?php echo e(url('/kategori')); ?>" class="btn btn-success">Kembali</a><br>
                    <?php echo Form::model($katlembur,['method'=>'PATCH','route'=>['kategori.update',$katlembur->id]]); ?>

                    <div class="form-group">
                        <?php echo Form::label('Kode Lembur','Kode Lembur'); ?>

                        <?php echo Form::text('kode_lembur',null,['class'=>'form-control','required']); ?>

                    </div>
                    <label>Nama Jabatan</label>
                    <select name="jabatan_id" class="form-control" required>
                        <?php $__currentLoopData = $jabatann; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <option value="<?php echo e($data->id); ?>"><?php echo e($data->nama_jabatan); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    </select><br>
                    <label>Nama Golongan</label>
                    <select name="golongan_id" class="form-control" required>
                        <?php $__currentLoopData = $golongann; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <option value="<?php echo e($data->id); ?>"><?php echo e($data->nama_golongan); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    </select><br>
                   
                    <div class="form-group">
                        <?php echo Form::label('Besaran Uang','Besaran Uang'); ?>

                        <?php echo Form::text('besaran_uang',null,['class'=>'form-control','required']); ?>

                    </div>
                    <div class="form-group">
                        <?php echo Form::submit('save',['class'=>'btn btn-success form-control']); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>