@extends('layouts.app')

@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jquery-editable/css/jquery-editable.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap4.min.css">
    <script>$.fn.poshytip={defaults:null}</script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jquery-editable/js/jquery-editable-poshytip.min.js"></script>

@endsection

@section('content')

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

 Modal
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->

<div class="container">
    <div class="row justify-content-start">
        @include('layouts.left-menu')
        <div class="col-xs-11 col-sm-11 col-md-11 col-lg-10 col-xl-10 col-xxl-10">
        <div class="row mt-3">
            <div class="col">
                <div class="table-responsive">

                    <h1>Transcript for {{$student->first_name}} {{$student->last}}</h1>
                    <table id="datatable" class="table table-bordered data-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Course</th>
                                <th>First Semister</th>
                                <th>Second Semister</th>
                                <th>Average</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($transcripts as $transcript)
                                <tr>
                                    <td>{{ $transcript->id }}</td>
                                    <td>
                                           {{ $transcript->course_name }}
                                    </td>
                                    <td>
                                           {{ $transcript->first_semister }}
                                    </td>
                                    <td>
                                           {{ $transcript->second_semister ?? "NOT FILLED" }}
                                    </td>
                                    <td>
                                           {{ $transcript->average ?? "NOT FILLED" }}
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group">
                                             <button type="button" class="btn btn-success edit"  onclick="openModal({{ $transcript }})">Edit</button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td>Total</td>
                                <td>-</td>
                                <td>first</td>
                                <td>second</td>
                                <td>average</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    <div>
                       <button type="submit" onclick="" class="btn btn-success">GetTotalAverage</button>
                    </div>

            </div>
        </div>
      </div>
     </div>
   </div>
</div>

<form action="#" method="post" id="editForm">

    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Final Mark Edit</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <input type="hidden" id="toBeUpdated">
            <div class="form-group">
                <label for="First_semister">First Semister Result</label>
                <input type="text" id="firstSemester" name="first_semister" class="form-control" placeholder="Enter the Final Mark" >
            </div>
            <div class="form-group">
                <label for="First_semister">Second Semister Result</label>
                <input type="text" id="secondSemester" name="second" class="form-control" placeholder="Enter the Final Mark" >
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" onclick="updateFinalMark()">Save changes</button>

        </div>
        </div>
    </div>
    </div>
</form>


<script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap4.min.js"></script>

 <script type="text/javascript">
function openModal(transcript) {
    $('#toBeUpdated').val(transcript.id);
    $('#firstSemester').val(transcript.first_semister);
    $('#secondSemester').val(transcript.second_semister);
     $('#editModal').modal('show');
    console.log(transcript);
}

function updateFinalMark() {
    console.log($('#firstSemester').val());
    let actionURL = window.location.origin +'/transcripts/update/'+ $('#toBeUpdated').val();
    $.post(actionURL, {
        first_semister: $('#firstSemester').val(),
        second_semister: $('#secondSemester').val(),
    }, function(result){
        if(result) {
            window.location.reload();
        }
    });
}

    // $(document).ready(function (){
    //     var table = $('#datatable').DataTable();

    //     table.on('click', '.edit', function(){
    //         $tr =  $(this).closest('tr');
    //         if($($tr).hasClass('child')){
    //             $tr =  $tr.prev('.parent');
    //         }

    //         var data = table.row($tr).data();
    //         console.log(data.first_semister, 'hree');

    //         $('id').val(data.id);
    //         $('student_id').val(data[1]);
    //         $('#first_semister').val(data.first_semister);

    //         $('#editForm').attr('action', '' + data[0]);
    //         $('#editModal').modal('show');
    //     });
    // });
</script>
@endsection


