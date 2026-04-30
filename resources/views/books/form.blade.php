<div class="form-group">
    <label for="isbn" class="control-label">ISBNコード：</label>
    <input id="isbn" type="text" name="isbn" class="form-control" value="{{ old('isbn',$book->isbn)}}">
</div>
<div class="form-group">
    <label for="title" class="control-label">書名：</label>
    <input id="title" type="text" name="title" class="form-control" value="{{ old('title',$book->title)}}">
</div>
<div class="form-group">
    <label for="price" class="control-label">価格：</label>
    <input id="price" type="number" name="price" class="form-control" value="{{ old('price',$book->price)}}">
</div>
<div class="form-group">
    <label for="publisher" class="control-label">出版社：</label>
    <input id="publisher" type="text" name="publisher" class="form-control"
           value="{{ old('publisher',$book->publisher)}}">
</div>
<div class="form-group">
    <label for="published" class="control-label">刊行日：</label>
    <input id="published" type="date" name="published" class="form-control"
           value="{{ old('published',$book->published)}}">
</div>
<div class="form-group">
    <label for="sample" class="control-label">サンプルコード：</label>
    <input type="hidden" name="sample" value="0"/>
    <input id="sample" type="checkbox" name="sample" value="1"
        @checked(old('sample',$book->sample) ? 'checked' : '') />
</div>
