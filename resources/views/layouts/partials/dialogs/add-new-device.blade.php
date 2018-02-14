<div id="add-new-device" class="modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
        <h2 class="modal-title "><div class="glyphicon glyphicon-modal-window"></div>&nbsp;&nbsp;Add new device</h2>
      </div>
      <div class="modal-body">

        <form id="add-new-device-form" class="form-horizontal" action="{{action('DeviceController@addNewDevice')}}" method="post">
            <div class="form-group form-group-sm">
              <label for="inputDeviceName" class="col-xs-3 control-label">Name</label>
              <div class="col-xs-9">
                <input name="inputDeviceName" type="text" class="form-control" id="inputDeviceName" placeholder="Name">
              </div>
            </div>
            <div class="form-group form-group-sm">
              <label for="inputDeviceIP" class="col-xs-3 control-label">IP Address</label>
              <div class="col-xs-9">
                <input name="inputDeviceIP" type="text" class="form-control" id="inputDeviceIP" placeholder="IP адреса">
              </div>
            </div>
            <div class="form-group form-group-sm">
              <label for="inputDeviceComPass" class="col-xs-3 control-label">Password</label>
              <div class="col-xs-9">
                <input name="inputDeviceComPass" type="text" class="form-control" id="inputDeviceComPass" value="0">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
              </div>
            </div>
            <hr>
            <div class="form-group form-group-sm">
              <div class="col-xs-offset-6 col-xs-6">
                <div class="btn-toolbar pull-right">
                  <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                  <button type="submit" id="btn_save_new_device" form="add-new-device-form" class="btn btn-primary btn-sm">Save</button>
                </div>
              </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>