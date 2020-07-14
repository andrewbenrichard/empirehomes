<template>
  <div>
    <topHeader title="Services" />

    <!-- Mextreo Hero Section -->
    <section class="mextreo-hero inner mar-bot-50">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="hero-content">
              <h6 class="ht-tittle" data-aos="fade-right" data-aos-duration="1500">our Service</h6>
              <h2 data-aos="fade-up" data-aos-duration="2000">
                We Offer Professional
                Handyman services
              </h2>
              <p
                data-aos="fade-up"
                data-aos-duration="2500"
              >Hire the best handymen near you within minutes, Hire plumbers, electricians, construction works and skilled artisans.</p>

              <ul>
                <li data-aos="fade-up" data-aos-duration="1700">HandyMen</li>
                <li data-aos="fade-up" data-aos-duration="1800">Plumbers</li>
                <li data-aos="fade-up" data-aos-duration="2100">Electricians</li>
                <li data-aos="fade-up" data-aos-duration="2500">Ac Experts</li>
                <li data-aos="fade-up" data-aos-duration="2800">Construction Workers</li>
                <li data-aos="fade-up" data-aos-duration="3000">Carpenters</li>
                <li data-aos="fade-up" data-aos-duration="3200">And much more</li>
              </ul>
              <a
                href="about-us.html"
                class="btn-1"
                data-aos="fade-up"
                data-aos-duration="3000"
              >Hire Artisans</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="hero-inner-img">
              <img
                src="assets/front/img/hero/service-hero.jpg"
                alt
                data-aos="fade-left"
                data-aos-duration="2000"
              />
              <img
                src="assets/front/img/hero/service-hero2.jpg"
                alt
                class="hero-inner-2"
                data-aos="fade-up"
                data-aos-duration="3000"
              />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Mextreo Hero Section-->
    <!--About Architect-->
    <section class="architect">
      <div class="container">
        <div class="row">
          <div class="col-md-7 order-md-1 order-2">
            <div class="archit-img" data-aos="fade-up" data-aos-duration="2500">
              <img src="assets/front/img/about/abou-archtech.jpg" alt />
            </div>
          </div>
          <div class="col-md-5 order-md-2 order-1">
            <div class="ab-arch-content">
              <h6 class="ht-tittle" data-aos="fade-right" data-aos-duration="2500">Architect design</h6>
              <h2 data-aos="fade-up" data-aos-duration="2000">Architecture</h2>
              <p
                data-aos="fade-up"
                data-aos-duration="2500"
              >At My Empire Homes we have a wealth of experience across a number of sectors including; Traditional Residential, Apartments, Build to Rent, Student Housing, Co-Living, Hotel & Leisure, Offices, Health Care, Industrial and Education, with experience gained on a number of large projects</p>
              <a
                href="about-us.html"
                class="btn-1"
                data-aos="fade-up"
                data-aos-duration="3000"
              >Contact us</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/About Architect-->

    <!--About Architect-->
    <section class="interior">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <div class="ab-interior-content">
              <h6
                class="ht-tittle"
                data-aos="fade-right"
                data-aos-duration="2500"
              >Property Listing Marketplace</h6>
              <h2 data-aos="fade-up" data-aos-duration="2000">Rent, Buy and sell</h2>
              <p
                data-aos="fade-up"
                data-aos-duration="2500"
              >We offer an easy to navigate property search experience and a full mobile search platform that includes our mobile-optimized website, Real Estate Search iPhone app and Real Estate Android® app. Whether you are at home or on-the-go, we make it easy for you to access our network of hundreds of thousands national real estate listings.</p>
              <a
                href="about-us.html"
                class="btn-1"
                data-aos="fade-up"
                data-aos-duration="3000"
              >Explore Marketplace</a>
            </div>
          </div>
          <div class="col-md-7">
            <div class="interior-img" data-aos="fade-up" data-aos-duration="2500">
              <img src="assets/front/img/about/abou-interior.jpg" alt />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/About Architect-->
    <Bottomfooter />
  </div>
</template>

<script>
import topHeader from "./layouts/header.vue";
import Bottomfooter from "./layouts/footer.vue";
import paystack from "vue-paystack";

export default {
  mounted() {
    console.log("Donate mounted.");
  },
  components: {
    topHeader,
    Bottomfooter,
    paystack
  },
  data() {
    return {
      projects: {}
    };
  },
  computed: {
    reference() {
      let text = "";
      let possible =
        "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

      for (let i = 0; i < 10; i++)
        text += possible.charAt(Math.floor(Math.random() * possible.length));

      return text;
    }
  },
  methods: {
    callback: function(response) {
      console.log(response);
    },
    close: function() {
      console.log("Payment closed");
    },
    loadProjects() {
      axios
        .get("/api/sc_admin/projects")
        .then(({ data }) => (this.projects = data));
    }
  },
  created() {
    this.loadProjects();
    this.$route.params;
  }
};
</script>
