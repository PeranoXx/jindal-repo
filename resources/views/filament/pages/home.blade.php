<x-filament-panels::page>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Welcome Section -->
        <div class="col-span-full bg-white dark:bg-gray-800 rounded-xl shadow-sm p-6">
            <h2 class="text-2xl font-bold tracking-tight">
                Welcome to Jindal Dashboard
            </h2>
            <p class="mt-2 text-gray-600 dark:text-gray-400">
                Manage your content and data efficiently through this centralized dashboard.
            </p>
        </div>

        <!-- Quick Stats -->
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-primary-100 dark:bg-primary-800">
                    <x-heroicon-o-users class="w-6 h-6 text-primary-600 dark:text-primary-400" />
                </div>
                <div class="ml-4">
                    <h3 class="text-lg font-semibold">Team Members</h3>
                    <p class="text-3xl font-bold mt-1">{{\App\Models\Team::count()}}</p>
                </div>
            </div>
        </div>

        <!-- Products Stats -->
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-success-100 dark:bg-success-800">
                    <x-heroicon-o-shopping-bag class="w-6 h-6 text-success-600 dark:text-success-400" />
                </div>
                <div class="ml-4">
                    <h3 class="text-lg font-semibold">Products</h3>
                    <p class="text-3xl font-bold mt-1">{{\App\Models\Product::count()}}</p>
                </div>
            </div>
        </div>

        <!-- Categories Stats -->
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-warning-100 dark:bg-warning-800">
                    <x-heroicon-o-tag class="w-6 h-6 text-warning-600 dark:text-warning-400" />
                </div>
                <div class="ml-4">
                    <h3 class="text-lg font-semibold">Categories</h3>
                    <p class="text-3xl font-bold mt-1">{{\App\Models\Category::count()}}</p>
                </div>
            </div>
        </div>

        <!-- Recent Products -->
        <div class="col-span-full md:col-span-2 bg-white dark:bg-gray-800 rounded-xl shadow-sm p-6">
            <h3 class="text-lg font-semibold mb-4">Recent Products</h3>
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead>
                        <tr class="border-b dark:border-gray-700">
                            <th class="pb-3 font-medium">Name</th>
                            <th class="pb-3 font-medium">Category</th>
                            <th class="pb-3 font-medium">Created</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach(\App\Models\Product::with('category')->latest()->take(5)->get() as $product)
                        <tr class="border-b dark:border-gray-700">
                            <td class="py-3">{{ $product->name }}</td>
                            <td class="py-3">{{ $product->category->name }}</td>
                            <td class="py-3">{{ $product->created_at->diffForHumans() }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Recent Team Members -->
        <div class="col-span-full md:col-span-1 bg-white dark:bg-gray-800 rounded-xl shadow-sm p-6">
            <h3 class="text-lg font-semibold mb-4">Recent Team Members</h3>
            <div class="space-y-4">
                @foreach(\App\Models\Team::latest()->take(5)->get() as $member)
                <div class="flex items-center space-x-3">
                    @if($member->image)
                        <img src="{{ asset('storage/' . $member->image) }}" alt="{{ $member->name }}" class="w-10 h-10 rounded-full object-cover">
                    @else
                        <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center">
                            <x-heroicon-o-user class="w-6 h-6 text-gray-500" />
                        </div>
                    @endif
                    <div>
                        <p class="font-medium">{{ $member->name }}</p>
                        <p class="text-sm text-gray-500">Added {{ $member->created_at->diffForHumans() }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-filament-panels::page>
