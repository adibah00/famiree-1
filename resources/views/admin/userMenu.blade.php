<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }} ({{Auth::user()->name}})
        </h2>
    </x-slot>

    <style>
        body{
            background-color: #ECF0F1;
        }

        form{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
            margin: 10px auto;
        }

        label {
            margin-bottom: 10px;
        }

        .title {
            font-family: "Arial", sans-serif;
            font-size: 24px;
            font-weight: bold;
            color: #333;
            text-transform: uppercase;
            text-decoration: underline;
            letter-spacing: 2px;
        }

        .middle{
            text-align:center;
        }

        span.required {
        color: red;
        }

        .full-width-input{
            width:100%;
        }
    </style>

    <div>
        <div class="middle">
            <h1 class="title">REGISTER USER</h1>
        </div>
        <form action="{{url('/addUser')}}" method="POST">
            @csrf
            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Name<span class="required">*</span></label>
                <input type="text" name="name" required="" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <br>
            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Email<span class="required">*</span></label>
                <input type="email" name="email" required="" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <br>
            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Password<span class="required">*</span></label>
                <input type="password" name="password" required="" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <br>
            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Role<span class="required">*</span></label>
                <select name="dropdown">
                    <option value="admin">Admin</option>
                    <option value="user">Staff</option>
                </select>
            </div>
            <br>
            <div>
                <input type="submit" value="Submit" style="background: #d7ba89; cursor: pointer; padding: 10px; border-radius: 10px">
            </div>
        </form>
    </div>

</x-app-layout>