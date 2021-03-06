@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-6/12 bg-white p-6 rounded-lg">
            <form action="" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" placeholder="Your name"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>

                <div class="mb-4">
                    <label for="name" class="sr-only">Username</label>
                    <input type="text" name="username" id="username" placeholder="Your Username"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>

                <div class="mb-4">
                    <label for="name" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" placeholder="Your Email"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>

                <div class="mb-4">
                    <label for="name" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Your Password"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>

                <div class="mb-4">
                    <label for="name" class="sr-only">Repet Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Your Password again"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>

                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded
                    font-medium w-full">Register</button>
                </div>
            </form>

        </div>
    </div>
@endsection
