@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">Email queue (not logged in system):</div>
          <div class="card-body">
            <form action="" method="">
            <table class="table">     
              <thead>
                <tr>
                  <th>
                  <label class="checkbox">
                    <input type="checkbox">
                  </label>
                  </th> 
                  <th><abbr title="Named_insured">Named Insured</abbr></th>
                  <th>Type of coverage</th>
                  <th><abbr title="">lob</abbr></th>
                  <th><abbr title="">Effective date</abbr></th>
                  <th><abbr title="">State</abbr></th>
                  <th><abbr title="">Agency</abbr></th>
                  <th><abbr title="">Agent</abbr></th>
                  <th><abbr title="">Action</abbr></th>
                  <th><abbr title="">Action</abbr></th>                    
                  <th><abbr title="">Action</abbr></th>                  
                  <th><abbr title="">Action</abbr></th>
                </tr>
              </thead>
                @if($submission)
                  @foreach($submission as $sub)
                     @if($sub->status != 'not_logged')
                      <tr>
                        <td>
                        </td>
                        <td>
                          {{ $sub->named_insured }}
                        </td>
                        <td>
                          {{ $sub->type_of_coverage }}
                        </td>
                        <td>
                          {{ $sub->lob }}
                        </td>
                        <td>
                          {{ $sub->effective_date }}
                        </td>
                        <td>
                          {{ $sub->state }}
                        </td>
                        <td>
                          {{ $sub->agency_name }}
                        </td>
                        <td>
                          {{ $sub->agent_name }}
                        </td>
                        <td>
                          <a class="btn btn-primary" href="/subs/search" role="button">Search</a> &nbsp;         
                        </td>   
                        <td>
                          <form action="/subs/show/{{ $sub->id }}" method="GET">
                               <button type="submit" href="/subs/show/{{$sub->id}}" class="btn btn-success">Open</button>
                          </form>                            
                        </td>                                     
                        <td>
                          <button type="button" class="btn btn-success">Log</button>                
                        </td> 
                        <td>   
                            <form action="/subs/delete/{{ $sub->id }}" method="POST">
                              {{ csrf_field() }}
                              {{ method_field('DELETE') }} 
                                <button type="submit" class="btn btn-primary">Delete</button>
                            </form>                                  
                        </td>                                              
                    </tr>
                    @endif
                  @endforeach
                @else
                    <p>There are no new emails!</p>
                @endif
              </div>
            </div>
          </form> 
        </div>
      </div>
    </div>
  </div>
</div>
    <div class="col-md-3">
      <div class="card">
        <div class="card-header">Effective date in next 7 days:</div>
          <div class="card-body">
            Total of {{$subsEffWithinNextWeek}}
          </div>
        </div>
      </div>  
    </div>  
    <hr>
@endsection