<div class="form-group">
    {!! Form::label('name','車型名稱') !!}
    {!! Form::text('name',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('brand_id','車廠編號') !!}
    {!! Form::text('brand_id',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('kind','車種') !!}
    {!! Form::text('kind',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('hp','馬力') !!}
    {!! Form::text('hp',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('nm','扭力') !!}
    {!! Form::text('nm',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('kg','重量') !!}
    {!! Form::text('kg',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitbuttontext,['class'=>'form-control']) !!}
</div>
