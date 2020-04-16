<?php
/*
Template Name: custom-top-template
*/
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>

<div class="container">
    <?php get_header('top'); ?>
  <video autoplay loop muted src="/wp-content/uploads/2020/01/kv.mp4"></video>
  <section id="product-process" class="text-center" style="margin-bottom: 1000px;">
    <h2>生産工程</h2>
    <p>
      親譲りの無鉄砲で小供の時から損ばかりしている。<br>
      小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。<br>
      なぜそんな無闇をしたと聞く人があるかも知れぬ。別段深い理由でもない。<br>
      新築の二階から首を出していたら、同級生の一人が冗談に、いくら威張っても、そこから飛び降りる事は出来まい。
    </p>
  </section>

  <section id="producer" class="text-center" style="margin-bottom: 1000px;">
    <h2>生産者</h2>
    <div class="card" style="width: 18rem;">
      <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg"
           preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap">
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="#868e96"></rect>
        <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
      </svg>
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
          content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </section>

  <section id="contact-us" class="text-center" style="margin-bottom: 1000px;">
    <h2>お問い合わせ</h2>
    <ul>
      <li>おなまえ</li>
      <li>れんらくさき</li>
      <li>ないよう</li>
    </ul>
  </section>
</div>


<script
  src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
  crossorigin="anonymous"
></script>
<script
  src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
  crossorigin="anonymous"
></script>
<script
  src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
  integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
  crossorigin="anonymous"
></script>
</body>
</html>