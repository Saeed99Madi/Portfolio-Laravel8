@extends('layouts.admin')
@section('content')



    <div class="card-body">
              <textarea id="summernote" >
                Place <em>some</em> <u>text</u> <strong>here</strong>
              </textarea>
    </div>




@endsection
@section('scripts')

<script>
    $(function () {
        // Summernote
        $('#summernote').summernote()

        // CodeMirror
        CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
            mode: "htmlmixed",
            theme: "monokai"
        });
    })
</script>
@endsection
