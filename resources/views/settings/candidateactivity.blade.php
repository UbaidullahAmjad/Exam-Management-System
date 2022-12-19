@extends('layouts.app')


@section('content')

<div class="page">
   <div class="page-main h-100">
		<div class="app-content">
        <div class="container">
        <div class="card">
        <div class="row mt-5 mb-5">
                <div class="col-6">
                    <h3>Settings</h3>
                </div>
                <div class="col-6">
                    <a href="{{ route('setting.candidateactivity') }}"><i class="fa fa-users settings_icons candidate float-right"></i></a>
                </div>
        </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
                <h3>Candidates Activity</h3>
        <!-- <div class="row mt-5 mb-5">
                <div class="col-1">
                    <button>Today</button>
                </div>
                <div class="col-1">
                    <button>7 Days</button>
                </div>
                <div class="col-1">
                    <button>30 Days</button>
                </div>
                <div class="col-1">
                    <button>All Activity</button>
                </div>
        </div> -->
                <table id="examTable" class="table table-striped table-bordered mt-5">
                        <thead>
                            <tr>
                                <th>Candidate</th>
                                <th>Activity</th>
                                <th>IP Address</th>
                                <th>Date</th>

                            </tr>
                        </thead>
                        @foreach($candidates_activities as $candidates_activity)
                        <tbody>
                            <tr>
                                <td>{{ $candidates_activity->candidate }}</td>
                                <td>{{ $candidates_activity->activity }}</td>
                                <td>{{ $candidates_activity->ip_address }}</td>
                                <td>{{ $candidates_activity->date }}</td>

                            </tr>
                        </tbody>
                        @endforeach
                    </table>
        </div>
        </div>
        
        {{ $candidates_activities->links() }}

        </div>
   </div>
</div>





@endsection