<?xml version="1.0" encoding="UTF-8"?>
<data>
    @foreach($registro as $item)
    <item>
        <nome>{{$item -> nome}}</nome>
        <codigo>{{$item -> codigo}}</codigo>
        <nivel>{{$item -> nivel}}</nivel>
        <data>{{$item -> data}}</data>
        <atributo>{{$item -> atributo}}</atributo>
    </item>
@endforeach
</data>