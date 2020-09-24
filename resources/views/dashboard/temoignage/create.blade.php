@extends('dashboard.layouts.accueil')

{{-- @section('title', $titre)
    <h1>{{$titre}}</h1> --}}

@section('content')

<form class="form-horizontal form-label-left"  method="POST" action="{{ route('admin.temoignage.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="item form-group row">
        <label class="control-label col-md-3" for="nom">nom<span class="required">*</span></label>
        <div class="col-md-7">
            <input type="text" id="nom"  required="required" class="form-control col-md-7 @error('nom') is-invalid @enderror" name="nom" placeholder="Entrez un nom"  value="{{ old('nom') }}" required autofocus>            
            @error('nom')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
    </div>
    <div class="item form-group row">
        <label class="control-label col-md-3" for="photo">Photo<span class="required">*</span></label>
        <div class="col-md-7">
            <input type="file" id="photo" name="photo"  required="required" class="form-control col-md-7 @error('photo') is-invalid @enderror" placeholder="" required autofocus>            
            @error('photo')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="item form-group row">
        <label class="control-label col-md-3" for="description">Description<span class="required">*</span></label>
        <div class="x_content">
            <div id="alerts"></div>
            <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
                <div class="btn-group">
                    <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                    </ul>
                </div>

                <div class="btn-group">
                    <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a data-edit="fontSize 5"><p style="font-size:17px">Grand</p></a>
                        </li>
                        <li>
                            <a data-edit="fontSize 3"><p style="font-size:14px">Normal</p></a>
                        </li>
                        <li>
                            <a data-edit="fontSize 1"><p style="font-size:11px">petit</p></a>
                        </li>
                    </ul>
                </div>
                <div class="btn-group">
                    <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                    <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                    <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                    <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
                </div>
                <div class="btn-group">
                    <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                    <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
                    <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
                    <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
                </div>
                <div class="btn-group">
                    <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                    <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                    <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                    <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
                </div>
                <div class="btn-group">
                    <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
                    <div class="dropdown-menu input-append">
                        <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
                        <button class="btn" type="button">Add</button>
                    </div>
                    <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
                </div>
                <div class="btn-group">
                    <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
                    <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
                </div>
                <div class="btn-group">
                    <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                    <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
                </div>
            </div>
            <div id="editor-one" class="editor-wrapper"></div>
            <textarea name="description" id="description" style="display:none;" ></textarea>
        </div>
    </div>
    <div class="ln_solid"></div>
    <div class="form-group row">
        <div class="col-md-9 col-sm-9  offset-md-3">
            <button type="button" class="btn btn-primary">Cancel</button>
            <button class="btn btn-primary" type="reset">Reset</button>
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
</form>

@endsection