<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <p>送ったいいね一覧</p><br>
                <table>
                    <tr>
                        <th>名前</th>
                        <th>言語</th>
                        <th>年齢</th>
                        <th>住所</th>
                    </tr>
                   @foreach ($nices as $nice)
                   </tr>
                        <td>{{$nice->name}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td>{{$nice->user->engineer_info->language}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td>{{$nice->user->engineer_info->age}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td>{{$nice->user->engineer_info->address}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                   <tr>
                   @endforeach
                </table>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>受け取ったいいね一覧</p>
                 </div>
            </div>
        </div>
    </div>
</x-app-layout>
