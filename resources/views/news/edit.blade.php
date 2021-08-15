<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit article') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('news.update', $article->id) }}">
                        @csrf


                        <!-- Title -->
                        <div>
                            <x-label for="title" :value="__('Title')" />

                            <x-input id="title" class="block mt-1 w-full" type="text" name="title"
                                value="{{ $article->title }}" required autofocus />
                        </div>

                        <!-- date -->
                        <div>
                            <x-label for="date" :value="__('Date')" />

                            <x-input id="date" class="block mt-1 w-full" type="date" name="date"
                                value="{{ $article->date }}" required autofocus />
                        </div>

                        <!-- Content -->
                        <div>
                            <x-label for="content" :value="__('Content')" />

                            <x-input id="content" class="block mt-1 w-full" type="text" name="content"
                                value="{{ $article->content }}" required autofocus />
                        </div>

                        <!-- Image -->
                        <div>
                            <x-label for="image" :value="__('Image')" />

                            <x-input id="image" class="block mt-1 w-full" type="text" name="image"
                                value="{{ $article->image }}" required autofocus />
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
