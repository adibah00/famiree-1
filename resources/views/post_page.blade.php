<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <!-- Latest compiled and minified CSS -->
        <style type="text/css">
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
            .doctex{
                color: blue;
                text-decoration: underline;
            }
            /* Update button */
            .update-button {
                display: inline-block;
                width: 100%;
                background-color: #007bff;
                color: #fff;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
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
                border-radius: 5px;
                cursor: pointer;
                }

                .delete-button:hover {
                background-color: #c82333;
            }
        </style>
    </head>
    <body>
    <x-app-layout>
    </x-app-layout>
        <div style="padding-left:15%; padding-top:30px;">
            <form action="{{url('/search')}}" method="get">
                <input type="search" name="search">
                <input type="submit" name="" value="Search" style="background: #d7ba89; cursor: pointer; padding: 10px; border-radius: 10px">
            </form>
            <br>
            <table style="width:80%">
                <tr>
                    <th>Name</th>
                    <th>Case</th>
                    <th>Document</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                @foreach($post as $post)
                <tr>
                    <td>{{$post->name}}</td>
                    <td>{{$post->client_case}}</td>
                    <td><a class="doctex" href="post/{{$post->document}}">View Document Here</a></td>
                    <td>{{$post->description}}</td>
                    <td><img height="400px" width="400px" src="post/{{$post->image}}"></td>
                    <td><a href="{{url('update_post', $post->id)}}" class="update-button">Update</a></td>
                    <td><a onclick="return confirm('are sure to delete this ?');" href="{{url('delete_post', $post->id)}}" class="delete-button">Delete</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    

    </body>
</html>