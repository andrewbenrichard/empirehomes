<template>
  <div>
    <topHeader title="Projects " />

    <!-- Mextreo Hero Section -->
    <section class="mextreo-hero inner">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="hero-content">
              <h6 class="ht-tittle" data-aos="fade-right" data-aos-duration="1500">latest Project</h6>
              <h2 data-aos="fade-up" data-aos-duration="2000">Project</h2>
              <p data-aos="fade-up" data-aos-duration="2500">
                In the past, interiors were put together
                instinctively as a part of the process of building.[1] The profession of interior design has
                been a consequence of the development of society and the complex architecture that has
                resulted from the development of industrial processes. The pursuit of effective use of
                space, user well-being and functional design has contributed to the development of the
                contemporary interior design profession.
              </p>
              <p data-aos="fade-up" data-aos-duration="3000">
                The profession of interior design has been a
                consequence of the development of society and the complex architecture that has resulted
                from the development of industrial processes. The pursuit of effective use of space, user
                well-being and functional design has contributed to the development of the contemporary
                interior design profession. The profession of interior design is separate and distinct from
                the role of interior decorator, a term commonly used in the US. The term is less common in
                the UK, where the profession of interior design is still unregulated and therefore, strictly
                speaking, not yet officially a profession.
              </p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="hero-inner-img">
              <img
                src="public/assets/front/img/hero/project-hero.jpg"
                alt
                data-aos="fade-left"
                data-aos-duration="2000"
              />
              <img
                src="public/assets/front/img/hero/project-hero2.jpg"
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

    <!--Project Gallery-->
    <section class="project-gallery">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="portfolio-img" data-aos="fade-up" data-aos-duration="1500">
              <a data-fancybox="gallery" href="public/assets/front/img/portfolio/portfolio1.jpg">
                <img src="public/assets/front/img/portfolio/portfolio1.jpg" alt />
                <i class="flaticon-add rp-icon"></i>
              </a>
              <div class="sp-text">
                <h3>Introgen Abultreso</h3>
                <p>Dedisgn, House</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="portfolio-img" data-aos="fade-up" data-aos-duration="2500">
              <a data-fancybox="gallery" href="public/assets/front/img/portfolio/portfolio2.jpg">
                <img src="public/assets/front/img/portfolio/portfolio2.jpg" alt />
                <i class="flaticon-add rp-icon"></i>
              </a>
              <div class="sp-text">
                <h3>Introgen Abultreso</h3>
                <p>Dedisgn, House</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="portfolio-img" data-aos="fade-up" data-aos-duration="3000">
              <a data-fancybox="gallery" href="public/assets/front/img/portfolio/portfolio3.jpg">
                <img src="public/assets/front/img/portfolio/portfolio3.jpg" alt />
                <i class="flaticon-add rp-icon"></i>
              </a>
              <div class="sp-text">
                <h3>Introgen Abultreso</h3>
                <p>Dedisgn, House</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="portfolio-img" data-aos="fade-up" data-aos-duration="1500">
              <a data-fancybox="gallery" href="public/assets/front/img/portfolio/portfolio4.jpg">
                <img src="public/assets/front/img/portfolio/portfolio4.jpg" alt />
                <i class="flaticon-add rp-icon"></i>
              </a>
              <div class="sp-text">
                <h3>Introgen Abultreso</h3>
                <p>Dedisgn, House</p>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="portfolio-img" data-aos="fade-up" data-aos-duration="2500">
              <a data-fancybox="gallery" href="public/assets/front/img/portfolio/portfolio5.jpg">
                <img src="public/assets/front/img/portfolio/portfolio5.jpg" alt />
                <i class="flaticon-add rp-icon"></i>
              </a>
              <div class="sp-text">
                <h3>Introgen Abultreso</h3>
                <p>Dedisgn, House</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="portfolio-img" data-aos="fade-up" data-aos-duration="3000">
              <a data-fancybox="gallery" href="public/assets/front/img/portfolio/portfolio6.jpg">
                <img src="public/assets/front/img/portfolio/portfolio6.jpg" alt />
                <i class="flaticon-add rp-icon"></i>
              </a>
              <div class="sp-text">
                <h3>Introgen Abultreso</h3>
                <p>Dedisgn, House</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="portfolio-img" data-aos="fade-up" data-aos-duration="2500">
              <a data-fancybox="gallery" href="public/assets/front/img/portfolio/portfolio7.jpg">
                <img src="public/assets/front/img/portfolio/portfolio7.jpg" alt />
                <i class="flaticon-add rp-icon"></i>
              </a>
              <div class="sp-text">
                <h3>Introgen Abultreso</h3>
                <p>Dedisgn, House</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/Project Gallery-->

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
