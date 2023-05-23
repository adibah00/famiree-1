<x-app-layout>
    <!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div> -->
    <div style="padding-left:40%; padding-top: 10%;">

        <form action="{{url('view_post')}}" method="GET">
            @csrf
            <div style="padding-left: 140px; padding-bottom: 20px;">
                <input type="submit" value="view my post" style="background: #d7ba89; cursor: pointer; padding: 10px; border-radius: 10px">
            </div>
        </form>
        <label style="padding-left:20%; font-size: 20px; font-weight: bold;">Add a Post</label>
        <br><br>
        <form action="{{ url('upload_post')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Description</label>
                <input type="text" name="description">
            </div>
            <br><br>
            <div>
                <label>Upload a Image</label>
                <input type="file" name="image">
            </div>
            <br><br>
            <div>
                <input type="submit" value="Submit" style="background: #d7ba89; cursor: pointer; padding: 10px; border-radius: 10px">
            </div>
        </form>
    </div>
</x-app-layout>
