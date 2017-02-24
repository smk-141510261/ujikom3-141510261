<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-5 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="<?php echo e(url('/penggaji')); ?>" class="btn btn-success">Kembali</a><br>
                    <?php echo Form::open(['url'=>'penggaji']); ?>

            <div class="form-group">
            <?php echo Form::label('Pegawai', 'Pegawai '); ?>

            <select class="form-control col-md-7 col-xs-12" name="tunjangan_pegawai_id">
            <option> NIP || Nama Pegawai </option>
            <?php $__currentLoopData = $gaji; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <option value="<?php echo e($data->id); ?>"><?php echo e($data->Pegawai->nip); ?>&nbsp;|&nbsp;<?php echo e($data->Pegawai->User->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            </select>
      </div>
    <div class="form-group">
            <?php echo Form::label('Status Pengambilan', 'Status Pengambilan '); ?>

             <select name="status_pengambilan" class="form-control">
                <option value="0">Belum Diambil</option>
                <option value="1">Sudah Diambil</option>
            </select>
        </div>
     <div class="col-md-6 col-sm-6 col-xs-12">
      <span class="help-block">
            <?php echo e($errors->first('tunjangan_pegawai_id')); ?>

          </span>
            <div>
            <?php if(isset($error)): ?>
            Check Lagi Gaji Sudah Ada
            <?php endif; ?>
            </div>
            </div>
       <div class="form-group">
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              <?php echo Form::submit('Simpan', ['class' => 'btn btn-success form-control']); ?>

          </div>
      </div>
    </div>
    <?php echo Form::close(); ?>

          </div>
          </div>
          </div>
          </div>     
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>