<div class="form-group">
    {!! Form::label('brand','車廠名稱') !!}
    {!! Form::text('brand',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('country','國家') !!}
    {!! Form::text('country',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('gp','是否參加過GP') !!}
    {!! Form::text('gp',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('wsbk','是否參加過WSBK') !!}
    {!! Form::text('wsbk',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitbuttontext,['class'=>'form-control']) !!}
</div>
