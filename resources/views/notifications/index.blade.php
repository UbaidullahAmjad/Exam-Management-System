@extends('layouts.app')

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
                <div class="col-6 mb-5">
                    <a href="{{ route('notification.create') }}" class="btn btn-success float-right"><i class="fa fa-plus"></i> Add Notification</a>
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
                                <th>Description</th>
                                <th>All Active</th>
                                <th>Email Notification</th>
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
                                <td>{{$notification_description}}</td>
                                <td>{{$notification->all_active}}</td>
                                <td>{{$notification->email_notification}}</td>
                                <td>
                                <a href="{{ route('notification.edit',$notification->id) }}"><i class="fa fa-edit btn btn-info" title="Edit Notification"></i></a>
                                <a href="{{ route('notification.destroy',$notification->id) }}"><i class="fa fa-trash btn btn-danger" title="Delete notification"></i></a>
                                </td>


                            </tr>
                        </tbody>
                        @endforeach
                    </table>
            </div>
        </div>
{{ $notifications->links() }}
        </div>
   </div>
</div>

@endsection