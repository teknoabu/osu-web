{{--
    Copyright 2015-2017 ppy Pty. Ltd.

    This file is part of osu!web. osu!web is distributed with the hope of
    attracting more community contributions to the core ecosystem of osu!.

    osu!web is free software: you can redistribute it and/or modify
    it under the terms of the Affero GNU General Public License version 3
    as published by the Free Software Foundation.

    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
    See the GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
--}}
@extends('master')

@section('content')
    <div class="osu-layout__row osu-layout__row--page">
        <div>
            <h3>{{ trans('beatmapset_events.index.title') }}</h3>
            <div class='beatmapset-events'>
                <div class='beatmapset-events__title'></div>
                @foreach ($events as $event)
                    @include('beatmapset_events._item', compact('event'))
                @endforeach
            </div>
            @include('forum._pagination', ['object' => $events])
        </div>
    </div>
@endsection
