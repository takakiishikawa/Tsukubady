<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <p>求人情報</p><br>
                   <a href="{{route('corporate.job-info-register')}}">求人を新規登録する</a><br><br>

                   @foreach ($job_infos as $job_info)
                   <li>
                        <div>職種：{{$job_info->job_type}}</div><br>
                        <div>役職：{{$job_info->position}}</div><br>
                        <div>仕事内容：{{$job_info->job_description}}</div><br>
                        <a href="{{route('corporate.job-info-edit',['id'=>$job_info->id])}}">編集する</a>
                    </li><br><br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
