@extends('layouts.candidate')

@section('content')

<div class="page">
   <div class="page-main h-100">
		<div class="app-content">
        <div class="container">
            <div class="card">
            <div class="row mt-5 ml-5">
                <div class="col-6">
                    <h2>Notification</h2>
                </div>


            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

                <table id="notificationTable" class="table table-striped table-bordered mt-5">
                        <thead>
                            <tr>
                                <th>Notifications ID</th>
                                <th>Subject</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        @foreach($notifications as $notification)
                        <?php
                            $notification_description = str_replace("<p>","",$notification->description);
                            $notification_description = str_replace("</p>","",$notification_description);
                        ?>
                        <tbody>
                            <tr>
                                <td>NOTI {{$notification->id}}</td>
                                <td>{{$notification->subject}}</td>
                                <td><a href="{{ route('candidate.notification.show',$notification->id) }}"><i class="fa fa-eye btn btn-info" title="View Notification"></i></a></td>



                            </tr>
                        </tbody>
                        @endforeach
                    </table>
            </div>
        </div>

        </div>
   </div>
</div>

@endsection