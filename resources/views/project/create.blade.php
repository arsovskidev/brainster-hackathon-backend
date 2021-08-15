<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create project') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Validation Errors -->

                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('project.store') }}" enctype="multipart/form-data">
                        @csrf

                        <!-- Title -->
                        <div>
                            <x-label for="title" :value="__('Title')" />

                            <x-input id="title" class="block mt-1 w-full" type="text" name="title"
                                value="{{ old('title') }}" required autofocus />
                        </div>

                        <!--  Year Founded -->
                        <div class="mt-4">
                            <x-label for="year" :value="__('Year')" />

                            <x-input id="year" class="block mt-1 w-full" type="number" name="year"
                                value="{{ old('year') }}" required />
                        </div>

                        <!--  Description -->
                        <div class="mt-4">
                            <x-label for="description" :value="__('Description')" />

                            <x-input id="description" class="block mt-1 w-full" type="text" name="description"
                                value="{{ old('description') }}" required />
                        </div>

                        <!--  Content -->
                        <div class="mt-4">
                            <x-label for="content" :value="__('Content')" />

                            <x-input id="content" class="block mt-1 w-full" type="text" name="content"
                                value="{{ old('content') }}" required />
                        </div>

                        <!--  Location -->
                        <div class="mt-4">
                            <x-label for="location" :value="__('Location')" />

                            <x-input id="location" class="block mt-1 w-full" type="text" name="location"
                                value="{{ old('location') }}" required />
                        </div>


                        <!--  Image_first -->
                        <div class="mt-4">
                            <x-label for="image_first" :value="__('Image first')" />

                            <input type="file" name="image_first" class="block mt-1 w-full" required>
                        </div>

                        <!--  Image_second -->
                        <div class="mt-4">
                            <x-label for="image_second" :value="__('Image second')" />

                            <input type="file" name="image_second" class="block mt-1 w-full" required>
                        </div>

                        <!--  Image_third -->
                        <div class="mt-4">
                            <x-label for="image_third" :value="__('Image third')" />

                            <input type="file" name="image_third" class="block mt-1 w-full" required>
                        </div>

                        <!--  Image_fourth -->
                        <div class="mt-4">
                            <x-label for="image_fourth" :value="__('Image fourth')" />

                            <input type="file" name="image_fourth" class="block mt-1 w-full" required>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('Save') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <x-slot name="script">

    </x-slot>
</x-app-layout>
