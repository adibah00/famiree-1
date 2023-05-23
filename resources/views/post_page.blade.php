<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <style type="text/css">
            table, tr, td{
                border: 1px solid #7d1128;
                border-collapse: collapse;
            }
            tr, td{
                background: #f7e7ce;
                text-align: center;
            }
        </style>
    </head>
    <body>
    <x-app-layout>
    </x-app-layout>
        <div style="padding-left:15%; padding-top:30px;">
            <table style="width:80%">
                <tr>
                    <th>Post Description</th>
                    <th>Image</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                @foreach($post as $post)
                <tr>
                    <td>{{$post->description}}</td>
                    <td><img height="400px" width="400px" src="post/{{$post->image}}"></td>
                    <td><a href="{{url('update_post', $post->id)}}" class="btn btn-primary">Update</a></td>
                    <td><a onclick="return confirm('are sure to delete this ?');" href="{{url('delete_post', $post->id)}}" class="btn btn-danger">Delete</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    

    </body>
</html>