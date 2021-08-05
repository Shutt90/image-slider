<script>

var i = 0;
const TIME = 3000;
let imgs = [];

<?php foreach ($gallery as $gallery) : ?>

imgs.push('$gallery->image')

<?php endforeach ?>

const slideShow = function () {
  let current = (document.slider.src = imgs[i]);
  if (i < imgs.length - 1) {
    i++;
  } else i = 0;

//  let current will be used with GSAP once webpack configured to make animations and scroll triggers

  setTimeout("slideShow()", TIME);
};

</script>