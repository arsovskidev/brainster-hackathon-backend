<x-app-layout>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All news') }}
        </h2>

    </x-slot>

    <div class="py-12">
        <div class=" mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <a class="ml-4 inline-flex items-center px-4 py-2 bg-gray-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"
                        href="{{ route('news.create') }}">
                        {{ __('New article') }}</a>

                    <div class="">
                        <div class="md:px-32 py-8 w-full">
                            <div class="shadow overflow-x-scroll rounded border-b border-gray-200">
                                <table class="min-w-full bg-white">
                                    <thead class="bg-gray-700 text-white">
                                        <tr>
                                            <th class="w-1/5 text-center py-3 px-4 uppercase font-semibold text-sm">
                                                Title
                                            </th>
                                            <th class="w-1/5 text-center py-3 px-4 uppercase font-semibold text-sm">
                                                Date
                                            </th>
                                            <th class="w-1/5 text-center py-3 px-4 uppercase font-semibold text-sm">
                                                Content
                                            </th>
                                            <th class="w-1/5 text-center py-3 px-4 uppercase font-semibold text-sm">
                                                Image
                                            </th>

                                            <th class="w-1/5 text-center py-3 px-4 uppercase font-semibold text-sm">
                                                Actions
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody class="text-gray-700">
                                        @foreach ($news as $article)
                                            <tr data-id="{{ $article->id }}">
                                                <td class="w-1/10 text-center py-3 px-4">{{ $article->title }}</td>
                                                <td class="w-1/10 text-center py-3 px-4">{{ $article->date }}</td>
                                                <td class="w-1/10 text-center py-3 px-4">{{ $article->content }}
                                                </td>
                                                <td class="w-1/10 text-center py-3 px-4">
                                                    <img class="img-thumbnail" style="height: 110px"
                                                        src="{{ asset($article->image) }}" alt="">
                                                </td>


                                                <td class="w-1/10 text-center py-3 px-4">

                                                    <div class="mx-5  px-5">
                                                        <div class="my-2">
                                                            <a href="{{ route('news.edit', $article->id) }}"
                                                                class="ml-4 inline-flex items-center px-2 py-1 bg-gray-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"
                                                                type="submit">Edit</a>
                                                        </div>
                                                        <form action="{{ route('news.destroy', $article->id) }}"
                                                            method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button
                                                                class="ml-4 inline-flex items-center px-2 py-1 bg-gray-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"
                                                                type="submit">Delete</button>
                                                        </form>


                                                    </div>

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @if ($news->isEmpty())
                                    <p class="text-center pt-3 text-xl text-gray-700">No articles yet.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-slot name="script">

    </x-slot>
</x-app-layout>
