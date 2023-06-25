<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <style>
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
        </style>
    </head>
    <body>
    <x-app-layout>
    </x-app-layout>

        <div class="middle">
            <h1 class="title">UPDATE USER FORM</h1>
        </div>

        <div style="padding-left: 40%; padding-top: 10%;">
            <form action="{{url('confirm_updateUser', $data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <label>User Name</label>
                    <input type="text" name="name" value="{{$data->name}}">
                </div>
                <br>
                <div>
                    <label>User Email</label>
                    <input type="email" name="email" value="{{$data->email}}">
                </div>
                <br>
                <div>
                    <label>User Password</label>
                    <input type="password" name="password" value="{{$data->password}}">
                </div>
                <br>
                <div>
                    <input type="submit" value="Update User" style="background: #d7ba89; cursor: pointer; padding: 10px; border-radius: 10px">
                </div>
            </form>
        </div>
    </body>
</html>