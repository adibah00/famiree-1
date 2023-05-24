<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }} ({{Auth::user()->name}})
        </h2>
    </x-slot>

    <div style="padding-left: 140px; padding-bottom: 20px;">
        <form action="{{url('/addUser')}}" method="POST">
            @csrf
            <div>
                <label>Name</label>
                <input type="text" name="name" required="">
            </div>
            <div>
                <label>Email</label>
                <input type="email" name="email" required="">
            </div>
            <div>
                <label>Password</label>
                <input type="password" name="password" required="">
            </div>
            <div>
                <input type="submit" value="Submit" style="background: #d7ba89; cursor: pointer; padding: 10px; border-radius: 10px">
            </div>
        </form>
    </div>

</x-app-layout>