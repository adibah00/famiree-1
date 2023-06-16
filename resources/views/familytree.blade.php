<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Dashboard') }} ({{Auth::user()->name}})
        </h2>
    </x-slot>
</x-app-layout>
   <style>
            /*Now the CSS*/

            .container {
                padding-top:200px;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                margin: auto;
            }

            .tree ul {
            padding-left: 50px;
            position: relative;
            }

            .tree ul:before {
            content: '';
            display: block;
            border-left: 1px solid #ccc;
            height: 100%;
            left: 10px;
            position: absolute;
            }

            .tree li {
            list-style-type: none;
            margin: 0;
            padding: 10px 0;
            position: relative;
            }

            .tree li:before {
            content: '';
            display: block;
            border-top: 1px solid #ccc;
            height: 20px;
            left: -20px;
            position: absolute;
            top: 10px;
            width: 20px;
            }

            .tree a {
            color: #333;
            text-decoration: none;
            }

            .tree a:hover {
            text-decoration: underline;
            }

            .tree li a:before {
            border-left: 1px solid #ccc;
            border-bottom: 1px solid #ccc;
            content: '';
            height: 10px;
            left: -20px;
            position: absolute;
            top: 10px;
            width: 20px;
            }

            .tree li:first-child:before {
            border: none;
            }

            .tree li:last-child:before {
            border-left: 1px solid #ccc;
            border-bottom: none;
            height: 30px;
            top: 0;
            }

        </style>

        <div class="container">
            <div>
            <!-- Render the tree visualization -->
                <ul>
                    @foreach($treeData as $node)
                        <li>
                            {{ $node->client_case }}
                            @if($node->children->isNotEmpty())
                                <ul>
                                    @foreach($node->children as $child)
                                        <li>
                                            {{ $child->client_case }}
                                            @if($child->children->isNotEmpty())
                                                <ul>
                                                    @foreach($child->children as $grandchild)
                                                        <li>
                                                            {{ $grandchild->client_case }}
                                                            <!-- Add more nested loops for deeper levels if needed -->
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

