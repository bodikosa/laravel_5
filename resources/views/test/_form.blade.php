
    <div  class="form-group">
        <label for="nos" class="col-sm-4 control-label">Nos</label>
        <div class="col-sm-8">
            {!! Form::text('nos',"$article->nos",array('id'=>'','wdawdaw','class'=>'form-control span6','placeholder' => 'Please Enter your Name')) !!}
            @if ($errors->has('name'))<p style="color:red;">{!!$errors->first('name')!!}</p>@endif
        </div>
    </div>

    <div class="form-group">
       <label for="id" class="col-sm-4 control-label">Сектор</label>
        <div class="col-sm-8">
            {!! Form::text('no', "$article->no", array('class' => 'form-control')) !!}

        </div>
    </div>
