@extends('layouts.candidate')

@section('content')
<div class="page">
   <div class="page-main h-100">
		<div class="app-content">
            <div class="container">
                <div class="card">
                    <div class="">
                        <form action="{{ route('candidate.exam.takeexam',$exam->id) }}" method="GET">
                            <h2>Exam Instructions</h2>
                            <h5>Please Read carefully</h5>
                            <p class="instructions">
                                <p>1. The Timer has been set and the countdown will display the tiem remaining for you. When the timer ends then exam finish automatically and after that, No action is required</p>
                                <p>2. You can flag any of the question you want</p>
                                <p>3. If you drop this exam, it will not be submitted, and results will not be generated</p>
                                <p>4. You can finish this exam even if any questions are un-attempted</p>
                                <p>5. Once the exam is finished, it cannot be resumed.</p>
                            </p>                            <div style="margin-top: 150px;">
                                <input type="checkbox" id="read_instructions" name="read_instructions" required> &nbsp;<span> I have read and understood the instructions</span> <br><br>
                                <button id="start_exam" class="btn btn-success" disabled>Start Exam</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
   </div>
</div>

@endsection