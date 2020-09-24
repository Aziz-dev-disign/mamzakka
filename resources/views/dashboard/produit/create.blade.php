@extends('dashboard.layouts.accueil')

{{-- @section('title', $titre)
    <h1>{{$titre}}</h1> --}}

@section('content')

<form class="form-horizontal form-label-left"  method="POST" action="" enctype="multipart/form-data">
    @csrf

    
    <div class="item form-group row">
        <label class="control-label col-md-3" for="categorie">Catégorie<span class="required">*</span></label>
        <div class="col-md-7">
            <select name="categorie" id="categorie" required="required" class="form-control col-md-7 @error('categorie') is-invalid @enderror" required  autofocus>
                <option value="">choisir...</option>
                <option value="marie">Marié</option>
                <option value="celibataire">Célibataire</option>
            </select>            
            @error('categorie')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
    </div>
    <div class="item form-group row">
        <label class="control-label col-md-3" for="type">Type d'article<span class="required">*</span></label>
        <div class="col-md-7">
            <select name="type" id="type" required="required" class="form-control col-md-7 @error('type') is-invalid @enderror" required  autofocus>
                <option value="">choisir...</option>
                <option value="marie">Marié</option>
                <option value="celibataire">Célibataire</option>
            </select>            
            @error('type')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
    </div>
    <div class="item form-group row">
        <label class="control-label col-md-3" for="statu">Statu<span class="required">*</span></label>
        <div class="col-md-7">
            <select name="statu" id="statu" required="required" class="form-control col-md-7 @error('statu') is-invalid @enderror" required  autofocus>
                <option value="">choisir...</option>
                <option value="marie">Marié</option>
                <option value="celibataire">Célibataire</option>
            </select>            
            @error('statu')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
    </div>
    <div class="item form-group row">
        <label class="control-label col-md-3" for="partetnaire">Partenaire<span class="required">*</span></label>
        <div class="col-md-7">
            <select name="partenaire" id="partenaire" required="required" class="form-control col-md-7 @error('partenaire') is-invalid @enderror" required  autofocus>
                <option value="">choisir...</option>
                <option value="marie">Marié</option>
                <option value="celibataire">Célibataire</option>
            </select>            
            @error('partenaire')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
    </div>
    <div class="item form-group row">
        <label class="control-label col-md-3" for="numero">Numéro d'article <span class="required">*</span></label>
        <div class="col-md-7">
            <input type="text" id="numero" class="form-control col-md-7  @error('numero') is-invalid @enderror" name="numero" placeholder="Exemple : 2020/001A" value="{{ old('numero') }}" required autocomplete="numero" autofocus>
            @error('numero')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="item form-group row">
        <label class="control-label col-md-3" for="slug">slug <span class="required">*</span></label>
        <div class="col-md-7">
            <input type="text" id="slug"  required="required" class="form-control col-md-7 @error('slug') is-invalid @enderror " name="slug" placeholder="Veillez entrer un slug"  value="{{ old('slug') }}" required autocomplete="slug" autofocus>            
            @error('slug')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
    </div>
    <div class="item form-group row">
        <label class="control-label col-md-3" for="localisation">Adresse<span class="required">*</span></label>
        <div class="col-md-7">
            <input type="text" id="localisation"  required="required" class="form-control col-md-7 @error('localisation') is-invalid @enderror" name="localisation" placeholder="Hamdalaye, Rue 10.74, Porte 135"  value="{{ old('localisation') }}" required autofocus>            
            @error('localisation')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
    </div>
    <div class="item form-group row">
        <label class="control-label col-md-3" for="prix">Prix<span class="required">*</span></label>
        <div class="col-md-7">
            <input type="text" id="prix"  required="required" class="form-control col-md-7 @error('prix') is-invalid @enderror" name="prix" placeholder="FCFA"  value="{{ old('prix') }}" required autofocus>            
            @error('prix')
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
    <div class="ln_solid"></div>
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
            <textarea name="description" id="description" style="display:none;" class="form-control @error('description') is-invalid @enderror" required autofocus></textarea>
            @error('photo')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
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