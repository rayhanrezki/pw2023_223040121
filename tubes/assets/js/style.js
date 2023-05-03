/* GLOBAL STYLES
-------------------------------------------------- */
/* Padding below the footer and lighter body text */

body {
  padding - top: 3rem;
  padding - bottom: 3rem;
  color: rgb(var(--bs - tertiary - color - rgb));
}


/* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

/* Carousel base class */
.carousel {
  margin - bottom: 4rem;
}
/* Since positioning the image, we need to help out the caption */
.carousel - caption {
  bottom: 3rem;
  z - index: 10;
}

/* Declare heights because of positioning of img element */
.carousel - item {
  height: 32rem;
}


/* MARKETING CONTENT
-------------------------------------------------- */

/* Center align the text within the three columns below the carousel */
.marketing.col - lg - 4 {
  margin - bottom: 1.5rem;
  text - align: center;
}
/* rtl:begin:ignore */
.marketing.col - lg - 4 p {
  margin - right: .75rem;
  margin - left: .75rem;
}
/* rtl:end:ignore */


/* Featurettes
------------------------- */

.featurette - divider {
  margin: 5rem 0; /* Space out the Bootstrap <hr> more */
}

/* Thin out the marketing headings */
/* rtl:begin:remove */
.featurette - heading {
  letter - spacing: -.05rem;
}

/* rtl:end:remove */

/* RESPONSIVE CSS
-------------------------------------------------- */

@media(min - width: 40em) {
  /* Bump up size of carousel content */
  .carousel - caption p {
    margin - bottom: 1.25rem;
    font - size: 1.25rem;
    line - height: 1.4;
  }

  .featurette - heading {
    font - size: 50px;
  }
}

@media(min - width: 62em) {
  .featurette - heading {
    margin - top: 7rem;
  }
}
