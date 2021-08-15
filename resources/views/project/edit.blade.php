<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit project') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
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
                        <div class="mt-4">
                            <x-label for="description" :value="__('Description')" />

                            <x-input id="description" class="block mt-1 w-full" type="text" name="description"
                                value="{{ $project->description }}" required autofocus />
                        </div>

                        <!-- Content -->
                        <div class="mt-4">
                            <x-label for="content" :value="__('Content')" />

                            <textarea id="content" class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" name="content"
                                value="{{ old('content') }}" required />{{$project->content}}</textarea>
                        </div>

                        <!-- Location -->
                        <div class="mt-4">
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
                        <div class="flex">
                        <div class="mt-4">
                            <x-label for="image_first" :value="__('First Image')" />

                            <input type="file" name="image_first" class="block mt-1 w-full">

                            <img class="w-1/6 mt-3" src="{{ asset($project->image_first) }}" alt="">
                        </div>

                        <!--  Image_second -->
                        <div class="mt-4">
                            <x-label for="image_second" :value="__('Second Image')" />

                            <input type="file" name="image_second" class="block mt-1 w-full">

                            <img class="w-1/6 mt-3" src="{{ asset($project->image_second) }}" alt="">
                        </div>
                        </div>

                        <!--  Image_third -->
                        <div class="flex">
                        <div class="mt-4">
                            <x-label for="image_third" :value="__('Third Image')" />

                            <input type="file" name="image_third" class="block mt-1 w-full">

                            <img class="w-1/6 mt-3" src="{{ asset($project->image_third) }}" alt="">
                        </div>

                        <!--  Image_fourth -->
                        <div class="mt-4">
                            <x-label for="image_fourth" :value="__('Fourth Image')" />

                            <input type="file" name="image_fourth" class="block mt-1 w-full">

                            <img class="w-1/6 mt-3" src="{{ asset($project->image_fourth) }}" alt="">
                        </div>

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
        <script>
            $(document).ready(function() {
                $('#services').select2();
            });
        </script>
    </x-slot>
</x-app-layout>
