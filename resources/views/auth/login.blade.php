@extends('layouts.app')

@section('content')
    <div class="h-full">
        <div class="flex items-center h-full py-24 bg-gray-100 ">
            <main class="w-full max-w-md p-6 mx-auto">
                <div class="bg-white border border-gray-200 shadow-sm mt-7 rounded-xl">
                    <div class="p-4 sm:p-7">
                        <div class="text-center">
                            <h1 class="block text-2xl font-bold text-gray-800">Login</h1>
                        </div>
                        <div class="mt-8">
                            <form action="/login" method="post">
                                @csrf
                                <div class="grid gap-y-6">
                                    <div>
                                        <label for="email" class="block mb-2 text-sm">Email address</label>
                                        <div class="relative">
                                            <input type="email" id="email" name="email"
                                                class="block w-full px-4 py-3 text-sm border border-gray-400 rounded-md"
                                                required aria-describedby="email-error">
                                            <div
                                                class="absolute inset-y-0 right-0 items-center hidden pr-3 pointer-events-none">
                                                <svg class="w-5 h-5 text-red-500" width="16" height="16"
                                                    fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                                    <path
                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <p class="hidden mt-2 text-xs text-red-600" id="email-error">Please include a valid
                                            email address so we can get back to you</p>
                                    </div>
                                    <div>
                                        <label for="password" class="block mb-2 text-sm">Password</label>
                                        <div class="relative">
                                            <input type="password" id="password" name="password"
                                                class="block w-full px-4 py-3 text-sm border border-gray-400 rounded-md"
                                                required aria-describedby="password-error">
                                            <div
                                                class="absolute inset-y-0 right-0 flex items-center hidden pr-3 pointer-events-none">
                                                <svg class="w-5 h-5 text-red-500" width="16" height="16"
                                                    fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                                    <path
                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <p class="hidden mt-2 text-xs text-red-600" id="password-error">8+ characters
                                            required</p>
                                    </div>
                                    <button type="submit"
                                        class="inline-flex items-center justify-center gap-2 px-4 py-3 text-sm font-semibold text-white transition-all bg-blue-500 border border-transparent rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Sign
                                        in</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
