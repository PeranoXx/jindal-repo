<template>
     <div class="bg-neutral-900 py-20">
      <div class="mx-10 mt-10 lg:mx-20 lg:mt-0 gap-4 xl:w-7xl xl:mx-auto">
        <div class="flex flex-col lg:flex-row gap-15 lg:gap-30 justify-between">
          <div class="text-4xl  text-white pt-10">
            <router-link :to="{ name: 'home'}" >
                        <img class="w-72" :src="logo" alt="Jindal Logo" />
                    </router-link>
          </div>
          <div class="text-xl">
            <div class="text-neutral-400">Quick Links</div>
            <div class="py-4">
              <ul class="text-white">
                <li class="py-2">
                  <router-link :to="{ name: 'home', }" class="relative after:bg-orange-400 transition-all after:absolute after:h-[2px] after:w-0 after:bottom-0 after:left-0 hover:after:w-full after:transition-all after:duration-500 cursor-pointer">Home</router-link>
                </li>
                <li class="py-2">
                  <router-link :to="{ name: 'about-us', }" class="relative after:bg-orange-400 transition-all after:absolute after:h-[2px] after:w-0 after:bottom-0 after:left-0 hover:after:w-full after:transition-all after:duration-500 cursor-pointer">About Us</router-link>
                </li>
                <li class="py-2">
                  <router-link :to="{ name: 'shade-cards', }" class="relative after:bg-orange-400 transition-all after:absolute after:h-[2px] after:w-0 after:bottom-0 after:left-0 hover:after:w-full after:transition-all after:duration-500 cursor-pointer">Shade Cards</router-link>
                </li>
                <li class="py-2">
                  <router-link :to="{ name: 'contact-us', }" class="relative after:bg-orange-400 transition-all after:absolute after:h-[2px] after:w-0 after:bottom-0 after:left-0 hover:after:w-full after:transition-all after:duration-500 cursor-pointer">Contact Us</router-link>
                </li>
              </ul>
            </div>
          </div>
          <div class="text-xl flex-1">
            <div class="text-neutral-400">How To Reach</div>
            <div class="py-4">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119066.41709451063!2d72.73988483609048!3d21.15934029880327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e59411d1563%3A0xfe4558290938b042!2sSurat%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1748953403932!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-neutral-950">
        <div class="flex py-2 mx-5 xl:w-7xl xl:mx-auto justify-center">
            <div class="text-gray-200 text-sm">
              ©Copyrights {{ new Date().getFullYear() }} All Rights Reserved by JINDAL 777 PVT. LTD. &nbsp;&nbsp; Designed By <a class="text-orange-400" href="https://portfolio-parth.vercel.app/" target="_blank">PeranoXx</a>
            </div>
        </div>
    </div>
</template>

<script setup>
import logo from '../../../public/logo/Jindal_logo.jpg';

</script>