<template>
    <div class="SideBar-Container" :class="{'Side-Bar-Shadow': small}">
            <div class="SideBar">
            <transition name="slide-fade-menu">
                  <ul :class="[small ? 'Mobile-Menu' : 'Menu']" v-if=" (small && isActiveMenu) || (!small && !isActiveMenu)">
                      <span v-if="small" class="Menu-Logo">
                          <img src="../../../../public/img/LogoCollegeLarge.png" alt="">
                      </span>
                    <li><a href="/">Главная</a></li>
                    <li><a href="/News">Новости</a></li>
                    <li><a href="/Events">Анонсы</a></li>
                    <li><a href="/">Студентам</a> </li>
                    <li><a href="/">Абитуриентам</a> <img src="../../../../public/img/chevron-bottom.png" alt=""></li>
                    <li><a href="/">Сотрудникам</a> <img src="../../../../public/img/chevron-bottom.png" alt=""></li>
                    <li><a href="/">О Колледже</a> <img src="../../../../public/img/chevron-bottom.png" alt=""></li>
                    <li v-if="small"><input type="Search" name="" value="" PlaceHolder="Search"></li>
                  </ul>

              </transition>
              <div class="mobile-bar" v-if="small">
                <div class="col">
                  <span class="ButtonBar" v-on:click="MobMenu" :class="{'mobile-bar-transform': isActiveMenu}">
                      <div v-if="!isActiveMenu">
                          <span></span>
                          <span></span>
                          <span></span>
                      </div>

                    <div v-else class="cl-un-mob-mn" :class="{ 'mobile-bar-transform': isActiveMenu }">
                        &#215;
                    </div>
                  </span>
                </div>
                <div class="col">
                  <h3>Главная</h3>
                </div>
                <div class="col">
                  <div class="mobile-header" v-on:click="mobInfo" :class="{ 'mobile-header-transform': isActive }">
                    <div v-if="!isActive">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div v-else :class="{ 'mobile-header-transform': isActive }">
                        <img src="../../../../public/img/Close.png" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <transition name="slide-fade">
                <div :class="mobileInfo" v-if="show">
                  <p><img src="../../../../public/img/blue-mail.png" alt="">Сollege@gmail.com</p>
                  <p><img src="../../../../public/img/blue-pin.png" alt="">ул. Шеремета, 7, Луганск</p>
                  <p><img src="../../../../public/img/blue-call-phone.png" alt="">+8 800 555 3535</p>
                  <p><img src="../../../../public/img/BlueAcc.png" alt="">Войти</p>
                </div>
            </transition>
    </div>
</template>

<script>
    export default{
        data: () => ({
            small: false,
            mobileInfo: "mobile-info",
            show: false,
            mobHead: "mobile-header",
            isActive: false,
            isActiveMenu:false
        }),
        created() {
            window.addEventListener('resize', this.onResize);
            this.onResize();
        },
        destroyed() {
            window.removeEventListener('resize', this.onResize)
        },
        methods: {
            onResize() {
                this.small = window.innerWidth <= 900;
            },
            mobInfo: function(mobHead) {
                this.show = !this.show;
                this.isActive = !this.isActive;
            },
            MobMenu: function(){
                this.isActiveMenu = !this.isActiveMenu;
            }
        }
    }
</script>
<style>
.slide-fade-enter-active, .slide-fade-leave-active {
    transition: all .5s ease;
}
.slide-fade-enter, .slide-fade-leave-to
/* .slide-fade-leave-active до версии 2.1.8 */ {
    transform: translateX(200px);
    opacity: 0;
}
.slide-fade-menu-enter-active, .slide-fade-menu-enter-leave-active{
    transition: all .5s ease;
}
.slide-fade-menu-enter, .slide-fade-menu-leave-to{
    transform: translate(-200px);
    opacity: 0;
}
</style>
