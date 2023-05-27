@extends('master')

@section('content')
    


    <section class="single-block-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="single-post">
                        <div class="post-header mb-5 text-center">
                            <div class="meta-cat">
                                <a class="post-category font-extra text-color text-uppercase font-sm letter-spacing-1"
                                    href="#">Health ,</a>
                                <a class="post-category font-extra text-color text-uppercase font-sm letter-spacing-1"
                                    href="#">lifestyle</a>
                            </div>
                            <h2 class="post-title mt-2">
                                {{$cost->cost_name}}
                            </h2>

                            <div class="post-meta">
                                <span class="text-uppercase font-sm letter-spacing-1 mr-3">by Liam</span>
                                <span class="text-uppercase font-sm letter-spacing-1">January 17,2019</span>
                            </div>
                            <div class="post-featured-image mt-5">
                                <img src="images/fashion/bg-banner.jpg" class="img-fluid w-100" alt="featured-image">
                            </div>
                        </div>
                        <div class="post-body">
                            <div class="entry-content">
                                <p> It was a cheerful prospect. I asked Perry what he thought about it; but he only
                                    shrugged his shoulders and continued a longwinded prayer he had been at for some
                                    time. He was wont to say that the only redeeming feature of our captivity was the
                                    ample time it gave him for the improvisation of prayers—it was becoming an obsession
                                    with him.</p>
                                <h2 class="mt-4 mb-3">Perfect design & code delivered to you</h2>
                                <p> The Sagoths had begun to take notice of his habit of declaiming throughout entire
                                    marches. One of them asked him what he was saying—to whom he was talking. The
                                    question gave me an idea, so I answered quickly before Perry could say anything.</p>
                                <blockquote>
                                    <i class="ti-quote-left mr-2"></i>A wise girls knows her limit to touch the
                                    sky.Repellat sapiente neque iusto praesentium adipisci.The question gave me an idea,
                                    so I answered quickly before Perry could say anything.<i
                                        class="ti-quote-right ml-2"></i>
                                </blockquote>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <img src="images/fashion/single-img1.png" alt="post-ads"
                                            class="img-fluid mr-4 w-100">
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <img src="images/fashion/single-img2.png" alt="post-ads"
                                            class="img-fluid mr-4 w-100">
                                    </div>
                                </div>
                                <h3 class="mt-5 mb-3">Enjoying the view of summer</h3>

                                <p>total kamar = {{$cost->total_kamar}}</p>
                                <p>tipe kos = {{$cost->cost_type}}</p>
                                <p>sisa kamar {{$cost->available_room}}</p>
                                <p>alamat kos = {{$cost->cost_addres}}</p>
                                <p>deskripsi kos = {{$cost->description}}</p>
                                <p>kontak = {{$cost->contact_person}}</p>
                                <p>batas jam malam = {{$cost->night_limit}}</p>
                            </div>

                            <div class="post-tags py-4">
                                <a href="#">#Health</a>
                                <a href="#">#Game</a>
                                <a href="#">#Tour</a>
                            </div>
                            <div
                                class="tags-share-box center-box d-flex text-center justify-content-between border-top border-bottom py-3">

                                <span class="single-comment-o"><i class="fa fa-comment-o"></i>0 comment</span>

                                <div class="post-share">
                                    <span class="count-number-like">2</span>
                                    <a class="penci-post-like single-like-button"><i class="ti-heart"></i></a>
                                </div>

                                <div class="list-posts-share">
                                    <a target="_blank" rel="nofollow" href="#"><i class="ti-facebook"></i></a>
                                    <a target="_blank" rel="nofollow" href="#"><i class="ti-twitter"></i></a>
                                    <a target="_blank" rel="nofollow" href="#"><i class="ti-pinterest"></i></a>
                                    <a target="_blank" rel="nofollow" href="#"><i class="ti-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-author d-flex my-5">
                        <div class="author-img">
                            <img alt="" src="images/author.jpg" class="avatar avatar-100 photo" width="100"
                                height="100">
                        </div>

                        <div class="author-content pl-4">
                            <h4 class="mb-3"><a href="#" title="" rel="author" class="text-capitalize">Themefisher</a>
                            </h4>
                            <p>Hey there. My name is Liam. I was born with the love for traveling. I also love taking
                                photos with my phone in order to capture moment..</p>

                            <a target="_blank" class="author-social" href="#"><i class="ti-facebook"></i></a>
                            <a target="_blank" class="author-social" href="#"><i class="ti-twitter"></i></a>
                            <a target="_blank" class="author-social" href="#"><i class="ti-google-plus"></i></a>
                            <a target="_blank" class="author-social" href="#"><i class="ti-instagram"></i></a>
                            <a target="_blank" class="author-social" href="#"><i class="ti-pinterest"></i></a>
                            <a target="_blank" class="author-social" href="#"><i class="ti-tumblr"></i></a>
                        </div>
                    </div>
                    <nav class="post-pagination clearfix border-top border-bottom py-4">
                        <div class="prev-post">
                            <a href="/Blog-Post">
                                <span class="text-uppercase font-sm letter-spacing">Next</span>
                                <h4 class="mt-3"> Intel’s new smart glasses actually look good</h4>
                            </a>
                        </div>
                        <div class="next-post">
                            <a href="/Blog-Post">
                                <span class="text-uppercase font-sm letter-spacing">Previous</span>
                                <h4 class="mt-3">Free Two-Hour Delivery From Whole Foods</h4>
                            </a>
                        </div>
                    </nav>
                    <div class="related-posts-block mt-5">
                        <h3 class="news-title mb-4 text-center">
                            You May Also Like
                        </h3>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="post-block-wrapper mb-4 mb-lg-0">
                                    <a href="/Blog-Post">
                                        <img class="img-fluid" src="images/fashion/img-1.jpg" alt="post-thumbnail" />
                                    </a>
                                    <div class="post-content mt-3">
                                        <h5>
                                            <a href="/Blog-Post">Intel’s new smart glasses actually look good</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="post-block-wrapper mb-4 mb-lg-0">
                                    <a href="/Blog-Post">
                                        <img class="img-fluid" src="images/fashion/img-2.jpg" alt="post-thumbnail" />
                                    </a>
                                    <div class="post-content mt-3">
                                        <h5>
                                            <a href="/Blog-Post">Free Two-Hour Delivery From Whole Foods</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="post-block-wrapper">
                                    <a href="/Blog-Post">
                                        <img class="img-fluid" src="images/fashion/img-3.jpg" alt="post-thumbnail" />
                                    </a>
                                    <div class="post-content mt-3">
                                        <h5>
                                            <a href="/Blog-Post">Snow and Freezing Rain in Paris Forces the</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('partials.comment')
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="sidebar sidebar-right">
                        <div class="sidebar-wrap mt-5 mt-lg-0">
                            <div class="sidebar-widget about mb-5 text-center p-3">
                                <div class="about-author">
                                    <img src="images/author.jpg" alt="" class="img-fluid">
                                </div>
                                <h4 class="mb-0 mt-4">Liam Mason</h4>
                                <p>Travel Blogger</p>
                                <p>I'm Liam, last year I decided to quit my job and travel the world. You can follow my
                                    journey on this blog!</p>
                                <img src="images/liammason.png" alt="" class="img-fluid">
                            </div>

                            <div class="sidebar-widget follow mb-5 text-center">
                                <h4 class="text-center widget-title">Follow Me</h4>
                                <div class="follow-socials">
                                    <a href="#"><i class="ti-facebook"></i></a>
                                    <a href="#"><i class="ti-twitter"></i></a>
                                    <a href="#"><i class="ti-instagram"></i></a>
                                    <a href="#"><i class="ti-youtube"></i></a>
                                    <a href="#"><i class="ti-pinterest"></i></a>
                                </div>
                            </div>

                            <div class="sidebar-widget mb-5 ">
                                <h4 class="text-center widget-title">Trending Posts</h4>

                                <div class="sidebar-post-item-big">
                                    <a href="/Blog-Post"><img src="images/news/img-1.jpg" alt=""
                                            class="img-fluid"></a>
                                    <div class="mt-3 media-body">
                                        <span class="text-muted letter-spacing text-uppercase font-sm">September 10,
                                            2019</span>
                                        <h4><a href="/Blog-Post">Meeting With Clarissa, Founder Of Purple
                                                Conversation App</a></h4>
                                    </div>
                                </div>

                                <div class="media border-bottom py-3 sidebar-post-item">
                                    <a href="#"><img class="mr-4" src="images/news/thumb-1.jpg" alt=""></a>
                                    <div class="media-body">
                                        <span class="text-muted letter-spacing text-uppercase font-sm">September 10,
                                            2019</span>
                                        <h4><a href="/Blog-Post">Thoughtful living in los Angeles</a></h4>
                                    </div>
                                </div>

                                <div class="media py-3 sidebar-post-item">
                                    <a href="#"><img class="mr-4" src="images/news/thumb-2.jpg" alt=""></a>
                                    <div class="media-body">
                                        <span class="text-muted letter-spacing text-uppercase font-sm">September 10,
                                            2019</span>
                                        <h4><a href="/Blog-Post">Vivamus molestie gravida turpis.</a></h4>
                                    </div>
                                </div>
                            </div>


                            <div class="sidebar-widget category mb-5">
                                <h4 class="text-center widget-title">Catgeories</h4>
                                <ul class="list-unstyled">
                                    <li class="align-items-center d-flex justify-content-between">
                                        <a href="#">Innovation</a>
                                        <span>14</span>
                                    </li>
                                    <li class="align-items-center d-flex justify-content-between">
                                        <a href="#">Software</a>
                                        <span>2</span>
                                    </li>
                                    <li class="align-items-center d-flex justify-content-between">
                                        <a href="#">Social</a>
                                        <span>10</span>
                                    </li>
                                    <li class="align-items-center d-flex justify-content-between">
                                        <a href="#">Trends</a>
                                        <span>5</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="sidebar-widget subscribe mb-5">
                                <h4 class="text-center widget-title">Newsletter</h4>
                                <input type="text" class="form-control" placeholder="Email Address">
                                <a href="#" class="btn btn-primary d-block mt-3">Sign Up</a>
                            </div>

                            <div class="sidebar-widget sidebar-adv mb-5">
                                <a href="#"><img src="images/sidebar-banner3.png" alt="" class="img-fluid w-100"></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--footer start-->
    <footer class="footer-section bg-grey">
        <div class="instagram-photo-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="text-center">Follow in Instagram</h4>
                    </div>
                </div>

                <div class="row no-gutters" id="instafeed">

                </div>
            </div>
        </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="mb-4">
                        <h2 class="footer-logo">Revolve.</h2>
                    </div>
                    <ul class="list-inline footer-socials">
                        <li class="list-inline-item"><a href="#"><i class="ti-facebook mr-2"></i>Facebook</a></li>
                        <li class="list-inline-item"><a href="#"><i class="ti-twitter mr-2"></i>Twitter</a></li>
                        <li class="list-inline-item"><a href="#"><i class="ti-linkedin mr-2"></i>Linkedin</a></li>
                        <li class="list-inline-item"><a href="#"><i class="ti-pinterest mr-2"></i>Pinterest</a></li>
                        <li class="list-inline-item"><a href="#"><i class="ti-github mr-2"></i>Github</a></li>
                        <li class="list-inline-item"><a href="#"><i class="ti-instagram mr-2"></i>Instrgram</a></li>
                        <li class="list-inline-item"><a href="#"><i class="ti-rss mr-2"></i>rss</a></li>
                    </ul>
                </div>

                <div class="col-md-12 text-center">
                    <p class="copyright">© Copyright 2019 - Revolve. All Rights Reserved. Distribution <a
                            class="text-white" href="https://themewagon.com">ThemeWagon.</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!--footer end-->
    @endsection