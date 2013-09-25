<?php /* Template Name: about-us */ ?>
<?php get_header(); ?>

<div class="container pages">
  <h2 class="page-title">Air Purifier Technical Comparisons</h2>
  <div class="row">
    <div class="span6 padding-medium"><a href="<?php bloginfo('template_url');?>\biogs2-air-purifier"><img class="aligncenter" src="<?php bloginfo('template_url'); ?>\images\compare\compare_biogs2_explore.jpg"></a></div>
    <div class="span6 padding-medium"><a href="<?php bloginfo('template_url'); ?>/minusa2-air-purifie"><img class="aligncenter" src="<?php bloginfo('template_url'); ?>\images\compare\compare_minusa2_explore.jpg"></a></div>
  </div>

  <h3>Annual operational costs</h3>
  <img class="aligncenter" src="<?php bloginfo('template_url'); ?>\images\compare\compchart_operational_cost.png">

  <ul>
    <li><span>Price of electricity obtained from U.S. Energy Information Administration - Monthly Electric Power for California Nov. 2012 - All Sectors</span></li>
    <li><span>Filter costs and replacement recommendations taken from manufacturer website.</span></li>
    <li><span>Based on 24/7 operation on highest speed for a year.</span></li>
  </ul>

  <hr class="normal-hr">

  <h3>Noise level on highest fan speed</h3>
  <img class="aligncenter" src="<?php bloginfo('template_url'); ?>\images\compare\compchart_noise_high.png">
  <ul>
    <li><span>Noise levels obtained from manufacturer and consumer allergy websites.</span></li>
  </ul>

  <hr class="normal-hr">

  <h3>Noise level on lowest fan speed</h3>
  <img class="aligncenter" src="<?php bloginfo('template_url'); ?>\images\compare\compchart_noise_low.png">
  <ul>
    <li><span>Noise levels obtained from manufacturer and consumer allergy websites.</span></li>
    <li><span>Noise level for Idylis on low speed is unavailable.</span></li>
  </ul>

  <hr class="normal-hr">

  <h3>Power consumption on highest fan speed</h3>
  <img class="aligncenter" src="<?php bloginfo('template_url'); ?>\images\compare\compchart_power_high.png">
  <ul>
    <li><span>Power consumption levels obtained from manufacturer and consumer allergy websites.</span></li>
  </ul>

  <hr class="normal-hr">

  <h3>Power consumption on lowest fan speed</h3>
  <img class="aligncenter" src="<?php bloginfo('template_url'); ?>\images\compare\compchart_power_high.png">
  <ul>
    <li><span>Power consumption levels obtained from manufacturer and consumer allergy websites.</span></li>
  </ul>



</div>
<?php get_footer(); ?>