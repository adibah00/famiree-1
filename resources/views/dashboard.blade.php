<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} ({{Auth::user()->name}})
        </h2>
    </x-slot>

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
    </style>

    <div class="container">
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
                <label>Case</label>
                <input type="text" name="client_case">
            </div>
            <br><br>
            <div>
                <label>Parent_ID</label>
                <select name="parent_id">
                    <option value="">Select parent_id for the case</option>
                    @foreach($post as $post)
                        <option value="{{$post->id}}">{{$post->id}}</option>
                    @endforeach
                 </select>
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
            <div style="display:flex; justify-content: center; padding-bottom: 20px;">
                <input type="submit" value="Submit" style="background: #d7ba89; cursor: pointer; padding: 10px; border-radius: 10px" >
            </div>
        </form>
    </div>

</x-app-layout>
