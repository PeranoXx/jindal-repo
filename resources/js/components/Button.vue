<template>
    <!-- <button class="px-6 py-1 shadow-md rounded hover:border-">
        <slot></slot>
    </button> -->
    <a class="xs:flex-shrink-0 group relative w-full xs:w-auto h-12 flex xs:inline-flex items-center justify-center px-5 font-bold text-gray-700 bg-white hover:border border-gray-50 hover:border-orange-400 shadow-md hover:shadow-none rounded-lg transition-all duration-300 focus:outline-none" href="#">
        <div class="absolute top-0 left-0 w-full h-full rounded-lg ring ring-gray-100 animate-pulse group-hover:ring-0 transition duration-300"></div><span class="">
            <slot></slot>
        </span>
         <span class="transform group-hover:translate-x-1 transition duration-300">
            <slot name="icon"></slot>
        </span>
    </a>
</template>