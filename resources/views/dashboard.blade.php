<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} ({{Auth::user()->name}})
        </h2>
    </x-slot>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <style>
        .container{
            margin:auto;
        }
        .userForm{
            padding-left: 200px;
        }

        table, tr, td{
            border: 1px solid #232023;
            border-collapse: collapse;
        }
        tr, td{
            background: #f9f9f9;
            text-align: center;
            width: 200px;
            max-width: 200px;
        }
        .danger-text {
            color: red;
            font-weight: bold;
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

        .alert-danger {
        color: #721c24;
        background-color: #f8d7da;
        border-color: #f5c6cb;
        padding: 0.75rem 1.25rem;
        border-radius: 0.25rem;
        }

        .alert-danger strong {
        font-weight: bold;
        }

        .alert-danger p {
        margin-bottom: 0;
        }

        span.required {
        color: red;
        }

        .full-width-input {
        width: 100%;
        }
    </style>

    <div class="container">
        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">
                    {{$error}}
                </div>
            @endforeach
        @endif
    </div>

    <div class="middle">
        <h1 class="title">CLIENT INFORMATION FORM</h1>
    </div>

    <div class="container">
        <br><br>
        <form action="{{ url('upload_post')}}" method="POST" enctype="multipart/form-data" class="userForm">
            @csrf
            <div>
                <label>Name<span class="required">*</span></label><br>
                <input type="text" name="name" class="full-width-input">
            </div>
            <br><br>
            <div>
                <div>
                    <h2>This is Current Cases that are available in database</h2>
                    <br>
                    <table style="width:80%">
                        <tr style="font-weight:bold">
                            <th>ID Case</th>
                            <th>Case</th>
                            <th>Case Parent_ID</th>
                        </tr>
                        @foreach($post as $posts)
                            <tr>
                                <td>{{$posts->id}}</td>
                                <td>{{$posts->client_case}}</td>
                                <td>{{$posts->parent_id}}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <br>
                <p class="danger-text">NOTE : If the client case is already in the table above, just enter the id number of the first case availabe for parent id.</p>
                <br>
            </div>
            <div>
                <label>Parent_ID</label>
                <select name="parent_id">
                    <option value="">Select parent_id for the case</option>
                    @foreach($post as $post)
                        <option value="{{$post->id}}">{{$post->id}}</option>
                    @endforeach
                 </select>
            </div>
            <br>
            <div>
            <label>Case<span class="required">*</span></label><br>
                <input type="text" name="client_case" class="full-width-input">
            </div>
            <br><br>
            <div>
                <label>Description<span class="required">*</span></label><br>
                <input type="text" name="description" class="full-width-input">
            </div>
            <br><br>
            <div>
                <label>Document</label>
                <input type="file" name="document">
            </div>
            <br><br>
            <div>
                <label>Upload a Image</label>
                <input type="file" name="image">
            </div>
            <br><br>
            <div style="display:flex; justify-content: center; padding-bottom: 20px;">
                <input type="submit" value="Submit" style="background: #d7ba89; cursor: pointer; padding: 10px; border-radius: 10px" >
            </div>
        </form>
    </div>

</x-app-layout>
