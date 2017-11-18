<br>
<?php $id = uniqid(); ?>
<div id="editor-{{$id}}" style="width: 100%; height: 400px;"></div>
@section('javascript')
    <script>
      $( document ).ready(function() {

        // create the editor
        var container = document.getElementById("editor-{{$id}}");
        var options = {};
        var editor = new window.jsoneditor(container, options);

        // set json
        var json = {!! json_encode($dataTypeContent->{$row->field}) !!};
        editor.set(json);

        // get json
        var json = editor.get();
      });
    </script>
@endsection
