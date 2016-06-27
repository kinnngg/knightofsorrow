@extends('layouts.main')
@section('title', 'Admins List')
@section('styles')
    <style>
        .text-sa
        {
            color: #009688 !important;
        }
    </style>
    @endsection
@section('main-container')
    <div class="content col-md-9">
        <div class="row">
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">List of Admin</div>
                    <div class="panel-body">
                        <table class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <td class="col-md-4 col-xs-4">Name</td>
                                <td class="col-md-4 col-xs-4">Rank</td>
                                <td class="col-md-3 col-xs-3">Last Seen</td>
                            </tr>
                            </thead>
                            @foreach($roles as $role)
                                @foreach($role->users as $user)
                                    <tr>

                                        <td class="color-main text-bold">
                                            <a class="
                                            @if($user->isSuperAdmin())
                                                    {{ 'text-sa' }}
                                            @elseif($user->isAdmin())
                                                    {{ 'text-green' }}
                                            @endif
                                            " style="margin-right:1em" href="{{ route('user.show',$user->username) }}">
                                                <strong class="">{{ $user->displayName() }}</strong>
                                            </a>
                                        </td>
                                        <td>
                                            {{ $user->roles()->first()->display_name }}
                                        </td>
                                        <td>
                                            {{ $user->updated_at->diffForHumans() }}
                                        </td>
                                    </tr>
                                @endforeach
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection