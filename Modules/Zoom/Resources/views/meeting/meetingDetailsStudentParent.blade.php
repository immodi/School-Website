@extends('backEnd.master')
@section('mainContent')
<style>
    .propertiesname{
        text-transform: uppercase;
        font-weight:bold;
    }
    </style>
<section class="sms-breadcrumb mb-40 white-box">
    <div class="container-fluid">
        <div class="row justify-content-between">
            <h1>@lang('zoom::lang.virtual_class')  @lang('zoom::lang.details')</h1>
            <div class="bc-pages">
                <a href="{{route('dashboard')}}">@lang('zoom::lang.dashboard')</a>
                <a href="#">@lang('zoom::lang.virtual_class')</a>
                <a href="#">@lang('zoom::lang.details')</a>
            </div>
        </div>
    </div>
</section>


<section class="admin-visitor-area">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-md-10">
                <h3 class="mb-30"> @lang('zoom::lang.topic') : {{@$results['topic']}}</h3>
            </div>
            <div class="col-md-2 pull-right  text-right">
                @if(userPermission(557))
                    <a href="{{ route('zoom.meetings.edit', $localMeetingData->id) }}" class="primary-btn small fix-gr-bg "> <span class="ti-pencil-alt"></span> @lang('zoom::lang.edit') </a>
                @endif
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <table id="" class="display school-table school-table-style" cellspacing="0" width="100%">

                            <tr>
                                <th>#</th>
                                <th>@lang('zoom::lang.name')</th>
                                <th>@lang('zoom::lang.status')</th>
                            </tr>
                            {{--  <tr>
                                <td colspan="3">General Informations</td>
                            </tr>  --}}
                            @php $sl = 1 @endphp
                            <tr>
                                <td>{{ $sl++ }} </td> <td class="propertiesname">@lang('zoom::lang.topic')</td> <td>{{@$results['topic']}}</td>
                            </tr>
                            <tr>
                                <td>{{ $sl++ }} </td> <td class="propertiesname">@lang('zoom::lang.participants')</td> <td> {{ $localMeetingData->participatesName }}  </td>
                            </tr>
                            @if($localMeetingData->attached_file)
                                <tr>
                                    <td>{{ $sl++ }} </td> <td class="propertiesname"> @lang('zoom::lang.attached_file') </td> <td> <a href="{{ asset($localMeetingData->attached_file) }}" download="" ><i class="fa fa-download mr-1"></i> Download</a>  </td>
                                </tr>
                            @endif
                            <tr>
                                <td> {{ $sl++ }} </td> <td class="propertiesname">@lang('zoom::lang.start_date_time')</td> <td>{{ $localMeetingData->MeetingDateTime }}</td>
                            </tr>
                            <tr>
                                <td> {{ $sl++ }} </td> <td class="propertiesname">@lang('zoom::lang.meeting_id')</td> <td>{{ @$results['id'] }}</td>
                            </tr>
                            <tr>
                                <td>{{ $sl++ }} </td> <td class="propertiesname">@lang('zoom::lang.password')</td> <td>{{@$results['password']}}</td>
                            </tr>
                            @if(userPermission(559) )
                                <tr>
                                    <td>{{ $sl++ }} </td> <td class="propertiesname">@lang('zoom::lang.zoom_start_join')</td> <td>
                                        @if(@$results['status'] == 'started')
                                            <a class="primary-btn small bg-success text-white border-0" href="{{ route('zoom.meeting.join', $localMeetingData->meeting_id) }}" target="_blank" >
                                                @if (Auth::user()->role_id == 1 || Auth::user()->id == $localMeetingData->created_by)
                                                    @lang('zoom::lang.start')
                                                @else
                                                    @lang('zoom::lang.join')
                                                @endif
                                            </a>
                                        @elseif(@$results['status'] == 'waiting')
                                            <a href="#Waiting" class="primary-btn small bg-warning text-white border-0">@lang('zoom::lang.not_yet_start')</button>
                                        @else
                                            <a href="#Closed" class="primary-btn small bg-warning text-white border-0">>@lang('zoom::lang.closed')</button>
                                        @endif
                                    </td>
                                </tr>
                            @endif
                            <tr>
                                <td>{{ $sl++ }} </td> <td class="propertiesname">@lang('zoom::lang.host_id')</td> <td>{{@$results['host_id']}}</td>
                            </tr>

                            <tr>
                                <td>{{ $sl++ }} </td> <td class="propertiesname">@lang('zoom::lang.description')</td> <td> {{ $localMeetingData->description }}  </td>
                            </tr>

                            <tr>
                                <td>{{ $sl++ }} </td> <td class="propertiesname">@lang('zoom::lang.status')</td> <td>{{@$results['status']}}</td>
                            </tr>

                            <tr>
                                <td>{{ $sl++ }} </td> <td class="propertiesname">@lang('zoom::lang.timezone')</td> <td>{{@$results['timezone']}}</td>
                            </tr>

                            <tr>
                                <td>{{ $sl++ }} </td> <td class="propertiesname">@lang('zoom::lang.created_at') </td> <td>{{Carbon\Carbon::parse(@$results['created_at'])->format('m-d-Y')}}</td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
