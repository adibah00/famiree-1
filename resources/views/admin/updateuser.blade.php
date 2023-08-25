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

        .full-width-input {
            width: 100%;
        }

        .success-alert {
                padding: 10px;
                background-color: #dff0d8;
                color: #3c763d;
                border: 1px solid #d6e9c6;
                border-radius: 4px;
            }

            .success-alert strong {
                font-weight: bold;
            }

            .success-alert .close-btn {
                cursor: pointer;
                float: right;
                font-weight: bold;
            }

            .success-alert .close-btn:hover {
                color: #000;
            }
        </style>
    </head>
    <body>
    <x-app-layout>
    </x-app-layout>

    <div class="success-alert">
            @if(session()->has('message'))
                <div>
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    {{ session()->get('message') }}
                </div>
            @endif
    </div>

        <div class="middle">
            <h1 class="title">UPDATE USER FORM</h1>
        </div>

        <div style="padding: 40px;">
            <form action="{{url('confirm_updateUser', $data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <label>User Name</label>
                    <input type="text" name="name" value="{{$data->name}}" class="full-width-input">
                </div>
                <br>
                <div>
                    <label>User Email</label>
                    <input type="email" name="email" value="{{$data->email}}" class="full-width-input">
                </div>
                <br>
                <div>
                    <label>User Password</label>
                    <input type="password" name="password" value="{{$data->password}}" class="full-width-input">
                </div>
                <br>
                <div style="display:flex; justify-content: center; padding-bottom: 20px;">
                    <input type="submit" value="Update User" style="background: #d7ba89; cursor: pointer; padding: 10px; border-radius: 10px">
                </div>
            </form>
        </div>
    </body>
</html>