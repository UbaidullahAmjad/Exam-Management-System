@extends('layouts.invigilator')

@section('content')

<div class="page">
   <div class="page-main h-100">
		<div class="app-content">
            <div class="error-message">
            @if($errors->any())
            {{ implode('', $errors->all(':message')) }}
            @endif
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
				@endif
            </div>

        <div class="container">
            <div class="card">
            <h2 class="mb-5 ml-5 mt-5">Add New Notification</h2>

            <form id="frm" action="{{ route('invigilator.notification.store') }}" enctype="multipart/form-data" class="mt-5 ml-5" method="POST">
            @csrf

            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Notification</label>
                        <textarea class="form-control" style="resize:none" id="notification" name="notification" required></textarea>
                    </div>
                    <div class="form-group mt-5">
                       <input type="file" id="files" name="files[]" accept="image/*,pdf/*,docx/*" multiple required>
                    </div>
                    <div class="form-group mt-5">
                    <label for="subject">Group</label><br>
                        <input type="radio" value="All" name="notification_group"><span> Show to all active candidates</span><br>
                        <input type="radio" value="Selected" data-toggle="modal" data-target="#selectgroups" name="notification_group"><span> Show to selected groups</span>
                    </div>

                    <input type="hidden" id="savenotification" name="savenotification" value="">
                    <input type="hidden" id="cancelnotification" name="cancelnotification" value="">
                    <div class="form-group mt-5">
                            <span><button type="submit" id="savenotification" onclick="saveNotification()" type="submit" class="btn btn-info"> <i class="fa fa-save"></i> Save </button></span>&nbsp;&nbsp;
                            <!--<span><button class="btn btn-default" onclick="cancelNotification()"> <i class="fa fa-times"></i> Cancel </button></span>&nbsp;&nbsp;-->
                    </div>
                </div>

            </div>

            <!-- modal for slected groups -->
<div class="modal fade"  id="selectgroups" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Send Email to Candidates</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">

                                                <input type="hidden" name="candi_id" id="candi_id" value="">
                                                <?php $candidates = App\Models\User::where('role','candidate')->where('deleted_at',NULL)->get();
                                                    // dd($candidates);
                                                ?>
												<label for="candidates">select candidates</label><br>

												@foreach($candidates as $candidate)
                                                    <input type="checkbox" id="check" class="cand" name="cand[]" onclick="isChecked()" value="{{ $candidate->id }}">&nbsp;{{ $candidate->name }}<br>

												@endforeach
												</select>

											</div>
											<div class="modal-footer">

												<button type="submit" id="sendemail" class="btn btn-primary">Send Email</button>
											</div>

										</div>
									</div>
								</div>


            </form>
            </div>
        </div>
        </div>
   </div>
</div>

@endsection