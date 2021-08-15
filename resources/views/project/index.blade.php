<x-app-layout>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All projects') }}
        </h2>

    </x-slot>

    <div class="py-12">
        <div class=" mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <a class="ml-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"
                        href="{{ route('project.create') }}">
                        {{ __('New project') }}</a>

                    <div class="">
                        <div class=" py-8 w-full ">
                            <div class="shadow overflow-x-scroll rounded border-b border-gray-200">
                                <table class="min-w-full bg-white ">
                                    <thead class="bg-gray-800 text-white ">
                                        <tr>
                                            <th class="w-1/10 text-left py-3 px-4 uppercase font-semibold text-sm">Title
                                            </th>
                                            <th class="w-1/10 text-left py-3 px-4 uppercase font-semibold text-sm">
                                                Content
                                            </th>
                                            <th class="w-1/10 text-left py-3 px-4 uppercase font-semibold text-sm">
                                                Description
                                            </th>
                                            <th class="w-1/10 text-left py-3 px-4 uppercase font-semibold text-sm">
                                                Location
                                            </th>
                                            <th class="w-1/10 text-left py-3 px-4 uppercase font-semibold text-sm">
                                                Year
                                            </th>
                                            <th class="w-1/10 text-left py-3 px-4 uppercase font-semibold text-sm">
                                                First image
                                            </th>
                                            <th class="w-1/10 text-left py-3 px-4 uppercase font-semibold text-sm">
                                                Second image
                                            </th>
                                            <th class="w-1/10 text-left py-3 px-4 uppercase font-semibold text-sm">
                                                Third image
                                            </th>
                                            <th class="w-1/10 text-left py-3 px-4 uppercase font-semibold text-sm">
                                                Fourth image
                                            </th>
                                            <th class="w-1/10 text-left py-3 px-4 uppercase font-semibold text-sm">

                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody class="text-gray-700 ">
                                        @foreach ($projects as $project)
                                            <tr data-id="{{ $project->id }}">
                                                <td class="w-1/10 text-left py-3 px-4">{{ $project->title }}</td>
                                                <td class="w-1/10 text-left py-3 px-4">{{ $project->content }}</td>
                                                <td class="w-1/10 text-left py-3 px-4">{{ $project->description }}
                                                </td>
                                                <td class="w-1/10 text-left py-3 px-4">{{ $project->location }}</td>
                                                <td class="w-1/10 text-left py-3 px-4">{{ $project->year }}</td>
                                                <td class="w-1/10 text-left py-3 px-4">{{ $project->image_first }}
                                                </td>
                                                <td class="w-1/10 text-left py-3 px-4">{{ $project->image_second }}
                                                </td>
                                                <td class="w-1/10 text-left py-3 px-4">{{ $project->image_third }}
                                                </td>
                                                <td class="w-1/10 text-left py-3 px-4">{{ $project->image_fourth }}
                                                </td>

                                                <td class="w-1/10 text-left py-3 px-4">

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

                                                </td>
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
