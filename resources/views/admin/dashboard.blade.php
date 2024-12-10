@extends('layouts.field')

@section('content')
  <div class="container-fluid">
    <div class="mb-4 d-sm-flex align-items-center justify-content-between">
      <h1 class="mb-0 text-gray-800 h3"></h1>
    </div>

    <!--User Card-->
    <div class="col-md-12">
      <div class="shadow card">
        <div class="card-header">
          <h6 class="m-0 font-weight-bold text-primary">Clients</h6>
        </div>  
        <div class="card-body">
          <form action="#">
            <div class="mb-3 input-group">
              <input type="text" class="form-control" placeholder="Search By Id.." aria-label="Search By Id"
                aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button">Search</button>
                <button class="btn btn-outline-secondary" type="button">Clear</button>
              </div>
            </div>
          </form>
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col" class="text-center">First Name</th>
                  <th scope="col" class="text-center">Last Name</th>
                  <th scope="col" class="text-center">Phone Number</th>
                  <th scope="col" class="text-center">Email Address</th>
                  <th scope="col" class="text-center">Message</th>
                  <th scope="col" class="text-center">Date</th>
                  <th scope="col" class="text-center">Details</th>
                </tr>
              </thead>
              <tbody>

         @foreach ($inquiryform as $item) 
         <tr>
          <td colspan="col" class="text-center"> {{$item->firstName}}</td>
          <td colspan="col" class="text-center">{{$item->lastName}}</td>
          <td colspan="col" class="text-center">{{$item->phoneNumber}}</td>
          <td colspan="col" class="text-center">{{$item->emailAddress}}</td>
          <td colspan="col" class="text-center">{{substr($item->clientMessage, 0, 20)}}.....</td>
          <td colspan="col" class="text-center">{{$item->created_at}}</td>
          <td>
            <center>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#clientMessageModal" data-client-message="{{$item->clientMessage}}">Details</button>
            </center>
          </td>
          <!-- Modal -->
                    <div class="modal fade" id="clientMessageModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Client Message</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p id="client-message"></p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Of Modal -->
                    </tr>
            @endforeach
                      </tbody>
                      </table>
                      
                    </div>
                    {{-- {{ $inquiryform->links() }} --}}
                  </div>
               </div>
             </div>
           </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
