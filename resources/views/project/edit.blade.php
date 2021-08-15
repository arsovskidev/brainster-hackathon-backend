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

                    <form method="POST" action="{{ route('project.update', $project->id) }}"
                        enctype="multipart/form-data">
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

                        <!-- Services -->
                        <div class="mt-4">
                            <x-label for="services" :value="__('Services')" />
                            <select id="services" class="block mt-1 w-full" name="services[]" multiple="multiple"
                                required>
                                @foreach ($services as $service)
                                    @if ($project->services->contains($service->id))
                                        <option selected="selected" value="{{ $service->id }}">{{ $service->name }}
                                        </option>
                                    @else
                                        <option value="{{ $service->id }}">{{ $service->name }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <!--  Image_first -->
                        <div class="mt-4">
                            <x-label for="image_first" :value="__('Image first')" />

                            <input type="file" name="image_first" class="block mt-1 w-full">
                        </div>

                        <img src="{{ asset($project->image_first) }}" alt="">

                        <!--  Image_second -->
                        <div class="mt-4">
                            <x-label for="image_second" :value="__('Image second')" />

                            <input type="file" name="image_second" class="block mt-1 w-full">
                        </div>

                        <img src="{{ asset($project->image_second) }}" alt="">

                        <!--  Image_third -->
                        <div class="mt-4">
                            <x-label for="image_third" :value="__('Image third')" />

                            <input type="file" name="image_third" class="block mt-1 w-full">
                        </div>

                        <img src="{{ asset($project->image_third) }}" alt="">

                        <!--  Image_fourth -->
                        <div class="mt-4">
                            <x-label for="image_fourth" :value="__('Image fourth')" />

                            <input type="file" name="image_fourth" class="block mt-1 w-full">
                        </div>

                        <img src="{{ asset($project->image_fourth) }}" alt="">

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
        <script>
            $(document).ready(function() {
                $('#services').select2();
            });
        </script>
    </x-slot>
</x-app-layout>
