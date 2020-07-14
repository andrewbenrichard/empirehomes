<template>
  <div class="home__holder">
    <topHeader title="Contact " />
    <section class="mextreo-hero inner mar-bot-140">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="hero-content">
              <h6 class="ht-tittle" data-aos="fade-right" data-aos-duration="1500">Contact</h6>
              <h2 data-aos="fade-up" data-aos-duration="2000">Get In Touch</h2>

              <div class="mextreo-contact" data-aos="fade-up" data-aos-duration="3000">
                <form id="cf" method="POST">
                  <div class="form-group mcfg">
                    <input
                      type="text"
                      class="form-control m-input"
                      name="name"
                      id="name"
                      placeholder="Your Name *"
                      onfocus="this.placeholder = ''"
                      onblur="this.placeholder ='Your Name *'"
                    />
                  </div>
                  <div class="form-group mcfg">
                    <input
                      type="text"
                      class="form-control m-input"
                      name="email"
                      id="email"
                      placeholder="Your Email *"
                      onfocus="this.placeholder = ''"
                      onblur="this.placeholder ='Your Email *'"
                    />
                  </div>
                  <div class="form-group mcfg">
                    <textarea
                      rows="4"
                      class="form-control m-input"
                      name="msg"
                      id="msg"
                      placeholder="Message *"
                      onfocus="this.placeholder =''"
                      onblur="this.placeholder ='Message *'"
                    ></textarea>
                  </div>
                  <button type="submit" id="submit" class="m-submit">send message</button>
                  <div class="col-md-12 text-center">
                    <div class="cf-msg"></div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="hero-inner-img">
              <img
                src="assets/img/hero/contact.jpg"
                alt
                data-aos="fade-left"
                data-aos-duration="2000"
              />
            </div>
            <div class="contact-details" data-aos="fade-up" data-aos-duration="3000">
              <img src="assets/img/logo-contact.png" alt />
              <div class="single-info">
                <h5>Address:</h5>
                <p>Suite 20, 2nd floor, Olowu Shopping Complex, 70 Airport Rd, Oka,</p>
                <p>Benin City, Nigeria</p>
              </div>
              <div class="single-info">
                <h5>Phone:</h5>
                <p>+234-814-599-5586</p>
                <p>+234-811-320-7001</p>
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
    <!-- /Mextreo Hero Section-->

    <Bottomfooter />
  </div>
</template>
<script>
import topHeader from "./layouts/header.vue";
import Bottomfooter from "./layouts/footer.vue";

export default {
  mounted() {
    console.log("Component mounted.");
  },
  components: {
    topHeader,
    Bottomfooter
  }
};
</script>
