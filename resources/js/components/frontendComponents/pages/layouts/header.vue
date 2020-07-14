<template>
  <div class="header___sk_shop">
    <title>{{title}} | My Empire Homes</title>

    <!-- Header Area-->
    <header class="mextreo-header-area nav-fixed">
      <div class="container c-fulid-max">
        <div class="row">
          <div class="col-4 col-md-4">
            <div class="logo-wrapper">
              <router-link to="/">
                <img src="public/assets/front/img/logo.png" alt />
              </router-link>
            </div>
          </div>
          <div class="col-8 col-md-8">
            <div class="mextreo-menu">
              <div class="mxm-wrspper">
                <nav class="main-nav" role="navigation">
                  <!-- Mobile menu toggle button (hamburger/x icon) -->
                  <input id="main-menu-state" type="checkbox" />
                  <label class="main-menu-btn" for="main-menu-state">
                    <span class="main-menu-btn-icon"></span>
                  </label>
                  <!-- main menu definition -->
                  <ul id="main-menu" class="sm sm-mint">
                    <li>
                      <router-link to="/">Home</router-link>
                    </li>
                    <li>
                      <router-link to="/about-us">About Us</router-link>
                    </li>
                    <li>
                      <router-link to="/services">Services</router-link>
                    </li>
                    <li>
                      <router-link to="/projects">Projects</router-link>
                    </li>
                    <li>
                      <router-link to="/contact">Contact</router-link>
                    </li>
                    <li class="tel">
                      <a href="tel:+2348145995586">+ (234)814-599-5586</a>
                    </li>
                  </ul>
                </nav>
              </div>
              <div class="side-ber">
                <button class="sidebar-btn">
                  <i class="fas fa-bars" aria-hidden="true"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!--/Header Area-->

    <!-- Right Side Panel -->
    <div class="side-panel hide">
      <div class="sp-box">
        <div class="sp-close">
          <span class="close-sp">
            <i class="fa fa-times-circle" aria-hidden="true"></i>
          </span>
        </div>
        <div class="sp-logo">
          <router-link to="/">
            <img src="public/assets/img/logo-2.png" alt />
          </router-link>
        </div>

        <div class="sp-contact">
          <h4>Contact</h4>
          <div class="spc-text">
            <p>Suite 20, 2nd floor, Olowu Shopping Complex, 70 Airport Rd, Oka, Benin City</p>
            <h5>Phone:</h5>
            <p>
              <a href="tel:+2348145995586">+ (234)814-599-5586</a>
            </p>
            <h5>Email:</h5>
            <p>
              <a href="mailto:info@myempirehomes.com">info@myempirehomes.com</a>
            </p>
          </div>
        </div>
        <div class="sp-social">
          <ul class="social-list">
            <li data-aos="fade-up" data-aos-duration="1500">
              <a href="https://twitter.com/myempirehome">
                <i class="flaticon-twitter"></i>
              </a>
            </li>
            <li data-aos="fade-up" data-aos-duration="2000">
              <a href="https://web.facebook.com/myempirehome">
                <i class="flaticon-facebook"></i>
              </a>
            </li>
            <li data-aos="fade-up" data-aos-duration="2500">
              <a href="https://www.instagram.com/myempirehome">
                <i class="flaticon-instagram"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- /Right Side Panel -->
  </div>
</template>

<script>
import { mapGetters, mapActions } from "vuex";
export default {
  mounted() {
    console.log("header mounted.");
  },
  props: {
    title: {
      string: true
    }
  },
  data: () => ({
    activeItem: 0
  }),
  computed: {
    ...mapGetters({
      authenticated: "auth/router-linkuthenticated",
      user: "auth/user"
    })
  },
  methods: {
    ...mapActions({
      signOutAction: "auth/signOut"
    }),
    signOut() {
      this.signOutAction().then(() => {
        this.$router.replace({
          name: "home"
        });
      });
    }
  }
};
</script>
