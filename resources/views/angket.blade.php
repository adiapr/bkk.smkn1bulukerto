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
  <div id="pageloader">
        <div class="loader">
          <img src="images/progress.gif" alt='loader' />
        </div>
   </div>
   <!--End Page loader -->


   <!--Start Navigation-->
        @include('pages.header2')
    <!--End Navigation--><!--Start clients-->
<section id="clients" class="section">
    <div class="container" style="">
        <div class="row" style="margin: auto;">
            <div class="title-box text-center">
                <h2 class="title">Angket<br> SMK Negei 1 Bulukerto</h2>
            </div>
            <div class="col-md-6" >
                <div style="background-color: #FF8C00;margin-top:5px;padding-top:50px;padding-bottom:50px;border-radius:10px;color:white ">
                    <font style="font-size: 90px"><i class="fa fa-users"></i></font>
                    <br><br><br>
                    <font size="+2" color="white"><b>Angket calon lulusan</b></font>
                </div>
            </div>
            <div class="col-md-6">
                <div style="background-color: #32CD32;margin-top:5px;padding-top:50px;padding-bottom:50px;border-radius:10px;color:white ">
                    <font style="font-size: 90px"><i class="fa fa-graduation-cap"></i></font>
                    <br><br><br>
                    <font size="+2" color="white"><b>Angket penelusuran alumni</b></font>
                </div>
            </div>
        </div> <!--/.row-->
    </div> <!--/.container-->
 </section>
<!--End clients-->



@include('pages.footer')
