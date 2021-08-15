<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Messages') }}
        </h2>
    </x-slot>
    <div class="w-full md:flex mb-5">
        <div
            class="w-full md:w-1/3 md:max-w-none bg-white px-8 md:px-10 py-8 md:py-10 mb-3 mx-auto md:my-6 rounded-md shadow-lg shadow-gray-600 md:flex md:flex-col h-full">
            <div class="w-full flex-grow">
                <h2 class="text-center font-bold uppercase mb-4">GENERAL</h2>
                @if ($general->isEmpty())
                    <p class="text-center mb-2 text-xl text-gray-700">No messages yet.</p>
                @else
                    @foreach ($general as $message)
                        <div
                            class="rounded-lg shadow-lg shadow-gray-600 bg-yellow-400 my-5 border-4 border-gray-300 border-opacity-45">
                            <div class=" p-2">
                                <p class="text-center mb-2 text-xl text-gray-700"><span class="font-bold">From:</span>
                                    {{ $message->first_name . ' ' . $message->last_name }} </p>
                            </div>
                            <div class="p-2 border-t-4 border-gray-300 border-opacity-45">
                                <p class="text-center mb-2 text-gray-700"><span class="font-bold">Email:</span>
                                    {{ $message->email }}</p>
                                <p class="text-center mb-2 text-gray-700"><span class="font-bold">Phone:</span>
                                    {{ $message->phone }}</p>
                            </div>
                            <div class="p-2 border-t-4 border-gray-300 border-opacity-45">
                                <p class="text-center mb-2 text-xl text-gray-700">
                                    <span class="font-bold">Message:</span><br> {{ $message->message }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        <div
            class="w-full md:w-1/3 md:max-w-none bg-white px-8 md:px-10 py-8 md:py-10 mb-3 mx-auto md:my-6 rounded-md shadow-lg shadow-gray-600 md:flex md:flex-col h-full">
            <div class="w-full flex-grow">
                <h2 class="text-center font-bold uppercase mb-4">PROJECTS</h2>
                @if ($projects->isEmpty())
                    <p class="text-center mb-2 text-xl text-gray-700">No messages yet.</p>
                @else
                    @foreach ($projects as $message)
                        <div
                            class="rounded-lg shadow-lg shadow-gray-600 bg-yellow-400 my-5 border-4 border-gray-300 border-opacity-45">
                            <div class=" p-2">
                                <p class="text-center mb-2 text-xl text-gray-700"><span class="font-bold">From:</span>
                                    {{ $message->first_name . ' ' . $message->last_name }} </p>
                            </div>
                            <div class="p-2 border-t-4 border-gray-300 border-opacity-45">
                                <p class="text-center mb-2 text-gray-700"><span class="font-bold">Email:</span>
                                    {{ $message->email }}</p>
                                <p class="text-center mb-2 text-gray-700"><span class="font-bold">Phone:</span>
                                    {{ $message->phone }}</p>
                            </div>
                            <div class="p-2 border-t-4 border-gray-300 border-opacity-45 text-center">
                                <a href='{{ asset($message->scheme) }}' download
                                    class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center mb-2">
                                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z" />
                                    </svg>
                                    <span>Download</span>
                                </a>
                                <p class="text-center mb-2 text-xl text-gray-700">
                                    <span class="font-bold">Location:</span><br> {{ $message->location }}
                                </p>
                            </div>
                            <div class="p-2 border-t-4 border-gray-300 border-opacity-45">
                                <p class="text-center mb-2 text-xl text-gray-700">
                                    <span class="font-bold">Message:</span><br> {{ $message->message }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>


</x-app-layout>
