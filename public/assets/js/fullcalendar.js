


/*---Selectable calendar---*/
$(function(e){
        var count = document.getElementById('count').value;
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = today.getFullYear();

        today = yyyy + '-' + mm + '-' + dd;
        var candidate_name;
        var request_date;
        var exam_name;
        for (i = 0; i < count; i++) {
          candidate_name = document.getElementById('candidate_name'+i).value;
          request_date = document.getElementById('request_date'+i).value;
          exam_name = document.getElementById('exam'+i).value;

                var calendar = $('#calendar1').fullCalendar({
                  header: {
                    left: 'prev,next',
                    center: 'title',
                    // right: 'month,agendaWeek,agendaDay'
                  },
                  defaultDate: today,
                  navLinks: true, // can click day/week names to navigate views
                  selectable: true,
                  selectHelper: true,
                  select: function(start, end, jsEvent, view) {
                    var allDay = !start.hasTime() && !end.hasTime();
                    var selected_date = moment(start).format('YYYY-MM-DD');
                    window.location.href = "/admin/candidate/exam/show/" + selected_date;
                      // $.ajax('/admin/candidate/exam/show/',
                      // {
                      //     method: 'GET',
                      //     dataType: 'json', // type of response data
                      //     data: {'request_date': selected_date,
                      //            },
                      //     success: function (data) {   // success callback function
                      //         console.log('success: '+data);
                      //         $('#examagainstdate').modal('show');
                      //     },
                      //     error: function (data) { // error callback
                      //       var errors = data.responseJSON;

                      //     }
                      // });
                      // stick? = true

                  },
                  editable: true,
                  eventLimit: true, // allow "more" link when too many events


                });


                var myCalendar = $('#calendar1');
                myCalendar.fullCalendar();
                var myEvent = {
                  title: candidate_name + "-" + exam_name,
                  allDay: true,
                  start: request_date,
                  end: request_date,

                };
                myCalendar.fullCalendar( 'renderEvent', myEvent );


        }







        // for invigilator


        var count = document.getElementById('count').value;
 var today = new Date();
 var dd = String(today.getDate()).padStart(2, '0');
 var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
 var yyyy = today.getFullYear();

 today = yyyy + '-' + mm + '-' + dd;
 var candidate_name;
 var request_date;
 var exam_name;
 var status;
 for (i = 0; i < count; i++) {
  candidate_name = document.getElementById('candidate_name'+i).value;
  request_date = document.getElementById('request_date'+i).value;
  exam_name = document.getElementById('exam'+i).value;
  status = document.getElementById('status'+i).value;
        var calendar = $('#calendar2').fullCalendar({
          header: {
            left: 'prev,next',
            center: 'title',
            // right: 'month,agendaWeek,agendaDay'
          },
          defaultDate: today,
          navLinks: true, // can click day/week names to navigate views
          selectable: true,
          selectHelper: true,
          select: function(start, end, jsEvent, view) {
            var allDay = !start.hasTime() && !end.hasTime();
            var selected_date = moment(start).format('YYYY-MM-DD');
            window.location.href = "/invigilator/exam/show/" + selected_date;
              // $.ajax('/admin/candidate/exam/show/',
              // {
              //     method: 'GET',
              //     dataType: 'json', // type of response data
              //     data: {'request_date': selected_date,
              //            },
              //     success: function (data) {   // success callback function
              //         console.log('success: '+data);
              //         $('#examagainstdate').modal('show');
              //     },
              //     error: function (data) { // error callback
              //       var errors = data.responseJSON;

              //     }
              // });
              // stick? = true

          },
          editable: true,
          eventLimit: true, // allow "more" link when too many events


        });


        var myCalendar = $('#calendar2');
        myCalendar.fullCalendar();
        if(status == "Taken"){
          var myEvent = {
            title: candidate_name + "-" + exam_name,
            allDay: true,
            start: request_date,
            end: request_date,
            color:'green'

          };
          myCalendar.fullCalendar( 'renderEvent', myEvent );
        }else if(status == "Not Taken"){
          var myEvent = {
            title: candidate_name + "-" + exam_name,
            allDay: true,
            start: request_date,
            end: request_date,
            color:'red'

          };
          myCalendar.fullCalendar( 'renderEvent', myEvent );
        }



 }

        //end invigilator







//  var cand_exams = JSON.parse(cand_exam);




    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'listDay,listWeek,month'
      },

      // customize the button names,
      // otherwise they'd all just say "list"
      views: {
        listDay: { buttonText: 'list day' },
        listWeek: { buttonText: 'list week' }
      },

      defaultView: 'listWeek',
      defaultDate: '2018-10-12',
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
        {
          title: 'All Day Event',
          start: '2018-10-01'
        },
        {
          title: 'Long Event',
          start: '2018-08-07',
          end: '2018-03-10'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2018-10-09T16:00:00'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2018-08-16T16:00:00'
        },
        {
          title: 'Conference',
          start: '2018-08-11',
          end: '2018-08-13'
        },
        {
          title: 'Meeting',
          start: '2018-10-12T10:30:00',
          end: '2018-10-12T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2018-08-12T12:00:00'
        },
        {
          title: 'Meeting',
          start: '2018-08-12T14:30:00'
        },
        {
          title: 'Happy Hour',
          start: '2018-08-12T17:30:00'
        },
        {
          title: 'Dinner',
          start: '2018-10-12T20:00:00'
        },
        {
          title: 'Birthday Party',
          start: '2018-10-23T19:00:00'
        },
        {
          title: 'Click for Google',
          url: 'http://google.com/',
          start: '2018-08-28'
        }
      ]
    });

 });