@extends('layout.default')
@section('content')
  <div class="br-pageheader pd-y-15 pd-l-20">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
      <a class="breadcrumb-item" href="{{URL::to('/')}}"> Dashboard </a>
      <a class="breadcrumb-item" href=""> Setup </a>
      <span class="breadcrumb-item active"> Parts Category </span>
    </nav>
  </div>
  <div class="br-pagebody">

        <div class="row">
          <div class="col-md-4">

            <div class="br-section-wrapper">
              <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10"> Add Parts Category </h6>
                  <div class="form-layout form-layout-1">

                    <div class="row">
                      <div class="col-md-9">
                        <div class="form-group">
                          <label class="form-control-label"> Parts Category: <span class="tx-danger">*</span></label>
                          <input class="form-control" type="text" name="parts_category" placeholder="Enter Parts Category">
                        </div>
                      </div><!-- col-4 -->
                    </div><!-- row -->

                    <div class="row">
                      <div class="col-md-9">
                        <div class="form-group">
                          <label class="form-control-label"> Parts Code: <span class="tx-danger">*</span></label>
                          <input class="form-control" type="text" name="parts_code" placeholder="Enter Parts Code">
                        </div>
                      </div><!-- col-4 -->
                    </div><!-- row -->

                    <div class="row">
                      <div class="col-md-9">
                        <div class="form-group">
                          <label class="form-control-label"> Parts Details: </label>
                          <textarea rows="3" class="form-control" placeholder="Enter Parts Details"></textarea>
                        </div>
                      </div><!-- col-4 -->
                    </div><!-- row -->

                    <div class="row">
                      <div class="col-md-9">
                        <div class="form-group">
                          <label class="form-control-label"> Initial Serial: </label>
                          <input class="form-control" type="text" name="initial_serial" placeholder="Enter Initial Serial">
                        </div>
                      </div><!-- col-4 -->
                    </div><!-- row -->

                    <div class="row">
                      <div class="col-md-9">
                        <div class="form-group">
                          <label class="form-control-label"> Status: <span class="tx-danger">*</span></label>
                          <div class="row mg-t-10">
                            <div class="col-lg-4">
                              <label class="rdiobox">
                                <input name="rdio" type="radio" checked="">
                                <span> Active </span>
                              </label>
                            </div><!-- col-3 -->
                            <div class="col-lg-4">
                              <label class="rdiobox">
                                <input name="rdio" type="radio">
                                <span> Inactive </span>
                              </label>
                            </div><!-- col-3 -->
                          </div>
                        </div>
                      </div><!-- col-4 -->
                    </div><!-- row -->

                    

                    <div class="form-layout-footer">
                      <button class="btn btn-info">Submit</button>
                      <button class="btn btn-secondary">Cancel</button>
                    </div><!-- form-layout-footer -->

                </div>
              </div><!-- form-layout -->
          </div>

          <div class="col-md-8">
            <div class="br-section-wrapper">          
              <h6 class="tx-inverse tx-uppercase tx-bold tx-14 mg-b-10"> All Category List </h6>

              <table class="table table-bordered table-colored table-primary">
                <thead>
                  <tr>
                    <th class="wd-5p"> SL </th>
                    <th class="wd-20p"> Category </th>
                    <th class="wd-20p"> Code </th>
                    <th class="wd-35p"> Details </th>
                    <th class="wd-35p"> Int. Serial </th>
                    <th class="wd-20p"> Status </th>
                    <th class="wd-20p"> Action </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td> Adaptor </td>
                    <td> 004 </td>
                    <td> Kusholi Bhaban, Taltola </td>
                    <td> 142 </td>
                    <td> Active </td>
                    <td>
                      <a href="#" class="btn btn-primary btn-icon">
                        <div><i class="fa fa-edit" title="Edit"></i></div>
                      </a>
                  </td>
                  </tr>
                </tbody>
              </table>                    

            </div>
          </div>
        </div>

        <br>

        <div class="row">
          
        </div><!-- br-section-wrapper -->

  </div>

@endsection

@section('custom_js')

@endsection