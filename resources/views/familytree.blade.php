<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Dashboard') }} ({{Auth::user()->name}})
        </h2>
    </x-slot>
</x-app-layout>

<style>
    .tree1 {
        position: relative;
        width: 500px;
        margin: 0 auto;
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
        margin-left: 20px;
    }

    .clickable-border:hover {
        background-color:#ECE6D3;
    }

    .arrow {
        border: solid black;
        border-width: 0 3px 3px 0;
        display: inline-block;
        padding: 3px;
        margin-right:10px;
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

</style>

    <div class="middle">
        <h1 class="title">FAMILY-TREE</h1>
    </div>

    <div class="tree1">
        @foreach ($treeData as $data)     
            <a href="#" class="clickable-border">
                CASE : {{$data->client_case}}
                <br>
                CLIENT NAME :{{$data->name}}
            </a>
                @foreach($data->children as $child)
                    <div class="child-node">
                    <i class="arrow right"></i><a href="#" class="clickable-border">
                        CASE: {{$child->client_case}}
                        <br>
                        CLIENT NAME: {{$child->name}}
                    </a>
                    @foreach($child->children as $gchild)
                        <div class="child-node">
                        <i class="arrow right"></i><a href="#" class="clickable-border">
                            {{$gchild->client_case}}
                            <br>
                            {{$gchild->name}}
                        </a>
                        </div>
                    @endforeach
                    </div>
                 @endforeach
                    <br>
        @endforeach
    </div>

