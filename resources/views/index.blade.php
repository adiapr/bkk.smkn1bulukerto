<!doctype html>
<!--
	Lamoda by TEMPLATE STOCK
	templatestock.co @templatestock
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->


<html lang="en-gb" class="no-js">
  <head>
    @include('pages.headset')
  </head>
  <body  data-spy="scroll" data-target="#main-menu" style="font-family: arial">


  <!--Start Page loader -->
  {{-- <div id="pageloader">
        <div class="loader">
          <img src="images/progress.gif" alt='loader' />
        </div>
   </div> --}}
   <!--End Page loader -->


   <!--Start Navigation-->
        @include('pages.header')
    <!--End Navigation-->


        <!-- Start Slider  -->
        <section id="home" class="home">
        <div class="slider-overlay"></div>
            <div class="flexslider">
                <ul class="slides scroll">
                    @foreach ($slider as $slide)
                    {{-- content slide --}}
                    <li class="first">
                        <div class="slider-text-wrapper">
                            <div class="container">
                                <div class="big">{{ $slide->judul }} </div>
                                <div class="small" style="text-transform: Capitalize">{{ $slide->tagline }}</div>
                            </div>
                        </div>
                        <img src="images/slider/{{ $slide->gambar }}" alt="{{ $slide->nama }}">
                    </li>
                    {{-- /content slide --}}
                    @endforeach
                </ul>
            </div>
        </section>
          <!-- End Slider  -->


  <!--Start Features-->
  <section  id="about" class="section">
    <div class="container">
        <div class="row">
           <h1>Bersama BKK SMKN 1 Bulukerto</h1><br><hr>
           <!-- Features Icon-->
           <div class="col-md-4">
               <div class="features-icon-box">

                   <div class="features-icon">
                   <i class="fa fa-desktop"></i>
                   </div>

                   <div class="features-info">
                      <h4>Lamaran Online</h4>
                      <p>Cari lowongan sesuai dengan minat dan keahlianmu.</p>
                   </div>
               </div>
           </div>

            <!-- Features Icon-->
           <div class="col-md-4">
               <div class="features-icon-box">

                   <div class="features-icon">
                   <i class="fa fa-eye"></i>
                   </div>

                   <div class="features-info">
                      <h4>Lihat Lamaran</h4>
                      <p>Lihat dalam riwayat lamaranmu, dan pantau lamaranmu recara realtime.</p>
                   </div>
               </div>
           </div>

            <!-- Features Icon-->
           <div class="col-md-4">
               <div class="features-icon-box">

                   <div class="features-icon">
                  <i class="fa fa-life-saver"></i>
                   </div>

                   <div class="features-info">
                      <h4>Perusahaan Terbaik</h4>
                      <p>SMKN 1 Bulukerto bekerjasama dengan beberapa perusahaan terbaik untuk kita.</p>
                   </div>
               </div>
           </div>
        </div> <!-- /.row-->
    </div> <!-- /.container-->
</section>
<!--End Features-->
<!--Start clients-->
<section id="clients" class="section">
        <div class="container">
            <div class="row">

         <div class="title-box text-center">
             <h2 class="title">Kerjasama BKK</h2>
          </div>

                <div class="clients-carousel">

                    <!-- Clients Logo Item-->
                     <div class="item">
                         <a href="#">
                             <figure>
                                 <img src="images/clients-logo/client1.png" alt="" />
                             </figure>
                         </a>
                     </div>

                    <!-- Clients Logo Item-->
                     <div class="item">
                         <a href="#">
                             <figure>
                                   <img src="images/clients-logo/client2.png" alt="" />
                             </figure>
                         </a>
                     </div>

                     <!-- Clients Logo Item-->
                     <div class="item">
                         <a href="#">
                             <figure>
                                   <img src="images/clients-logo/client3.png" alt="" />
                             </figure>
                         </a>
                     </div>

                     <!-- Clients Logo Item-->
                     <div class="item">
                         <a href="#">
                             <figure>
                                  <img src="images/clients-logo/client4.png" alt="" />
                             </figure>
                         </a>
                     </div>

                    <!-- Clients Logo Item-->
                     <div class="item">
                         <a href="#">
                             <figure>
                                   <img src="images/clients-logo/client2.png" alt="" />
                             </figure>
                         </a>
                     </div>

                    <!-- Clients Logo Item-->
                     <div class="item">
                         <a href="#">
                             <figure>
                                   <img src="images/clients-logo/client5.png" alt="" />
                             </figure>
                         </a>
                     </div>

                     <!-- Clients Logo Item-->
                     <div class="item">
                         <a href="#">
                             <figure>
                                  <img src="images/clients-logo/client4.png" alt="" />
                             </figure>
                         </a>
                     </div>

                     <!-- Clients Logo Item-->
                     <div class="item">
                         <a href="#">
                             <figure>
                                  <img src="images/clients-logo/client1.png" alt="" />
                             </figure>
                         </a>
                     </div>
              </div>
            </div> <!--/.row-->
      </div> <!--/.container-->
 </section>
<!--End clients-->


<!-- Start Facts-->
<section id="facts" class="section parallax">
 <div class="overlay"></div>
    <div class="container">
        <div class="row">

             <!-- Start Item-->
             <div class="col-md-3 col-sm-6 facts-box margin-bottom-30">
                 <span><i class="icon-happy"></i></span>
                 <h3>841</h3>
                 <span>Happy Clients</span>
             </div>
             <!-- End Item-->

              <!-- Start Item-->
             <div class="col-md-3 col-sm-6 facts-box margin-bottom-30">
              <span><i class="icon-presentation"></i></span>
                 <h3>800</h3>
                 <span>Projects</span>
             </div>
             <!-- End Item-->

              <!-- Start Item-->
             <div class="col-md-3 col-sm-6 facts-box margin-bottom-30">
              <span><i class="icon-target"></i></span>
                 <h3>1232</h3>
                 <span>Lines of Code</span>
             </div>
             <!-- End Item-->

              <!-- Start Item-->
             <div class="col-md-3 col-sm-6 facts-box margin-bottom-30">
              <span><i class="icon-trophy"></i></span>
                 <h3>300</h3>
                 <span>Awards Won</span>
             </div>
             <!-- End Item-->

          </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>
<!--End Facts-->


<!--Start Section-->
<section class="section">
   <div class="container">
       <div class="row">
             <div class="col-md-12">
                 <div class="content-tab-1">
                     <ul class="nav">
                         <li class="active">
                             <a aria-expanded="true" href="#tab-content-1" data-toggle="tab">
                             <i class="fa fa-desktop"></i>
                             <h4>Responsive</h4>
                             </a>
                             <div class="tab-arrow">
                             </div>
                         </li>

                           <li>
                             <a aria-expanded="true" href="#tab-content-2" data-toggle="tab">
                             <i class="fa fa-cubes"></i>
                             <h4>Flexible</h4>
                             </a>
                             <div class="tab-arrow">
                             </div>
                         </li>

                         <li>
                             <a aria-expanded="true" href="#tab-content-3" data-toggle="tab">
                             <i class="fa fa-institution"></i>
                             <h4>Support</h4>
                             </a>
                             <div class="tab-arrow">
                             </div>
                         </li>

                           <li>
                             <a aria-expanded="true" href="#tab-content-4" data-toggle="tab">
                             <i class="fa fa-pagelines"></i>
                             <h4>Clean Design</h4>
                             </a>
                             <div class="tab-arrow">
                             </div>
                         </li>

                           <li>
                             <a aria-expanded="true" href="#tab-content-5" data-toggle="tab">
                             <i class="fa fa-pie-chart"></i>
                             <h4>Easy to Use</h4>
                             </a>
                             <div class="tab-arrow">
                             </div>
                         </li>

                     </ul>

                     <div class="tab-content-main">
                             <div class="container">
                                 <div class="tab-content">
                                     <div class="tab-pane active in" id="tab-content-1">

                                        <!-- Features Icon-->
                                         <div class="col-md-6 margin-bottom-30">
                                             <div class="tab1-features">
                                                 <div class="icon"> <i class="fa fa-star-o"></i> </div>
                                                 <div class="info">
                                                     <h4>Dedicated Support & Updates</h4>
                                                     <p>Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet. Et netus et malesuada fames ac turpis egestas tristique senectus. </p>
                                                 </div>
                                             </div>

                                             <div class="tab1-features">
                                                 <div class="icon"> <i class="fa fa-codepen"></i> </div>
                                                 <div class="info">
                                                     <h4>multipurpose theme</h4>
                                                     <p>Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet. Et netus et malesuada fames ac turpis egestas tristique senectus. </p>
                                                 </div>
                                             </div>

                                             <div class="tab1-features">
                                                 <div class="icon"> <i class="fa fa-heart-o"></i></div>
                                                 <div class="info">
                                                     <h4>Design With Love</h4>
                                                     <p>Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet. Et netus et malesuada fames ac turpis egestas tristique senectus. </p>
                                                 </div>
                                             </div>

                                         </div>
                                         <!--End features Icon-->


                                       <!--  Start Carousel-->
                                       <div class="col-md-6">
                                           <div class="tab-carousel">
                                                 <div class="item"><img src="images/works/img4.jpg" alt=""></div>
                                                 <div class="item"><img src="images/works/img5.jpg" alt=""></div>
                                                 <div class="item"><img src="images/works/img6.jpg" alt=""></div>
                                           </div>
                                       </div>
                                       <!-- End Carousel-->

                                     </div>
                                    <!-- End Tab content 1-->


                                     <div class="tab-pane" id="tab-content-3">

                                    <div class="features-tab3">

                                         <!--Start Features Left-->
                                         <div class="col-md-4">
                                             <div class="features-left m-bot-30">
                                                     <!--Features Item #1-->
                                                     <div class="features-item">
                                                         <div class="features-icon"> <i class="fa fa-pagelines"></i> </div>
                                                         <div class="features-info">
                                                            <h4>Multipurpose & Responsive</h4>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum.</p>
                                                         </div>
                                                     </div>

                                                     <!--Features Item #2-->
                                                     <div class="features-item">
                                                         <div class="features-icon"> <i class="fa fa-trophy"></i> </div>
                                                         <div class="features-info">
                                                            <h4>Creative Design</h4>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum.</p>
                                                         </div>
                                                     </div>

                                                     <!--Features Item #3-->
                                                     <div class="features-item">
                                                         <div class="features-icon"> <i class="fa fa-tag"></i> </div>
                                                         <div class="features-info">
                                                            <h4>Awesome Theme</h4>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum.</p>
                                                         </div>
                                                     </div>

                                                 </div>
                                              </div>
                                        <!--End Features Left-->

                                        <!--Start Features Image-->
                                        <div class="col-md-4 hidden-xs m-bot-30">
                                             <img src="images/device.png" alt="Features Image" />
                                        </div>
                                        <!--End Features Image-->

                                        <!--Start Features Right-->
                                        <div class="col-md-4">
                                            <div class="features-right m-bot-30">
                                              <!--Features Item #1-->
                                             <div class="features-item">
                                                 <div class="features-icon"> <i class="fa fa-eyedropper"></i> </div>
                                                 <div class="features-info">
                                                    <h4>Strategy Solutions</h4>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum.</p>
                                                 </div>
                                             </div>

                                             <!--Features Item #2-->
                                             <div class="features-item">
                                                 <div class="features-icon"> <i class="fa fa-search-plus"></i> </div>
                                                 <div class="features-info">
                                                    <h4>App Development</h4>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum.</p>
                                                 </div>
                                             </div>

                                             <!--Features Item #3-->
                                             <div class="features-item">
                                                 <div class="features-icon"> <i class="fa fa-send-o"></i> </div>
                                                 <div class="features-info">
                                                    <h4>HTML5 & CSS3</h4>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum.</p>
                                                 </div>
                                             </div>

                                            </div>
                                        </div>
                                        <!--End Features Right -->
                                     </div>

                                 </div>

                                     <div class="tab-pane" id="tab-content-4">

                                         <div class="tab-content-4">

                                             <div class="col-md-3">
                                                 <div class="tab4-services-box">
                                                     <div class="icon"><i class="fa fa-bolt"></i> </div>
                                                     <div class="info">
                                                         <h4>Simple and Clean Codes</h4>
                                                         <p>Vivamus a placerat ante. Duis vulputate nibh sit amet augue vehicula, mattis
viverra purus tristique.</p>
                                                     </div>
                                                 </div>
                                             </div>



                                             <div class="col-md-3">
                                                 <div class="tab4-services-box">
                                                     <div class="icon"><i class="fa fa-fire"></i> </div>
                                                     <div class="info">
                                                         <h4>Responsive Layout Design</h4>
                                                         <p>Vivamus a placerat ante. Duis vulputate nibh sit amet augue vehicula, mattis
viverra purus tristique.</p>
                                                     </div>
                                                 </div>
                                             </div>

                                             <div class="col-md-3">
                                                 <div class="tab4-services-box">
                                                     <div class="icon"><i class="fa fa-chain"></i> </div>
                                                     <div class="info">
                                                         <h4>Unlimited Support</h4>
                                                         <p>Vivamus a placerat ante. Duis vulputate nibh sit amet augue vehicula, mattis
viverra purus tristique.</p>
                                                     </div>
                                                 </div>
                                             </div>

                                             <div class="col-md-3">
                                                 <div class="tab4-services-box">
                                                     <div class="icon"><i class="fa fa-shopping-cart"></i> </div>
                                                     <div class="info">
                                                         <h4>multipurpose theme</h4>
                                                         <p>Vivamus a placerat ante. Duis vulputate nibh sit amet augue vehicula, mattis
viverra purus tristique.</p>
                                                     </div>
                                                 </div>
                                             </div>

                                         </div>

                                     </div>


                                     <div class="tab-pane" id="tab-content-5">

                                         <div class="tab-content-5">

                                             <div class="col-md-6">
                                                  <div class="core-features">

                                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur euismod enim a metus adipiscing aliquam. Vestibulum in vestibulum lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur euismod enim a metus adipiscing aliquam. Vestibulum in vestibulum lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur euismod enim a metus adipiscing.</p>

                                                <ul class="list">
                                                     <li>Font-Awesome Integration</li>
                                                     <li>Multiple unique designs</li>
                                                     <li>Clean coded, responsive and multipurpose</li>
                                                     <li>Pages valid on w3c.</li>
                                                     <li>Well documented.</li>
                                                     <li>Easy to  customization.</li>
                                                 </ul>

                                            </div>
                                             </div>


                                             <div class="col-md-6">
                                                 <div class="devices-image">
                                                     <img src="images/device-desktop.png" alt=""/>
                                                 </div>
                                             </div>

                                         </div>

                                     </div>

                                 </div>
                             </div>
                       </div>
                     <!--/.tab-content-main-->
                 </div>
             </div>

         </div> <!--/.row-->
   </div> <!--/.container-->
</section>
<!--End Section-->

<section id="why-choose" class="section">
    <div class="container">
        <div class="row">
              <div class="title-box text-center">
                 <h2 class="title">Lowongan Kerja</h2>
              </div>
         <!--Loker-->
         @foreach ($loker as $dataloker)
         <div class="col-md-12"
         style="
         background: white;
         border:solid 1px #eeecec;
         border-radius:3px;
         margin-bottom:10px;
         padding-top:5px;
         line-height:20px">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row g-0">
                    <div class="col-md-3">
                    <img src="images/company-logo/{{ $dataloker->logo }}" class="img-fluid rounded-start" style="height: 100px">
                    </div>
                    <div class="col-md-6">
                        <h3><b>{{ $dataloker->perusahaan }}</b></h3>
                        <p class="card-text"><b>Posisi : </b>{{ $dataloker->posisi }}</p>
                        <table>
                            <tr width="100%">
                                <td width="30%"><i class="fa fa-calendar"></i> {{ $dataloker->tes }}</td>
                                <td width="30%"><i class="fa fa-graduation-cap"></i> {{ $dataloker->jurusan }}</td>
                                <td width="30%"><i class="fa fa-map-marker"></i> {{ $dataloker->lokasi }}</td>
                            </tr>
                        </table><br>
                    </div>
                    <div class="col-md-3" style="text-align: right;v-align:mid">
                        <br><br>
                        <a href="" class="btn btn-primary btn-sm" style="border-radius:3px;color:white" data-toggle="modal" data-target="#myModall{{ $dataloker->id }}">
                            <i class="fa fa-th-list"></i> Detail
                            </a>
                            <div id="myModall{{ $dataloker->id }}" class="modal fade" role="dialog">
                                <div style="text-align: left" class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <br><br>
                                            <font size="+3"><b>{{ $dataloker->perusahaan }}</b></font><br>
                                            <font size="+0" style="color: #999999">{{ $dataloker->posisi }}</font>
                                            <hr>
                                            <table border="0" style="width:100%">
                                                <tr >
                                                    <td>
                                                        <i class="fa fa-calendar"></i> &nbsp; {{ $dataloker->tes }}<br>
                                                        <i class="fa fa-university"></i> &nbsp; {{ $dataloker->lokasi }}<br>
                                                        <i class="fa fa-graduation-cap"></i> &nbsp; {{ $dataloker->jurusan }}<br>
                                                    </td>
                                                    <td align="right">
                                                        <img src="{{asset('images/company-logo/'.$dataloker->logo) }}" height="80">
                                                    </td>
                                                </tr>
                                            </table>
                                            <div class="row">
                                                <div class="col-6">

                                                </div>
                                                <div class="col-6" style="text-align: right">

                                                </div>
                                            </div>
                                            <br>
                                            <b>Deskripsi :</b><br>
                                            {!! $dataloker->keterangan !!}
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-default btn-sm" data-dismiss="modal">Kembali</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <a href="" class="btn btn-sm btn-success" style="border-radius:3px;color:white"><i class="fa fa-paper-plane"></i> Apply</a>
                    </div>
                    </div>
                </div>
            </div>
         </div>
         @endforeach
         <!--End Loker-->

        </div> <!--/.row-->
    </div> <!--/.container-->
</section>

  <!--Start Why Choose us-->
<section id="berita" class="section">
    <div class="container">
        <div class="row">

              <div class="title-box text-center">
                 <h2 class="title">Why Choose us</h2>
              </div>

           <!--start tabs-->
           <div class="col-md-6">
               <div class="tabs tabs-main">
                 <ul class="nav nav-tabs">
                   <li class="active"><a href="#one" data-toggle="tab">Design</a></li>
                   <li><a href="#two" data-toggle="tab">Company</a></li>
                   <li><a href="#three" data-toggle="tab">Support</a></li>
                 </ul>
                 <div class="tab-content">

                     <!--Start Tab Item #1 -->
                     <div class="tab-pane in active" id="one">
                         <p>
                             Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua. Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua. Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua. Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.
                         </p>
                     </div>
                     <!-- End Tab -->

                     <!--Start Tab Item #2 -->
                     <div class="tab-pane" id="two">
                         <p>
                             Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua. Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua. Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.
                         </p>
                     </div>
                     <!-- End Tab -->

                     <!--Start Tab Item #3 -->
                     <div class="tab-pane" id="three">
                         <p>
                             Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua. Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.
                         </p>
                     </div>
                     <!-- End Tab -->

                 </div>
             </div>
           </div>
          <!-- End Tabs-->

         <!--Start Accordion-->
         <div class="col-md-6">
            <div class="panel-group accordion-main" id="accordion">
                    <!--About accordion #1-->
                    <div class="panel">
                        <div class="panel-heading collapsed" data-toggle="collapse"
                         data-parent="#accordion" data-target="#collapseOne">
                       <h6 class="panel-title accordion-toggle">
                           Photography
                       </h6>
                     </div>
                 <div id="collapseOne" class="panel-collapse collapse">
                         <div class="panel-body">
                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non blandit nibh. Sed eget tortor tincidunt, auctor sem eget, mollis nisi. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor fusce diam ornare.
                         </p>

                     </div>
                 </div>
               </div>

               <!--About accordion #2-->
               <div class="panel">
                    <div class="panel-heading collapsed" data-toggle="collapse"
                     data-parent="#accordion" data-target="#collapseTwo">
                   <h6 class="panel-title accordion-toggle">
                       Web Designing
                   </h6>
                    </div>
                 <div id="collapseTwo" class="panel-collapse collapse">
                         <div class="panel-body">
                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non blandit nibh. Sed eget tortor tincidunt, auctor sem eget, mollis nisi. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor fusce diam ornare.
                         </p>
                     </div>
                 </div>
               </div>

              <!--About accordion #3-->
               <div class="panel">
                   <div class="panel-heading collapsed" data-toggle="collapse"
                         data-parent="#accordion" data-target="#collapseThree">
                       <h6 class="panel-title accordion-toggle">
                           Web Development
                       </h6>
                     </div>
                 <div id="collapseThree" class="panel-collapse collapse">
                         <div class="panel-body">
                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non blandit nibh. Sed eget tortor tincidunt, auctor sem eget, mollis nisi. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor fusce diam ornare.
                         </p>

                     </div>
                 </div>
               </div>

             <!--About accordion #4-->
              <div class="panel">
                  <div class="panel-heading collapsed" data-toggle="collapse"
                         data-parent="#accordion" data-target="#collapseFour">
                       <h6 class="panel-title accordion-toggle">
                           Responsive Design
                       </h6>
                     </div>
                 <div id="collapseFour" class="panel-collapse collapse">
                         <div class="panel-body">
                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non blandit nibh. Sed eget tortor tincidunt, auctor sem eget, mollis nisi. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor fusce diam ornare.
                         </p>
                     </div>
                 </div>
               </div>
             </div>
         </div>
         <!--End Accordion-->

        </div> <!--/.row-->
    </div> <!--/.container-->
</section>
<!--End Why Choose us-->

@include('pages.footer')
