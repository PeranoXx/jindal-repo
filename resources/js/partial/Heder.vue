<template>
    <div class="bg-black">
        <div class="flex py-2 mx-5 xl:w-7xl xl:mx-auto justify-between">
            <div class="text-gray-200 text-sm">
                An ISO 9001 : 2015 Certified Company
            </div>
            <div class="flex gap-3">
                <a href="#" class="text-gray-200 hover:text-[#1877f2]">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="#" class="text-gray-200 hover:text-[#c13584]">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="#" class="text-gray-200 hover:text-[#1da1f2]">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                        </path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="sticky top-0 z-20">
        <div class="bg-white">
            <div class="flex mx-5  gap-5 lg:gap-10 xl:w-7xl  xl:mx-auto py-4 justify-between items-center relative ">
                <div class="text-5xl">
                    <router-link :to="{ name: 'home'}" >
                        <img class="w-52" :src="logo" alt="Jindal Logo" />
                    </router-link>
                </div>
                <div class="hidden flex-1 relative h-12 lg:flex gap-5 lg:gap-10 justify-center items-center px-5 uppercase text-base lg:text-lg">
                    <router-link :to="{ name: 'home'}" class="relative after:bg-orange-400 hover:font-bold transition-all after:absolute after:h-[2px] after:w-0 after:bottom-0 after:left-0 hover:after:w-full after:transition-all after:duration-500 cursor-pointer">Home</router-link>
                    <router-link :to="{ name: 'about-us' }" class="relative after:bg-orange-400 hover:font-bold transition-all after:absolute after:h-[2px] after:w-0 after:bottom-0 after:left-0 hover:after:w-full after:transition-all after:duration-500 cursor-pointer">About Us</router-link>
                    <div class="relative inline-block text-left group">
                        <div class="relative after:bg-orange-400 hover:font-bold transition-all after:absolute after:h-[2px] after:w-0 after:bottom-0 after:left-0 hover:after:w-full after:transition-all after:duration-500 cursor-pointer">Our Products</div>
                        <div class="absolute mt-2 w-80 bg-white rounded-lg shadow-md opacity-0 group-hover:opacity-100 group-hover:visible invisible transition duration-200 z-50">
                            <ul class="py-1 text-sm">
      
                                <li class="relative group/item" v-for="(child, idx) in categories" :key="idx">
                                    <div class="px-4 py-2 text-black flex justify-between items-center relative hover:border-l-2 border-orange-400 cursor-pointer">
                                        {{ child.name }}
                                        <svg class="h-4 w-4 ml-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                        </svg>
                                    </div>

    
                                    <div class="absolute top-0 left-full ml-1 w-40 bg-white rounded-lg shadow-md opacity-0 group-hover/item:opacity-100 group-hover/item:visible invisible transition duration-200 z-50">
                                        <ul class="py-1">
                                            <router-link v-for="(sub, sIdx) in child.products" :key="sIdx" :to="{ name: 'product', params: {slug :  sub.slug} }">
                                            <li class="px-4 py-2 text-black flex justify-between items-center relative hover:border-l-2 border-orange-400 cursor-pointer" >
                                                {{ sub.name }}
                                            </li>
                                        </router-link>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <router-link :to="{ name: 'shade-cards', }" class="relative after:bg-orange-400 hover:font-bold transition-all after:absolute after:h-[2px] after:w-0 after:bottom-0 after:left-0 hover:after:w-full after:transition-all after:duration-500 cursor-pointer">Shade Cards</router-link>
                </div>
                <div class="flex gap-2 w-52 justify-end">
                    <router-link :to="{ name: 'contact-us'}">
                    <Button>
                        <span class="hidden lg:block md:mr-2">
                            Let's Talk
                        </span>
                        <template #icon>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 0 1-.825-.242m9.345-8.334a2.126 2.126 0 0 0-.476-.095 48.64 48.64 0 0 0-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0 0 11.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                            </svg>
                        </template>
                    </Button>
                    </router-link>
                    <Button @click="toggleSidebar" class="flex lg:hidden">
                        <template #icon>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </template>
                    </Button>
                </div>
            </div>
        </div>
        <div v-if="isOpen" @click="toggleSidebar" class="fixed inset-0 bg-black opacity-10 z-40 transition-opacity"></div>

        <!-- Sidebar -->
        <transition name="slide">
            <div v-if="isOpen" class="fixed top-0 left-0 w-72 h-full bg-white text-gray-800 shadow-lg z-50 p-6 overflow-y-auto">
                <!-- Close Button -->
                <button @click="toggleSidebar" class="text-gray-500 hover:text-black text-2xl absolute top-4 right-4">✕</button>

                <!-- Navigation Menu -->
                <ul class="space-y-4 pt-10 uppercase">

                    <!-- Static Links -->
                    <li>
                        <router-link :to="{ name: 'home' }" class="block px-2 py-2 rounded hover:bg-gray-100 transition">Home</router-link>
                    </li>

                    <li>
                        <router-link :to="{ name: 'about-us' }" class="block px-2 py-2 rounded hover:bg-gray-100 transition">About Us</router-link>
                    </li>

                    <!-- Dropdown -->
                    <li>
                        <button @click="toggleServices" class="w-full flex justify-between items-center px-2 py-2 rounded hover:bg-gray-100 transition uppercase">
                            Our Products
                            <svg class="w-4 h-4 transform transition-transform" :class="{ 'rotate-90': isServicesOpen }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M9 5l7 7-7 7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>

                        <!-- Dropdown Content -->
                        <transition name="slide-down">
                            <ul v-if="isServicesOpen" class="mt-3 ml-2 space-y-4 border-l border-gray-200 pl-4">
                                <li v-for="(child, idx) in categories" :key="idx">
                                    <button @click="toggleSub(idx)" class="w-full text-left flex justify-between items-center text-sm font-medium hover:text-black transition">
                                        {{ child.name }}
                                        <svg class="w-3 h-3 transform transition-transform" :class="{ 'rotate-90': openSub[idx] }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path d="M9 5l7 7-7 7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>

                                    <!-- Sub-Items -->
                                    <transition name="slide-down">
                                        <ul v-if="child.children && openSub[idx]" class="ml-4 mt-2 space-y-2 text-sm text-gray-600">
                                            <li v-for="(sub, sIdx) in child.products" :key="sIdx">
                                                <router-link :to="{ name: 'product', params: {slug : sub.slug} }" class="block py-1 px-2 rounded hover:bg-gray-100">{{ sub.name }}</router-link>
                                            </li>
                                        </ul>
                                    </transition>
                                </li>
                            </ul>
                        </transition>
                    </li>
                    <li>
                        <router-link :to="{ name: 'shade-cards' }" class="block px-2 py-2 rounded hover:bg-gray-100 transition">Shade Cards</router-link>
                    </li>
                    <li>
                        <router-link :to="{ name: 'home' }" class="block px-2 py-2 rounded hover:bg-gray-100 transition">Contact Us</router-link>
                    </li>

                </ul>
            </div>
        </transition>
    </div>
</template>

<script setup>
import { onMounted, ref } from 'vue'
import Button from '../components/Button.vue'
import logo from '../../../public/logo/Jindal_logo.jpg';
import apiService from '../services/api'

const isOpen = ref(false);
const isServicesOpen = ref(false)
const openSub = ref({})

const categories = ref({})

onMounted(async() => {
    const res = await apiService.getCategories()
  let data = res.data;
  if(data.status){
    categories.value = data.data
  }
})

const toggleServices = () => {
    isServicesOpen.value = !isServicesOpen.value
}

const toggleSub = (index) => {
    openSub.value[index] = !openSub.value[index]
}

const toggleSidebar = () => {
    isOpen.value = !isOpen.value;
};

const services = ref([
    {
        label: 'Option 1',
        children: [
            { label: 'Sub Option 1' },
            { label: 'Sub Option 1' },
        ],
    },
    {
        label: 'Option 2',
        children: [
            { label: 'Sub Option 1' },
            { label: 'Sub Option 2' },
        ],
    },
])
</script>

<style scoped>
/* Slide transition */
.slide-enter-active,
.slide-leave-active {
    transition: transform 0.3s ease-in-out;
}

.slide-enter-from,
.slide-leave-to {
    transform: translateX(-100%);
}

.slide-enter-to,
.slide-leave-from {
    transform: translateX(0);
}


.slide-down-enter-active,
.slide-down-leave-active {
    transition: max-height 0.3s ease, opacity 0.3s ease;
    overflow: hidden;
}

.slide-down-enter-from,
.slide-down-leave-to {
    max-height: 0;
    opacity: 0;
}

.slide-down-enter-to,
.slide-down-leave-from {
    max-height: 500px;
    /* adjust if needed */
    opacity: 1;
}
</style>