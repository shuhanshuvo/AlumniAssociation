@extends('admin.dashboard.index')

@section('adminContent')
    <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>#</th>
          <th>Status</th>
          <th>Full Name</th>
          <th>Batch</th>
          <th>Session</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
          @php $counter=1 @endphp
          @foreach ($alumnis as $alumni)
              <tr>
                <form action="/admin/alumni/{{ $alumni->id }}" method="post">
                    @csrf
                    {{ method_field('PUT') }}
                    <td>{{ $counter }}</td>
                    <td>
                        <select name="alumniStatus" class="form-control" id="sel1">
                            @php
                                $arr = array("active","inactive");
                                if($alumni->alumniStatus == 0)
                                    $i = 1;
                                else
                                  $i = 0;
                            @endphp
                            <option value="{{ $alumni->alumniStatus }}">{{ $arr[$alumni->alumniStatus]}}</option>
                            <option value="{{$i}}">{{ $arr[$i] }}</option>
                        </select>
                    </td>
                    <td><a href="{{url('/alumni_profile/'.$alumni->id)}}">{{ $alumni->full_name }}</a></td>
                    <td>{{ $alumni->batch->batch_name }}</td>
                    <td>{{ $alumni->session->session_name }}</td>
                    <td><button class="btn-primary" type="submit">Save</button>
                         <a class="btn btn-danger" href="{{url('/delete_alumni/'.$alumni->id)}}" id="delete">Delete
                           <i class="halflings-icon white trash"></i> 
                          </a>
                    </td>
                </form>
              </tr>
              @php $counter++ @endphp
          @endforeach
      </tbody>
    </table>
  </div>
@endsection

