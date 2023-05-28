<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Dashboard') }} ({{Auth::user()->name}})
        </h2>
    </x-slot>

   <h1>Family Tree Here !!!</h1>
   <style>
            /*Now the CSS*/
            .tree ul {
            padding-left: 20px;
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

        <div>
            <ul class="tree">
                <li>
                    Parent
                    <ul>
                    <li>
                        Child 1
                        <ul>
                        <li>Grandchild 1</li>
                        <li>Grandchild 2</li>
                        </ul>
                    </li>
                    <li>
                        Child 2
                        <ul>
                        <li>Grandchild 3</li>
                        </ul>
                    </li>
                    </ul>
                </li>
            </ul>

        </div>

</x-app-layout>