<?php $__env->startSection('content'); ?>
<div class="mainSection">
    <div class="secHolder">
        <div class="topBlock">
            <img src="<?php if(!empty(setting())): ?><?php echo e(Storage::url(setting()['about_home_img'])); ?> <?php endif; ?>" alt="Hassan" class="fadeInLeft animated">
            <div class="text bounceInLeft animated">
                <div class="container">
                    <?php if(!empty(setting())): ?><?php echo setting()['about_home_text_'.lang()]; ?> <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row bottomBlock nomargin">
            <?php $__currentLoopData = \App\Ad_propertie::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $propertie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-12 col-md-6 col-lg-4 blockItem">
                <div class="itemIcon">
                    <img src="<?php echo e(Storage::url($propertie['img'])); ?>" alt="24 Hours Service">
                </div>
                <div class="itemText">
                    <h2><?php echo e($propertie['title_'.lang()]); ?></h2>
                    <p><?php echo e($propertie['desc_'.lang()]); ?></p>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </div>
    </div>
</div>
<?php if(setting()['section_about_show_home'] == 'yes'): ?>
<section class="welcomeSec">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="secTitle text-center"><?php echo e(setting()['about_title_'.lang()]); ?><span class="subText upper"><?php if(!empty(setting())): ?><?php echo e(setting()['app_name_'.lang()]); ?> <?php endif; ?></span></h2>
                <p class="secDesc text-center"><?php echo e(setting()['about_desc_'.lang()]); ?></p>
            </div>
        </div>
        <div class="row textHolder">
            <p class="col-12"><?php echo e(setting()['about_p1_'.lang()]); ?></p>
            <p class="col-12 col-lg-6"><?php echo e(setting()['about_p2_'.lang()]); ?></p>
            <p class="col-12 col-lg-6"><?php echo e(setting()['about_p3_'.lang()]); ?></p>
        </div>
    </div>
</section>
<?php endif; ?>
<section class="blocks">
    <div class="container">
        <div class="row">
            <?php if(sectionSetting(2)['show_home'] == 1): ?>
            <div class="col-12 col-lg-8">
                <div class="block latestNews">
                    <div class="blockTitle">
                        <h2><?php echo e(sectionSetting(2)['title_'.lang()]); ?><span class="subText upper"><?php if(!empty(setting())): ?><?php echo e(setting()['app_name_'.lang()]); ?> <?php endif; ?></span></h2>
                    </div>
                    <p class="blockDesc"><?php echo e(sectionSetting(2)['desc_'.lang()]); ?></p>
                    <div class="row">
                        <?php $__currentLoopData = \App\News::where('active',1)->orderBy('id','desc')->limit(4)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-12 col-md-6">
                            <div class="postItem">
                                <div class="postIMG">
                                    <a href="<?php echo e(url('/blog/'.$news['id'].'?blog='.$news['title_'.lang()])); ?>">
                                        <img src="<?php echo e(Storage::url($news['img'])); ?>" alt="Post title here">
                                    </a>
                                </div>
                                <h3 class="postTitle"><a href="<?php echo e(url('/blog/'.$news['id'].'?blog='.$news['title_'.lang()])); ?>"><?php echo e($news['title_'.lang()]); ?></a></h3>
                                <div class="postDetails">
                                    <span class="date"><?php echo e($news['month_name_'.lang()]); ?> <?php echo e($news['year']); ?></span><span class="by"><?php echo e(trans('admin.newsBy')); ?><span class="username"><?php echo e(\App\Author::find($news['author_id'])['name_'.lang()]); ?></span></span>
                                </div>
                                <p class="postexerpt"><?php echo str_limit($news['content_'.lang()], $limit = 150, $end = '...'); ?></p>
                                <a href="<?php echo e(url('/blog/'.$news['id'].'?blog='.$news['title_'.lang()])); ?>" class="primaryButton"><?php echo e(trans('admin.more')); ?></a>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            
            <div class="col-12 col-lg-4 sideBar">
                <?php if(sectionSetting(3)['show_home'] == 1): ?>
                <div class="block">
                    <div class="blockTitle">
                        <h2><span class="subText"><?php echo e(sectionSetting(3)['title_'.lang()]); ?></span></h2>
                        <p class="blockDesc"><?php echo e(sectionSetting(3)['desc_'.lang()]); ?></p>
                    </div>
                    <div class="accordionBlock">
                        <?php $count3 = 1 ;?>
                        <?php $__currentLoopData = \App\Service::where('active',1)->orderBy('id','desc')->limit(5)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="accordionItem">
                            <div class="accordionTitle <?php if($count3 == 1): ?> active <?php endif; ?>">
                                <h3><?php echo e($service['title_'.lang()]); ?><i class="fas fa-plus"></i></h3>
                            </div>
                            <div class="accordionContent" <?php if($count3 == 1): ?> style="display: block;" <?php else: ?> style="display: none;"  <?php endif; ?>>
                                <p><?php echo str_limit($service['desc_'.lang()], $limit = 90, $end = '...'); ?></p>
                                <a href="<?php echo e(url('/services?service='.$service['title_'.lang()])); ?>" class="primaryButton"><?php echo e(trans('admin.more')); ?></a>
                            </div>
                        </div>
                        <?php $count3++ ;?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <?php endif; ?>
                <?php if(sectionSetting(4)['show_home'] == 1): ?>
                <div class="block">
                    <div class="blockTitle">
                        <h2><?php echo e(sectionSetting(4)['title_'.lang()]); ?></h2>
                        <p class="blockDesc"><?php echo e(sectionSetting(4)['desc_'.lang()]); ?></p>
                    </div>
                    <div class="gallerySlider">
                        <div class="owl-carousel">
                            <?php $__currentLoopData = \App\Gallery::where('active',1)->orderBy('id','desc')->limit(10)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="item">
                                <div class="IMG">
                                    <img src="<?php echo e(Storage::url($gallery['img'])); ?>" alt="Photo Title">
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php if(sectionSetting(5)['show_home'] == 1): ?>
<section class="testimonials">
    <div class="owl-carousel">
        <?php $__currentLoopData = \App\Manager::where('active',1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $manager): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="item">
            <div class="container">
                <div class="testimonialIMG">
                    <img src="<?php echo e(Storage::url($manager['img'])); ?>" alt="Person">
                </div>
                <div class="testimonialText text-center">
                    <p><?php echo e($manager['content_'.lang()]); ?></p>
                    <div class="personName"><?php echo e($manager['name_'.lang()]); ?></div>
                    <div class="jobTitle"><?php echo e($manager['job_'.lang()]); ?></div>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>
<?php endif; ?>
<?php if(sectionSetting(6)['show_home'] == 1): ?>
<section class="whyChoose">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="secTitle text-center"><?php echo e(sectionSetting(6)['title_'.lang()]); ?><span class="subText upper"><?php if(!empty(setting())): ?><?php echo e(setting()['app_name_'.lang()]); ?> <?php endif; ?></span></h2>
                <p class="secDesc text-center"><?php echo e(sectionSetting(6)['desc_'.lang()]); ?></p>
            </div>
            <?php $__currentLoopData = \App\Whychoose::where('active',1)->orderBy('id','desc')->limit(6)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $whychoose): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="reasonItem">
                    <div class="reasonIcon">
                        <i class="<?php echo e($whychoose['icon']); ?>"></i>
                    </div>
                    <div class="resonText">
                        <h3><?php echo e($whychoose['title_'.lang()]); ?></h3>
                        <p><?php echo $whychoose['content_'.lang()]; ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php endif; ?>
<?php if(sectionSetting(7)['show_home'] == 1): ?>
<section class="meetDoctors">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="secTitle text-center"><?php echo e(sectionSetting(7)['title_'.lang()]); ?><span class="subText"><?php echo e(trans('admin.our_doctors')); ?></span></h2>
                <p class="secDesc text-center"><?php echo e(sectionSetting(7)['desc_'.lang()]); ?></p>
            </div>
            <?php $__currentLoopData = \App\Doctor::where('active',1)->limit(4)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-12 col-md-6 col-xl-3">
                <div class="doctorHolder">
                    <div class="doctorIMG">
                        <a href="doctor-ar.html"><img src="<?php echo e(Storage::url($doctor['img'])); ?>" alt="Doctor Name"></a>
                    </div>
                    <div class="doctorText text-center">
                        <h3 class="upper"><a href="<?php echo e(url('/doctor/'.$doctor['id'].'?doctor='.$doctor['name_'.lang()])); ?>"><?php echo e($doctor['name_'.lang()]); ?><i class="fas fa-plus"></i></a></h3>
                        <p><?php echo e(str_limit($doctor['desc_'.lang()], $limit = 100, $end = '...')); ?></p>
                        <a href="<?php echo e(url('/doctor/'.$doctor['id'].'?doctor='.$doctor['name_'.lang()])); ?>" class="primaryButton"><?php echo e(trans('admin.more')); ?></a>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php endif; ?>
<?php if(sectionSetting(8)['show_home'] == 1): ?>
<section class="statistics">
    <div class="container">
        <div class="row">
            <?php $__currentLoopData = \App\Statistic::where('active',1)->limit(4)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $statistic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-6 col-md-3">
                <div class="statistic text-center">
                    <div class="IMG">
                        <img src="<?php echo e(Storage::url($statistic['img'])); ?>" alt="Statistic Here">
                    </div>
                    <div class="count"><?php echo e($statistic['count_num']); ?></div>
                    <div class="title upper"><?php echo e($statistic['name_'.lang()]); ?></div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php endif; ?>
<section class="callToAction">
    <div class="container">
        <div class="row align-items-lg-center">
            <div class="col-12 col-lg-9 text-center">
                <span class="text"><?php echo e(trans('admin.offers_s')); ?></span>
            </div>
            <div class="col-12 col-lg-3 text-center">
                <a href="<?php echo e(url('/offers')); ?>" class="primaryButton upper action"><?php echo e(trans('admin.more')); ?></a>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>