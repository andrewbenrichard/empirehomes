<template>
  <div class="footer_holder">
    <!--Footer Details-->
    <section class="footer-details" data-aos="fade-up" data-aos-duration="3000">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="footer-information">
              <div class="single-info">
                <h5>Address:</h5>
                <p>Suite 20, 2nd floor, Olowu Shopping Complex, 70 Airport Rd, Oka, Benin City</p>
              </div>
              <div class="single-info">
                <h5>Phone:</h5>
                <p>
                  <a href="tel:+2348145995586">(+234) 814-599-5586</a>
                </p>
                <p>
                  <a href="tel:+2348113207001">(+234) 811-320-7001</a>
                </p>
              </div>
              <div class="single-info">
                <h5>Email:</h5>
                <p>info@myempirehomes.com</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/Footer Details-->
    <!--Footer-->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <div class="footer-logo">
              <img src="assets/img/logo-2.png" alt />
            </div>
          </div>
          <div class="col-md-10">
            <div class="footer-nav">
              <ul>
                <li>
                  Copyright © 2020!
                  <a href="https://myempirehomes.com/">My Empire Homes</a>
                </li>
                <li>|</li>
                <li>
                  <a href="https://myempirehomes.com/page/privacy-policy">Privacy Policy</a>
                </li>
                <li>|</li>
                <li>
                  <a href="https://myempirehomes.com/page/terms-and-condition">Terms of Use</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--/Footer-->
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("footer mounted.");
  },
  data() {
    return {
      articles: {}
    };
  },
  methods: {
    // loadArticle() {
    //     axios
    //         .get("/api/sc_admin/articles")
    //         .then(({ data }) => (this.articles = data));
    // }
  },
  created() {
    // this.loadArticle();
    // this.$route.params;
  }
};
</script>
