<head>
    <link rel="stylesheet" href="../../../css/corporate-info-index.css">
</head>
<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <p>企業情報</p><br>

                   @if($corporate_info===null)
                   <a href="{{route('corporate.corporate-info-register')}}">企業を新規登録する</a>
                   @endif
                   <div class="profModalWrapper">
                    <img src="" class="profModalImage">
                   </div>
                   <img src="{{asset($corporate_info->path)}}" class="profImage"><br><br>

                   創業年月：{{$corporate_info->founded}}<br><br>
                   本社-都市：{{$corporate_info->headquarters_city}}<br><br>
                   シリーズ：{{$corporate_info->series}}<br><br>
                   ミッション-タイトル：{{$corporate_info->mission_title}}<br><br>
                   ミッション-内容：{{$corporate_info->mission_content}}<br><br>
                   プロダクト名：{{$corporate_info->product_name}}<br><br>
                   プロダクト内容：{{$corporate_info->product_content}}<br><br>
                   タグ：{{$corporate_info->tag}}<br><br>


                   <h1>開発環境</h1><br>
                   開発言語：{{$corporate_info->development_language}}<br><br>
                   フレームワーク：{{$corporate_info->development_framework}}<br><br>
                   データベース：{{$corporate_info->development_database}}<br><br>
                   インフラ：{{$corporate_info->development_infra}}<br><br>
                   OS：{{$corporate_info->development_os}}<br><br>

                   <a href="{{route('corporate.corporate-info-edit',['id'=>$corporate_info->id])}}" style="background-color:#e5e7eb">編集する</a><br><br>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
