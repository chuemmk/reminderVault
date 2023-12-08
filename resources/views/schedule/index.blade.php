
@extends('layout.main')

@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-sm-12 border-right">
                         
                            <div class="card-body">
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#add-new-event" class="btn m-t-20 btn-info btn-block waves-effect waves-light">
                                                <i class="ti-plus"></i> Add New Event
                                            </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-lg-9"> --}}
                            <div class="card-body b-l calender-sidebar">
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal none-border" id="my-event">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><strong>Add Reminder</strong></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade none-border" id="add-new-event">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><strong>Add</strong> a reminder</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>

                <div class="modal-body">
                    <form action="{{route('event.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label class="control-label">Title</label>
                                <input class="form-control form-white" placeholder="Enter title" type="text" name="title" required="" />
                            </div>

                            <div class="col-md-6">
                                <label class="control-label">Description</label>
                                <input class="form-control form-white" placeholder="Enter description" type="text" name="description" required="" />
                            </div>


                            {{-- <div class="col-md-6">
                                <label class="control-label">Status</label>
                                <input class="form-control form-white" placeholder="Enter status" type="text" name="status" required=""/>
                            </div> --}}

                            <div class="col-md-6">
                                <label class="control-label">Start Date</label>
                                <input class="form-control form-white" type="date" name="start" required=""/>
                            </div>

                            <div class="col-md-6">
                                <label class="control-label">End Date</label>
                                <input class="form-control form-white" type="date" name="end" required=""/>
                            </div>
                            
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger waves-effect waves-light save-category">Save</button>
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="jumbotron">
       <div class="container text-center">
       </div>
    </div>
    <div id='calendar'></div>
 </div>
 <script>
    $(document).ready(function () {
       
    var SITEURL = "{{ url('/') }}";
      
    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
    var calendar = $('#calendar').fullCalendar({
                        events: SITEURL + "/schedule/index",
                        displayEventTime: true,
                        editable: false,
                        // displayEvenTime: false,
                        
                        eventRender: function (event, element, view) {
                            if (event.allDay === 'true') {
                                event.allDay = true;
                            } else {
                                event.allDay = false;
                            }
                        },
                        selectable: true,
                        selectHelper: true,
                    //     select: function (start, end, allDay) {
                    //         var title = prompt('Event Title:');
                    //         if (title) {
                    //             var start = $.fullCalendar.formatDate(start, "Y-MM-DD");
                    //             var end = $.fullCalendar.formatDate(end, "Y-MM-DD");
                    //             $.ajax({
                    //                 url: SITEURL + "/schedule/indexAjax",
                    //                 data: {
                    //                     title: title,
                    //                     start: start,
                    //                     end: end,
                    //                     type: 'add'
                    //                 },
                    //                 type: "POST",
                    //                 success: function (data) {
                    //                     displayMessage("Event Created Successfully");
      
                    //                     calendar.fullCalendar('renderEvent',
                    //                         {
                    //                             id: data.id,
                    //                             title: title,
                    //                             start: start,
                    //                             end: end,
                    //                             allDay: allDay
                    //                         },true);
      
                    //                     calendar.fullCalendar('unselect');
                    //                 }
                    //             });
                    //         }
                    //     },
                    //     eventDrop: function (event, delta) {
                    //         var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
                    //         var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");
      
                    //         $.ajax({
                    //             url: SITEURL + '/schedule/indexAjax',
                    //             data: {
                    //                 title: event.title,
                    //                 start: start,
                    //                 end: end,
                    //                 id: event.id,
                    //                 type: 'update'
                    //             },
                    //             type: "POST",
                    //             success: function (response) {
                    //                 displayMessage("Event Updated Successfully");
                    //             }
                    //         });
                    //     },
                    //     eventClick: function (event) {
                    //         var deleteMsg = confirm("Do you really want to delete?");
                    //         if (deleteMsg) {
                    //             $.ajax({
                    //                 type: "POST",
                    //                 url: SITEURL + '/schedule/indexAjax',
                    //                 data: {
                    //                         id: event.id,
                    //                         type: 'delete'
                    //                 },
                    //                 success: function (response) {
                    //                     calendar.fullCalendar('removeEvents', event.id);
                    //                     displayMessage("Event Deleted Successfully");
                    //                 }
                    //             });
                    //         }
                    //     }
     
                    });
     
    });
     
    function displayMessage(message) {
        toastr.success(message, 'Event');
    }

    // const preventPassiveWarning = event => {
    //     jQuery.event.special[event] = {
    //         setup: function(_, ns, handle) {
    //             if (ns.inculdes('noPreventDefault')) {
    //                 this.addEventListener(event, handle, { passive: false } );
    //             } else {
    //                 this.addEventListener(event, handle, { passive: true});
    //             }
    //         }
    //     }
    // }

    // preventPassiveWarning('touchstart');
    // preventPassiveWarning('touchmove')
      
 </script>
        
@endsection
