<template>
    <section>
        <div class="py-24" style="background:linear-gradient(131deg, #E8E5FE 26.82%, #FFEED8 96.89%);">
            <div class="mx-10 mt-10 lg:mx-20 lg:mt-0 gap-4 xl:w-7xl xl:mx-auto">
                <div class="flex justify-center">
                    <span class="text-4xl sm:text-6xl xl:text-6xl font-semibold mb-5 sm:mb-8 py-4 text-center max-w-sm md:max-w-lg lg:max-w-2xl xl:max-w-5xl mx-auto font-heading border-b-4 border-orange-400"> {{ productName(slug) }}</span>
                </div>
            </div>
        </div>
        <div>
            <div class="bg-neutral-50 py-20">
                <div class="mx-10 mt-10 lg:mx-20 lg:mt-0 gap-4 xl:w-7xl xl:mx-auto">
                    <div class="bg-white rounded-3xl py-16 md:py-20 px-4 md:px-10">
                        <div class="flex">
                            <div class="w-1/2 p-5 ">
                                <Carousel id="gallery" v-bind="galleryConfig" v-model="currentSlide">
                                    <Slide v-for="image in images" :key="image.id"  @click="openFullscreen(image.url)" >
                                        <img :src="image.url" alt="Gallery Image" class="gallery-image rounded-md w-full object-cover h-[350px] shadow-lg"/>
                                    </Slide>
                                    <template #addons>
                                        <Navigation />
                                    </template>
                                </Carousel>

                                <Carousel id="thumbnails" v-bind="thumbnailsConfig" v-model="currentSlide">
                                    <Slide v-for="image in images" :key="image.id">
                                        <template #default="{ currentIndex, isActive }">
                                            <div :class="['thumbnail', { 'is-active': isActive }]" @click="slideTo(currentIndex)">
                                                <img :src="image.url" alt="Thumbnail Image" class="thumbnail-image rounded-md" :style="{ opacity: isActive ? 1 : 0.5 }" />
                                            </div>
                                        </template>
                                    </Slide>

                                    
                                </Carousel>
                            </div>
                            <div class="w-1/2 p-5 ">
                                <div class="text-3xl font-bold">
                                    Spun Poly Yarn Manufecturer In India
                                </div>
                                <div class="text-neutral-800 py-5">
                                    Polyester yarn is the sturdiest and strong material got by liquefying turning from a polymeric dissolve at 265 °C. 
                                </div>

                                <div>
                                    <div class="no-tailwind">
<div class="rs-timeline-content">
<h2>ABOUT JAINCOTEX MILLS PVT. LTD.</h2>
<h4><span style="font-family: Arial;"><span style="font-size: medium;">We JAINCOTEX MILLS ,popularly known as jainco enterprise or Shree parshvnath enterprise , deals in large range of embroidery yarn. We are basically one stop for the widest range of yarn in the country . We have the monopoly of highest number of schiffli cocoon machines which counts up to 500 machines also with the largest production in whole Asia . In addition we have around 700 range of shades/colours &nbsp;in embroidery yarn which includes dyed spun polyester , dyed staple viscose , dyed acrylic yarn and variety of back yarn in various counts&nbsp; in the brand name ‘Priyanshi threads’.</span></span><o:p></o:p></h4>
<h4><span style="font-family: Arial;"><span style="font-size: medium;">We have a great experience of 30 years and also have the history of the most faithful as well as the most reliable company in our field .We have multiple depos over the country ,&nbsp; we also export yarn to various countries including South Africa , Finland , Sweden , Bangladesh,etc</span></span><o:p></o:p></h4>
<h4><span style="font-family: Arial;"><span style="font-size: medium;">The thread we manufacture is known for its high tenacity , fibre strength as well as durability . The support team is collaborated with 300 skilled employees&nbsp; incorporating bag-full of experience. This has culminated in our team manufacturing around 3000 tonnes of different types of thread, relishing a very high growth rate of 150% per year.</span></span><span style="font-size: 11pt; font-family: Calibri, &quot;sans-serif&quot;;"><o:p></o:p></span></h4>
<h4><span style="font-family: Arial;"><span style="font-size: medium;">JAINCOTEX MILLS &nbsp;along with the traditional values and principles, we also foster the advancement in technology that promotes us to use more advanced machinery for production. For softening and fining of Yarn, the company has adapted to a High Speed Winder. The packing and final manufacturing stages is also automated and controlled by an imported machine, V-cone Packing Machine. This puts light on the fact that the company is ready and longing for improvements to achieve customer satisfaction.</span></span><span style="font-size: 11pt; font-family: Calibri, &quot;sans-serif&quot;;"><o:p></o:p></span><span style="font-family: Arial;"><span style="font-size: medium;">Our strong network , with large number of skilled staff , has made it possible for us to withstand our customers expectation. We always try to do better and still building ourselves up for the better result.</span></span></h4>
<span style="font-size: small;">
<h4><span style="font-size: medium;"><span style="font-family: &quot;Times New Roman&quot;;"><font color="#ff6600">'ALWAYS DELIVERING MORE THAN EXPECTED'.</font></span></span></h4>
</span></div>
<div class="rs-timeline">&nbsp;
<h2>Our Vision</h2>
<h4><span style="font-family: Arial;"><span style="font-size: medium;">We keep happy our customers by delivering consequences through quality products and services. Our desire to grow drives our passion to win in the marketplace. With an integrated structure, we’ll remain competitive across business and in every section”</span></span></h4>
<h2>Valuable Customer</h2>
<h4><span style="font-family: Arial;"><span style="font-size: medium;">To be the most customers trusted company In the Textile Filed as we promise to our customer a high Quality Products which lead them into the excellence in their products.</span></span></h4>
<h2>Portfolio</h2>
<h4><span style="font-family: Arial;"><span style="font-size: medium;">We deliver to world a portfolio of quality Products of our brands that anticipate and satisfy Our Customers needs.</span></span></h4>
<h2>Productivity</h2>
<h4><span style="font-family: Arial;"><span style="font-size: medium;">Be a highly effective, inclining and dynamic organization.</span></span></h4>
</div>


    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <transition name="fade-zoom">
      <div v-if="isFullscreen" class="fixed inset-0 z-50 bg-black bg-opacity-90 flex items-center justify-center" @click="closeFullscreen">
        <img :src="fullscreenImage" class="max-w-full max-h-full object-contain transform transition duration-300" />
        <button class="absolute top-4 right-4 text-white text-3xl" @click.stop="closeFullscreen">✕</button>
      </div>
    </transition>
</template>

<script setup>
import { ref } from 'vue';
import { useRoute } from 'vue-router'
import { Carousel, Slide, Navigation } from 'vue3-carousel'

const route = useRoute()
const slug = ref(route.params.slug)
const currentSlide = ref(0)

const fullscreenImage = ref(null)
const isFullscreen = ref(false)

const galleryConfig = {
    itemsToShow: 1,
    wrapAround: false,
  mouseDrag: true,       // ✅ Enable mouse dragging
  touchDrag: true,       // ✅ Enable touch dragging
  height: 350,
}

const thumbnailsConfig = {
  height: 80,
  itemsToShow: 6,
  wrapAround: false,
  touchDrag: false,
  gap: 10,
}

function openFullscreen(imageUrl) {
  fullscreenImage.value = imageUrl
  isFullscreen.value = true
}

function closeFullscreen() {
  isFullscreen.value = false
}


const productName = (value) => {
    return value
        .replaceAll('-', ' ')                   // Replace hyphens with spaces
        .split(' ')                             // Split into words
        .map(word => word.charAt(0).toUpperCase() + word.slice(1)) // Capitalize each word
        .join(' ')
}


const slideTo = (nextSlide) => (currentSlide.value = nextSlide)



const images = Array.from({ length: 10 }, (_, index) => ({
  id: index + 1,
  url: `https://picsum.photos/seed/${Math.random()}/800/600`,
}))


</script>


<style scoped>

.no-tailwind * {
  all: revert;
}
.fade-zoom-enter-active,
.fade-zoom-leave-active {
  transition: opacity 0.3s ease, transform 0.3s ease;
}

.fade-zoom-enter-from {
  opacity: 0;
  transform: scale(0.9);
}

.fade-zoom-enter-to {
  opacity: 1;
  transform: scale(1);
}

.fade-zoom-leave-from {
  opacity: 1;
  transform: scale(1);
}

.fade-zoom-leave-to {
  opacity: 0;
  transform: scale(0.9);
}
</style>