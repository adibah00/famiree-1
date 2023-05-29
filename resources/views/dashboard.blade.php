<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} ({{Auth::user()->name}})
        </h2>
    </x-slot>

    <style>
        .userForm{
            padding-left: 200px;
        }
    </style>

    <div >
        <label style="padding-left:20%; font-size: 20px; font-weight: bold;">Add a Post</label>
        <br><br>
        <form action="{{ url('upload_post')}}" method="POST" enctype="multipart/form-data" class="userForm">
            @csrf
            <div>
                <label>Name</label>
                <input type="text" name="name">
            </div>
            <br><br>
            <div>
                <label>Case</label>
                <input type="text" name="client_case">
            </div>
            <br><br>
            <div>
                <label>Document</label>
                <input type="file" name="document">
            </div>
            <br><br>
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
                <input type="submit" value="Submit" style="background: #d7ba89; cursor: pointer; padding: 10px; border-radius: 10px" >
            </div>
        </form>
        <br>
        <form action="{{url('view_post')}}" method="GET">
            @csrf
            <div style="padding-left: 200px; padding-bottom: 20px;">
                <input type="submit" value="view my post" style="background: #d7ba89; cursor: pointer; padding: 10px; border-radius: 10px" >
            </div>
        </form>
    </div>

</x-app-layout>
