<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="images/favicon.png" />
<meta http-equiv="X-UA-Compatible" content="IE=9" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">



<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link rel="stylesheet" type="text/css" href="css/mas.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">

<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
<link rel="stylesheet" href="css/commoncss.css" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/animate.css" type="text/css" />
<link href="css/timer.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Raleway:wght@100..900&display=swap" rel="stylesheet">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--==============================
        All CSS File
    ============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">


<title>AI Prompt & Template Pack for YouTube Growth With PLR FE Sales Page</title>
<style>

.faq-container {
  background: #fff;
  padding: 30px;
  border-radius: 12px;
  box-shadow: 0 20px 40px rgba(0,0,0,0.2);
}

.faq-container h2 {
  text-align: center;
  margin-bottom: 20px;
}

.faq-item {
  border-bottom: 1px solid #eee;
}

.faq-question {
  padding: 15px;
  cursor: pointer;
  font-weight: bold;
  position: relative;
  transition: 0.3s;
}

.faq-question:hover {
  color: #764ba2;
}

.faq-question::after {
  content: "+";
  position: absolute;
  right: 15px;
  font-size: 20px;
  transition: 0.3s;
}

.faq-item.active .faq-question::after {
  content: "-";
}

.faq-answer {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.4s ease, padding 0.3s ease;
  padding: 0 15px;
  color: #555;
}

.faq-item.active .faq-answer {
  max-height: 200px;
  padding: 10px 15px 20px;
}
</style>

</head>

<body>
<?php
error_reporting(0);

$fh = fopen('https://firelaunchers.com/offers/new-normal-life-balance-with-plr-upsell/images/data.txt','r');
$time = '';
$coupan = '';
$coupanVolume = '';
while ($line = fgets($fh)) {
   $line = explode('##',$line);
   $key = trim($line[0]);
   $value = trim($line[1]);
   if($key == 'time'){$time = $value; }
   if($key == 'coupan'){$coupan = $value; }
   if($key == 'coupanVolume'){$coupanVolume = $value; }
}
fclose($fh);

?>


<!--<div class="top-timer fix hidden-xs">
	<div class="container">
    	<div class="row">
        	<!--<div class="col-md-3 col-sm-3 col-xs-6">
        	<img src="images/logo.png" class="img-responsive center-block animated zoomIn" style="max-height: 65px;">
            </div>-->
            
        	<!--<div class="col-md-4 col-sm-4 col-xs-12 spacer1 padding0">
            <!--<p class="line150 l14 m10 s10 text-center w400 margin0 spartan">
            Use this Coupon code
            <span class="red brush3 w700 lft25 mft18 sft12" style="padding:5px;">"GOSOCI7OFF"
            </span>  to get <strong class="blueclr1">$7 Discount</strong> on Our Highly Recommended <strong class="blueclr1">MOST POPULAR</strong> Option
            </p>-->
            <!--<p class="line150 l12 m17 s12 text-center w800">                
                Use Coupon code 
                <span class="red brush3 wt700 fm18 fs17 fx20 pad0">"PLRSAVE30%OFF"
                </span> to get<span class="hidden-xs"> 30% Discount on your purchase</span>
                </p>      
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 spacer1">
            <div id="countdown" data-wow-delay=".3s" data-date="<?php echo $time; ?>"></div>
            </div>
            
            <div class="col-md-4 col-sm-4 col-xs-12 spacer1">
            <a href="#buyNow">
            <div class="jv_btn text-center shine">
            <span class="w600 l16 m15 s14">Buy Now</span><br>
            </div>
            </a>
            </div>
        </div>
	</div>
</div>-->


	
	
<!--<div class="top-timer fix visible-xs" style="padding: 8px 0;">
	<div class="container-fluid">
    	<div class="row">
        
            
            <div class="col-md-2 col-sm-2 col-xs-12">
            <a href="#buyNow">
            <div class="jv_btn text-center shine">
            <span class="w600 l16 m15 s14">Buy Now</span><br/>
            </div>
            </a>
            </div>        	            
            
        </div>
	</div>
</div>-->






<!-- <section  data-bg-src="images/tube.jpg" class="pt-5 pb-5" style="background-size: cover;">
        
        <div class="container">
            <div class="row">
                <div class="col-lg-11 mx-auto">
                    <img src="images/logo1.png" class="img-responsive center-block" width="310">
                </div>
                <div class="col-lg-6">
                    <h1 class="hero-title text-left  wow animate__fadeInUp" style="text-align: left;" data-wow-delay="0.4s">
                        <span class="gr1"><b>AI Prompt  & Template Pack <br>for</b></span> <img src="images/i3.png" width="195">&nbsp;<span class="gr1"><b>Growth</b></span> <br><b class="black"><u>With  PLR Rights Included</u></b>
                    </h1>
                        <div class="media-body wow animate__fadeInUp pt-3" data-wow-delay="0.3s">
                            <p class="counter-title " style="text-align:left;"><span class="black">Create YouTube Videos Faster...</span></p>
                        </div>
                    <p class="spartan text-left fm32 line150 white wt600"><span class="black">OR</span></p>
                        <div class="media-body wow animate__fadeInUp" data-wow-delay="0.3s">
                            <p class="counter-title"><span class="black">Rebrand & Sell This System as Your Own Digital Product</span> </p>
                        </div>
                </div>
                 <div class="col-lg-6 pt-5">
                    <div class="hero-btns onepage-nav">
                        <img src="images/pdt.png" class="img-responsive center-block" width="850">
                    </div>
                </div>
                <div class="col-lg-12 ">
                    <div class="hero-btns onepage-nav spacer-4">
                        <a href="#homePage" class="vs-btn wow animate__fadeInUp" data-wow-delay="0.9s">CLICK HERE NOW TO GET INSTANT ACCESS<br><span class="fm16 wt400 line220">Order Now with 100% Confidence on 100% Secure Servers</span></a>

                    </div>
                </div>
            </div>
        </div>
    </section> -->




    <section  data-bg-src="images/tube.jpg" class="pt-5 pb-5" style="background-size: cover;">
        
        <div class="container">
            <div class="row">
                <div class="col-lg-11 hidden-xs mx-auto">
                    <img src="images/logo1.png" class="img-responsive center-block" width="310">
                </div>
                <div class="col-lg-11 visible-xs mx-auto">
                    <img src="images/logo1.png" class="img-responsive center-block" width="200">
                </div>
                <div class="col-lg-10 col-lg-offset-1 pt-4">
                    <h1 class="hero-title text-center hidden-xs  wow " style="text-align: left;" >
                        <span class="gr1"><b>AI Prompt  & Template Pack for</b></span> <img src="images/i3.png" width="175">&nbsp;<span class="gr1"><b>Growth</b></span> <br><b class="black">With  PLR Rights Included</b>
                    </h1>


                    <h1 class="hero-title text-center visible-xs  wow " style="text-align: left;" >
                        <span class="gr1"><b>AI Prompt  & Template Pack for</b></span> <img src="images/i3.png" width="145">&nbsp;<span class="gr1"><b>Growth</b></span> <br><b class="black"><u>With  PLR Rights Included</u></b>
                    </h1>



                        <div class="media-body wow hidden-xs animate__fadeInUp  mt-5" data-wow-delay="0.3s">
                            <p class="fm18 wt600 text-center"  >Everything You Need to Plan, Script, and Publish YouTube Content-Fast</span></p>
                        </div>

                        <div class="media-body wow visible-xs animate__fadeInUp  " data-wow-delay="0.3s">
                            <p class="fm18 wt600"  style="text-align:center;">Everything You Need to Plan, Script, and Publish YouTube Content-Fast</p>
                        </div>
                    <!-- <p class="spartan text-center fm32 line150 white wt600"><span class="black">OR</span></p>
                        <div class="media-body wow animate__fadeInUp" data-wow-delay="0.3s">
                            <p class="counter-title center" style="text-align:center;"><span class="black center">Rebrand & Sell This System as Your Own Digital Product</span> </p>
                        </div> -->
                </div>
                 <div class="col-lg-7 hidden-xs pt-5">
                        <img src="images/pdt.png" class="img-responsive center-block" >
                    
                </div>

                <div class="col-lg-7 visible-xs">
                        <img src="images/pdt.png" class="img-responsive center-block" >
                    
                </div>

                <div class="col-md-5 hidden-xs pt-5 mt-4">
                <div style="text-shadow: 0 0 10px var(--accent-glow);  box-shadow: rgba(130, 94, 237, 0.8) 0px 2px 5px -1px, rgba(120, 79, 240, 0.84) 0px 1px 3px -1px;
                border: 1px solid #5a45d2;  padding: 10px 20px;  border-radius: 8px;">
                    <ul
                                    class="orangeArrow-listingx text-left fm18 fs18 fx14 blacktext wt400 line80 poppins ">
                                    <li>Ready-To-Use AI Prompts & Template Pack for YouTube Growth  </li><hr>
                                    <li>Done-For-You Sales Materials Included  </li><hr>
                                    <li>5 Exclusive High-Value Bonuses  </li><hr>
                                    <li>PLR Rights – Rebrand &amp; Resell  </li><hr>
                                    <li>Keep 100% Profit with Full Pricing Control  </li>
                                </ul>
                </div>
                            </div>


                            <div class="col-md-5 visible-xs mt-4">
                <div style="text-shadow: 0 0 10px var(--accent-glow);  box-shadow: rgba(130, 94, 237, 0.8) 0px 2px 5px -1px, rgba(120, 79, 240, 0.84) 0px 1px 3px -1px;
                border: 1px solid #5a45d2;  padding: 10px 20px;  border-radius: 8px;">
                    <ul
                                    class="orangeArrow-listingx text-left fm18 fs18 fx14 blacktext wt400 line80 poppins ">
                                    <li>Ready-To-Use AI Prompts for YouTube Growth  </li><hr>
                                    <li>Done-For-You Sales Materials Included  </li><hr>
                                    <li>5 Exclusive High-Value Bonuses  </li><hr>
                                    <li>PLR Rights – Rebrand &amp; Resell  </li><hr>
                                    <li>Keep 100% Profit with Full Pricing Control  </li>
                                </ul>
                </div>
                            </div>


                <div class="col-lg-12 hidden-xs">
                    <div class="hero-btns onepage-nav spacer-4">
                        <a href="#" class="vs-btn wow " >CLICK HERE NOW TO GET INSTANT ACCESS<br><span class="fm16 wt400 line220">Order Now with 100% Confidence on 100% Secure Servers</span></a>

                    </div>
                </div>

                <div class="col-lg-12 visible-xs">
                    <div class="hero-btns onepage-nav spacer-4">
                        <a href="#" class="vs-btn wow " style="padding:16px 16px"><span class="fm16 fx12 wt600 line220">CLICK HERE NOW TO GET INSTANT ACCESS</span></a>

                    </div>
                </div>
            </div>
        </div>
    </section>







<!-- <div class="section3">
<div class="container">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<img src="images/logo1.png" width="300" class="img-responsive center-block animated zoomIn"></div>




<div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12 spacer2">			
<h2 class="fm40 fs40 fx12 w700 line170 white text-center spartan">
AI Prompt & Template Pack for YouTube Growth With Full PLR Rights Included
</h2>

<p class="text-center w500 fm24 line170 fs40 fx12 black spacer3">
<span class="w400 o1 spacer2">Create YouTube Videos Faster…</span><br/></p>

<p class="text-center w500 fm24 line170 fs40 fx12 black spacer1">
<span class="w800 fm40 white text-center">OR</span>
</p>



<p class="text-center w500 fm24 line170 fs40 fx12 black spacer1">
<span class="w400 o1 spacer2">Rebrand & Sell This System as Your Own Digital Product </span><br/></p>
</div>


<div style="margin-top:2%;">
</div></div></div></div> -->








<!-- <div class="whitesection">
<div class="container">
<div class="row">

<div class="col-md-10 col-md-offset-1 col-sm-offset-1 col-sm-10 col-xs-12 spacer2 spartan dashedborder">
<p class="text-center w500 l14 m15 s8 black "><span class=" w500">Time sensitive Opportunity !</span>
Limited copies! Grab it before your competitors do!
</p>
</div>

<div class="col-md-12 col-sm-12 col-xs-12 spacer4">				
<div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
<p class="line150 l12 m17 s10 text-center black w500  deCapitalize spartan">                
                HURRY UP AND CLICK ON THE BUY BUTTON BEFORE THE PRICES GO UP...
                </p>
<br>
<a href="#buyNow">
<div class="jv_btn text-center shine black spartan">
<span class="w600 l16 m18 s8">CLICK HERE NOW TO GET INSTANT ACCESS</span><br/>
<span class="w400 l12 m13 s8">Order Now with 100% Confidence on 100% Secure Servers</span>
</div>
</a>
<p class="text-left l13 m13 s9 black w600 text-center spacer3 spartan">(Private Label Rights included)</p>


</div>	

<div class="col-md-1 col-sm-12 col-xs-12">
</div>

<div class="col-md-5 col-sm-12 col-xs-12 spacer4">
<h1 class="l16 m13 s9 lh150 text-center margin0 helv white wt600 exactlybg spartan">
 THE PRICE GOES UP IN:
</h1><br/>
<div class="spacer2" id="countdown4" data-wow-delay=".3s" data-date="<?php echo $time; ?>">
</div>
</div>

<div style="clear:both;"></div>

<div class="col-md-12 col-sm-12  col-xs-12  spacer3">
<img src="images/buycart1.png" width="600"  class="img-responsive center-block">

</div>
</div>
</div>
</div>
</div> -->










<div style="background: linear-gradient(90deg, #F4850421 32.8%, #AA008B26 57.18%, #267ca724 82.28%);padding: 40px 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 hidden-xs">
                <h2 class="fm28  line150 text-center white"><span style="background: red;border-radius: 8px;padding: 8px 15px;"><img src="images/warning.png" width="38">&nbsp;WARNING: Most People Quit YouTube for One Silent Reason</span></h2>
            </div>
            <div class="col-md-12 visible-xs">
                <h2 class="fm28 fx14 line150 text-center red">WARNING: Most People Quit YouTube<br> for One Silent Reason</h2>
            </div>
            <div class="col-md-6 hidden-xs col-md-offset-3">
                <ul class="orangeArrow-listingxxx fm20 fs18 fx14 white wt400 line80 poppins"
                        style="  padding: 6px 22px 10px;  border-radius: 10px;  border: 1px dashed #f00;background: linear-gradient(90deg, #fe6060, #e884844f);">
                        <li class="black fm18 wt500 poppins"
                            style="font-size: 20px;line-height: 28px;font-weight: 500;">Not because YouTube is “too saturated.” </li>
                </ul>
                <ul class="orangeArrow-listingxxx fm20 fs18 fx14 white wt400 line80 poppins"
                        style="  padding: 6px 22px 10px;  border-radius: 10px;  border: 1px dashed #f00;background: linear-gradient(90deg, #fe6060, #e884844f);">
                        <li class="black fm18 wt500 poppins"
                            style="font-size: 20px;line-height: 28px;font-weight: 500;">Not because the algorithm is against them.  </li>
                    </ul>
                    <ul class="orangeArrow-listingxxx fm20 fs18 fx14 white wt400 line80 poppins"
                        style="  padding: 6px 22px 10px;  border-radius: 10px;  border: 1px dashed #f00;background: linear-gradient(90deg, #fe6060, #e884844f);">
                        <li class="black fm18 wt500 poppins"
                            style="font-size: 20px;line-height: 24px;font-weight: 500;">Not because they aren’t talented.  </li>
                    </ul>

                    <p class="poppins fm20 text-center line150 w400 black">They quit because <b>content creation feels heavy.</b> </p>
            </div>



            <div class="col-md-6 visible-xs col-md-offset-3">
                <ul class="orangeArrow-listingxxx fm20 fs18 fx14 white wt400 line80 poppins"
                        style="  padding: 6px 10px 10px 22px;   border-radius: 10px;  border: 1px dashed #f00;background: linear-gradient(90deg, #fe6060, #e884844f);">
                        <li class="black fm18 wt500 poppins"
                            style="font-size: 14px;line-height: 28px;font-weight: 500;">Not because YouTube is “too saturated.” </li>
                </ul>
                <ul class="orangeArrow-listingxxx fm20 fs18 fx14 white wt400 line80 poppins"
                        style="  padding: 6px 10px 10px 22px;  border-radius: 10px;  border: 1px dashed #f00;background: linear-gradient(90deg, #fe6060, #e884844f);">
                        <li class="black fm18 wt500 poppins"
                            style="font-size: 14px;line-height: 28px;font-weight: 500;">Not because the algorithm is against them.  </li>
                    </ul>
                    <ul class="orangeArrow-listingxxx fm20 fs18 fx14 white wt400 line80 poppins"
                        style="  padding: 6px 10px 10px 22px;   border-radius: 10px;  border: 1px dashed #f00;background: linear-gradient(90deg, #fe6060, #e884844f);">
                        <li class="black fm18 wt500 poppins"
                            style="font-size: 14px;line-height: 24px;font-weight: 500;">Not because they aren’t talented.  </li>
                    </ul>

                    <p class="poppins fm20 fx12 text-center line150 w400 black">They quit because <b>content creation feels heavy.</b> </p>
            </div>



            <div class="col-md-12">
                <!-- <h2 class="fm28 line150 text-center white"><span style="background: red;border-radius: 8px;padding: 8px 15px;">
                Here’s what actually happens behind the scenes: </span></h2> -->

                <img src="images/strip2.png" width="650" class="img-responsive center-block" style="border-radius: 30px;">
            </div>



            <div class="col-md-6 ">
                <ul
                                    class="orangeArrow-listing text-left fm20 fs18 fx12 blacktext wt400 line80 poppins ">
                                    <li>They sit down to record… and don’t know what video to make  </li>
                                    <li>Scripts take hours, so videos never get finished  </li>
                                    <li>Titles don’t get clicks, so motivation drops  </li>
                                    <li>Consistency feels impossible when every video starts from zero  </li>
                                </ul>

                    <p class="poppins fm18 text-left line150 w400 black">
                        <b><u>After a few weeks</u></b> of this cycle, they tell themselves:<br><br> 
                        <b>“Maybe YouTube just isn’t for me.”</b> <br><br>
                        And they quit. <br><br>
                        If any of that <b>sounds familiar, pause right</b> here-because this isn’t a you problem. 

                     </p>
            </div>
            <div class="col-md-6 pt-4 mt-2">
                <img src="images/imgr.png" class="img-responsive center-block pt-4"  >
            </div>




        </div>        
    </div>
</div>






<div style="background-image: url(images/bg2.jpg);padding: 40px 0px;background-size: cover;">
    <div class="container">
        <div class="row">


            



            <div class="col-md-10 col-md-offset-1 hidden-xs mb-5">
                <h2 class="fm34 fx18 white xsem11 text-center poppins lh130 w800" style="border: 4px solid rgba(255, 255, 255, 0.22);
    border-radius: 20px;padding: 12px 5px;"> <span class="">What If AI Did the Thinking Before You Hit Record? </span> </h2>




     <h2 class="fm22 white xsem11 fx12 text-center poppins lh140 w500" > Imagine opening your laptop and already knowing:   </h2>





            </div>

            <div class="col-md-10 col-md-offset-1 visible-xs">
                <h2 class="fm34 fx18 white xsem11 text-center poppins lh130 w800" style="border: 4px solid rgba(255, 255, 255, 0.22);
    border-radius: 20px;padding: 12px 5px;"> <span class="">What If AI Did the Thinking Before You Hit Record? </span> </h2>




     <h2 class="fm22 white xsem11 fx12 text-center poppins lh140 w500" > Imagine opening your laptop and already knowing:   </h2>





            </div>


            <div class="col-md-3 pt-2">
                <div class="box">
                    <img src="images/gt1.png" width="80" class="img-responsive center-block">
                    <h2 class="poppins fm18 fx14 xsem9 w500 text-center white lh160 pt-2">Exactly which <b>video to</b><br> create today  </h2>                    
                </div>                
            </div>
            <div class="col-md-3 pt-2">
                <div class="box">
                    <img src="images/gt5.png" width="80" class="img-responsive center-block">
                    <h2 class="poppins fm18 fx14 xsem9 w500 text-center white lh160 pt-2"><b>What to say</b>, step by step, <br>without overthinking   </h2>                    
                </div>                
            </div>
            <div class="col-md-3 pt-2">
                <div class="box">
                    <img src="images/gt3.png" width="80" class="img-responsive center-block">
                    <h2 class="poppins fm18 fx14 xsem9 w500 text-center white lh160 pt-2"><b>Which title</b> actually <br>gets clicks  </h2>                    
                </div>                
            </div>
            <div class="col-md-3 pt-2">
                <div class="box">
                    <img src="images/gt4.png" width="80" class="img-responsive center-block">
                    <h2 class="poppins fm18 fx14 xsem9 w500 text-center white lh160 pt-2">How to structure content so it’s clear, watchable, and optimized  </h2>                    
                </div>                
            </div>



            <div class="col-md-6 pt-5 mt-3 hidden-xs">
                <ul class="orangeArrow-listingxxx fm20 fs18 fx14 white wt400 line80 poppins"
                        style="padding: 6px 22px 10px;  border-radius: 10px;  ">
                        <li class="white fm18 wt500 poppins"
                            style="font-size: 20px;line-height: 28px;font-weight: 500;">No guessing.  </li>
                </ul>
                <ul class="orangeArrow-listingxxx fm20 fs18 fx14 white wt400 line80 poppins"
                        style="  padding: 6px 22px 10px;  border-radius: 10px;">
                        <li class="white fm18 wt500 poppins"
                            style="font-size: 20px;line-height: 28px;font-weight: 500;">No staring at a blank screen.   </li>
                    </ul>
                    <ul class="orangeArrow-listingxxx fm20 fs18 fx14 white wt400 line80 poppins"
                        style="  padding: 6px 22px 10px;  border-radius: 10px;">
                        <li class="white fm18 wt500 poppins"
                            style="font-size: 20px;line-height: 24px;font-weight: 500;">No burnout from “figuring it out” every single time.   </li>
                    </ul>

                    <p class="poppins fm18 text-left line150 w300 pt-4 white">
                        You simply follow the system… and create. <br><br>
                        That’s the real shift. <br><br>
                        This isn’t about shortcuts or hype.<br><br> 
                        It’s about <span class="wt700">removing the friction</span> that causes most creators to quit before results show up.<br><br> 
                        And that’s exactly what this system is built to do. 
 </p>
            </div>


            <div class="col-md-6 visible-xs mt-3">
                <ul class="orangeArrow-listingxxx fm20 fs18 fx14 white wt400 line80 poppins"
                        style="padding: 6px 22px 10px;  border-radius: 10px;  ">
                        <li class="white fm18 wt500 poppins"
                            style="font-size: 15px;line-height: 28px;font-weight: 500;">No guessing.  </li>
                </ul>
                <ul class="orangeArrow-listingxxx fm20 fs18 fx14 white wt400 line80 poppins"
                        style="  padding: 6px 22px 10px;  border-radius: 10px;">
                        <li class="white fm18 wt500 poppins"
                            style="font-size: 15px;line-height: 28px;font-weight: 500;">No staring at a blank screen.   </li>
                    </ul>
                    <ul class="orangeArrow-listingxxx fm20 fs18 fx14 white wt400 line80 poppins"
                        style="  padding: 6px 22px 10px;  border-radius: 10px;">
                        <li class="white fm18 wt500 poppins"
                            style="font-size: 15px;line-height: 24px;font-weight: 500;">No burnout from “figuring it out” every single time.   </li>
                    </ul>

                    <p class="poppins fm18 text-left line150 w300 pt-4 white">
                        You simply follow the system… and create. <br><br>
                        That’s the real shift. <br><br>
                        This isn’t about shortcuts or hype.<br><br> 
                        It’s about <span class="wt700">removing the friction</span> that causes most creators to quit before results show up.<br><br> 
                        And that’s exactly what this system is built to do. 
 </p>
            </div>



            <div class="col-md-6 hidden-xs pt-5">
                <img src="images/strugle.png"  class="img-responsive center-block pt-5">
            </div>

            <div class="col-md-6 visible-xs">
                <img src="images/strugle.png"  class="img-responsive center-block ">
            </div>




        </div>
    </div>
</div>


<div style="background-image:url(images/bg5.jpg);background-size: cover;padding: 40px 0px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="images/prs.png" class="img-responsive" width="380">
                <h2 class="fm34 wt800 text-left black pt-3">AI Prompt & Template Pack for YouTube Growth with PLR</h2>
                <h2 class="fm20 fx15 wt500 text-left black">A ready-to-use YouTube content system that helps you: </h2>
                <ul class="orangeArrow-listing text-left fm20 fs18 fx12 blacktext wt400 line80 poppins ">
                    <li>Generate unlimited video ideas </li>
                    <li>Script videos in minutes </li>
                    <li>Create clickable titles & descriptions </li>
                    <li>Stay consistent without burnout </li>
                </ul>
            </div>
            <div class="col-md-6 pt-5">
                <img src="images/pdt.png" class="img-responsive center-block">
            </div>
        </div>
    </div>
</div>






 <div style="background-image: url(images/shape-52.png);padding: 40px 0px;">
    <div class="container">
        <div class="row ">
            <div class="col-md-8 col-md-offset-2 hidden-xs mb-5">
                <h2 class="fm30 fx14 white text-center poppins lh130 w800" style="border: 4px solid rgba(255, 255, 255, 0.22);
    border-radius: 20px;padding: 12px 5px;"> <span class="grade2">Why This Converts (And Why Buyers Love It)  </span></h2>


    <h2 class="fm24 fx14 white text-center poppins lh130 w500"> This is NOT another random AI prompt dump. </h2>
    <h2 class="fm24 white fx11 text-center poppins lh130 w400"> This is a <span class="wt700">structured, beginner-friendly system</span> designed for:  </h2>



            </div>


            <div class="col-md-8 col-md-offset-2 visible-xs">
                <h2 class="fm30 fx14 white text-center poppins lh130 w800" style="border: 4px solid rgba(255, 255, 255, 0.22);
    border-radius: 20px;padding: 12px 5px;"> <span class="grade2">Why This Converts (And Why Buyers Love It)  </span></h2>


    <h2 class="fm24 fx14 white text-center poppins lh130 w500"> This is NOT another random AI prompt dump. </h2>
    <h2 class="fm24 white fx11 text-center poppins lh130 w400"> This is a <span class="wt700">structured, beginner-friendly system</span> designed for:  </h2>



            </div>
            <div class="col-md-3 pt-4">
                <div class="boxx">
                    <img src="images/y1.png" width="80" class="img-responsive center-block">
                    <h2 class="poppins fm18 fx14 xsem9 w600 text-center white lh140 pt-4">YouTube beginners   </h2>                    
                </div>                
            </div>
            <div class="col-md-3 pt-4">
                <div class="boxx">
                    <img src="images/y2.png" width="80" class="img-responsive center-block">
                    <h2 class="poppins fm18 fx14 xsem9 w600 text-center white lh140 pt-4">Faceless channel creators    </h2>                    
                </div>                
            </div>
            <div class="col-md-3 pt-4">
                <div class="boxx">
                    <img src="images/y3.png" width="80" class="img-responsive center-block">
                    <h2 class="poppins fm18 fx14 xsem9 w600 text-center white lh140 pt-4">Affiliate marketers    </h2>                    
                </div>                
            </div>
            <div class="col-md-3 pt-4">
                <div class="boxx">
                    <img src="images/y4.png" width="80" class="img-responsive center-block">
                    <h2 class="poppins fm18 fx14 xsem9 w600 text-center white lh140 pt-4">Digital product sellers   </h2>                    
                </div>                
            </div>


            <div class="col-md-10 col-md-offset-1 pt-5">
                <h2 class="fm22 white fx14 text-center poppins lh130 w400 "> Simple inputs → usable outputs → real action.  </h2>
            </div>
        </div>

       
    </div>
</div>






<div class="" style="padding:40px 0px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="headd">
                    <h2 class="fm36 text-center fx18 wt800 line150 poppins black"><span class="gr1">Here’s What You Get Inside</span> </h2>
                </div>
            </div>
            <div class="col-md-12 hidden-xs">
                <h3 class="fm20 text-center fx13 wt400 line150 poppins black">Everything inside is designed to remove confusion, save time, and help <br>you create consistently-<b>even if you’re starting from zero.</b>  </h3>
            </div>


            <div class="col-md-12 visible-xs">
                <h3 class="fm20 text-center fx13 wt400 line150 poppins black">Everything inside is designed to remove confusion, save time, and help you create consistently-<b>even if you’re starting from zero.</b>  </h3>
            </div>

            <div class="col-md-6">
                <div class="bog">
                    <img src="images/g1.gif" class="img-responsive" style="width:80px;">
                    <h3 class="fm28 text-left wt800 line150 poppins black"><span class="gr1">AI Video Idea Prompts</span>  </h3>
                    <h3 class="fm22 fx15 text-left wt700 line150 poppins black">So you never sit wondering what to post again.   </h3>
                    <h3 class="fm16 fx13 text-left wt400 line150 poppins black">Instead of guessing or copying others, you’ll use proven prompts that generate ideas on demand-tailored to your niche and audience.  </h3>
                    <h3 class="fm30 text-left wt800 line150 poppins black">You’ll get:   </h3>

                    <ul class="orangeArrow-listing text-left fm20 fs18 fx14 blacktext wt400 line80 poppins ">
                    <li>Niche discovery prompts to find content that actually works </li>
                    <li>Endless video idea generators (no repeats, no burnout) </li>
                    <li>Faceless channel ideas for creators who don’t want to be <br>on camera </li>
                    <li>Trend-inspired prompts to stay relevant without chasing hype </li>
                </ul>

                <img src="images/pdf1.png" class="img-responsive center-block">


                </div>
            </div>



             <div class="col-md-6">
                <div class="bog">
                    <img src="images/g2.gif" class="img-responsive" style="width:80px;">
                    <h3 class="fm28 text-left wt800 line150 poppins black"><span class="gr1">AI Video Script Prompts</span>   </h3>
                    <h3 class="fm22 fx15 text-left wt700 line150 poppins black">Create videos faster-without sounding robotic.    </h3>
                    <h3 class="fm16 fx13 text-left wt400 line150 poppins black">These prompts help you turn ideas into clear, watchable scripts in minutes, not hours.   </h3>
                    <h3 class="fm30 text-left wt800 line150 poppins black">You’ll get:   </h3>

                    <ul class="orangeArrow-listing text-left fm20 fs18 fx14 blacktext wt400 line80 poppins ">
                    <li>Long-form video script prompts for authority-building content  </li>
                    <li>Shorts & micro-content scripts for daily posting  </li>
                    <li>Hook-first storytelling prompts to grab attention <br>instantly  </li>
                    <li>Educational & review scripts that explain, not <br>confuse </li>
                </ul>

                <img src="images/pdf2.png" class="img-responsive center-block">


                </div>
            </div>



            <div class="col-md-6 pt-4">
                <div class="bog">
                    <img src="images/g3.gif" class="img-responsive" style="width:80px;">
                    <h3 class="fm28 text-left wt800 line150 poppins black"><span class="gr1">Titles, Descriptions & SEO Templates </span>  </h3>
                    <h3 class="fm22 fx15 text-left wt700 line150 poppins black">So your videos don’t get ignored.    </h3>
                    <h3 class="fm16 fx13 text-left wt400 line150 poppins black">Great content means nothing if nobody clicks. These templates help your videos stand out and get discovered.  </h3>
                    <h3 class="fm30 text-left wt800 line150 poppins black">You’ll get:   </h3>

                    <ul class="orangeArrow-listing text-left fm20 fs18 fx14 blacktext wt400 line80 poppins ">
                    <li>Proven YouTube title formulas that drive clicks  </li>
                    <li>Description layouts designed to convert viewers into subscribers or buyers  </li>
                    <li>Non-salesy call-to-action templates  </li>
                    <li>SEO-friendly structures that help YouTube understand your content  </li>
                </ul>
<img src="images/pdf3.png" class="img-responsive center-block">

                </div>
            </div>



             <div class="col-md-6 pt-4">
                <div class="bog">
                    <img src="images/g4.gif" class="img-responsive" style="width:62px;">
                    <h3 class="fm28 text-left wt800 line150 poppins black"><span class="gr1">Thumbnail Text & Hook Templates </span>   </h3>
                    <h3 class="fm22 fx15 text-left wt700 line150 poppins black">Increase clicks-even without design skills.     </h3>
                    <h3 class="fm16 fx13 text-left wt400 line150 poppins black">You don’t need fancy thumbnails-just the right words in the right place.    </h3>
                    <h3 class="fm30 text-left wt800 line150 poppins black">You’ll get:   </h3>

                    <ul class="orangeArrow-listing text-left fm20 fs18 fx14 blacktext wt400 line80 poppins ">
                    <li>Scroll-stopping thumbnail text ideas   </li>
                    <li>Curiosity-based hook formulas that boost CTR instantly  </li><br><br><br><br><br><br><br><br><br><br><br>
                </ul>

                <img src="images/pdf4.png" class="img-responsive center-block">


                </div>
            </div>




            <div class="col-md-6 col-md-offset-3 pt-4">
                <div class="bog">
                    <img src="images/g5.gif" class="img-responsive" style="width:80px;">
                    <h3 class="fm28 text-left wt800 line150 poppins black"><span class="gr1">7-Day YouTube Action Plan  </span>   </h3>
                    <h3 class="fm22 fx15 text-left wt700 line150 poppins black">No confusion. Just clear action.      </h3>
                    <h3 class="fm16 fx13 text-left wt400 line150 poppins black">This is your step-by-step roadmap to get momentum fast-without overthinking.     </h3>
                    <h3 class="fm30 text-left wt800 line150 poppins black">You’ll get:   </h3>

                    <ul class="orangeArrow-listing text-left fm20 fs18 fx14 blacktext wt400 line80 poppins ">
                    <li>A simple day-by-day publishing plan    </li>
                    <li>Beginner-friendly workflows anyone can follow </li>
                    <li>A repeatable system you can use every week  </li>
                </ul>

                <img src="images/pdf5.png" class="img-responsive center-block">


                </div>
            </div>









        </div>
    </div>
</div>










<div class="hidden-xs" style="background-image:url(images/bg2.jpg);background-size: cover;padding: 40px 0px;">
    <div class="container">
        <div class="row">


            <div class="col-md-10 col-md-offset-1 mb-5">
                <h2 class="fm38 fx15 white text-center poppins lh130 w800" > You’ll also receive a complete Done-For-You sales materials kit included with the Private Label Rights option.</h2>


    <p class="fm18 white fx13 text-center poppins lh160 w400"> This package includes <b>five additional DFY modules,</b> each providing ready-made assets that allow you to present, customize, and deploy this product without building everything from the ground up. </p>



            </div>




            <div class="col-md-10 col-md-offset-1" style="color: #825eed; text-shadow: 0 0 10px var(--accent-glow);
    box-shadow: rgba(130, 94, 237, 0.8) 0px 2px 5px -1px, rgba(120, 79, 240, 0.84) 0px 1px 3px -1px;border: 1px solid #5a45d2;padding: 20px 20px;border-radius: 8px;">



                <div class="col-md-6 pt-5 mt-4">
                    <h2 class="poppins fm28 fx18 white">Module 1: Professionally Written Sales Page Copy</h2>
                    <p class="poppins fm18 text-left wt400 white lh140">Includes well-structured sales page copy developed using established marketing frameworks. The content is designed to clearly explain the offer, outline key features, and follow a logical presentation flow. Fully editable, making it adaptable across different niches or offers.</p>
                </div>
                <div class="col-md-6">
                    <img src="images/sc.png" class="img-responsive center-block">
                </div>
            </div>




            <div class="col-md-10 col-md-offset-1 mt-5" style="color: #825eed; text-shadow: 0 0 10px var(--accent-glow);
    box-shadow: rgba(130, 94, 237, 0.8) 0px 2px 5px -1px, rgba(120, 79, 240, 0.84) 0px 1px 3px -1px;border: 1px solid #5a45d2;padding: 40px 20px;border-radius: 8px;">

    <div class="col-md-6">
                    <img src="images/sc2.PNG" class="img-responsive center-block">
                </div>



                <div class="col-md-6 pt-4">
                    <h2 class="poppins fm28 fx18 white">Module 2: Professionally Designed HD Graphics</h2>
                    <p class="poppins fm18 text-left wt400 white lh140">Features high-definition promotional graphics created for digital use. These visuals help improve presentation and can be easily customized with your own branding elements, text, and color schemes.</p>
                </div>
                
            </div>



           <div class="col-md-10 col-md-offset-1 mt-5" style="color: #825eed; text-shadow: 0 0 10px var(--accent-glow);
    box-shadow: rgba(130, 94, 237, 0.8) 0px 2px 5px -1px, rgba(120, 79, 240, 0.84) 0px 1px 3px -1px;border: 1px solid #5a45d2;padding: 40px 20px;border-radius: 8px;">
                <div class="col-md-6 pt-5">
                    <h2 class="poppins fm28 fx18 white">Module 3: Ready-Made Minisite</h2>
                    <p class="poppins fm18 text-left wt400 white lh140">Includes pre-built minisite with clean layouts and focused messaging. Designed to present the offer clearly and support a smooth visitor experience. Simple to upload, edit, and launch.</p>

                    <div class="hero-btns onepage-nav spacer-4">
                        <a href="#" target="_blank" class="vs-btn wow " >Check Out Demo Here!</a>

                    </div>

                </div>
                <div class="col-md-6">
                    <img src="images/ssr1.jpg" class="img-responsive center-block">
                </div>
            </div>


            <div class="col-md-10 col-md-offset-1 mt-5" style="color: #825eed; text-shadow: 0 0 10px var(--accent-glow);
    box-shadow: rgba(130, 94, 237, 0.8) 0px 2px 5px -1px, rgba(120, 79, 240, 0.84) 0px 1px 3px -1px;border: 1px solid #5a45d2;padding: 40px 20px;border-radius: 8px;">
                <div class="col-md-6">
                    <img src="images/es.png"  class="img-responsive center-block">
                </div>
                <div class="col-md-6 pt-5 mt-5">
                    <h2 class="poppins fx18 fm28 white">Module 4: Email Swipe Copy</h2>
                    <p class="poppins fm18 text-left wt400 white lh140">Provides pre-written email templates for announcements, follow-ups, and audience engagement. The messaging emphasizes clarity and structure, with full flexibility to adjust tone and sequencing to match your brand.</p>
                </div>
            </div>


            <div class="col-md-10 col-md-offset-1 mt-5" style="color: #825eed; text-shadow: 0 0 10px var(--accent-glow);
    box-shadow: rgba(130, 94, 237, 0.8) 0px 2px 5px -1px, rgba(120, 79, 240, 0.84) 0px 1px 3px -1px;border: 1px solid #5a45d2;padding: 40px 20px;border-radius: 8px;">
                <div class="col-md-10 col-md-offset-1">
                    <h2 class="poppins fx18 text-center fm28 white">Module 5: Legal Page Templates</h2>
                    <p class="poppins fm18 text-center wt400 white lh140">Includes editable templates for essential pages such as Privacy Policy, Terms of Service, and Disclaimer. These can be customized with your business details to support transparency and baseline compliance needs.
                    
                    </p>
                </div>
                <div class="col-md-12">
                    <img src="images/sc5.png" width="850" style="border-radius: 10px;" class="img-responsive center-block">
                </div>
            </div>
            <div class="col-md-10 col-md-offset-1 pt-5">
                <p class="poppins fm28 text-center wt600 line150 white">All materials are delivered immediately, allowing you to begin customization and implementation right away.</p>
            </div>




        </div>
    </div>
</div>





<div class="visible-xs" style="background-image:url(images/bg2.jpg);background-size: cover;padding: 40px 0px;">
    <div class="container">
        <div class="row">


            <div class="col-md-10 col-md-offset-1 mb-2">
                <h2 class="fm30 fx15 white text-center poppins lh130 w800" > You’ll also receive a complete Done-For-You sales materials kit included with the Private Label Rights option.</h2>


    <p class="fm18 white fx13 text-center poppins lh160 w400"> This package includes <b>five additional DFY modules,</b> each providing ready-made assets that allow you to present, customize, and deploy this product without building everything from the ground up. </p>



            </div>




            <div class="col-md-10 col-md-offset-1" style="color: #825eed; text-shadow: 0 0 10px var(--accent-glow);
    box-shadow: rgba(130, 94, 237, 0.8) 0px 2px 5px -1px, rgba(120, 79, 240, 0.84) 0px 1px 3px -1px;border: 1px solid #5a45d2;padding: 10px 12px;border-radius: 8px;">



                <div class="col-md-6  mt-4">
                    <h2 class="poppins fm28 fx18 white">Module 1: Professionally Written Sales Page Copy</h2>
                    <p class="poppins fm18 text-left wt400 white lh140">Includes well-structured sales page copy developed using established marketing frameworks. The content is designed to clearly explain the offer, outline key features, and follow a logical presentation flow. Fully editable, making it adaptable across different niches or offers.</p>
                </div>
                <div class="col-md-6">
                    <img src="images/sc.png" class="img-responsive center-block">
                </div>
            </div>




            <div class="col-md-10 col-md-offset-1 mt-5" style="color: #825eed; text-shadow: 0 0 10px var(--accent-glow);
    box-shadow: rgba(130, 94, 237, 0.8) 0px 2px 5px -1px, rgba(120, 79, 240, 0.84) 0px 1px 3px -1px;border: 1px solid #5a45d2;padding: 30px 20px;border-radius: 8px;">

    



                <div class="col-md-6 ">
                    <h2 class="poppins fm28 fx18 white">Module 2: Professionally Designed HD Graphics</h2>
                    <p class="poppins fm18 text-left wt400 white lh140">Features high-definition promotional graphics created for digital use. These visuals help improve presentation and can be easily customized with your own branding elements, text, and color schemes.</p>
                </div>


                <div class="col-md-6">
                    <img src="images/sc2.PNG" class="img-responsive center-block">
                </div>
                
            </div>



           <div class="col-md-10 col-md-offset-1 mt-5" style="color: #825eed; text-shadow: 0 0 10px var(--accent-glow);
    box-shadow: rgba(130, 94, 237, 0.8) 0px 2px 5px -1px, rgba(120, 79, 240, 0.84) 0px 1px 3px -1px;border: 1px solid #5a45d2;padding: 30px 20px 10px;border-radius: 8px;">
                <div class="col-md-6 ">
                    <h2 class="poppins fm28 fx18 white">Module 3: Ready-Made Minisite</h2>
                    <p class="poppins fm18 text-left wt400 white lh140">Includes pre-built minisite with clean layouts and focused messaging. Designed to present the offer clearly and support a smooth visitor experience. Simple to upload, edit, and launch.</p>

                    

                </div>
                <div class="col-md-6">
                    <img src="images/ssr1.jpg" class="img-responsive center-block">

                    <div class="hero-btns onepage-nav spacer-4">
                        <a href="https://firelaunchers.store/offers/ai-prompt-and-template-pack-for-youtube-growth-with-unrestricted-plr/minisite-demo" style="font-size:15px;" target="_blank" class="vs-btn wow " >Check Out Demo Here!</a>

                    </div>
                </div>
            </div>


            <div class="col-md-10 col-md-offset-1 mt-5" style="color: #825eed; text-shadow: 0 0 10px var(--accent-glow);
    box-shadow: rgba(130, 94, 237, 0.8) 0px 2px 5px -1px, rgba(120, 79, 240, 0.84) 0px 1px 3px -1px;border: 1px solid #5a45d2;padding: 30px 20px;border-radius: 8px;">
                
                <div class="col-md-6 pt-1">
                    <h2 class="poppins fx18 fm28 white">Module 4: Email Swipe Copy</h2>
                    <p class="poppins fm18 text-left wt400 white lh140">Provides pre-written email templates for announcements, follow-ups, and audience engagement. The messaging emphasizes clarity and structure, with full flexibility to adjust tone and sequencing to match your brand.</p>
                </div>
                <div class="col-md-6">
                    <img src="images/es.png"  class="img-responsive center-block">
                </div>
            </div>


            <div class="col-md-10 col-md-offset-1 mt-5" style="color: #825eed; text-shadow: 0 0 10px var(--accent-glow);
    box-shadow: rgba(130, 94, 237, 0.8) 0px 2px 5px -1px, rgba(120, 79, 240, 0.84) 0px 1px 3px -1px;border: 1px solid #5a45d2;padding: 30px 20px;border-radius: 8px;">
                <div class="col-md-10 col-md-offset-1">
                    <h2 class="poppins fx18 text-left fm28 white">Module 5: Legal Page Templates</h2>
                    <p class="poppins fm18 text-left wt400 white lh140">Includes editable templates for essential pages such as Privacy Policy, Terms of Service, and Disclaimer. These can be customized with your business details to support transparency and baseline compliance needs.
                    
                    </p>
                </div>
                <div class="col-md-12">
                    <img src="images/sc5.png" width="850" style="border-radius: 10px;" class="img-responsive center-block">
                </div>
            </div>
            <div class="col-md-10 col-md-offset-1 pt-5">
                <p class="poppins fm28 text-center wt600 line150 white">All materials are delivered immediately, allowing you to begin customization and implementation right away.</p>
            </div>




        </div>
    </div>
</div>















<div class="hidden-xs" style="background-image:url(images/bg5.jpg);background-size: cover;padding: 40px 0px;">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="headd">

                <h2 class="fm36 fx15  wt800 text-center black"><span class="gr1">This is where the real value comes in.</span></h2>
            </div>
            </div>
            <div class="col-md-6">
                <h2 class="fm20 fx13 wt500 text-left black">With <b>PLR,</b> you are fully permitted to: </h2>
                <ul class="orangeArrow-listing text-left fm20 fs18 fx14 blacktext wt400 line80 poppins ">
                    <li>Rebrand the product </li>
                    <li>Put your own name or brand on it </li>
                    <li>Sell it as your own product </li>
                    <li>Bundle it with other offers </li>
                    <li>Use it as a lead magnet or bonus </li>
                </ul>
                <p class="poppins fm18 text-left line220 wt600 black">
                    There are no royalties to pay.<br>
                    There is no approval process.<br>
                    There are no usage limitations.

                </p>
                <p class="poppins fm18 text-left line150 wt400 black">
                    You have complete flexibility to adapt, customize, and deploy this content in the way that best fits your strategy.
                </p>
            </div>
            <div class="col-md-6 ">
                <img src="images/you.png"  class="img-responsive center-block">
            </div>
            <div class="col-md-10 col-md-offset-1 pt-4">
                <p class="poppins fm20 text-center line150 wt600 black">
                    ⚠️The level of control provided by PLR significantly increases the<br> practical value of this asset compared to standard licenses. 
                </p>
            </div>
        </div>
    </div>
</div>


<div class="visible-xs" style="background-image:url(images/bg5.jpg);background-size: cover;padding: 20px 0px;">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="headd">

                <h2 class="fm36 fx15  wt800 text-center black"><span class="gr1">This is where the real value comes in.</span></h2>
            </div>
            </div>
            <div class="col-md-6">
                <h2 class="fm20 fx13 wt500 text-left black">With <b>PLR,</b> you are fully permitted to: </h2>
                <ul class="orangeArrow-listing text-left fm20 fs18 fx14 blacktext wt400 line80 poppins ">
                    <li>Rebrand the product </li>
                    <li>Put your own name or brand on it </li>
                    <li>Sell it as your own product </li>
                    <li>Bundle it with other offers </li>
                    <li>Use it as a lead magnet or bonus </li>
                </ul>
                <p class="poppins fm18 text-left line220 wt600 black">
                    There are no royalties to pay.<br>
                    There is no approval process.<br>
                    There are no usage limitations.

                </p>
                <p class="poppins fm18 text-left line150 wt400 black">
                    You have complete flexibility to adapt, customize, and deploy this content in the way that best fits your strategy.
                </p>
            </div>
            <div class="col-md-6 ">
                <img src="images/you.png"  class="img-responsive center-block">
            </div>
            <div class="col-md-10 col-md-offset-1 pt-4">
                <p class="poppins fm20 text-center line150 wt600 black">
                    ⚠️The level of control provided by PLR significantly increases the<br> practical value of this asset compared to standard licenses. 
                </p>
            </div>
        </div>
    </div>
</div>



<div class="hidden-xs" class="" style="padding:40px 0px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h3 class="fm34 text-center wt800 line150 poppins black">Who This Is For  </h3>
            </div>
            <div class="col-md-12 pb-4">
                <h3 class="fm18 text-center fx13 wt400 line150 poppins black">This system is built for creators who want <b>clarity, speed, and consistency</b>-not hype or shortcuts.  </h3>
            </div>


            <!-- <div class="col-md-6 col-md-offset-3">
                <h3 class="fm34 text-center wt800 line150 poppins green"><u>Perfect For: </u> </h3>
            </div>
 -->
            <div class="col-md-6">
                <div class="bog" style="background: linear-gradient(90deg, #34a8536b, #7bc58e1c);">

                    <img src="images/gv1.jpg" class="img-responsive center-block" style="border-radius:12px;">
                    <h3 class="fm22 text-left wt800 line150 poppins black pt-4"><span class="">Beginners struggling with YouTube </span>  </h3>
                    <h3 class="fm16 text-left wt400 line150 poppins black">If you don’t know what to post, what to say, or how to start-this removes the guesswork.  </h3>
                    
                </div>
            </div>



             <div class="col-md-6 ">
                <div class="bog" style="background: linear-gradient(90deg, #34a8536b, #7bc58e1c);">
                    <img src="images/gv2.jpg" class="img-responsive center-block" style="border-radius:12px;">
                    <h3 class="fm22 text-left wt800 line150 poppins black pt-4"><span class="">Faceless channel creators </span>   </h3>
                    <h3 class="fm16 text-left wt400 line150 poppins black">Ideal if you prefer screen-based, voiceover, AI, or text-style<br> content.    </h3>
                    


                </div>
            </div>



            <div class="col-md-6 pt-5">
                <div class="bog" style="background: linear-gradient(90deg, #34a8536b, #7bc58e1c);">
                    <img src="images/gv3.jpg" class="img-responsive center-block" style="border-radius:12px;">
                    <h3 class="fm22 text-left wt800 line150 poppins black pt-4"><span class="">Side hustlers & affiliates  </span>  </h3>
                    <h3 class="fm16 text-left wt400 line140 poppins black">Create content that supports income without turning your channel into<br> spam.   </h3>
                    
                </div>
            </div>



             <div class="col-md-6 pt-5">
                <div class="bog" style="background: linear-gradient(90deg, #34a8536b, #7bc58e1c);">
                    <img src="images/gv4.jpg" class="img-responsive center-block" style="border-radius:12px;">
                    <h3 class="fm22 text-left wt800 line150 poppins black pt-4"><span class="">Anyone who wants a product they can resell  </span>   </h3>
                    <h3 class="fm16 text-left wt400 line150 poppins black">Use it personally-or rebrand and sell it as your<br> own asset.    </h3>
                    


                </div>
            </div>

            


             


<div class="col-md-6 col-md-offset-3 pt-5">
                <h3 class="fm34 text-center wt800 line150 poppins red"><u>Not For:  </u> </h3>
            </div>

            <div class="col-md-6 pt-4">
                <div class="bog" style="background: linear-gradient(90deg, #fe6060, #e884844f);">
                    <img src="images/no4.jpg" class="img-responsive center-block" style="border-radius:12px;">
                    <h3 class="fm22 text-left wt800 line150 poppins black pt-4"><span class="">People expecting instant viral<br> fame  </span>  </h3>
                    <h3 class="fm16 text-left wt400 line150 poppins black">This is a system for growth, not a lottery ticket.<br><br>   </h3>
                    
                </div>
            </div>



             <div class="col-md-6 pt-4">
                <div class="bog" style="background: linear-gradient(90deg, #fe6060, #e884844f);">
                    <img src="images/no5.jpg" class="img-responsive center-block" style="border-radius:12px;">
                    <h3 class="fm22 text-left wt800 line150 poppins black pt-4"><span class="black">Advanced YouTubers with full production<br> teams  </span>   </h3>
                    <h3 class="fm16 text-left wt400 line150 poppins black">If you already have editors, strategists, and established workflows, this may feel too basic.   </h3>
                    


                </div>
            </div>

           







        </div>
    </div>
</div>





<div class="visible-xs" style="padding:20px 0px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h3 class="fm34 text-center wt800 line150 poppins black">Who This Is For  </h3>
            </div>
            <div class="col-md-12 pb-4">
                <h3 class="fm18 text-center fx13 wt400 line150 poppins black">This system is built for creators who want <b>clarity, speed, and consistency</b>-not hype or shortcuts.  </h3>
            </div>


            <!-- <div class="col-md-6 col-md-offset-3">
                <h3 class="fm34 text-center wt800 line150 poppins green"><u>Perfect For: </u> </h3>
            </div>
 -->
            <div class="col-md-6">
                <div class="bog" style="background: linear-gradient(90deg, #34a8536b, #7bc58e1c);">

                    <img src="images/gv1.jpg" class="img-responsive center-block" style="border-radius:12px;">
                    <h3 class="fm22 fx15 text-left wt800 line150 poppins black pt-4"><span class="">Beginners struggling with YouTube </span>  </h3>
                    <h3 class="fm16 fx13 text-left wt400 line150 poppins black">If you don’t know what to post, what to say, or how to start-this removes the guesswork.  </h3>
                    
                </div>
            </div>



             <div class="col-md-6 pt-4">
                <div class="bog" style="background: linear-gradient(90deg, #34a8536b, #7bc58e1c);">
                    <img src="images/gv2.jpg" class="img-responsive center-block" style="border-radius:12px;">
                    <h3 class="fm22 fx15 text-left wt800 line150 poppins black pt-4"><span class="">Faceless channel creators </span>   </h3>
                    <h3 class="fm16 fx13 text-left wt400 line150 poppins black">Ideal if you prefer screen-based, voiceover, AI, or text-style content.    </h3>
                    


                </div>
            </div>



            <div class="col-md-6 pt-4">
                <div class="bog" style="background: linear-gradient(90deg, #34a8536b, #7bc58e1c);">
                    <img src="images/gv3.jpg" class="img-responsive center-block" style="border-radius:12px;">
                    <h3 class="fm22 fx15 text-left wt800 line150 poppins black pt-4"><span class="">Side hustlers & affiliates  </span>  </h3>
                    <h3 class="fm16 fx13 text-left wt400 line140 poppins black">Create content that supports income without turning your channel into spam.   </h3>
                    
                </div>
            </div>



             <div class="col-md-6 pt-4">
                <div class="bog" style="background: linear-gradient(90deg, #34a8536b, #7bc58e1c);">
                    <img src="images/gv4.jpg" class="img-responsive center-block" style="border-radius:12px;">
                    <h3 class="fm22 text-left fx15 wt800 line150 poppins black pt-4"><span class="">Anyone who wants a product they can resell  </span>   </h3>
                    <h3 class="fm16 text-left fx13 wt400 line150 poppins black">Use it personally-or rebrand and sell it as your<br> own asset.    </h3>
                    


                </div>
            </div>

            


             


<div class="col-md-6 col-md-offset-3 pt-5">
                <h3 class="fm34 text-center wt800 line150 poppins red"><u>Not For:  </u> </h3>
            </div>

            <div class="col-md-6 pt-4">
                <div class="bog" style="background: linear-gradient(90deg, #fe6060, #e884844f);">
                    <img src="images/no4.jpg" class="img-responsive center-block" style="border-radius:12px;">
                    <h3 class="fm22 text-left fx15 wt800 line150 poppins black pt-4"><span class="">People expecting instant viral fame  </span>  </h3>
                    <h3 class="fm16 fx13 text-left wt400 line150 poppins black">This is a system for growth, not a lottery ticket.  </h3>
                    
                </div>
            </div>



             <div class="col-md-6 pt-4">
                <div class="bog" style="background: linear-gradient(90deg, #fe6060, #e884844f);">
                    <img src="images/no5.jpg" class="img-responsive center-block" style="border-radius:12px;">
                    <h3 class="fm22 text-left wt800 line150 fx15 poppins black pt-4"><span class="black">Advanced YouTubers with full production teams  </span>   </h3>
                    <h3 class="fm16 text-left wt400 fx13 line150 poppins black">If you already have editors, strategists, and established workflows, this may feel too basic.   </h3>
                    


                </div>
            </div>

           







        </div>
    </div>
</div>








<div class="" style="background-image:url(images/bg2.jpg);background-size: cover;padding: 40px 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6 pt-4">
                <div class="bog" style="background: linear-gradient(90deg, #060c2b, #122f53);padding: 20px 25px;">
                    <h3 class="fm22 fx16 text-left wt800 line150 poppins white"><span class="white">Why This Is a Total No-Brainer  </span>   </h3>
                    <h3 class="fm18 fx14 text-left wt500 line150 poppins white">Let’s be real about the alternatives.</h3>                
                </div>

                <div class="bog mt-4" style="background: linear-gradient(90deg, #060c2b, #122f53);padding: 20px 25px;">
                    <h3 class="fm22 fx16 text-left wt800 line150 poppins white"><span class="white">Hiring a YouTube consultant?   </span>   </h3>
                    <h3 class="fm18 fx14 text-left wt500 line150 poppins white">That’s <b>$200–$500+</b> just for advice-no assets, no system, no ownership.</h3>
                </div>


                <div class="bog mt-4" style="background: linear-gradient(90deg, #060c2b, #122f53);padding: 20px 25px;">
                    <h3 class="fm22 fx16 text-left wt800 line150 poppins white"><span class="white">Paying monthly AI tools?   </span>   </h3>
                    <h3 class="fm18 fx14 text-left wt500 line150 poppins white">You’re locked into <b>ongoing fees,</b> learning curves, and tools that don’t tell you what to create. </h3>                   
                </div>

                <p class="poppins fm24 wt400 text-left line150 white pt-5">Now compare that to this</p>
            </div>

            <div class="col-md-6">
                <img src="images/boximg.png" class="img-responsive center-block">
            </div>



            <div class="col-md-12 hidden-xs">
                <img src="images/n.png" width="165" class="img-responsive center-block" style="position: absolute;left: 390px;top: -40px;">
            </div>




<div class="col-md-10 col-md-offset-1 pt-5 mt-5">
                <div class="bog" style="background: linear-gradient(90deg, #060c2b, #122f53);padding: 35px 35px;">
                    <h3 class="fm32 fx16 text-center wt800 line150 poppins white"><span class="white" style="background:#4cb34c;padding: 8px 15px;border-radius: 12px;border-bottom: 4px solid green;">Today, You Get:  </span>   </h3> 


                    <ul class="orangeArrow-listing text-left fm20 fs18 fx14 white wt400 line80 poppins ">
                    <li style="color: #fff;font-size: 18px;"><b>A complete YouTube content system</b> (ideas → scripts → titles → uploads)  </li>
                    <li style="color: #fff;"><b>Done-for-you prompts & templates</b> you can use immediately  </li>
                    <li style="color: #fff;"><b>PLR Rights</b> – use it, rebrand it, or sell it as your own. </li>
                </ul>



                <h3 class="fm32 text-center fx16 wt800 line150 poppins white"><span class="white">One-time payment.  </span>   </h3>                
                <h3 class="fm22 text-center wt700 fx15 line150 poppins white"><span class="white">No subscriptions. No consultants. No guesswork.   </span>   </h3>                
                <h3 class="fm20 text-left fx14 wt400 line220 poppins pt-4 white">You’re not buying “information.” <br>
You’re buying a <b>repeatable content engine</b> you can use again and again. 
   </h3>                

                </div>



            </div>
        </div>
    </div>
</div>
</div>






<div style="background-image:url(images/bg5.jpg);background-size: cover;padding: 40px 0px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="fm34 fx20 wt800 text-left black">30-Day Risk-Free Money-Back Guarantee </h2>
                <h2 class="fm18 fx14 wt500 text-left black">Try the entire system <b>risk-free for 30 full days.</b> <br><br>
If you don’t feel more confident about: 
 </h2>
                <ul class="orangeArrow-listing text-left fm20 fs18 fx14 blacktext wt400 line80 poppins ">
                    <li>What videos to create   </li>
                    <li>How to script them   </li>
                    <li>How to title, optimize, and publish consistently   </li>
                </ul>

                <h2 class="fm18 wt500 fx15 text-left line160 black">Just request a refund within 30 days-and <b>you’ll get your money back. No questions asked. </b>
 </h2>


            </div>
            <div class="col-md-6 ">
                <img src="images/money.png" width="430" class="img-responsive center-block">
            </div>
        </div>
    </div>
</div>

<div class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2 class="fm42 wt800 fx18 line150 black poppins text-center">Special Launch Price </h2>
                <h2 class="fm32 wt800 fx20 line150 black poppins text-center">💲 Just $7.95 Today  </h2>
                <h2 class="fm20 wt600 fx15 line150 black poppins text-center">(No monthly fees. No tech skills required.)  </h2>
            </div>
            <div class="col-md-6 col-md-offset-3" id="homePage">
                <div class="price">
                    <img src="images/logo1.png" width="250" class="img-responsive center-block">
                    <img src="images/pdt.png" width="550" class="img-responsive center-block">
                    <hr>
                    <h2 class="poppins fx18 wt700 line130 black fm26"><u>Click below to:</u></h2>
                    <ul class="orangeArrow-listing text-left fm20 fs18 fx14 blacktext wt400 line180 poppins ">
                    <li>Start creating YouTube content faster </li><hr>
                    <li>Stay consistent without stress </li><hr>
                    <li>Rebrand, bundle, or sell this system under <b>PLR</b></li><hr>
                </ul>
                <a href="#"><img src="https://warriorplus.com/o2/btn/cn100011011/kz9cny/hksjmq/458737" class="img-responsive center-block  pt-3"></a>
                </div>
            </div>
        </div>
    </div>
</div>






<div style="background-image:url(images/bg5.jpg);background-size: cover;padding: 40px 0px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="fm44 wt800 fx20 text-left black">Final Reminder </h2>
                <h2 class="fm20 wt500 fx15 text-left black">If you’re: </h2>
                <ul class="orangeArrow-listing text-left fm20 fs18 fx14 blacktext wt400 line80 poppins ">
                    <li>Stuck on YouTube  </li>
                    <li>Overthinking content  </li>
                    <li>Or looking for a low-cost product to sell…  </li>
                </ul>
                <h2 class="fm18 fx14 hidden-xs pt-4 wt500 line220 text-left black">This system was built for you.<br> 
                Simple. Practical. Profitable. 
                 </h2>
                 <h2 class="fm18 fx14 visible-xs pt-4 wt500 line220 text-left black">This system was built for you.
                Simple. Practical. Profitable. 
                 </h2>
            </div>
            <div class="col-md-6">
                <img src="images/final.png" width="450" class="img-responsive center-block">
            </div>
            <div class="col-md-12 pt-5">
                <a href="#"><h2 class="fm22 fx15 wt700 blue line140 text-left">👉 Download the AI Prompt & Template Pack for YouTube Growth Now </h2></a>
            </div>
        </div>
    </div>
</div>



<div class="pt-5 pb-5" >
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 pb-4">
                <div class="faq-container">
  <h2>Still Here? Check Out These FAQs:</h2>

  <div class="faq-item">
    <div class="faq-question">What type of license is included?</div>
    <div class="faq-answer">
      You get <b>Private Label Rights (PLR),</b> letting you edit, <b>rebrand, resell, or repurpose</b> the prompts and content as you choose.
    </div>
  </div>

  <div class="faq-item">
    <div class="faq-question">Can I pass on PLR to my customers?</div>
    <div class="faq-answer">
      Yes! With PLR, you can <b>resell the prompts or content,</b> and decide whether your customers receive PLR rights too.
    </div>
  </div>

  <div class="faq-item">
    <div class="faq-question">Are there any hidden or recurring fees?</div>
    <div class="faq-answer">
      No. This is a <b>one-time purchase</b>-no subscriptions, no hidden charges, no surprises.
    </div>
  </div>

  <div class="faq-item">
    <div class="faq-question">What if I’m not satisfied?</div>
    <div class="faq-answer">
      If the product doesn’t meet your expectations, you can <b>request a full refund within 30 days</b>-no questions asked.
    </div>
  </div>

</div>
            </div>



            <div class="col-md-12 col-sm-12 hidden-xs col-xs-12 pt-5">
    <h2 class="poppins fm28 xsem10 wt700 lh150 black text-center">For Any Queries, We Are Always Here To Help <br>You Get In Touch With Us ...</h2>
</div> 

<div class="col-md-12 col-sm-12 col-xs-12 visible-xs pt-5">
    <h2 class="poppins fm28 fx15 xsem10 wt700 lh150 black text-center">For Any Queries, We Are Always Here To Help You Get In Touch With Us ...</h2>
</div> 


<div class="col-md-12 col-sm-12 col-xs-12 pt-4 ">
<img src="images/fire.png" width="250" class="img-responsive center-block">
</div>




        </div>
    </div>
</div>



<div class="lightblock" style="background-image: url(images/bg2.jpg);background-size: cover;padding: 30px 0;">
<div class="container">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<img src="images/logo.png"  class="img-responsive center-block" width="250">
</div>
<div class="col-md-12  col-sm-12 col-xs-12 pt-4 pb-4">
<p class="text-center w500 fm18 fx14  s10 line140 white margin0 poppins">
<a href="http://firelaunchers.com/members-download/terms-conditions/" target="_blank" class="w600 white">Terms & Conditions</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="http://firelaunchers.com/members-download/privacy-policy/" target="_blank" class="w600  white">Privacy Policy</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="http://firelaunchers.com/members-download/anti-spam/" target="_blank" class="w600  white">Anti Spam</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="http://firelaunchers.com/members-download/terms-conditions/" target="_blank" class="w600  white">DMCA</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="http://firelaunchers.com/members-download/earning-disclaimer/" target="_blank" class="w600  white">Disclaimer</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://firelaunchers.kayako.com/" class="w6 00  white">Helpdesk</a></p></div>


<div class="col-md-12">
    <script type="text/javascript" src="https://warriorplus.com/o2/disclaimer/kz9cny" defer></script><div class="wplus_spdisclaimer" style="color:#fff;padding-top: 12px;text-align: center;font-size: 15px;"></div>
</div>
</div>

</div>
</div>








<!-- <div class="stickybar hidden-xs">

        

<div class="row">

        <div class="col-md-5 col-sm-4 col-xs-12">
		<div class="l15 m15 s2 line120 text-center white w700">
		<span class="yellow w700 l15 m15 s2 line170">Hurry...</span> Special Price is going <br>to Expire Soon...</div>
        </div>
      

		<div class="col-md-3 col-sm-4 col-xs-12 spacer1">

          <div id="countdown2" data-wow-delay=".3s" data-date="<?php echo $time; ?>"></div>
        </div>
		


        <div class="col-md-4 col-sm-4 col-xs-12 text-center spacer1">
            <a href="#buyNow" class="stickybutton l18 m15 s2 w600"> Get Instant Access</a>
        </div>

    </div>

    </div>
	
	<div class="stickybar visible-xs">

        

<div class="row">

        <div class="col-md-5 col-sm-4 col-xs-12">
		<div class="l15 m15 s2 line120 text-center white w700">
		<span class="yellow w700 l15 m15 s2 line170">Hurry...</span> Special Price is going <br>to Expire Soon...</div>
        </div>
      

		<div class="col-md-3 col-sm-4 col-xs-12 ">

          <div id="countdown2" data-wow-delay=".3s" data-date="<?php echo $time; ?>"></div>
        </div>
		


        <div class="col-md-4 col-sm-4 col-xs-12 text-center spacer1">
            <a href="#buyNow" class="stickybutton l18 m15 s2 w600"> Get Instant Access</a>
        </div>

    </div>

    </div>


<div class="visible-xs" style="height: 150px;"></div>
<div class="hidden-xs" style="height: 120px;"></div>
 -->
<!-- Load Ouibounce from CDN -->
      
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ouibounce/0.0.11/ouibounce.min.js"></script>

        <!-- Ouibounce Modal -->
<!--<div id="exitmodal" style="z-index:99999;">
<div class="underlay section3"></div>
<div class="modal popupbg section3">

	<div class="modal-header" style="border:0; padding:0;">
        <button type="button" class="close" onclick="document.getElementById('exitmodal').style.display = 'none';">&times;</button>
	</div>
    
	<div class="modal-body">
	<div class="innerbody">
                       
	<div class="col-lg-12 col-md-12 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
	
	    <div class="col-md-12  col-sm-12 col-xs-12 imgpopup">
        <img src="images/logo.png" style="width:300px" class="center-block img-responsive" />
        </div>
		<br><br>
		<h2 class=" text-center l24 m28 s16 line150 spacer4">
		<span class="themecolor"><strong>= = Before You Leave = =</strong></span>
		</h2>
       
        <div class="col-md-6  col-sm-6 col-xs-12 imgpopup">
        <img src="images/Special Report-1.png" style="width:200px" class="center-block img-responsive" />
        </div> 
        
		<div class="col-md-6 col-sm-6 col-xs-12">
       <h2 class="l18 m20 s16 w700 text-left serif"><strong>Grab this Ayurveda For Healthy Body   Special Report</strong></h2>
       <p class="l14 m15 s14 lh150">Special Gift to use revolutionary tips and techniques!!</p>
        </div><br><br>
        
	</div>     
    
<form action="https://app.getresponse.com/add_subscriber.html" class="af-form-wrapper" accept-charset="utf-8" method="post">

<div id="af-form-1589105050" class="af-form">
<div id="af-body-1589105050" class="af-body af-standards">

<!--<div class="af-element">
<label class="previewLabel" for="awf_field-83144998"></label>
<div class="af-textWrap">
<div class="col-md-8 col-md-offset-2 col-sm-offset-2 col-sm-8 col-xs-12 spacer2">
<input id="awf_field-84171587" type="text" name="name" class="text" value=""  onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " tabindex="500" placeholder="Your Name" />
</div>
</div>
<div class="af-clear"></div></div>-->


<!--<div class="form margin_form"><!--Visible For md-->
<!--<div class="container" style="max-width:100%;">
<div class="af-element padding0">
<!--<div class="col-md-1 col-sm-1 col-xs-12 padding0 spacer1">
<label class="previewLabel white l18 s20" for="awf_field-84171588"><strong>Email</strong></label>
</div>-->
<!--<div class="col-md-6 col-sm-6 col-xs-12 padding0 ml20 spartan">
<div class="af-textWrap">
<input class="text" id="awf_field-80463636" type="text" name="email" value="" tabindex="501" onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " placeholder="Your Email" /><i class="glyicon-email glyphicon glyphicon-envelope"></i>

</div><div class="af-clear"></div>
</div>
</div>

<div class="af-element buttonContainer padding0 spartan">
<div class="col-md-4 col-sm-4 col-xs-12 padding0 ml20">
<input name="submit" id="af-submit-image-1589105050" type="submit" class="image" style="background: none; max-width: 100%; margin-top:2%;" alt="Submit Form" tabindex="502" value="Download FREE Gift" />
<div class="af-clear"></div>
</div>
</div>
</div>
</div>


</div>
</div>
<!-- Get the token at: https://app.getresponse.com/campaign_list.html -->
<input type="hidden" name="campaign_token" value="nkxuC" />
<!-- Thank you page (optional) -->
<input type="hidden" name="thankyou_url" value=" https://s3.amazonaws.com/firelaunchers/jv+access/Muscles+and+Strength+Building+Formula+PLR/Special+Report.pdf"/>
<!-- Forward form data to your page (optional) -->
<input type="hidden" name="forward_data" value="" />
</form>    
    
    
    </div><!--End Inner Body-->
    </div><!--End Form Body-->
		 

        


           



        <script>
            var _ouibounce = ouibounce(document.getElementById('exitmodal'),{
                aggressive: true, //Making this true makes ouibounce not to obey "once per visitor" rule
            });
        </script>

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<!--<script src="js/jQuery.scrollSpeed.js"></script> 
<script src="js/viewportchecker.js"></script>-->
<script type="text/javascript">
jQuery(document).ready(function() {
	/*jQuery('.post').addClass("hidden").viewportChecker({
	    classToAdd: 'visible animated fadeInDown', // Class to add to the elements when they are visible
	    offset: 100    
	   });*/ 
	/*jQuery('.modulesection').addClass("hidden").viewportChecker({
	    classToAdd: 'visible animated fadeInLeft', // Class to add to the elements when they are visible
	    offset: 100    
	   });*/
});            
</script>


    
	<script src="js/jquery.countdown.min.js"></script>
    <script type="text/javascript">
    if ($('#countdown,#countdown1,#countdown2,#countdown3,#countdown4,#countdown5,#countdown5,#countdown6,#countdown7').length) { 
          $('#countdown,#countdown1,#countdown2,#countdown3,#countdown4,#countdown5,#countdown5,#countdown6,#countdown7').countdown({
            render: function(data) {
              if (data.years >= 1) {
                var $days = (data.years*365)+data.days;
              } else {
                var $days = data.days;
              }
              $(this.el).html(
                '<div class="day">' + this.leadingZeros($days) + ' <span>Days</span></div>'+
                '<div class="hour">' + this.leadingZeros(data.hours, 2) + ' <span>Hours</span></div>'+
                '<div class="min">' + this.leadingZeros(data.min, 2) + ' <span>Min</span></div>'+
                '<div class="sec">' + this.leadingZeros(data.sec, 2) + ' <span>Sec</span></div>'
              );
            }
          });
        }

   
    <script src="mos/jquery-3.3.1.min.js"></script>
    <script src="mos/popper.min.js"></script>
    <script src="mos/bootstrap.min.js"></script>
    <script src="mos/owl.carousel.min.js"></script>
    <script src="mos/main.js"></script>
    <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Slick Slider -->
    <script src="assets/js/slick.min.js"></script>
    <!-- Circle Progress -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- imagesloaded -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- Wow Animation -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Main Js File -->
    <script src="assets/js/main.js"></script>




    <script>
const faqItems = document.querySelectorAll(".faq-item");

faqItems.forEach(item => {
  item.querySelector(".faq-question").addEventListener("click", () => {
    
    // Close all other items
    faqItems.forEach(el => {
      if(el !== item) {
        el.classList.remove("active");
      }
    });

    // Toggle current item
    item.classList.toggle("active");
  });
});
</script>


</body>
</html>