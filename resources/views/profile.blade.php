@extends('home')
@section('content')
<section class="s-space-bottom-full bg-accent-shadow-body">
<div class="container">
    @include('layouts.headerPage')
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-4 col-12">
            <div class="gradient-wrapper sidebar-item-box">
                <ul class="nav tab-nav my-account-title">
                    <li class="nav-item"><a class="active" href="#personal" data-toggle="tab" aria-expanded="false">Personal Information</a></li>
                    <li class="nav-item"><a href="#profile" data-toggle="tab" aria-expanded="false">Profile</a></li>
                    <li class="nav-item"><a href="#my-add" data-toggle="tab" aria-expanded="false">My Ads</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-9 col-md-8 col-12">                        
            <div class="tab-content my-account-wrapper gradient-wrapper input-layout1">
                <div role="tabpanel" class="gradient-padding tab-pane fade" id="personal">
                    <h2 class="title-section">Personal Information</h2>
                    <form id="login-page-form">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-4 col-12">
                                <label class="control-label possition-top">Account</label>
                            </div>
                            <div class="col-lg-9 col-md-8 col-sm-8 col-12">
                                <div class="form-group">
                                    <div class="radio radio-primary radio-inline">
                                        <input type="radio" id="inlineRadio1" value="option1" name="radioInline1" checked="">
                                        <label for="inlineRadio1">Indivisual</label>
                                    </div>
                                    <div class="radio radio-primary radio-inline">
                                        <input type="radio" id="inlineRadio2" value="option2" name="radioInline1">
                                        <label for="inlineRadio2">Business</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-4 col-12">
                                <label class="control-label">Email</label>
                            </div>
                            <div class="col-lg-9 col-md-8 col-sm-8 col-12">
                                <div class="form-group">
                                    <input type="text" id="first-name2" class="form-control" placeholder="Enter your e-mail here . . .">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-4 col-12">
                                <label class="control-label">First Name</label>
                            </div>
                            <div class="col-lg-9 col-md-8 col-sm-8 col-12">
                                <div class="form-group">
                                    <input type="text" id="first-name" class="form-control" placeholder="First Name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-4 col-12">
                                <label class="control-label">Last Name</label>
                            </div>
                            <div class="col-lg-9 col-md-8 col-sm-8 col-12">
                                <div class="form-group">
                                    <input type="text" id="last-name" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-4 col-12">
                                <label class="control-label">Phone</label>
                            </div>
                            <div class="col-lg-9 col-md-8 col-sm-8 col-12">
                                <div class="form-group">
                                    <input type="text" id="phone" class="form-control" placeholder="Your Phone Number">
                                    <div class="checkbox checkbox-primary checkbox-circle">
                                        <input id="checkbox1" type="checkbox" checked="">
                                        <label for="checkbox1">Hide the phone number on the published ads.</label>
                                    </div>
                                </div>
                            </div>
                        </div>                               
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-4 col-12">
                                <label class="control-label">Current Password</label>
                            </div>
                            <div class="col-lg-9 col-md-8 col-sm-8 col-12">
                                <div class="form-group">
                                    <input type="text" id="c-password" class="form-control" placeholder="Type  Your Password">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-4 col-12">
                                <label class="control-label">New Password</label>
                            </div>
                            <div class="col-lg-9 col-md-8 col-sm-8 col-12">
                                <div class="form-group">
                                    <input type="text" id="n-password" class="form-control" placeholder="Type  Your Password">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-4 col-12">
                                <label class="control-label">Confirm Password</label>
                            </div>
                            <div class="col-lg-9 col-md-8 col-sm-8 col-12">
                                <div class="form-group">
                                    <input type="text" id="r-password" class="form-control" placeholder="Type  Your Password">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="ml-auto col-lg-9 col-md-8 col-sm-8 col-12 ml-none--mb">
                                <div class="form-group">
                                    <button type="submit" class="cp-default-btn-sm">Update Details!</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div role="tabpanel" class="gradient-padding tab-pane fade" id="profile">
                    <h3 class="title-section">Public Profile</h3>
                    <div class="public-profile"> 
                        <div class="public-profile-item"> 
                            <div class="public-profile-title"> 
                                <h4>Avatar</h4>
                            </div>
                            <div class="public-profile-content"> 
                                <img class="img-fluid" src="img/user/avatar.jpg" alt="Avatar">
                                <div class="file-title">Upload a new avatar:</div>
                                <div class="file-upload-area"><a href="#">Choose File</a>No File Choosen</div>
                                <div class="file-size">JPEG 80x80px</div>
                            </div>
                        </div> 
                        <div class="public-profile-item"> 
                            <div class="public-profile-title"> 
                                <h4>Banner Image</h4>
                            </div>
                            <div class="public-profile-content"> 
                                <img class="img-fluid" src="img/user/banner.jpg" alt="Avatar">
                                <div class="file-title">Upload a new homepage image:</div>
                                <div class="file-upload-area"><a href="#">Choose File</a>No File Choosen</div>
                                <div class="file-size">JPEG 590x242</div>
                            </div>
                        </div> 
                        <div class="public-profile-item"> 
                            <div class="public-profile-title"> 
                                <h4>Profile Heading</h4>
                            </div>
                            <div class="public-profile-content"> 
                                <input class="profile-heading" type="text" value="">
                                <div class="file-size">Appears on your profile page</div>
                            </div>                             
                        </div>                                    
                        <div class="public-profile-item"> 
                            <div class="public-profile-title"> 
                                <h4>Update Profile</h4>
                            </div>
                            <div class="public-profile-content">
                                <a href="#" class="cp-default-btn-lg" id="save">Save</a> 
                            </div>
                        </div>                                    
                    </div> 
                </div> 
                <div role="tabpanel" class="tab-pane fade active show" id="my-add">
                   <div class="row">
                       <div class="col-lg-12">
                           <div class="gradient-wrapper item-mb border-none">
                               <div class="gradient-title">
                                   <div class="row no-gutters">
                                       <div class="col-4 text-center-mb">
                                           <h2 class="mb10--mb">My Ad List</h2>
                                       </div>
                                       <div class="col-8">
                                           <div class="layout-switcher float-none-mb text-center-mb mb10--mb">
                                               <ul>
                                                   <li>
                                                       <div class="page-controls-sorting">
                                                           <div class="dropdown">
                                                               <button class="btn sorting-btn dropdown-toggle" type="button" data-toggle="dropdown">Sort By<i class="fa fa-sort" aria-hidden="true"></i></button>
                                                               <ul class="dropdown-menu">
                                                                   <li><a href="#">Date</a></li>
                                                                   <li><a href="#">Best Sale</a></li>
                                                                   <li><a href="#">Rating</a></li>
                                                               </ul>
                                                           </div>
                                                       </div>
                                                   </li>
                                                   <li class="active"><a href="#" data-type="category-list-layout3" class="product-view-trigger"><i class="fa fa-th-large"></i></a></li>
                                                   <li><a href="#" data-type="category-grid-layout3" class="product-view-trigger"><i class="fa fa-list"></i></a></li>
                                               </ul>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div id="category-view" class="category-list-layout3 gradient-padding zoom-gallery">
                                   <div class="row">
                                       <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                           <div class="product-box item-mb zoom-gallery">
                                               <div class="item-mask-wrapper">
                                                   <div class="item-mask secondary-bg-box"><img src="img/product/product1.png" alt="categories" class="img-fluid">
                                                       <div class="trending-sign active" data-tips="Featured"> <i class="fa fa-bolt" aria-hidden="true"></i> </div>
                                                       <div class="title-ctg">Clothing</div>
                                                       <ul class="info-link">
                                                           <li><a href="img/product/product1.png" class="elv-zoom" data-fancybox-group="gallery" title="Title Here"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                                                           <li><a href="single-product-layout1.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                                       </ul>
                                                       <div class="symbol-featured"><img src="img/banner/symbol-featured.png" alt="symbol" class="img-fluid"> </div>
                                                   </div>
                                               </div>
                                               <div class="item-content">
                                                   <div class="title-ctg">Clothing</div>
                                                   <h3 class="short-title"><a href="single-product1.html">Cotton T-Shirt</a></h3>
                                                   <h3 class="long-title"><a href="single-product1.html">Men's Basic Cotton T-Shirt</a></h3>
                                                   <ul class="upload-info">
                                                       <li class="date"><i class="fa fa-clock-o" aria-hidden="true"></i>07 Mar, 2017</li>
                                                       <li class="place"><i class="fa fa-map-marker" aria-hidden="true"></i>Sydney, Australia</li>
                                                       <li class="tag-ctg"><i class="fa fa-tag" aria-hidden="true"></i>Clothing</li>
                                                   </ul>
                                                   <p>Eimply dummy text of the printing and typesetting industrym has been the industry's standard dummy.</p>
                                                   <div class="price">$10</div>
                                                   <a href="single-product-layout1.html" class="product-details-btn">Details</a>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                           <div class="product-box item-mb zoom-gallery">
                                               <div class="item-mask-wrapper">
                                                   <div class="item-mask secondary-bg-box"><img src="img/product/product2.png" alt="categories" class="img-fluid">
                                                       <div class="trending-sign active" data-tips="Featured"> <i class="fa fa-bolt" aria-hidden="true"></i> </div>
                                                       <div class="title-ctg">Electronics</div>
                                                       <ul class="info-link">
                                                           <li><a href="img/product/product2.png" class="elv-zoom" data-fancybox-group="gallery" title="Title Here"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                                                           <li><a href="single-product-layout2.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                                       </ul>
                                                       <div class="symbol-featured"><img src="img/banner/symbol-featured.png" alt="symbol" class="img-fluid"> </div>
                                                   </div>
                                               </div>
                                               <div class="item-content">
                                                   <div class="title-ctg">Clothing</div>
                                                   <h3 class="short-title"><a href="https://www.radiustheme.com/demo/html/classipost/classipost/single-product2.html">Patriot Phone</a></h3>
                                                   <h3 class="long-title"><a href="https://www.radiustheme.com/demo/html/classipost/classipost/single-product2.html">HTC Desire Patriot Mobile Smart Phone</a></h3>
                                                   <ul class="upload-info">
                                                       <li class="date"><i class="fa fa-clock-o" aria-hidden="true"></i>07 Mar, 2017</li>
                                                       <li class="place"><i class="fa fa-map-marker" aria-hidden="true"></i>Sydney, Australia</li>
                                                       <li class="tag-ctg"><i class="fa fa-tag" aria-hidden="true"></i>Clothing</li>
                                                   </ul>
                                                   <p>Eimply dummy text of the printing and typesetting industrym has been the industry's standard dummy.</p>
                                                   <div class="price">$250</div>
                                                   <a href="single-product-layout2.html" class="product-details-btn">Details</a>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                           <div class="product-box item-mb zoom-gallery">
                                               <div class="item-mask-wrapper">
                                                   <div class="item-mask secondary-bg-box"><img src="img/product/product15.png" alt="categories" class="img-fluid">
                                                       <div class="trending-sign" data-tips="Featured"> <i class="fa fa-bolt" aria-hidden="true"></i> </div>
                                                       <div class="title-ctg">Clothing</div>
                                                       <ul class="info-link">
                                                           <li><a href="img/product/product15.png" class="elv-zoom" data-fancybox-group="gallery" title="Title Here"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                                                           <li><a href="product-single.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                                       </ul>
                                                       <div class="symbol-featured"><img src="img/banner/symbol-featured.png" alt="symbol" class="img-fluid"> </div>
                                                   </div>
                                               </div>
                                               <div class="item-content">
                                                   <div class="title-ctg">Clothing</div>
                                                   <h3 class="short-title"><a href="https://www.radiustheme.com/demo/html/classipost/classipost/single-product3.html">LED-Lit Monitor</a></h3>
                                                   <h3 class="long-title"><a href="https://www.radiustheme.com/demo/html/classipost/classipost/single-product3.html">Samsung U28E590D 28-Inch UHD LED-Lit Monitor</a></h3>
                                                   <ul class="upload-info">
                                                       <li class="date"><i class="fa fa-clock-o" aria-hidden="true"></i>07 Mar, 2017</li>
                                                       <li class="place"><i class="fa fa-map-marker" aria-hidden="true"></i>Sydney, Australia</li>
                                                       <li class="tag-ctg"><i class="fa fa-tag" aria-hidden="true"></i>Clothing</li>
                                                   </ul>
                                                   <p>Eimply dummy text of the printing and typesetting industrym has been the industry's standard dummy.</p>
                                                   <div class="price">$393</div>
                                                   <a href="product-single.html" class="product-details-btn">Details</a>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                           <div class="product-box item-mb zoom-gallery">
                                               <div class="item-mask-wrapper">
                                                   <div class="item-mask secondary-bg-box"><img src="img/product/product18.png" alt="categories" class="img-fluid">
                                                       <div class="trending-sign" data-tips="Featured"> <i class="fa fa-bolt" aria-hidden="true"></i> </div>
                                                       <div class="title-ctg">Clothing</div>
                                                       <ul class="info-link">
                                                           <li><a href="img/product/product18.png" class="elv-zoom" data-fancybox-group="gallery" title="Title Here"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                                                           <li><a href="single-product-layout1.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                                       </ul>
                                                       <div class="symbol-featured"><img src="img/banner/symbol-featured.png" alt="symbol" class="img-fluid"> </div>
                                                   </div>
                                               </div>
                                               <div class="item-content">
                                                   <div class="title-ctg">Clothing</div>
                                                   <h3 class="short-title"><a href="https://www.radiustheme.com/demo/html/classipost/classipost/single-product3.html">Solid Table Lamp</a></h3>
                                                   <h3 class="long-title"><a href="https://www.radiustheme.com/demo/html/classipost/classipost/single-product3.html">Minimalist Solid Wood Table Lamp</a></h3>
                                                   <ul class="upload-info">
                                                       <li class="date"><i class="fa fa-clock-o" aria-hidden="true"></i>07 Mar, 2017</li>
                                                       <li class="place"><i class="fa fa-map-marker" aria-hidden="true"></i>Sydney, Australia</li>
                                                       <li class="tag-ctg"><i class="fa fa-tag" aria-hidden="true"></i>Clothing</li>
                                                   </ul>
                                                   <p>Eimply dummy text of the printing and typesetting industrym has been the industry's standard dummy.</p>
                                                   <div class="price">$79</div>
                                                   <a href="single-product-layout1.html" class="product-details-btn">Details</a>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                           <div class="product-box item-mb zoom-gallery">
                                               <div class="item-mask-wrapper">
                                                   <div class="item-mask secondary-bg-box"><img src="img/product/product19.png" alt="categories" class="img-fluid">
                                                       <div class="trending-sign" data-tips="Featured"> <i class="fa fa-bolt" aria-hidden="true"></i> </div>
                                                       <div class="title-ctg">Clothing</div>
                                                       <ul class="info-link">
                                                           <li><a href="img/product/product19.png" class="elv-zoom" data-fancybox-group="gallery" title="Title Here"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                                                           <li><a href="single-product-layout2.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                                       </ul>
                                                       <div class="symbol-featured"><img src="img/banner/symbol-featured.png" alt="symbol" class="img-fluid"> </div>
                                                   </div>
                                               </div>
                                               <div class="item-content">
                                                   <div class="title-ctg">Clothing</div>
                                                   <h3 class="short-title"><a href="single-product1.html">Stylish Bracelet</a></h3>
                                                   <h3 class="long-title"><a href="single-product1.html">Bracelet for Outdoor Camping Survival Stylish Bracelet</a></h3>
                                                   <ul class="upload-info">
                                                       <li class="date"><i class="fa fa-clock-o" aria-hidden="true"></i>07 Mar, 2017</li>
                                                       <li class="place"><i class="fa fa-map-marker" aria-hidden="true"></i>Sydney, Australia</li>
                                                       <li class="tag-ctg"><i class="fa fa-tag" aria-hidden="true"></i>Clothing</li>
                                                   </ul>
                                                   <p>Eimply dummy text of the printing and typesetting industrym has been the industry's standard dummy.</p>
                                                   <div class="price">$42</div>
                                                   <a href="single-product-layout2.html" class="product-details-btn">Details</a>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                           <div class="product-box item-mb zoom-gallery">
                                               <div class="item-mask-wrapper">
                                                   <div class="item-mask secondary-bg-box"><img src="img/product/product20.png" alt="categories" class="img-fluid">
                                                       <div class="trending-sign" data-tips="Featured"> <i class="fa fa-bolt" aria-hidden="true"></i> </div>
                                                       <div class="title-ctg">Clothing</div>
                                                       <ul class="info-link">
                                                           <li><a href="img/product/product20.png" class="elv-zoom" data-fancybox-group="gallery" title="Title Here"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                                                           <li><a href="product-single.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                                       </ul>
                                                       <div class="symbol-featured"><img src="img/banner/symbol-featured.png" alt="symbol" class="img-fluid"> </div>
                                                   </div>
                                               </div>
                                               <div class="item-content">
                                                   <div class="title-ctg">Clothing</div>
                                                   <h3 class="short-title"><a href="https://www.radiustheme.com/demo/html/classipost/classipost/single-product2.html">Foldable Bag</a></h3>
                                                   <h3 class="long-title"><a href="https://www.radiustheme.com/demo/html/classipost/classipost/single-product2.html">Foldable Waterproof Carry Storage Bag with Zipper</a></h3>
                                                   <ul class="upload-info">
                                                       <li class="date"><i class="fa fa-clock-o" aria-hidden="true"></i>07 Mar, 2017</li>
                                                       <li class="place"><i class="fa fa-map-marker" aria-hidden="true"></i>Sydney, Australia</li>
                                                       <li class="tag-ctg"><i class="fa fa-tag" aria-hidden="true"></i>Clothing</li>
                                                   </ul>
                                                   <p>Eimply dummy text of the printing and typesetting industrym has been the industry's standard dummy.</p>
                                                   <div class="price">$38</div>
                                                   <a href="product-single.html" class="product-details-btn">Details</a>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="gradient-wrapper mb--xs mb-30 border-none">
                               <ul class="cp-pagination">
                                   <li class="disabled"><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i>Previous</a></li>
                                   <li class="active"><a href="#">1</a></li>
                                   <li><a href="#">2</a></li>
                                   <li><a href="#">3</a></li>
                                   <li><a href="#">4</a></li>
                                   <li><a href="#">5</a></li>
                                   <li><a href="#">6</a></li>
                                   <li><a href="#">Next<i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
                </div>                     
            </div>                       
        </div>                    
    </div>
</div>
</section>
@endsection