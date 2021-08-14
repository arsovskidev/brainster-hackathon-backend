<x-app-layout>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All projects') }}
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <a class="ml-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"
                        href="{{ route('project.create') }}">
                        {{ __('New project') }}</a>

                    <div class="">
                        <div class="">
                            <div class="shadow overflow-hidden rounded border-b border-gray-200">
                                <table class="min-w-full bg-white">

                                    <tbody class="text-gray-700">
                                        @foreach ($projects as $project)
                                            <tr data-id="{{ $project->id }}">
                                                <div class="container mx-auto px-4">

                                                    <section class="py-4 px-4">
                                                        <div class="flex flex-wrap -mx-2">

                                                            <div class="md:w-1/3 h-auto px-2">

                                                                <div class="mb-2"><img class="rounded shadow-md"
                                                                        src="{{ $project->image_first }}" alt="">
                                                                </div>
                                                                <div class="mb-2"><img class="rounded shadow-md"
                                                                        src="{{ $project->image_second }}" alt="">
                                                                </div>
                                                                <div><img class="rounded shadow-md"
                                                                        src="{{ $project->image_third }}" alt="">
                                                                </div>
                                                            </div>

                                                            <div class="hidden md:block md:w-2/3 px-2">
                                                                <div class="h-full w-full bg-cover rounded shadow-md"
                                                                    style="background-image: url('{{ $project->image_fourth }}')">
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </section>


                                                </div>

                                                <h2
                                                    class="text-5xl font-bold leading-normal mt-0  px-6 mb-2 text-black-800">
                                                    {{ $project->title }}
                                                </h2>

                                                <h2
                                                    class="text-3xl font-normal leading-normal mt-0 mb-2 px-6  text-black-800">
                                                    {{ $project->location }} ,
                                                    {{ $project->year }}</h2>

                                                <h2
                                                    class="text-xl font-normal leading-normal mt-0 mb-2 px-6  text-black-800">
                                                    {{ $project->description }} ,
                                                </h2>

                                                <h2
                                                    class="text-xl font-normal leading-normal mt-0 mb-2 px-6  text-black-800">
                                                    {{ $project->content }} ,
                                                </h2>

                                                <div class="mx-5  px-5">
                                                    <div class="my-2">

                                                        <a href="{{ route('project.edit', $project->id) }}"
                                                            class="ml-4 inline-flex items-center px-2 py-1 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"
                                                            type="submit">Edit</a>

                                                    </div>
                                                    <form action="{{ route('project.destroy', $project->id) }}"
                                                        method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button
                                                            class="ml-4 inline-flex items-center px-2 py-1 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"
                                                            type="submit">Delete</button>
                                                    </form>


                                                </div>


                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
