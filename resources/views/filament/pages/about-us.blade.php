<x-filament-panels::page>
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Main Content Section -->
        <div class="lg:col-span-2 space-y-6">
            <!-- About Us Section -->
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm p-6">
                <h2 class="text-2xl font-bold tracking-tight mb-4">
                    About Jindal
                </h2>
                <div class="prose dark:prose-invert max-w-none">
                    <p class="text-gray-600 dark:text-gray-400">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    
                    <h3 class="text-xl font-semibold mt-6 mb-3">Our Mission</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>

                    <h3 class="text-xl font-semibold mt-6 mb-3">Our Vision</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                    </p>
                </div>
            </div>

            <!-- Company Values -->
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm p-6">
                <h3 class="text-xl font-semibold mb-4">Our Values</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="p-4 bg-primary-50 dark:bg-primary-900/50 rounded-lg">
                        <div class="flex items-center mb-2">
                            <x-heroicon-o-star class="w-5 h-5 text-primary-600 dark:text-primary-400 mr-2" />
                            <h4 class="font-semibold">Excellence</h4>
                        </div>
                        <p class="text-sm text-gray-600 dark:text-gray-400">
                            Striving for excellence in everything we do.
                        </p>
                    </div>
                    <div class="p-4 bg-primary-50 dark:bg-primary-900/50 rounded-lg">
                        <div class="flex items-center mb-2">
                            <x-heroicon-o-heart class="w-5 h-5 text-primary-600 dark:text-primary-400 mr-2" />
                            <h4 class="font-semibold">Integrity</h4>
                        </div>
                        <p class="text-sm text-gray-600 dark:text-gray-400">
                            Maintaining highest standards of integrity in all our actions.
                        </p>
                    </div>
                    <div class="p-4 bg-primary-50 dark:bg-primary-900/50 rounded-lg">
                        <div class="flex items-center mb-2">
                            <x-heroicon-o-users class="w-5 h-5 text-primary-600 dark:text-primary-400 mr-2" />
                            <h4 class="font-semibold">Teamwork</h4>
                        </div>
                        <p class="text-sm text-gray-600 dark:text-gray-400">
                            Working together to achieve common goals.
                        </p>
                    </div>
                    <div class="p-4 bg-primary-50 dark:bg-primary-900/50 rounded-lg">
                        <div class="flex items-center mb-2">
                            <x-heroicon-o-light-bulb class="w-5 h-5 text-primary-600 dark:text-primary-400 mr-2" />
                            <h4 class="font-semibold">Innovation</h4>
                        </div>
                        <p class="text-sm text-gray-600 dark:text-gray-400">
                            Constantly innovating and improving our services.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar Content -->
        <div class="space-y-6">
            <!-- Contact Information -->
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm p-6">
                <h3 class="text-xl font-semibold mb-4">Contact Information</h3>
                <div class="space-y-4">
                    <div class="flex items-start">
                        <x-heroicon-o-map-pin class="w-5 h-5 text-gray-500 dark:text-gray-400 mt-1 mr-3" />
                        <div>
                            <h4 class="font-medium">Address</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                123 Business Street<br>
                                City, State 12345<br>
                                Country
                            </p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <x-heroicon-o-phone class="w-5 h-5 text-gray-500 dark:text-gray-400 mt-1 mr-3" />
                        <div>
                            <h4 class="font-medium">Phone</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                +1 (123) 456-7890
                            </p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <x-heroicon-o-envelope class="w-5 h-5 text-gray-500 dark:text-gray-400 mt-1 mr-3" />
                        <div>
                            <h4 class="font-medium">Email</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                info@yourcompany.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Stats -->
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm p-6">
                <h3 class="text-xl font-semibold mb-4">Company Stats</h3>
                <div class="space-y-4">
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600 dark:text-gray-400">Years in Business</span>
                        <span class="font-semibold">15+</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600 dark:text-gray-400">Team Members</span>
                        <span class="font-semibold">{{\App\Models\Team::count()}}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600 dark:text-gray-400">Products</span>
                        <span class="font-semibold">{{\App\Models\Product::count()}}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600 dark:text-gray-400">Categories</span>
                        <span class="font-semibold">{{\App\Models\Category::count()}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-filament-panels::page> 