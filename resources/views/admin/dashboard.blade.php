<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }} ({{Auth::user()->name}})
        </h2>
    </x-slot>

    <!DOCTYPE html>
        <html>
            <head>
            <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title></title>
                <!-- Latest compiled and minified CSS -->
                <style type="text/css">
                    body{
                        background-color: #ECF0F1;
                    }
                    table, tr, td{
                        border: 1px solid #232023;
                        border-collapse: collapse;
                    }
                    tr, td{
                        background: #f9f9f9;
                        text-align: center;
                    }
                    /* Update button */
                        .update-button {
                        display: inline-block;
                        width: 100%;
                        background-color: #007bff;
                        color: #fff;
                        padding: 10px 20px;
                        border: none;
                        border-radius: 4px;
                        cursor: pointer;
                        }

                        .update-button:hover {
                        background-color: #0056b3;
                        }

                        /* Delete button */
                        .delete-button {
                        display: inline-block;
                        width: 100%;
                        background-color: #dc3545;
                        color: #fff;
                        padding: 10px 20px;
                        border: none;
                        border-radius: 4px;
                        cursor: pointer;
                        }

                        .delete-button:hover {
                        background-color: #c82333;
                        }
                </style>
            </head>
                <div style="padding-left:15%; padding-top:30px;">
                    <table style="width:80%">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                       @foreach($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->password}}</td>
                            <td><a href="{{url('update_user', $user->id)}}" class="update-button">Update</a></td>
                            <td><a onclick="return confirm('are sure to delete this ?');" href="{{url('delete_user', $user->id)}}" class="delete-button">Delete</a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            

            </body>
        </html>

</x-app-layout>
