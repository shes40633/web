@extends('layouts.app')


@section('css')

@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">消息管理-edit</div>

                <form method="post" action="/admin/movies/update/{{$items ->id}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="title" class="col-sm-2 col-form-label">title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="title"  value="{{$items ->title}}"name="title"required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="sort" class="col-sm-2 col-form-label">sort</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="sort"  value="{{$items ->sort}}" name="sort"required>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="img" class="col-sm-2 col-form-label">現有產品圖片</label>
                        <div class="col-sm-10">
                            <img class="img-fluid" src="{{asset('/storage/'.$items->img)}}" alt="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="img" class="col-sm-2 col-form-label">重新上傳產品圖片 <br><small
                                class="text-danger">*建議圖片尺寸500px(寬)*700px(高)</small></label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="img" value="" name="img">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="time" class="col-sm-2 col-form-label">time
                            <br><small
                            class="text-danger">*建議圖片尺寸500px(寬)*700px(高)</small>
                        </label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="time" name="time" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-sm-2 col-form-label">description</label>
                        <div class="col-sm-10">
                            <textarea id="description" name="description" class="form-control" >{!!$items ->description!!}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="vedio" class="col-sm-2 col-form-label">vedio
                            <br><small
                            class="text-danger">*上傳網站連結</small>
                        </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="vedio" name="vedio" value="{{$items->vedio}}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('js')
<script>
  $(document).ready(function() {
            $('#description').summernote({
                height: 150,
                lang: 'zh-TW',
                callbacks: {
                    onImageUpload: function(files) {
                        for(let i=0; i < files.length; i++) {
                            $.upload(files[i]);
                        }
                    },
                    onMediaDelete : function(target) {
                        $.delete(target[0].getAttribute("src"));
                    }
                },
            });
            $.upload = function (file) {
                let out = new FormData();
                out.append('file', file, file.name);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    method: 'POST',
                    url: '/admin/ajax_upload_img',
                    contentType: false,
                    cache: false,
                    processData: false,
                    data: out,
                    success: function (img) {
                        $('#description').summernote('insertImage', img);
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.error(textStatus + " " + errorThrown);
                    }
                });
            };

            $.delete = function (file_link) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    method: 'POST',
                    url: '/admin/ajax_delete_img',
                    data: {file_link:file_link},
                    success: function (img) {
                        console.log("delete:",img);
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.error(textStatus + " " + errorThrown);
                    }
                });
            }

       });

    </script>
@endsection

