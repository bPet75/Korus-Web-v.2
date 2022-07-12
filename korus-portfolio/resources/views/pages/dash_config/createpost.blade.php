@extends("master")
@section('content')

                  <div class="card-body">
                      <form action="{{ route('createPost') }}" method="post" enctype="multipart/form-data" id="newpost_form">
                      @csrf
                      <div class="container d-flex flex-column align-items-left">
                          <div class="col-10">
                              <label for="name">A szöveg nyelve:</label><br>
                              <input type="radio" name="lang" id="hu" checked> Magyar<br>
                              <input type="radio" name="lang" id="en"> Angol<br>
                          </div>
                          <div class="col-10">
                              <label for="date">Kép</label>
                              <input type="file" name="img" id="img" class="form-control mb-4">
                          </div>
                          <div class="col-10">
                              <label for="name">Cím</label>
                              <input type="text" name="title" id="title" class="form-control mb-4">
                          </div>
                          <div class="col-10">
                              <label for="description">Leírás</label>
                              <div class = "ck_editor">
  
      <textarea name="read_more" id="read_more"></textarea>
  
      <script>
          var element = document.getElementById('read_more');
  
          ClassicEditor
              .create(element)
              .catch(error => {
                  console.error(error);
              })
              .then(editor => {
                  // When the field is instantiated it notified the UI that it has been loaded.
                  var field = new SquidexFormField();
  
                  // Handle the value change event and set the text to the editor.
                  field.onValueChanged(function (value) {
                      if (value) {
                          editor.setData(value);
                      }
                  });
  
                  // Disable the editor when it should be disabled.
                  field.onDisabled(function (disabled) {
                      editor.set('isReadOnly', disabled);
                  });
  
                  editor.model.document.on('change', function () {
                      var data = editor.getData();
  
                      // Notify the UI that the value has been changed. Will be used to trigger validation.
                      field.valueChanged(data);
                  });
  
                  editor.ui.focusTracker.on('change:isFocused', function (event, name, isFocused) {
                      if (!isFocused) {
                          // Notify the UI that the value has been touched.
                          field.touched();
                      }
                  });
              });
      </script>
                              </div>
                          </div>
                          <div class="col-10">
                              <label for="description">Szöveg</label>
                              <div class = "ck_editor">
  
      <textarea name="content" id="content"></textarea>
  
      <script>
          var element = document.getElementById('content');
  
          ClassicEditor
              .create(element)
              .catch(error => {
                  console.error(error);
              })
              .then(editor => {
                  // When the field is instantiated it notified the UI that it has been loaded.
                  var field = new SquidexFormField();
  
                  // Handle the value change event and set the text to the editor.
                  field.onValueChanged(function (value) {
                      if (value) {
                          editor.setData(value);
                      }
                  });
  
                  // Disable the editor when it should be disabled.
                  field.onDisabled(function (disabled) {
                      editor.set('isReadOnly', disabled);
                  });
  
                  editor.model.document.on('change', function () {
                      var data = editor.getData();
  
                      // Notify the UI that the value has been changed. Will be used to trigger validation.
                      field.valueChanged(data);
                  });
  
                  editor.ui.focusTracker.on('change:isFocused', function (event, name, isFocused) {
                      if (!isFocused) {
                          // Notify the UI that the value has been touched.
                          field.touched();
                      }
                  });
              });
      </script>
                              </div>
                          </div>
                          
                          <input type="submit" value="Mentés" style="margin: 20px">
                      </div>
                      <input type="hidden" name="code" id="code">
                      </form>
                  </div>

@endsection