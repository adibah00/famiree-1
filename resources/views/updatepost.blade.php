<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <style>
            .middle{
                text-align:center;
                margin-bottom:50px;
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

            .full-width-input {
                width: 100%;
            }

            .imgcl{
                display: block;
                margin-left: auto;
                margin-right: auto;
                border-radius: 10%;
                border: 2px solid blue;
                height:400px;
                width:400px;
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
        <h1 class="title">UPDATE CLIENT INFORMATION FORM</h1>
    </div>

        <div style="padding: 30px;">
            <form action="{{url('confirm_update', $data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="middle">
                    <label>Current Image</label><br><br>
                    <img src="/post/{{$data->image}}" class="imgcl">
                </div>
                <br>
                <div class="middle">
                    <label >Change Image</label>
                    <input type="file" name="image">
                </div>
                <br>
                <div>
                    <label>Name</label>
                    <input type="text" name="name" value="{{$data->name}}" class="full-width-input">
                </div>
                <br>
                <div>
                    <label>Case</label>
                    <input type="text" name="client_case" value="{{$data->client_case}}" class="full-width-input">
                </div>
                <br>
                <div>
                    <label>Document</label><br>
                    <input type="file" name="document">
                </div>
                <br>
                <div>
                    <label>Post Description</label>
                    <input type="text" name="description" value="{{$data->description}}" class="full-width-input">
                </div>
                <div style="display:flex; justify-content: center; padding-bottom: 20px; padding-top: 20px;">
                    <input type="submit" value="Update Post" style="background: #d7ba89; cursor: pointer; padding: 10px; border-radius: 10px">
                </div>
            </form>
        </div>
    </body>
</html>