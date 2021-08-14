<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit project') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('project.update', $project->id) }}">
                        @csrf


                        <!-- Title -->
                        <div>
                            <x-label for="title" :value="__('Title')" />

                            <x-input id="title" class="block mt-1 w-full" type="text" name="title"
                                value="{{ $project->title }}" required autofocus />
                        </div>

                        <!-- Description -->
                        <div>
                            <x-label for="description" :value="__('Description')" />

                            <x-input id="description" class="block mt-1 w-full" type="text" name="description"
                                value="{{ $project->description }}" required autofocus />
                        </div>

                        <!-- Content -->
                        <div>
                            <x-label for="content" :value="__('Content')" />

                            <x-input id="content" class="block mt-1 w-full" type="text" name="content"
                                value="{{ $project->content }}" required autofocus />
                        </div>

                        <!-- Location -->
                        <div>
                            <x-label for="location" :value="__('Location')" />

                            <x-input id="location" class="block mt-1 w-full" type="text" name="location"
                                value="{{ $project->location }}" required autofocus />
                        </div>


                        <!--  Year -->
                        <div class="mt-4">
                            <x-label for="year" :value="__('Year')" />

                            <x-input id="year" class="block mt-1 w-full" type="number" name="year"
                                value="{{ $project->year }}" required />
                        </div>


                        <!-- Image_first -->
                        <div>
                            <x-label for="image_first" :value="__('Image_first')" />

                            <x-input id="image_first" class="block mt-1 w-full" type="text" name="image_first"
                                value="{{ $project->image_first }}" required autofocus />
                        </div>


                        <!-- Image_second -->
                        <div>
                            <x-label for="image_second" :value="__('Image_second')" />

                            <x-input id="image_second" class="block mt-1 w-full" type="text" name="image_second"
                                value="{{ $project->image_second }}" required autofocus />
                        </div>


                        <!-- Image_third -->
                        <div>
                            <x-label for="image_first" :value="__('Image_third')" />

                            <x-input id="image_third" class="block mt-1 w-full" type="text" name="image_third"
                                value="{{ $project->image_third }}" required autofocus />
                        </div>


                        <!-- Image_fourth -->
                        <div>
                            <x-label for="image_fourth" :value="__('Image_fourth')" />

                            <x-input id="image_fourth" class="block mt-1 w-full" type="text" name="image_fourth"
                                value="{{ $project->image_fourth }}" required autofocus />
                        </div>



                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4" type="submit">
                                {{ __('Update') }}
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
