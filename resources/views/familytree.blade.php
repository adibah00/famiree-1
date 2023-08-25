<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Dashboard') }} ({{Auth::user()->name}})
        </h2>
    </x-slot>


<style>
    .tree1 {
        position: relative;
        width: 1300px;
        margin-left:50px;
    }

    .clickable-border {
        display: inline-block;
        padding: 4px 8px;
        margin-bottom:10px;
        border: 2px solid #72705b;
        border-radius: 5px;
        text-decoration: none;
        color: #000;
        position: relative;
        transition: border-color 0.3s ease, background-color 0.3s ease;
    }

    .clickable-border::before{
        content: "";
        position: absolute; 
        border-left: 1px solid #ccc;
        top: 50%; 
        left: -10px;
        width: 10px; 
        height: 2px;
        transform: translateY(-50%);
    }

    .clickable-border::after {
        content: "";
        position: absolute; 
        border-left: 1px solid #ccc;
        border-top: 5px solid transparent;
        border-bottom: 5px solid transparent;
        top: 50%; 
        right: -10px;
        width: 0; 
        height: 0;
        transform: translateY(-50%);
    }

    .child-node {
        margin-top: 10px;
        margin-left: 60px;
    }

    .clickable-border:hover {
        background-color:#ECE6D3;
    }

    .arrow {
        display:inline-block;
        width: 10px;
        height: 10px;
        border: solid black;
        border-width: 0 3px 3px 0;
        padding: 3px;
        margin-right:30px;
    }

    .right {
        transform: rotate(-45deg);
        -webkit-transform: rotate(-45deg);
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
        margin-bottom:50px;
    }

    .treeContainer{
        display: flex;
        align-items: center;
    }

    .text {
        margin-left: 30px; /* Adjust the margin as needed */
        border: 2px solid #000;
        padding: 10px;
        box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .bordered-image {
        border: 2px solid #000; /* Adjust the border width and color as needed */
    }

</style>

    <div class="middle">
        <h1 class="title">FAMILY-TREE</h1>
    </div>

    <div class="tree1">
        @foreach($treeData as $data)     
            <a href="#" class="clickable-border">
                CASE : {{$data->client_case}}
                <br>
                <div class="treeContainer">
                    <img class="bordered-image" height="100px" width="100px" src="post/{{$data->image}}">
                    <p class="text">NAME :<br>{{$data->name}}</p>
                    <p class="text">Tel. Number :<br>{{$data->notel}}</p>     
                    <p class="text">IC NUmber :<br>{{$data->icno}} </p>    
                    <p class="text"> Address :<br>{{$data->address}}</p>    
                    
                </div>
            </a>
                @foreach($data->children as $child)
                    <div class="child-node">
                    <i class="arrow right"></i><a href="#" class="clickable-border">
                        CASE: {{$child->client_case}}
                        <br>
                        <div class="treeContainer">
                            <img class="bordered-image" height="100px" width="100px" src="post/{{$child->image}}">
                            <p class="text">NAME :<br>{{$child->name}}</p>
                            <p class="text">Tel. Number :<br>{{$child->notel}}</p>     
                            <p class="text">IC NUmber :<br>{{$child->icno}}</p>     
                            <p class="text">Address :<br>{{$child->address}}</p>  
                        </div>
                    </a>
                    @foreach($child->children as $gchild)
                        <div class="child-node">
                        <i class="arrow right"></i><a href="#" class="clickable-border">
                            {{$gchild->client_case}}
                            <br>
                            <div class="treeContainer">
                            <img class="bordered-image" height="100px" width="100px" src="post/{{$gchild->image}}">
                            <p class="text">NAME :{{$gchild->name}}</p>
                            <p class="text">Tel. Number :{{$gchild->notel}}</p>
                            <p class="text">IC NUmber :{{$gchild->icno}}</p>
                            <p class="text">Address :{{$gchild->address}}</p>
                        </div>
                        </a>
                        </div>
                    @endforeach
                    </div>
                 @endforeach
                    <br>
        @endforeach
    </div>
</x-app-layout>