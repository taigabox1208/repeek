@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">INVESTIGATOR</div>
                <div class="card-body p-0">
                    <table class="table table-bordered table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th rowspan="2" style="width:5%">ID</th>
                                <th rowspan="2" style="width:15%">名前</th>
                                <th colspan="3">メイン技能</th>
                                <th colspan="3">サブ技能</th>
                                <th rowspan="2" style="width:35%">備考欄</th>
                            </tr>
                            <tr>
                                <th style="width:13%">技能名</th>
                                <th style="width:7.5%">タイプ</th>
                                <th style="width:2%">Lv</th>
                                <th style="width:13%">技能名</th>
                                <th style="width:7.5%">タイプ</th>
                                <th style="width:2%">Lv</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($investigators as $investigator)
                        <tr>
                            <td>{{ $investigator->id }}</td>
                            <td>{{ $investigator->name }}</td>
                            <td>{{ $investigator->main_weapon_key }}</td> 
                            <td>
                                {{ $investigator->getWeaponIconPath($investigator->main_weapon_type_id) }}
                            </td> 
                            <td>{{ $investigator->main_weapon_value }}</td>
                            <td>{{ $investigator->sub_weapon_key }}</td> 
                            <td>
                                {{ $investigator->getWeaponIconPath($investigator->sub_weapon_type_id) }}
                            </td> 
                            <td>{{ $investigator->sub_weapon_value }}</td>
                            <td>{{ $investigator->notes }}</td> 
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="m-auto">
                        {{ $investigators->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
