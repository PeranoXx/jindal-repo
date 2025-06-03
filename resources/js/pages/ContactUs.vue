<template>
    <section>
        <div class="py-24" style="background:linear-gradient(131deg, #E8E5FE 26.82%, #FFEED8 96.89%);">
            <div class="mx-10 mt-10 lg:mx-20 lg:mt-0 gap-4 xl:w-7xl xl:mx-auto">
                <div class="flex justify-center">
                    <span class="text-4xl sm:text-6xl xl:text-6xl font-semibold mb-5 sm:mb-8 py-4 text-center max-w-sm md:max-w-lg lg:max-w-2xl xl:max-w-4xl mx-auto font-heading border-b-4 border-orange-400">Contact Us</span>
                </div>
            </div>
        </div>

        <div class="mx-10 mt-10 lg:mx-20 lg:mt-0 gap-4 xl:w-7xl xl:mx-auto">
            <div class="py-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119066.41709451063!2d72.73988483609048!3d21.15934029880327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e59411d1563%3A0xfe4558290938b042!2sSurat%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1748953403932!5m2!1sen!2sin" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <div>
            <ContactDetail />
        </div>

        <div class="bg-neutral-50 py-20">
            <div class="mx-10 mt-10 lg:mx-20 lg:mt-0 gap-4 xl:w-7xl xl:mx-auto">
                <div class="bg-white rounded-3xl py-16 md:py-20 px-4 md:px-10">
                    <div class="flex justify-center">
                        <span class="text-4xl sm:text-6xl xl:text-6xl font-semibold mb-5 sm:mb-8 py-4 text-center max-w-sm md:max-w-lg lg:max-w-2xl xl:max-w-4xl mx-auto font-heading border-b-4 border-orange-400">Leave Comment</span>
                    </div>

                    <div class="mx-auto lg:w-2/3 md:w-2/3">
                        <div class="flex flex-wrap -m-2">
                            <div class="p-2 w-1/2">
                                <div class="relative">
                                    <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                                    <input type="text" v-model="form.name" @input="errors.name = false" :class="[
                                        'w-full bg-gray-100 bg-opacity-50 rounded-md border',
                                        errors.name ? 'border-rose-500' : 'border-gray-300',
                                        'focus:border-orange-400 focus:bg-white focus:ring-2 focus:ring-orange-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out'
                                    ]" />
                                    <p v-if="errors.name" class="text-red-500 text-sm mt-1">Name is required.</p>

                                </div>
                            </div>
                            <div class="p-2 w-1/2">
                                <div class="relative">
                                    <label for="contact" class="leading-7 text-sm text-gray-600">Contact No</label>
                                    <input type="text" v-model="form.contact" @input="errors.contact = false" :class="[
                                        'w-full bg-gray-100 bg-opacity-50 rounded-md border',
                                        errors.contact ? 'border-rose-500' : 'border-gray-300',
                                        'focus:border-orange-400 focus:bg-white focus:ring-2 focus:ring-orange-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out'
                                    ]" />
                                    <p v-if="errors.contact" class="text-red-500 text-sm mt-1">Contact must be a 10-digit number.</p>
                                </div>
                            </div>
                            <div class="p-2 w-full">
                                <div class="relative">
                                    <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                                    <input type="email" v-model="form.email" @input="errors.email = false"  :class="[
                                        'w-full bg-gray-100 bg-opacity-50 rounded-md border',
                                        errors.email ? 'border-rose-500' : 'border-gray-300',
                                        'focus:border-orange-400 focus:bg-white focus:ring-2 focus:ring-orange-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out'
                                    ]" />
                                    <p v-if="errors.email" class="text-red-500 text-sm mt-1">Valid email is required.</p>
                                </div>
                            </div>
                            <div class="p-2 w-full">
                                <div class="relative">
                                    <label for="subject" class="leading-7 text-sm text-gray-600">Subject</label>
                                    <input type="text" v-model="form.subject" @input="errors.subject = false"  :class="[
                                        'w-full bg-gray-100 bg-opacity-50 rounded-md border',
                                        errors.subject ? 'border-rose-500' : 'border-gray-300',
                                        'focus:border-orange-400 focus:bg-white focus:ring-2 focus:ring-orange-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out'
                                    ]" />
                                    <p v-if="errors.subject" class="text-red-500 text-sm mt-1">Subject is required.</p>
                                </div>
                            </div>
                            <div class="p-2 w-full">
                                <div class="relative">
                                    <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                                    <textarea v-model="form.message" @input="errors.message = false"   :class="[
                                        'w-full bg-gray-100 bg-opacity-50 rounded-md border',
                                        errors.message ? 'border-rose-500' : 'border-gray-300',
                                        'focus:border-orange-400 focus:bg-white focus:ring-2 focus:ring-orange-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out'
                                    ]" />
                                    <p v-if="errors.message" class="text-red-500 text-sm mt-1">Message is required.</p>
                                </div>
                            </div>
                            <div class="p-2 w-36 float-right">
                                <button  @click="submit()" :disabled="submitting">
                                <Button>
                                    <span class="hidden lg:block md:mr-2">
                                        {{submitting ? 'Submitting...' :  'Submit' }}
                                    </span>
                                    <template #icon>
                                        <svg v-if="!submitting" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />
                                        </svg>
                                        <svg v-else  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 animate-spin">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />
                                        </svg>
                                    </template>
                                </Button>
                            </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import ContactDetail from '../components/Home/ContactDetail.vue';
import Button from '../components/Button.vue';
import { reactive, ref } from 'vue';
const submitting = ref(false)

const form = reactive({
  name: 'Parth',
  contact: '7284900122',
  email: 'peranoxx@gmail.com',
  subject: 'Test',
  message: 'Test',
});

const errors = reactive({
  name: false,
  contact: false,
  email: false,
  subject: false,
  message: false,
});

const validateEmail = (email) => {
  const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return re.test(email);
};

const validate = () => {
  errors.name = !form.name;

  const contactValid = /^\d{10}$/.test(form.contact || '');
  errors.contact = !contactValid;

  errors.email = !form.email || !validateEmail(form.email);
  errors.subject = !form.subject;
  errors.message = !form.message;

  return !Object.values(errors).includes(true);
};

const submit = () => {
  if (validate()) {
    submitting.value = true;
    setTimeout(() => {
    submitting.value = false;
    }, 5000);
    console.log('Form Submitted:', form);
    // You can proceed with actual submission here
  } else {
    console.log('Validation Failed');
  }
};
</script>