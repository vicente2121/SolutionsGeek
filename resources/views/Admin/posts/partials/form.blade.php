<div class="form-group">
    {!! Form::label('name','Nombre:') !!}
{!! Form::text('name',null, ['class'=>'form-control','placeholder'=>'Ingrese el nombre del post']) !!}

@error('name')
<small class="text-danger">{{$message}} </small>
@enderror
</div>

<div class="form-group">
    {!! Form::label('slug','Slug:') !!}
{!! Form::text('slug',null, ['class'=>'form-control','placeholder'=>'Ingrese el Slug del post','readonly']) !!}

@error('slug')
<small class="text-danger">{{$message}} </small>
@enderror
</div>

<div class="fomr-group">
    {!! Form::label('category_id','Categoría') !!}

    {!! Form::select('category_id', $categories,null, ['class'=>'form-control']) !!}
    @error('category_id')
<small class="text-danger">{{$message}} </small>
@enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">
        Etiquetas
    </p>
    @foreach ($tags as $tag)

    <label class="mr-2" for="">
        {!! Form::checkbox('tags[]', $tag->id,null) !!}
        {{$tag->name}}
    </label>

        
    @endforeach
    <hr>
    @error('tags')
    <small class="text-danger">{{$message}} </small>
@enderror
    <div class="form-grup">
        <p class="font-weight-bold">
           Estado
        </p>
        <label class="mr-2" for="">
         {!! Form::radio('status',1, true) !!}
         Borrador
        </label>
        <label class="mr-2" for="">
            {!! Form::radio('status',2) !!}
           Publicado
           </label>
           @error('status')
           <small class="text-danger">{{$message}} </small>
       @enderror
    </div>
    </div>


    <div class="row mb-3">

            <div class="col">
                <div class="image-wrapper">
                    @isset ($post->image)
                    <img id="picture" src="{{Storage::url($post->image->url)}}" alt="">
             
                        
                    @else
                    <img id="picture" src="https://image.posterlounge.es/images/big/1582857.jpg" alt="">
           
                    @endisset 
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                        {!! Form::label('file','Imagen que se mostrara en el post') !!}
                        {!! Form::file('file', ['class'=>'form-control-file','accept'=>'image/*']) !!}
                        @error('file')
                        <small class="text-danger">{{$message}} </small>
                    @enderror
                    </div>
            
                <p>Añadir Imagen</p>

            </div>
    </div>


    <div class="form-group">
        {!! Form::label('extract','Extracto:') !!}
         {!! Form::textarea('extract',null, ['class'=>'form-control']) !!}
         @error('extract')
         <small class="text-danger">{{$message}} </small>
     @enderror
    </div>
    <div class="form-group">
        {!! Form::label('body','Cuerpo del post:') !!}
        {!! Form::textarea('body',null, ['class'=>'form-control']) !!}
        @error('body')
         <small class="text-danger">{{$message}} </small>
     @enderror
    </div>
