<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
    </head>
    <body>
    <x-app-layout>
    </x-app-layout>
        <div style="padding-left: 40%; padding-top: 10%;">
            <form action="{{url('confirm_update', $data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <label>Post Description</label>
                    <input type="text" name="description" value="{{$data->description}}">
                </div>
                <br>
                <div>
                    <label>Current Image</label>
                    <img src="/post/{{$data->image}}" height="400px" width="400px">
                </div>
                <br>
                <div>
                    <label>Change Image</label>
                    <input type="file" name="image">
                </div>
                <br>
                <div>
                    <input type="submit" value="Update Post" style="background: #d7ba89; cursor: pointer; padding: 10px; border-radius: 10px">
                </div>
            </form>
        </div>
    </body>
</html>