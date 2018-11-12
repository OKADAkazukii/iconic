<html>
 <head>
  <meta charset="utf-8">
    <title>seach</title>
 </head>
     <body>
       <h5>test<h5>
         <p>顧客検索フォーム</p>
        <form action="/home/test"  method="post" >
         {!! csrf_field() !!}
       <dl>
         <dt>電話番号</dt>
         <dd>
          <input type="char" name="tel" value="">
       </dl>
       <input type="submit" />> 
       </form>
     </body>
</html> 
