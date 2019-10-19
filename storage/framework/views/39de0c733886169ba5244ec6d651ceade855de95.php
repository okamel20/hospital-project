<?php $__env->startSection('content'); ?>
<div class="container-fluid">
  
  <div class="row">
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-header card-header-denger card-header-icon">
          <div class="card-icon">
            <i class="material-icons">speaker_notes</i>
          </div>
          <p class="card-category">الأخبار</p>
          <h3 class="card-title"><?php echo e(\App\News::count()); ?>

          </h3>
        </div>
        <div class="card-footer">
          
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-header card-header-success card-header-icon">
          <div class="card-icon">
            <i class="material-icons">tag_faces</i>
          </div>
          <p class="card-category">الخدمات</p>
          <h3 class="card-title"><?php echo e(\App\Service::count()); ?>

          </h3>
        </div>
        <div class="card-footer">
          
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-header card-header-danger card-header-icon">
          <div class="card-icon">
            <i class="material-icons">tag_faces</i>
          </div>
          <p class="card-category">الخصائص</p>
          <h3 class="card-title"><?php echo e(\App\Gallery::count()); ?>

          </h3>
        </div>
        <div class="card-footer">
          
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-header card-header-info card-header-icon">
          <div class="card-icon">
            <i class="material-icons">tag_faces</i>
          </div>
          <p class="card-category">الأطباء</p>
          <h3 class="card-title"><?php echo e(\App\Doctor::count()); ?>

          </h3>
        </div>
        <div class="card-footer">
          
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <?php $__currentLoopData = \App\Statistic::where('active',1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $statistic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-header card-header-warning card-header-icon">
          <div class="card-icon">
            
            <img src="<?php echo e(Storage::url($statistic['img'])); ?>" height="50px" width="50px">
          </div>
          <p class="card-category"><?php echo e($statistic['name_ar']); ?></p>
          <h3 class="card-title"><?php echo e($statistic['count_num']); ?>

          </h3>
        </div>
        <div class="card-footer">
          
        </div>
      </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>

  <div class="row">
    <div class="col-lg-6 col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">رسائل اتصل بنا</h4>
          <p class="card-category">عرض مختصر لأخر رسائل اتصل بنا</p>
        </div>
        <div class="card-body table-responsive">
          <table class="table table-hover">
            <thead class="text-warning">
              <th>الرقم</th>
              <th>الأسم</th>
              <th>الهاتف</th>
              <th>عنوان الرسالة</th>
            </thead>
            <tbody>
              <?php $__currentLoopData = \App\Contact::limit(5)->orderBy('id','desc')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contacts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($contacts['id']); ?></td>
                <td><?php echo e($contacts['name']); ?></td>
                <td><?php echo e($contacts['phone']); ?></td>
                <td><?php echo e($contacts['contact_subject_id']); ?></td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-12">
      <div class="card">
        <div class="card-header card-header-info">
          <h4 class="card-title">طلبات تحديد موعد</h4>
          <p class="card-category">عرض مختصر لأخر طلبات تحديد موعد</p>
        </div>
        <div class="card-body table-responsive">
          <table class="table table-hover">
            <thead class="text-warning">
              <th>الرقم</th>
              <th>الأسم</th>
              <th>الهاتف</th>
              <th>الرسالة</th>
            </thead>
            <tbody>
              <?php $__currentLoopData = \App\Order::limit(5)->orderBy('id','desc')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contacts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($contacts['id']); ?></td>
                <td><?php echo e($contacts['name']); ?></td>
                <td><?php echo e($contacts['phone']); ?></td>
                <td><?php echo e($contacts['msg']); ?></td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    
  </div>
</div>		
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>