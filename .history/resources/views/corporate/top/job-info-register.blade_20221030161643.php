<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <p>求人情報登録</p><br>
                   <form action="{{route('corporate.job-info-create')}}" method="POST" class="jobInfoRegieter">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    募集職種：<input type="checkbox" name="recruitment_job" value="フロントエンドエンジニア"> フロントエンドエンジニア
                    <input type="checkbox" name="recruitment_job" value="バックエンドエンジニア"> バックエンドエンジニア
                    <input type="checkbox" name="recruitment_job" value="スマホアプリエンジニア"> スマホアプリエンジニア
                    <input type="checkbox" name="recruitment_job" value="インフラエンジニア"> インフラエンジニア
                    <input type="checkbox" name="recruitment_job" value="データエンジニア"> データエンジニア
                    <input type="checkbox" name="recruitment_job" value="データサイエンティスト"> データサイエンティスト
                    <input type="checkbox" name="recruitment_job" value="IoTエンジニア"> IoTエンジニア
                    <input type="checkbox" name="recruitment_job" value="AIエンジニア"> AIエンジニア
                    <input type="checkbox" name="recruitment_job" value="ITアーキテクト"> ITアーキテクト<br><br>

                    募集役職：<select name="recruitment_position">
                        <option value="">選択してください</option>
                        <option value="ジュニア">ジュニア</option>
                        <option value="ミドル">ミドル</option>
                        <option value="シニア">シニア</option>
                    </select><br><br>

                    仕事内容：<input type="text" name="job_content" style="width:500px;height:100px"><br><br>
                    配属先 - チーム名：<input type="text" name="team_name"><br><br>
                    配属先 - チーム人数：<input type="number" name="team_size"><br><br>
                    必須技術：<input type="text" name="must_technology"><br><br>
                    歓迎技術：<input type="text" name="better_technology"><br><br>
                    必須人物：<input type="text" name="must_personality"><br><br>
                    歓迎人物：<input type="text" name="better_personality"><br><br>
                    採用人数：<input type="number" name="hire_number"><br><br>
                    年収：<input type="number" name="annual_income"><br><br>
                    賞与回数：<input type="number" name="bonus_number"><br><br>
                    賞与実績：<input type="number" name="bonus_income"><br><br>
                    勤務地 - 都市名：<input type="text" name="work_city"><br><br>

                    <input type="submit" value="登録する" style="background-color:#e5e7eb">
                </form>
                </div>
            </div>
        </div>
    </div>
    <script src="../../../js/job-info-register.js"></script>
</x-app-layout>
