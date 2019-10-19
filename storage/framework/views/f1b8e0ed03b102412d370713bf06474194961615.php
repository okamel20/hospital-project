<footer class="mainFooter">
        <div class="container">
            <div class="topFooter">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="footerBlock">
                            <h2 class="title"><?php echo e(trans('admin.keep_in_touch')); ?></h2>
                            <div class="contactInfo">
                                <div class="infoItem">
                                    <div class="infoIcon">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <div class="infoText">
                                        <p><a href="mailto:<?php if(!empty(setting())): ?><?php echo e(setting()['email']); ?> <?php endif; ?>"><?php if(!empty(setting())): ?><?php echo e(setting()['email']); ?> <?php endif; ?></a></p>
                                        <p><a href="mailto:<?php if(!empty(setting())): ?><?php echo e(setting()['email']); ?> <?php endif; ?>"><?php if(!empty(setting())): ?><?php echo e(setting()['email']); ?> <?php endif; ?></a></p>
                                    </div>
                                </div>
                                <div class="infoItem">
                                    <div class="infoIcon">
                                        <i class="fas fa-mobile-alt"></i>
                                    </div>
                                    <div class="infoText">
                                        <p class="ltr"><a href="tel:<?php if(!empty(setting())): ?><?php echo e(setting()['phone']); ?> <?php endif; ?>"><?php if(!empty(setting())): ?><?php echo e(setting()['phone']); ?> <?php endif; ?></a></p>
                                        <p class="ltr"><a href="tel:<?php if(!empty(setting())): ?><?php echo e(setting()['phone']); ?> <?php endif; ?>"><?php if(!empty(setting())): ?><?php echo e(setting()['phone']); ?> <?php endif; ?></a></p>
                                    </div>
                                </div>
                                <div class="infoItem">
                                    <div class="infoIcon">
                                        <i class="fas fa-map-marked-alt"></i>
                                    </div>
                                    <div class="infoText">
                                        <p><?php if(!empty(setting())): ?><?php echo e(setting()['address_'.lang()]); ?> <?php endif; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-2 offset-lg-1">
                        <div class="footerBlock">
                            <h2 class="title"><?php echo e(trans('admin.quick_links')); ?></h2>
                            <ul class="footerLinks">
                                <?php $__currentLoopData = \App\Page::where('active',1)->where('type','links')->limit(4)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pageMnue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><i class="fas fa-caret-right"></i><a href="<?php echo e(url('/page/'.$pageMnue['id'])); ?>"><?php echo e($pageMnue['title_'.lang()]); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <li><i class="fas fa-caret-right"></i>
                                    <a href="<?php echo e(url('/doctors')); ?>">
                                        <?php echo e(trans('admin.doctors')); ?>

                                    </a>
                                </li>
                                <li><i class="fas fa-caret-right"></i>
                                    <a href="<?php echo e(url('/blog')); ?>">
                                        <?php echo e(trans('admin.blog')); ?>

                                    </a>
                                </li>
                                <li><i class="fas fa-caret-right"></i>
                                    <a href="<?php echo e(url('/services')); ?>">
                                        <?php echo e(trans('admin.services')); ?>

                                    </a>
                                </li>
                                <li><i class="fas fa-caret-right"></i>
                                    <a href="<?php echo e(url('/clinics')); ?>">
                                        <?php echo e(trans('admin.clinics')); ?>

                                    </a>
                                </li>
                                <li><i class="fas fa-caret-right"></i>
                                    <a href="<?php echo e(url('/offers')); ?>">
                                        <?php echo e(trans('admin.offers')); ?>

                                    </a>
                                </li>
                                <li><i class="fas fa-caret-right"></i>
                                    <a href="<?php echo e(url('/pharmacy')); ?>">
                                        <?php echo e(trans('admin.pharmacy')); ?>

                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="footerBlock">
                            <h2 class="title"><?php echo e(trans('admin.services')); ?></h2>
                            <ul class="footerLinks">
                                <?php $__currentLoopData = \App\Service::where('active',1)->orderBy('id','desc')->limit(6)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><i class="fas fa-caret-right"></i><a href="<?php echo e(url('/services')); ?>"><?php echo e($service['title_'.lang()]); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                            <?php if(sectionSetting(1)['show_home'] == 1): ?>
                            <div class="socialButtons">
                                <?php $__currentLoopData = \App\Social_link::where('active',1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="">
                                    <a href="<?php echo e($social['link']); ?>" title=""><i class="<?php echo e($social['icon']); ?>"></i></a>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="footerBlock">
                            <h2 class="title"><?php echo e(trans('admin.select_a_date')); ?></h2>
                            <form action="<?php echo e(url('/orders')); ?>" method="post" class="footerContact" id="footerContact">
                                <?php echo e(csrf_field()); ?>

                                <input type="text" name="name" id="yourName" placeholder="<?php echo e(trans('admin.name')); ?>">
                                <input type="number" name="phone" id="yourMobile" placeholder="<?php echo e(trans('admin.mobile')); ?>">
                                <textarea name="msg" id="yourMessage" placeholder="<?php echo e(trans('admin.msg')); ?>"></textarea>
                                <div class="email-submit">
                                    <input type="email" name="email" id="yourEmail" class="darkInput" placeholder="<?php echo e(trans('admin.email')); ?>">
                                    <input type="submit" value="<?php echo e(trans('admin.go')); ?>" class="primaryButton submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottomBar">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="copyRights">
                            <p><?php if(!empty(setting())): ?><?php echo e(setting()['copy_rights_'.lang()]); ?> <?php endif; ?></p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="inlineLinks">
                            <?php $__currentLoopData = \App\Page::where('active',1)->where('type','footer')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pageFooter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(url('/page/'.$pageFooter['id'].'?page='.$pageFooter['title_'.lang()])); ?>"><?php echo e($pageFooter['title_'.lang()]); ?></a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php if(lang() == 'ar'): ?>
    <script src="<?php echo e(url('/public/web')); ?>/js/main-rtl.js"></script>
    <?php else: ?>
    <script src="<?php echo e(url('/public/web')); ?>/js/main.js"></script>
    <?php endif; ?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php if(!empty(Session::get('save'))): ?>
        <script type="text/javascript">
            swal("<?php echo e(trans('admin.success')); ?>", "<?php echo e(Session::get('save')); ?>", "success");
        </script>
    <?php endif; ?>
    <script type="text/javascript">
        $('.langSelect').change(function(event) {
            var langChange = $('.langSelect').val();
            var url = "<?php echo e(url('/lang')); ?>"+"/"+langChange;
            window.location.href=url;
        });
    </script>
    <?php echo $__env->yieldContent('script'); ?>
</body>
</html>