<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Dashboard') }} ({{Auth::user()->name}})
        </h2>
    </x-slot>
</x-app-layout>
<style>
    .tree {
        display: flex;
        flex-direction: column;
    }

    .tree-node {
        margin-left: 20px;
        position: relative;
    }

    .tree-node::before {
        content: '';
        position: absolute;
        top: 0;
        left: -20px;
        width: 1px;
        height: 100%;
        background-color: #ccc;
    }

    .tree-node::after {
        content: '';
        position: absolute;
        top: 50%;
        left: -10px;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background-color: #ccc;
        transform: translateY(-50%);
    }

    .tree-node:last-child::before {
        height: 50%;
    }

    .tree-node:last-child::after {
        display: none;
    }
</style>

    <div class="tree">
        @foreach ($treeData as $data)
            <div class="tree-node">
                {{$data->id}}
                {{$data->client_case}}
                <div class="tree">
                    @foreach($data->children as $child)
                    <div class="tree-node">
                        {{$child->id}}
                        {{$child->client_case}}
                    </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>

